<?php

namespace Shoper\Sdk\Rest\Payments\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;
use Shoper\Sdk\Rest\Payments\Types\PaymentInsertTranslationsValue;

class PaymentInsert extends JsonSerializableType
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
     * @var string $name payment engine name. The application requires the use of an "external" value
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var array<string> $supportedCurrencies an array with names of supported currencies by this payment method (Only available for external payment methods)
     */
    #[JsonProperty('supportedCurrencies'), ArrayType(['string'])]
    public array $supportedCurrencies;

    /**
     * @var array<string, PaymentInsertTranslationsValue> $translations an associative array with object translations
     */
    #[JsonProperty('translations'), ArrayType(['string' => PaymentInsertTranslationsValue::class])]
    public array $translations;

    /**
     * @param array{
     *   currencies: array<int>,
     *   name: string,
     *   supportedCurrencies: array<string>,
     *   translations: array<string, PaymentInsertTranslationsValue>,
     *   imageUrl?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->currencies = $values['currencies'];
        $this->imageUrl = $values['imageUrl'] ?? null;
        $this->name = $values['name'];
        $this->supportedCurrencies = $values['supportedCurrencies'];
        $this->translations = $values['translations'];
    }
}
