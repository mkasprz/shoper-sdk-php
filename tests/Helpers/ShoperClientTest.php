<?php

declare(strict_types=1);

namespace Shoper\Sdk\Tests\Helpers;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Shoper\Sdk\Exception\InvalidAuthCodeException;
use Shoper\Sdk\Exception\InvalidCredentialsException;
use Shoper\Sdk\ShoperClient;

final class ShoperClientTest extends TestCase
{
    public function test_constructor_without_token_sets_empty_state(): void
    {
        $client = new ShoperClient('https://shop.example.com');
        self::assertNull($client->getToken());
        self::assertSame('https://shop.example.com', $client->getBaseUrl());
    }

    public function test_constructor_strips_trailing_slash_from_url(): void
    {
        $client = new ShoperClient('https://shop.example.com/');
        self::assertSame('https://shop.example.com', $client->getBaseUrl());
    }

    public function test_constructor_with_token_stores_it(): void
    {
        $client = new ShoperClient('https://shop.example.com', 'pre-token');
        self::assertSame('pre-token', $client->getToken());
    }

    public function test_setToken_updates_token(): void
    {
        $client = new ShoperClient('https://shop.example.com');
        $client->setToken('new-token');
        self::assertSame('new-token', $client->getToken());
    }

    public function test_authenticate_returns_token_on_success(): void
    {
        $mock = new MockHandler([new Response(200, [], json_encode([
            'access_token' => 'at-admin',
            'expires_in' => 3600,
        ]))]);
        $http = new HttpClient(['handler' => HandlerStack::create($mock)]);
        $client = new ShoperClient('https://shop.example.com', null, $http);

        $tokens = $client->authenticate('admin', 'password');
        self::assertSame('at-admin', $tokens['access_token']);
        self::assertSame('at-admin', $client->getToken());
    }

    public function test_authenticate_throws_on_401(): void
    {
        $mock = new MockHandler([new Response(401, [], json_encode(['error' => 'invalid_credentials']))]);
        $http = new HttpClient(['handler' => HandlerStack::create($mock), 'http_errors' => false]);
        $client = new ShoperClient('https://shop.example.com', null, $http);

        $this->expectException(InvalidCredentialsException::class);
        $client->authenticate('admin', 'wrong');
    }

    public function test_authenticateOAuth_stores_access_token(): void
    {
        $mock = new MockHandler([new Response(200, [], json_encode([
            'access_token' => 'at-oauth',
            'refresh_token' => 'rt-oauth',
            'expires_in' => 3600,
        ]))]);
        $http = new HttpClient(['handler' => HandlerStack::create($mock)]);
        $client = new ShoperClient('https://shop.example.com', null, $http);

        $tokens = $client->authenticateOAuth('cid', 'cs', 'code');
        self::assertSame('at-oauth', $tokens['access_token']);
        self::assertSame('at-oauth', $client->getToken());
    }

    public function test_authenticateOAuth_throws_on_invalid_code(): void
    {
        $mock = new MockHandler([new Response(400, [], json_encode(['error' => 'invalid_grant']))]);
        $http = new HttpClient(['handler' => HandlerStack::create($mock), 'http_errors' => false]);
        $client = new ShoperClient('https://shop.example.com', null, $http);

        $this->expectException(InvalidAuthCodeException::class);
        $client->authenticateOAuth('cid', 'cs', 'bad-code');
    }

    public function test_refreshToken_updates_access_token(): void
    {
        $mock = new MockHandler([new Response(200, [], json_encode([
            'access_token' => 'at-new',
            'refresh_token' => 'rt-new',
            'expires_in' => 3600,
        ]))]);
        $http = new HttpClient(['handler' => HandlerStack::create($mock)]);
        $client = new ShoperClient('https://shop.example.com', null, $http);

        $tokens = $client->refreshToken('cid', 'cs', 'rt-old');
        self::assertSame('at-new', $tokens['access_token']);
        self::assertSame('at-new', $client->getToken());
    }

    public function test_bulk_returns_builder_with_token(): void
    {
        $client = new ShoperClient('https://shop.example.com', 'token-abc');
        $bulk = $client->bulk();
        self::assertInstanceOf(\Shoper\Sdk\BulkRequestBuilder::class, $bulk);
    }

    public function test_bulk_throws_when_not_authenticated(): void
    {
        $client = new ShoperClient('https://shop.example.com');
        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage('not authenticated');
        $client->bulk();
    }

    public function test__call_property_fallback_returns_resource_client(): void
    {
        $client = new ShoperClient('https://shop.example.com', 'mock-token');
        // RestClient exposes 'products' as a public property (Fern-generated).
        // __call must fall back to property access so $client->products() works.
        $productsClient = $client->products();
        self::assertIsObject($productsClient);
        self::assertInstanceOf(\Shoper\Sdk\Rest\Products\ProductsClient::class, $productsClient);
    }

    public function test__call_throws_for_truly_unknown_resource(): void
    {
        $client = new ShoperClient('https://shop.example.com', 'mock-token');
        $this->expectException(\BadMethodCallException::class);
        // 'nonExistentResource' is neither a method nor a property on RestClient.
        $client->nonExistentResource();
    }
}
