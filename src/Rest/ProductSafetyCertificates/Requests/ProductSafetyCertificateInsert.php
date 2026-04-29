<?php

namespace Shoper\Sdk\Rest\ProductSafetyCertificates\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\ProductSafetyCertificates\Types\ProductSafetyCertificateInsertTranslationsValue;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

class ProductSafetyCertificateInsert extends JsonSerializableType
{
    /**
     * @var string $name certificate name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var array<string, ProductSafetyCertificateInsertTranslationsValue> $translations an associative array with object translations
     */
    #[JsonProperty('translations'), ArrayType(['string' => ProductSafetyCertificateInsertTranslationsValue::class])]
    public array $translations;

    /**
     * @param array{
     *   name: string,
     *   translations: array<string, ProductSafetyCertificateInsertTranslationsValue>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->translations = $values['translations'];
    }
}
