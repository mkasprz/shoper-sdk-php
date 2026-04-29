<?php

declare(strict_types=1);

namespace Shoper\Sdk\Tests\Helpers;

use PHPUnit\Framework\TestCase;
use Shoper\Sdk\ShoperClient;

final class ShoperClientFacadeTest extends TestCase
{
    /** @dataProvider subClientsProvider */
    public function testFacadeReturnsTypedClient(string $method, string $expectedClass): void
    {
        $client = new ShoperClient('https://shoper.docker.shoper.tech', 'fake-token');
        $sub = $client->{$method}();
        self::assertInstanceOf(
            $expectedClass,
            $sub,
            "ShoperClient::{$method}() should return {$expectedClass}"
        );
    }

    /** @return array<string, array{0: string, 1: class-string}> */
    public static function subClientsProvider(): array
    {
        $names = require __DIR__ . '/../../scripts/sub-clients.expected.php';
        $cases = [];
        foreach ($names as $prop) {
            $pascal = ucfirst($prop);
            $cases[$prop] = [$prop, "Shoper\\Sdk\\Rest\\{$pascal}\\{$pascal}Client"];
        }
        return $cases;
    }
}
