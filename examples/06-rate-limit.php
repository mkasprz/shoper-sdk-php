<?php
/**
 * Example 06 — Rate limit retry with RateLimitHandler.
 *
 * RateLimitHandler honors the Retry-After header on 429 responses.
 */
require __DIR__ . '/../vendor/autoload.php';

use GuzzleHttp\Client as HttpClient;
use Shoper\Sdk\RateLimitHandler;

$http = new HttpClient(['base_uri' => getenv('SHOPER_SHOP_URL')]);
$handler = new RateLimitHandler(maxRetries: 5, baseDelayMs: 1000);

$response = $handler->executeRequest(
    fn() => $http->get('/webapi/rest/products', [
        'headers' => ['Authorization' => 'Bearer ' . getenv('SHOPER_ACCESS_TOKEN')],
    ])
);

echo "Final status: {$response->getStatusCode()}\n";
