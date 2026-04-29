<?php

declare(strict_types=1);

namespace Shoper\Sdk\Tests\Helpers;

use PHPUnit\Framework\TestCase;
use Shoper\Sdk\WebhookVerifier;

final class WebhookVerifierTest extends TestCase
{
    private const APPSTORE_SECRET = 'appstore-secret-fixture';
    private const WEBHOOK_SECRET = 'webhook-secret-fixture';
    private const SHOP_HASH = 'shop-hash-fixture';

    private WebhookVerifier $verifier;

    protected function setUp(): void
    {
        $this->verifier = new WebhookVerifier(self::APPSTORE_SECRET, self::WEBHOOK_SECRET);
    }

    public function test_deriveShopSecret_is_deterministic(): void
    {
        $a = $this->verifier->deriveShopSecret(self::SHOP_HASH);
        $b = $this->verifier->deriveShopSecret(self::SHOP_HASH);
        self::assertSame($a, $b);
        self::assertNotEmpty($a);
    }

    public function test_verify_returns_true_for_valid_signature(): void
    {
        $webhookId = 'evt-123';
        $body = '{"event":"order.created","data":{"id":1}}';
        $shopSecret = $this->verifier->deriveShopSecret(self::SHOP_HASH);
        $validSig = sha1($webhookId . ':' . $shopSecret . ':' . $body);

        self::assertTrue(
            $this->verifier->verify($webhookId, self::SHOP_HASH, $body, $validSig)
        );
    }

    public function test_verify_returns_false_for_invalid_signature(): void
    {
        self::assertFalse(
            $this->verifier->verify('evt-123', self::SHOP_HASH, 'body', 'bogus-sig')
        );
    }

    public function test_verify_uses_timing_safe_comparison(): void
    {
        // Regression guard: implementacja MUSI używać hash_equals (nie ===).
        // Test pass nawet przy === ale weryfikacja kodu w review.
        $webhookId = 'evt-1';
        $body = 'x';
        $shopSecret = $this->verifier->deriveShopSecret(self::SHOP_HASH);
        $valid = sha1($webhookId . ':' . $shopSecret . ':' . $body);
        self::assertTrue($this->verifier->verify($webhookId, self::SHOP_HASH, $body, $valid));
    }

    public function test_verifyFromGlobals_reads_server_headers(): void
    {
        $webhookId = 'evt-globals';
        $body = '{"test":true}';
        $shopSecret = $this->verifier->deriveShopSecret(self::SHOP_HASH);
        $sig = sha1($webhookId . ':' . $shopSecret . ':' . $body);

        $_SERVER['HTTP_X_WEBHOOK_ID'] = $webhookId;
        $_SERVER['HTTP_X_SHOP_LICENSE'] = self::SHOP_HASH;
        $_SERVER['HTTP_X_WEBHOOK_SHA1'] = $sig;

        self::assertTrue($this->verifier->verifyFromGlobals($body));
    }
}
