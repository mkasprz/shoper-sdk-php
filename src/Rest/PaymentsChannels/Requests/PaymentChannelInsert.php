<?php

namespace Shoper\Sdk\Rest\PaymentsChannels\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;
use Shoper\Sdk\Rest\PaymentsChannels\Types\PaymentChannelInsertTranslationsValue;

class PaymentChannelInsert extends JsonSerializableType
{
    /**
     * @var string $channelKey unique key identifying this channel within the payment provider
     */
    #[JsonProperty('channel_key')]
    public string $channelKey;

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
     * @var ?array<string, PaymentChannelInsertTranslationsValue> $translations per-locale channel configuration
     */
    #[JsonProperty('translations'), ArrayType(['string' => PaymentChannelInsertTranslationsValue::class])]
    public ?array $translations;

    /**
     * @param array{
     *   channelKey: string,
     *   applicationChannelId?: ?string,
     *   currencies?: ?array<string>,
     *   type?: ?string,
     *   translations?: ?array<string, PaymentChannelInsertTranslationsValue>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->channelKey = $values['channelKey'];
        $this->applicationChannelId = $values['applicationChannelId'] ?? null;
        $this->currencies = $values['currencies'] ?? null;
        $this->type = $values['type'] ?? null;
        $this->translations = $values['translations'] ?? null;
    }
}
