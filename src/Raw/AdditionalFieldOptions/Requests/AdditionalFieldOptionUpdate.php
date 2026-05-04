<?php

namespace Shoper\Sdk\Rest\AdditionalFieldOptions\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\AdditionalFieldOptions\Types\AdditionalFieldOptionUpdateTranslationsValue;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

class AdditionalFieldOptionUpdate extends JsonSerializableType
{
    /**
     * @var ?int $fieldId identifier of the additional field
     */
    #[JsonProperty('field_id')]
    public ?int $fieldId;

    /**
     * @var ?array<string, AdditionalFieldOptionUpdateTranslationsValue> $translations translations data keyed by locale code
     */
    #[JsonProperty('translations'), ArrayType(['string' => AdditionalFieldOptionUpdateTranslationsValue::class])]
    public ?array $translations;

    /**
     * @param array{
     *   fieldId?: ?int,
     *   translations?: ?array<string, AdditionalFieldOptionUpdateTranslationsValue>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->fieldId = $values['fieldId'] ?? null;
        $this->translations = $values['translations'] ?? null;
    }
}
