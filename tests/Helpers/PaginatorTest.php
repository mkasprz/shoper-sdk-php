<?php

declare(strict_types=1);

namespace Shoper\Sdk\Tests\Helpers;

use PHPUnit\Framework\TestCase;
use Shoper\Sdk\Paginator;

final class PaginatorTest extends TestCase
{
    public function test_iterates_through_single_page(): void
    {
        $fetchFn = function (array $params) {
            self::assertSame(['page' => 1, 'limit' => 50], $params);
            return ['list' => [['id' => 1], ['id' => 2]], 'pages' => 1];
        };
        $paginator = new Paginator($fetchFn);
        $items = iterator_to_array($paginator, false);
        self::assertCount(2, $items);
        self::assertSame(1, $items[0]['id']);
    }

    public function test_iterates_through_multiple_pages(): void
    {
        $pages = [
            1 => ['list' => [['id' => 1], ['id' => 2]], 'pages' => 3],
            2 => ['list' => [['id' => 3], ['id' => 4]], 'pages' => 3],
            3 => ['list' => [['id' => 5]], 'pages' => 3],
        ];
        $fetchFn = fn(array $p) => $pages[$p['page']];
        $paginator = new Paginator($fetchFn, limit: 2);
        $items = iterator_to_array($paginator, false);
        self::assertCount(5, $items);
        self::assertSame([1, 2, 3, 4, 5], array_column($items, 'id'));
    }

    public function test_handles_empty_result(): void
    {
        $fetchFn = fn() => ['list' => [], 'pages' => 1];
        $paginator = new Paginator($fetchFn);
        $items = iterator_to_array($paginator, false);
        self::assertSame([], $items);
    }

    public function test_extraParams_merged_into_fetch_args(): void
    {
        $called = false;
        $fetchFn = function (array $params) use (&$called) {
            $called = true;
            self::assertSame('active', $params['filters']['status'] ?? null);
            return ['list' => [], 'pages' => 1];
        };
        $paginator = new Paginator($fetchFn, 50, ['filters' => ['status' => 'active']]);
        iterator_to_array($paginator, false);
        self::assertTrue($called);
    }
}
