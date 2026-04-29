<?php

declare(strict_types=1);

namespace Shoper\Sdk\Tests\Helpers;

use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Shoper\Sdk\RateLimitHandler;

final class RateLimitHandlerTest extends TestCase
{
    public function test_passes_through_200_response_without_retry(): void
    {
        $handler = new RateLimitHandler(maxRetries: 3, baseDelayMs: 1);
        $calls = 0;
        $result = $handler->executeRequest(function () use (&$calls) {
            $calls++;
            return new Response(200, [], '{"ok":true}');
        });
        self::assertSame(1, $calls);
        self::assertSame(200, $result->getStatusCode());
    }

    public function test_retries_on_429_and_returns_success(): void
    {
        $handler = new RateLimitHandler(maxRetries: 3, baseDelayMs: 1);
        $calls = 0;
        $result = $handler->executeRequest(function () use (&$calls) {
            $calls++;
            if ($calls < 3) {
                return new Response(429, ['Retry-After' => '0'], '');
            }
            return new Response(200, [], 'ok');
        });
        self::assertSame(3, $calls);
        self::assertSame(200, $result->getStatusCode());
    }

    public function test_honors_retry_after_header(): void
    {
        $handler = new RateLimitHandler(maxRetries: 2, baseDelayMs: 1000);
        $calls = 0;
        $start = microtime(true);
        $handler->executeRequest(function () use (&$calls) {
            $calls++;
            if ($calls === 1) {
                return new Response(429, ['Retry-After' => '0'], ''); // 0 seconds = immediate
            }
            return new Response(200, [], '');
        });
        $elapsed = microtime(true) - $start;
        self::assertSame(2, $calls);
        self::assertLessThan(0.5, $elapsed, 'Retry-After: 0 should not cause delay');
    }

    public function test_exhausts_retry_budget_and_returns_last_response(): void
    {
        $handler = new RateLimitHandler(maxRetries: 2, baseDelayMs: 1);
        $calls = 0;
        $result = $handler->executeRequest(function () use (&$calls) {
            $calls++;
            return new Response(429, ['Retry-After' => '0'], 'throttled');
        });
        self::assertSame(3, $calls); // initial + 2 retries
        self::assertSame(429, $result->getStatusCode());
    }

    public function test_non_429_error_passes_through_without_retry(): void
    {
        $handler = new RateLimitHandler(maxRetries: 3, baseDelayMs: 1);
        $calls = 0;
        $result = $handler->executeRequest(function () use (&$calls) {
            $calls++;
            return new Response(500, [], 'server error');
        });
        self::assertSame(1, $calls);
        self::assertSame(500, $result->getStatusCode());
    }
}
