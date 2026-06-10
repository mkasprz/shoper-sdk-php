# Shoper PHP SDK

Official PHP SDK for the [Shoper REST API](https://developers.shoper.pl/). Generated from OpenAPI 3.1 (Fern), with hand-written ergonomic helpers (`ShoperClient`, `OAuthManager`, `WebhookVerifier`, `Paginator`, `BulkRequestBuilder`, `RateLimitHandler`).

- PHP 8.1+
- PSR-18 HTTP client (any compliant implementation, e.g. Guzzle 7 — auto-discovered via `php-http/discovery` or injected via constructor)
- 74 typed sub-clients covering the full REST surface

## Install

```bash
composer require shoper/sdk
```

## Quick start

### Authenticate (admin Basic Auth → token)
```php
use Shoper\Sdk\ShoperClient;

$client = new ShoperClient('https://yourshop.shoparena.pl');
$client->authenticate('admin-user', 'admin-pass');   // fetches and stores the token
```

### Authenticate (OAuth authorization-code, AppStore apps)
```php
$auth = $client->authenticateOAuth($clientId, $clientSecret, $authorizationCode);
// later, when access_token expires:
$auth = $client->refreshToken($clientId, $clientSecret, $auth['refresh_token']);
```
Both calls store the new access token on the client automatically. An existing token can also be injected directly: `new ShoperClient($url, $accessToken)` or `$client->setToken($accessToken)`.

### List products
```php
$page = $client->products()->listProducts();   // typed ListProductsResponse, default page
foreach ($page->list as $p) {
    echo $p->productId . ' ' . $p->translations['pl_PL']->name . "\n";
}
```

### Iterate every page
```php
use Shoper\Sdk\Paginator;
use Shoper\Sdk\Rest\Products\Requests\ListProductsRequest;

$fetch = fn (array $params) => (array) $client->products()->listProducts(new ListProductsRequest($params));

foreach (new Paginator($fetch, limit: 50) as $product) {
    // streams across all pages, transparent
}
```

### Verify a webhook
```php
use Shoper\Sdk\WebhookVerifier;

$verifier = new WebhookVerifier($appstoreSecret, $webhookSecret);
if (!$verifier->verifyFromGlobals(file_get_contents('php://input'))) {
    http_response_code(401);
    exit;
}
```
`verifyFromGlobals()` reads the `X-Webhook-Id`, `X-Shop-License` and `X-Webhook-SHA1` headers; `verifyFromPsr7($request)` does the same for a PSR-7 request. See `examples/03-webhook-verification.php`.

## All 74 sub-clients

Every public REST resource is a typed getter on `ShoperClient`:
```php
$client->products();           // \Shoper\Sdk\Rest\Products\ProductsClient
$client->orders();             // \Shoper\Sdk\Rest\Orders\OrdersClient
$client->categories();
// ... 71 more — see scripts/sub-clients.expected.php for the canonical list
```

For brand-new resources Fern adds before this README is regenerated, the magic `__call` fallback still works.

## Features

- OAuth 2.0 authorization_code + refresh_token flows
- Admin Basic authentication
- Type-safe response DTOs (generated from OpenAPI spec)
- `Paginator` — iterate through all pages
- `BulkRequestBuilder` — batch up to 25 operations in one call
- `RateLimitHandler` — automatic retry on 429 with `Retry-After` honor
- `WebhookVerifier` — HMAC signature verification

## Examples

See `examples/` directory for end-to-end scenarios:

- `01-oauth-flow.php` — full AppStore OAuth flow
- `02-basic-crud.php` — list / create / update / delete
- `03-webhook-verification.php` — receive and verify webhooks
- `04-pagination.php` — iterate all pages
- `05-bulk-requests.php` — batch updates
- `06-rate-limit.php` — retry with backoff
- `07-error-handling.php` — typed exceptions

## Reference
- API docs: https://developers.shoper.pl
- Issue tracker / source: https://github.com/dreamcommerce/shoper-sdk-php
- Packagist: https://packagist.org/packages/shoper/sdk

## Support

**Bug reports and feature requests:** contact Shoper support. **This repository does not accept public issues or direct PRs to auto-generated code.**

Community PRs are welcome to:
- `src/ShoperClient.php` and other root helpers (`src/*.php`)
- `README.md`, `examples/`, `tests/Helpers/`
- `CHANGELOG.md`, `.github/`

Paths `src/Rest/**` are auto-generated from the OpenAPI spec and cannot be modified directly — PRs touching them will be auto-closed.

## License

MIT — see [LICENSE](LICENSE).
