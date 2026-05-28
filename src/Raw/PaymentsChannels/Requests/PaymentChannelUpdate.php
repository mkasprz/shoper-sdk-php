<?php

namespace Shoper\Sdk\Rest\PaymentsChannels\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;
use Shoper\Sdk\Rest\PaymentsChannels\Types\PaymentChannelUpdateTranslationsValue;

class PaymentChannelUpdate extends JsonSerializableType
{
    /**
     * @var ?string $applicationChannelId application-side channel identifier
     */
    #[JsonProperty('application_channel_id')]
    public ?string $applicationChannelId;

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
     * @var ?array<string, PaymentChannelUpdateTranslationsValue> $translations per-locale channel configuration
     */
    #[JsonProperty('translations'), ArrayType(['string' => PaymentChannelUpdateTranslationsValue::class])]
    public ?array $translations;

    /**
     * @param array{
     *   applicationChannelId?: ?string,
     *   currencies?: ?array<string>,
     *   type?: ?string,
     *   translations?: ?array<string, PaymentChannelUpdateTranslationsValue>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->applicationChannelId = $values['applicationChannelId'] ?? null;
        $this->currencies = $values['currencies'] ?? null;
        $this->type = $values['type'] ?? null;
        $this->translations = $values['translations'] ?? null;
    }
}
