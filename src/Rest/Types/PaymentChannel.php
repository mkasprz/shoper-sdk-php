<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

/**
 * Payments methods channels. Resources available for selected applications. If you want to use them, please contact us at appstore@shoper.pl.
 */
class PaymentChannel extends JsonSerializableType
{
    /**
     * @var ?string $channelId channel identifier
     */
    #[JsonProperty('channel_id')]
    public ?string $channelId;

    /**
     * @var ?string $applicationChannelId application-side channel identifier
     */
    #[JsonProperty('application_channel_id')]
    public ?string $applicationChannelId;

    /**
     * @var ?string $paymentId parent payment method identifier
     */
    #[JsonProperty('payment_id')]
    public ?string $paymentId;

    /**
     * @var ?string $channelKey unique key identifying this channel within the payment provider
     */
    #[JsonProperty('channel_key')]
    public ?string $channelKey;

    /**
     * @var ?array<string> $currencies list of currency codes supported by this channel (e.g. PLN, EUR)
     */
    #[JsonProperty('currencies'), ArrayType(['string'])]
    public ?array $currencies;

    /**
     * @var ?string $type channel type (e.g. card, transfer, blik)
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @var ?array<string, PaymentChannelTranslationsValue> $translations per-locale channel configuration
     */
    #[JsonProperty('translations'), ArrayType(['string' => PaymentChannelTranslationsValue::class])]
    public ?array $translations;

    /**
     * @param array{
     *   channelId?: ?string,
     *   applicationChannelId?: ?string,
     *   paymentId?: ?string,
     *   channelKey?: ?string,
     *   currencies?: ?array<string>,
     *   type?: ?string,
     *   translations?: ?array<string, PaymentChannelTranslationsValue>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->channelId = $values['channelId'] ?? null;
        $this->applicationChannelId = $values['applicationChannelId'] ?? null;
        $this->paymentId = $values['paymentId'] ?? null;
        $this->channelKey = $values['channelKey'] ?? null;
        $this->currencies = $values['currencies'] ?? null;
        $this->type = $values['type'] ?? null;
        $this->translations = $values['translations'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
