<?php
/**
 * Example 03 — Webhook endpoint handler.
 *
 * Deploy this as HTTP endpoint (e.g. /webhooks) in your app.
 * Configure Shoper AppStore webhook to POST here.
 */
require __DIR__ . '/../vendor/autoload.php';

use Shoper\Sdk\WebhookVerifier;

$appstoreSecret = getenv('SHOPER_APPSTORE_SECRET');
$webhookSecret = getenv('SHOPER_WEBHOOK_SECRET');

$verifier = new WebhookVerifier($appstoreSecret, $webhookSecret);

$rawBody = file_get_contents('php://input');
if (!$verifier->verifyFromGlobals($rawBody)) {
    http_response_code(401);
    echo json_encode(['error' => 'Invalid webhook signature']);
    exit;
}

$payload = json_decode($rawBody, true);
$event = $payload['event'] ?? '';

switch ($event) {
    case 'order.created':
        // handle new order
        break;
    case 'product.updated':
        // handle product update
        break;
}

http_response_code(200);
echo json_encode(['ok' => true]);
