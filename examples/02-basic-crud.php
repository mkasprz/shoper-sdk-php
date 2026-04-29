<?php
/**
 * Example 02 — Basic CRUD on products.
 */
require __DIR__ . '/../vendor/autoload.php';

use Shoper\Sdk\ShoperClient;

$client = new ShoperClient(getenv('SHOPER_SHOP_URL'), getenv('SHOPER_ACCESS_TOKEN'));

// List
$page = $client->products()->list(['limit' => 10, 'page' => 1]);
echo "Page 1: {$page->pages} pages total, " . count($page->list) . " items shown\n";

// Create
$newProductId = $client->products()->create([
    'code' => 'DEMO-001',
    'translations' => [
        'pl' => ['name' => 'Demo product', 'description' => 'A test product.'],
    ],
    'stock' => ['price' => 49.99, 'stock' => 10],
]);
echo "Created product id=$newProductId\n";

// Get
$product = $client->products()->get($newProductId);
echo "Fetched: {$product->translations->pl->name}\n";

// Update
$client->products()->update($newProductId, ['stock' => ['price' => 39.99]]);
echo "Price updated\n";

// Delete
$client->products()->delete($newProductId);
echo "Deleted\n";
