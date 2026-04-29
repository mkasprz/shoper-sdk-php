<?php
/**
 * Example 05 — Bulk operations (up to 25 ops per batch).
 */
require __DIR__ . '/../vendor/autoload.php';

use Shoper\Sdk\BulkRequestBuilder;
use Shoper\Sdk\ShoperClient;

$client = new ShoperClient(getenv('SHOPER_SHOP_URL'), getenv('SHOPER_ACCESS_TOKEN'));

$builder = BulkRequestBuilder::fromClient($client);
$builder
    ->add('get-1', 'GET', '/products/1')
    ->add('get-2', 'GET', '/products/2')
    ->add('upd-1', 'PUT', '/products/1', ['stock' => ['price' => 9.99]]);

$results = $builder->execute();

foreach ($results as $opId => $result) {
    echo "$opId: status={$result['status']}\n";
}
