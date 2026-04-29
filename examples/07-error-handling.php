<?php
/**
 * Example 07 — Typed exception handling.
 */
require __DIR__ . '/../vendor/autoload.php';

use Shoper\Sdk\Exception\InvalidAuthCodeException;
use Shoper\Sdk\Exception\InvalidCredentialsException;
use Shoper\Sdk\Exception\InvalidRefreshTokenException;
use Shoper\Sdk\ShoperClient;

$client = new ShoperClient('https://shop.example.com');

try {
    $client->authenticateOAuth('bad-client-id', 'bad-secret', 'expired-code');
} catch (InvalidAuthCodeException $e) {
    echo "Authorization code rejected: " . $e->getMessage() . "\n";
    echo "Redirect user to re-authorize.\n";
}

try {
    $client->refreshToken('cid', 'cs', 'revoked-refresh-token');
} catch (InvalidRefreshTokenException $e) {
    echo "Refresh token invalid: " . $e->getMessage() . "\n";
    echo "User must log in again.\n";
}

try {
    $client->authenticate('wrong-user', 'wrong-pass');
} catch (InvalidCredentialsException $e) {
    echo "Admin login failed: " . $e->getMessage() . "\n";
}
