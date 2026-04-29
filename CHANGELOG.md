# Changelog

All notable changes to `shoper/sdk` will be documented in this file.
This project follows [Semantic Versioning](https://semver.org/) (loose 0.x —
breaking changes may land in minor bumps until 1.0.0).

## [Unreleased]

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
