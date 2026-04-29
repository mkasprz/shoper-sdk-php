<?php

declare(strict_types=1);

namespace Shoper\Sdk\Tests\Helpers;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Shoper\Sdk\Exception\InvalidAuthCodeException;
use Shoper\Sdk\Exception\InvalidRefreshTokenException;
use Shoper\Sdk\OAuthManager;

final class OAuthManagerTest extends TestCase
{
    public function test_buildAuthorizationUrl_produces_correct_format(): void
    {
        $mgr = new OAuthManager();
        $url = $mgr->buildAuthorizationUrl(
            'https://shop.example.com',
            'client-id-abc',
            'https://app.example.com/callback',
            ['read', 'write']
        );
        self::assertStringStartsWith('https://shop.example.com/admin/oauth/authorize?', $url);
        self::assertStringContainsString('client_id=client-id-abc', $url);
        self::assertStringContainsString('redirect_uri=' . urlencode('https://app.example.com/callback'), $url);
        self::assertStringContainsString('scope=read%20write', $url);
        self::assertStringContainsString('response_type=code', $url);
    }

    public function test_exchangeCodeForToken_returns_tokens_on_success(): void
    {
        $mock = new MockHandler([new Response(200, [], json_encode([
            'access_token' => 'at-123',
            'refresh_token' => 'rt-456',
            'expires_in' => 3600,
            'scope' => 'read write',
        ]))]);
        $http = new HttpClient(['handler' => HandlerStack::create($mock)]);
        $mgr = new OAuthManager($http);

        $tokens = $mgr->exchangeCodeForToken(
            'https://shop.example.com', 'client-id', 'client-secret', 'auth-code'
        );
        self::assertSame('at-123', $tokens['access_token']);
        self::assertSame('rt-456', $tokens['refresh_token']);
    }

    public function test_exchangeCodeForToken_throws_on_invalid_code(): void
    {
        $mock = new MockHandler([new Response(400, [], json_encode([
            'error' => 'invalid_grant',
            'error_description' => 'The authorization code is invalid or expired.',
        ]))]);
        $http = new HttpClient(['handler' => HandlerStack::create($mock), 'http_errors' => false]);
        $mgr = new OAuthManager($http);

        $this->expectException(InvalidAuthCodeException::class);
        $mgr->exchangeCodeForToken('https://shop.example.com', 'cid', 'cs', 'bad-code');
    }

    public function test_refreshAccessToken_returns_new_tokens(): void
    {
        $mock = new MockHandler([new Response(200, [], json_encode([
            'access_token' => 'at-new',
            'refresh_token' => 'rt-new',
            'expires_in' => 3600,
        ]))]);
        $http = new HttpClient(['handler' => HandlerStack::create($mock)]);
        $mgr = new OAuthManager($http);

        $tokens = $mgr->refreshAccessToken('https://shop.example.com', 'cid', 'cs', 'rt-old');
        self::assertSame('at-new', $tokens['access_token']);
    }

    public function test_refreshAccessToken_throws_on_invalid_refresh(): void
    {
        $mock = new MockHandler([new Response(400, [], json_encode(['error' => 'invalid_grant']))]);
        $http = new HttpClient(['handler' => HandlerStack::create($mock), 'http_errors' => false]);
        $mgr = new OAuthManager($http);

        $this->expectException(InvalidRefreshTokenException::class);
        $mgr->refreshAccessToken('https://shop.example.com', 'cid', 'cs', 'bad-rt');
    }
}
