## [0.5.7] — 2026-06-23

### Changes

```
(no API-level changes detected — SDK regeneration only)
```


## [0.5.0] — 2026-05-27

### Changes

```
(no API-level changes detected — SDK regeneration only)
```


# Changelog
## [0.5.4] — 2026-05-28 (Fern SHORT method names)

### Changed (breaking generated-code signatures)
- All resource clients now use SHORT method names: `$client->aboutpages()->list()`
  instead of `->listAboutpages()`. Same for `get()`, `create()`, `update()`,
  `delete()`. Powered by `x-fern-sdk-method-name` + `x-fern-sdk-group-name`
  injection in `scripts/build-fern-spec.mjs` (shoper-openapi).
- Multi-word tag normalization: `Order Tags` → `OrderTags`, `User Tags`
  → `UserTags`, `Product Tags` → `ProductTags`, `Additional Field Options`
  → `AdditionalFieldOptions`. Sub-clients now properly instantiated (no more
  null returns from ShoperClient helper).
- `Options` resource renamed to `ProductOptions` to avoid PHP `$options`
  private-property collision in `RestClient`. Call path:
  `$client->productOptions()->...`.

### Added
- New resource sub-clients (from shoper-openapi 0.5.3 spec):
  - `MetafieldBind` (POST /metafield-bind)
  - `ProductReview` types (ListProductReviews, ProductReviewInsert)
  - Insert/Update DTOs for `Availabilities`, `Currencies`, `Languages`,
    `Deliveries`.
- Pipeline now ships `src/Rest/` mirror of `src/Raw/` (matches
  `Shoper\Sdk\Rest\` namespace per PSR-4 autoload).

### Verified
- 246/260 (95%) of regenerated code samples from openapi/code-samples/*.yml
  run 1:1 when pasted into a PHP project (path-repo composer setup against
  local Docker shop, admin auth, ShoperClient helper).


All notable changes to `shoper/sdk` will be documented in this file.
This project follows [Semantic Versioning](https://semver.org/) (loose 0.x —
breaking changes may land in minor bumps until 1.0.0).

## [Unreleased]

## [0.4.0] — 2026-05-04 (OpenAPI spec conformance)

### Changed (breaking generated-code signatures)
- `delete*()` methods now return `?int` (integer 1/0) instead of `?bool` — spec was aligned to actual server response. Affects ~53 delete operations across all sub-clients.
- `update*()` methods returning `oneOf [bool, Resource]` now return `oneOf [int, Resource]` — same root cause. Affects ~55 update operations.
- `*_id` properties on response types are now `string` (with numeric pattern) instead of `int` — server actually serializes ids as strings.
- Boolean flag fields (`active`, `isdefault`, `bestseller`, `hidden`, etc.) on response types are now string enums (`"0"|"1"`) — Fern generates dedicated enum classes for each (e.g. `AboutpageActive`, `ProductBestseller`).
- Pagination wrapper `count` field is now `string` (numeric pattern) instead of `int`.
- `User::tags` is now `array<string>` instead of `?string`.
- `Specialoffer::date_from` and `date_to` are now nullable.
- `Category::category_id`, `Product::category_id` accept `oneOf [string, int]` for backward compat with edge-case server responses.
- `CategoriesTrees::listCategoriesTrees`, `DashboardActivities::listDashboardActivities` now return bare arrays (no pagination wrapper).
- `ApplicationLocks::create/update/deleteApplicationLock` return `bool` (this endpoint really returns boolean, unlike other delete*).
- 4 missing 4xx/501 response codes added (Metafields, ObjectMtime).

### Verified
- 304 PHPUnit tests against live shop, **0 schema_violations** in conformance harness (down from 394 baseline = -100%).
- Code samples and Scalar UI rendering re-verified in shoper-docs RC.

### Migration
Callers expecting `?bool` from `delete*()` should switch to `?int` (treat any non-zero as success). Boolean property reads on response types now return strings — cast/compare accordingly.

## [0.3.0] — 2026-04-29 (Faza 3 close)

### Added
- 74 typed sub-client getters on `ShoperClient` covering the full REST surface (1:1 with `RestClient`).
- `scripts/sub-clients.expected.php` — pinned canonical list of sub-client names; `tests/Helpers/SubClientsListTest` asserts drift.
- `tests/Helpers/ShoperClientFacadeTest` — dataProvider over the 74 names verifies each typed getter returns the matching `*Client`.
- `php-http/discovery`, `psr/http-client`, `psr/http-factory` declared explicitly in `require` — fixes runtime `Class Psr18ClientDiscovery not found` when installed without dev deps.
- `sdk/php/local-test/` harness — composer path-repo + smoke + random-actions runners against a live Shoper shop.
- README rewritten with three install paths (Packagist, path repo, VCS) and tight quick-start.

### Changed
- `restClient(): RestClient` now returns the typed `RestClient` (was `object`), centralized through a private `raw()` accessor.
- `__call` magic preserved as forward-compat for new Fern resources before sync regenerates typed getters.

### Verified
- 16/22 resources answer list-call against `shoper.docker.shoper.tech` (test:test). 6 failures captured as spec gaps in `task-plans/inbox/sdk-spec-gaps-2026-04-29.md` (out-of-scope for this release).
- PHPStan level 8 clean (only 2 pre-existing baseline errors on `oauthTokenRequest` array-shape, unchanged).
- 114-test PHPUnit unit suite green.
- Code samples (`x-codeSamples` $ref) verified end-to-end: 304/304 wired in `openapi.yml`, served by `shoper-docs/server.mjs`, rendered in Scalar UI.

## [0.1.0] — TBD

### Added

- Initial release.
