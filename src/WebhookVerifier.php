<?php

declare(strict_types=1);

namespace Shoper\Sdk;

use Psr\Http\Message\RequestInterface;

final class WebhookVerifier
{
    private string $appstoreSecret;
    private string $webhookSecret;

    public function __construct(string $appstoreSecret, string $webhookSecret)
    {
        $this->appstoreSecret = $appstoreSecret;
        $this->webhookSecret = $webhookSecret;
    }

    public function deriveShopSecret(string $shopHash): string
    {
        return hash_hmac('sha512', $shopHash . ':' . $this->webhookSecret, $this->appstoreSecret);
    }

    public function verify(string $webhookId, string $shopHash, string $rawBody, string $signature): bool
    {
        $shopSecret = $this->deriveShopSecret($shopHash);
        $expected = sha1($webhookId . ':' . $shopSecret . ':' . $rawBody);
        return hash_equals($expected, $signature);
    }

    public function verifyFromGlobals(string $rawBody): bool
    {
        $webhookId = $_SERVER['HTTP_X_WEBHOOK_ID'] ?? '';
        $shopHash = $_SERVER['HTTP_X_SHOP_LICENSE'] ?? '';
        $signature = $_SERVER['HTTP_X_WEBHOOK_SHA1'] ?? '';
        return $this->verify((string) $webhookId, (string) $shopHash, $rawBody, (string) $signature);
    }

    public function verifyFromPsr7(RequestInterface $request): bool
    {
        $webhookId = $request->getHeaderLine('X-Webhook-Id');
        $shopHash = $request->getHeaderLine('X-Shop-License');
        $signature = $request->getHeaderLine('X-Webhook-SHA1');
        $rawBody = (string) $request->getBody();
        return $this->verify($webhookId, $shopHash, $rawBody, $signature);
    }
}
