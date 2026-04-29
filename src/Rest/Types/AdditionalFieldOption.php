<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

/**
 * Option value for an additional field of type select.
 */
class AdditionalFieldOption extends JsonSerializableType
{
    /**
     * @var int $fieldId identifier of the additional field
     */
    #[JsonProperty('field_id')]
    public int $fieldId;

    /**
     * @var ?int $optionId additional field option identifier
     */
    #[JsonProperty('option_id')]
    public ?int $optionId;

    /**
     * @var array<string, AdditionalFieldOptionTranslationsValue> $translations translations data keyed by locale code
     */
    #[JsonProperty('translations'), ArrayType(['string' => AdditionalFieldOptionTranslationsValue::class])]
    public array $translations;

    /**
     * @param array{
     *   fieldId: int,
     *   translations: array<string, AdditionalFieldOptionTranslationsValue>,
     *   optionId?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->fieldId = $values['fieldId'];
        $this->optionId = $values['optionId'] ?? null;
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
