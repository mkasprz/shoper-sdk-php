<?php

namespace Shoper\Sdk\Rest\ProductSafetyCertificates\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\ProductSafetyCertificates\Types\ProductSafetyCertificateUpdateTranslationsValue;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

class ProductSafetyCertificateUpdate extends JsonSerializableType
{
    /**
     * @var ?string $name certificate name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?array<string, ProductSafetyCertificateUpdateTranslationsValue> $translations an associative array with object translations
     */
    #[JsonProperty('translations'), ArrayType(['string' => ProductSafetyCertificateUpdateTranslationsValue::class])]
    public ?array $translations;

    /**
     * @param array{
     *   name?: ?string,
     *   translations?: ?array<string, ProductSafetyCertificateUpdateTranslationsValue>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->name = $values['name'] ?? null;
        $this->translations = $values['translations'] ?? null;
    }
}
