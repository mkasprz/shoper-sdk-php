<?php
/**
 * Example 04 — Iterate all pages with Paginator.
 */
require __DIR__ . '/../vendor/autoload.php';

use Shoper\Sdk\Paginator;
use Shoper\Sdk\ShoperClient;

$client = new ShoperClient(getenv('SHOPER_SHOP_URL'), getenv('SHOPER_ACCESS_TOKEN'));

$fetchFn = fn(array $params) => (array) $client->products()->list($params);

$paginator = new Paginator($fetchFn, limit: 50, extraParams: ['filters' => ['active' => 1]]);

$count = 0;
foreach ($paginator as $product) {
    $count++;
    if ($count <= 5 || $count % 100 === 0) {
        echo "[$count] {$product['id']}: {$product['code']}\n";
    }
}
echo "Total: $count products\n";
