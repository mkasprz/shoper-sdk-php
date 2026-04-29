# Contributing

Thank you for your interest in contributing to `shoper/sdk`.

## Scope of contributions

**Accepted:**
- `src/ShoperClient.php`, `src/OAuthManager.php`, `src/WebhookVerifier.php`,
  `src/Paginator.php`, `src/BulkRequestBuilder.php`, `src/RateLimitHandler.php`
- `src/Exception/*.php`
- `README.md`, `CHANGELOG.md`
- `examples/*.php`
- `tests/Helpers/**`
- `.github/**`

**Not accepted (auto-closed by `pr-guard.yml`):**
- `src/Rest/**` — auto-generated from the OpenAPI spec at
  `dreamcommerce/shoper-openapi`. Report API changes to Shoper support.

## Pull request process

1. Fork the repo, create a branch from `main`.
2. Make your changes in the accepted paths above.
3. Ensure CI passes (PHP 8.0-8.4, PHPStan level 6, PHPUnit).
4. Open a PR with a clear description.
5. Review by the API team — expect response within 5 business days.

## Bug reports and feature requests

This repository does not use GitHub Issues. Contact Shoper support.
