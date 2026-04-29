<?php
declare(strict_types=1);

namespace Shoper\Sdk\Tests\Helpers;

use PHPUnit\Framework\TestCase;
use Shoper\Sdk\Rest\RestClient;

final class SubClientsListTest extends TestCase
{
    public function testRestClientExposesAllExpectedSubClients(): void
    {
        $reflection = new \ReflectionClass(RestClient::class);
        $publicProps = array_filter(
            $reflection->getProperties(\ReflectionProperty::IS_PUBLIC),
            fn($p) => str_ends_with((string)$p->getType(), 'Client')
        );
        $names = array_map(fn($p) => $p->getName(), $publicProps);
        sort($names);

        $expected = require __DIR__ . '/../../scripts/sub-clients.expected.php';
        $this->assertSame($expected, $names);
    }
}
