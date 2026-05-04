<?php

namespace Shoper\Sdk\Rest\AdditionalFieldOptions\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\AdditionalFieldOptions\Types\AdditionalFieldOptionInsertTranslationsValue;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

class AdditionalFieldOptionInsert extends JsonSerializableType
{
    /**
     * @var int $fieldId identifier of the additional field
     */
    #[JsonProperty('field_id')]
    public int $fieldId;

    /**
     * @var array<string, AdditionalFieldOptionInsertTranslationsValue> $translations translations data keyed by locale code
     */
    #[JsonProperty('translations'), ArrayType(['string' => AdditionalFieldOptionInsertTranslationsValue::class])]
    public array $translations;

    /**
     * @param array{
     *   fieldId: int,
     *   translations: array<string, AdditionalFieldOptionInsertTranslationsValue>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->fieldId = $values['fieldId'];
        $this->translations = $values['translations'];
    }
}
