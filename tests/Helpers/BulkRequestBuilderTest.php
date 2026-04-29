<?php

declare(strict_types=1);

namespace Shoper\Sdk\Tests\Helpers;

use PHPUnit\Framework\TestCase;
use Shoper\Sdk\BulkRequestBuilder;
use Shoper\Sdk\Exception\BulkValidationException;

final class BulkRequestBuilderTest extends TestCase
{
    public function test_add_returns_self_for_chaining(): void
    {
        $builder = new BulkRequestBuilder('https://shop.example.com', 'token');
        $result = $builder->add('op1', 'GET', '/products/1');
        self::assertSame($builder, $result);
    }

    public function test_add_accepts_up_to_25_operations(): void
    {
        $builder = new BulkRequestBuilder('https://shop.example.com', 'token');
        for ($i = 1; $i <= 25; $i++) {
            $builder->add("op{$i}", 'GET', "/products/{$i}");
        }
        self::assertCount(25, $builder->getOperations());
    }

    public function test_add_throws_on_26th_operation(): void
    {
        $builder = new BulkRequestBuilder('https://shop.example.com', 'token');
        for ($i = 1; $i <= 25; $i++) {
            $builder->add("op{$i}", 'GET', "/products/{$i}");
        }
        $this->expectException(BulkValidationException::class);
        $this->expectExceptionMessage('Bulk request limit of 25 operations exceeded');
        $builder->add('op26', 'GET', '/products/26');
    }

    public function test_add_rejects_invalid_http_method(): void
    {
        $builder = new BulkRequestBuilder('https://shop.example.com', 'token');
        $this->expectException(BulkValidationException::class);
        $this->expectExceptionMessage('Invalid HTTP method');
        $builder->add('op1', 'INVALID', '/products');
    }

    public function test_add_accepts_all_valid_http_methods(): void
    {
        $builder = new BulkRequestBuilder('https://shop.example.com', 'token');
        foreach (['GET', 'POST', 'PUT', 'DELETE', 'HEAD', 'PATCH'] as $method) {
            $builder->add('op-' . $method, $method, '/products');
        }
        self::assertCount(6, $builder->getOperations());
    }

    public function test_add_normalizes_method_to_uppercase(): void
    {
        $builder = new BulkRequestBuilder('https://shop.example.com', 'token');
        $builder->add('op1', 'get', '/products/1');
        $ops = $builder->getOperations();
        self::assertSame('GET', $ops[0]['method']);
    }

    public function test_add_includes_body_and_params_when_provided(): void
    {
        $builder = new BulkRequestBuilder('https://shop.example.com', 'token');
        $builder->add('op1', 'POST', '/products', ['name' => 'X'], ['limit' => 10]);
        $ops = $builder->getOperations();
        self::assertSame(['name' => 'X'], $ops[0]['body']);
        self::assertSame(['limit' => 10], $ops[0]['params']);
    }
}
