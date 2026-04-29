<?php
/**
 * Example 01 — Full AppStore OAuth flow.
 *
 * Flow:
 *   1. Partner app builds authorization URL → redirects user to Shoper.
 *   2. User approves in Shoper admin → Shoper redirects back to app with ?code=...
 *   3. App exchanges code for access_token + refresh_token.
 *   4. App stores tokens and makes API calls.
 *   5. When access_token expires, app uses refresh_token to get a new pair.
 */
require __DIR__ . '/../vendor/autoload.php';

use Shoper\Sdk\OAuthManager;
use Shoper\Sdk\ShoperClient;

$shopDomain = 'https://my-shop.shoper.pl';
$clientId = getenv('SHOPER_CLIENT_ID') ?: 'your_client_id';
$clientSecret = getenv('SHOPER_CLIENT_SECRET') ?: 'your_client_secret';
$redirectUri = 'https://my-app.example.com/callback';

// Step 1: Build authorization URL (in real app this is served to the user).
$mgr = new OAuthManager();
$authorizeUrl = $mgr->buildAuthorizationUrl($shopDomain, $clientId, $redirectUri, ['read', 'write']);
echo "Redirect user to: $authorizeUrl\n";

// Step 2-3: User returns with ?code=... Exchange for tokens.
// Simulated here — in real app, extract from $_GET['code'].
$authorizationCode = $_GET['code'] ?? 'simulated-auth-code';
$client = new ShoperClient($shopDomain);
$tokens = $client->authenticateOAuth($clientId, $clientSecret, $authorizationCode);
echo "Got tokens: access_token=" . substr($tokens['access_token'], 0, 10) . "..., expires_in={$tokens['expires_in']}\n";

// Step 4: Make API calls.
$info = $client->restClient(); // use typed Fern REST client
// $products = $client->products()->list(['limit' => 10]);

// Step 5: Refresh when expired.
$newTokens = $client->refreshToken($clientId, $clientSecret, $tokens['refresh_token']);
echo "Refreshed. New access_token=" . substr($newTokens['access_token'], 0, 10) . "...\n";
