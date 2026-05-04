<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

/**
 * Shop payment methods
 */
class Payment extends JsonSerializableType
{
    /**
     * @var ?array<string> $currencies an array with identifiers of [currencies](#tag/Currencies) bound to this payment method
     */
    #[JsonProperty('currencies'), ArrayType(['string'])]
    public ?array $currencies;

    /**
     * @var ?string $imageUrl URL of the image displayed for the payment method
     */
    #[JsonProperty('imageUrl')]
    public ?string $imageUrl;

    /**
     * @var ?value-of<PaymentInstall> $install is the payment method provided with an additional software libraries?
     */
    #[JsonProperty('install')]
    public ?string $install;

    /**
     * @var ?string $name payment engine name. The application requires the use of an "external" value
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $order a priority used to calculate payments display order
     */
    #[JsonProperty('order')]
    public ?string $order;

    /**
     * @var ?array<string> $supportedCurrencies an array with names of supported currencies by this payment method (Only available for external payment methods)
     */
    #[JsonProperty('supportedCurrencies'), ArrayType(['string'])]
    public ?array $supportedCurrencies;

    /**
     * @var ?array<string, PaymentTranslationsValue> $translations an associative array with object translations
     */
    #[JsonProperty('translations'), ArrayType(['string' => PaymentTranslationsValue::class])]
    public ?array $translations;

    /**
     * @param array{
     *   currencies?: ?array<string>,
     *   imageUrl?: ?string,
     *   install?: ?value-of<PaymentInstall>,
     *   name?: ?string,
     *   order?: ?string,
     *   supportedCurrencies?: ?array<string>,
     *   translations?: ?array<string, PaymentTranslationsValue>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->currencies = $values['currencies'] ?? null;
        $this->imageUrl = $values['imageUrl'] ?? null;
        $this->install = $values['install'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->order = $values['order'] ?? null;
        $this->supportedCurrencies = $values['supportedCurrencies'] ?? null;
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
