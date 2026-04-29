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
     * @var array<int> $currencies an array with identifiers of [currencies](#tag/Currencies) bound to this payment method
     */
    #[JsonProperty('currencies'), ArrayType(['integer'])]
    public array $currencies;

    /**
     * @var ?string $imageUrl URL of the image displayed for the payment method
     */
    #[JsonProperty('imageUrl')]
    public ?string $imageUrl;

    /**
     * @var ?bool $install is the payment method provided with an additional software libraries?
     */
    #[JsonProperty('install')]
    public ?bool $install;

    /**
     * @var string $name payment engine name. The application requires the use of an "external" value
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?int $order a priority used to calculate payments display order
     */
    #[JsonProperty('order')]
    public ?int $order;

    /**
     * @var array<string> $supportedCurrencies an array with names of supported currencies by this payment method (Only available for external payment methods)
     */
    #[JsonProperty('supportedCurrencies'), ArrayType(['string'])]
    public array $supportedCurrencies;

    /**
     * @var array<string, PaymentTranslationsValue> $translations an associative array with object translations
     */
    #[JsonProperty('translations'), ArrayType(['string' => PaymentTranslationsValue::class])]
    public array $translations;

    /**
     * @param array{
     *   currencies: array<int>,
     *   name: string,
     *   supportedCurrencies: array<string>,
     *   translations: array<string, PaymentTranslationsValue>,
     *   imageUrl?: ?string,
     *   install?: ?bool,
     *   order?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->currencies = $values['currencies'];
        $this->imageUrl = $values['imageUrl'] ?? null;
        $this->install = $values['install'] ?? null;
        $this->name = $values['name'];
        $this->order = $values['order'] ?? null;
        $this->supportedCurrencies = $values['supportedCurrencies'];
        $this->translations = $values['translations'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
