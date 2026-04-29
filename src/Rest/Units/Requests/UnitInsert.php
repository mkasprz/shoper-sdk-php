<?php

namespace Shoper\Sdk\Rest\Units\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Units\Types\UnitInsertTranslationsValue;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

class UnitInsert extends JsonSerializableType
{
    /**
     * @var bool $floatingPoint is the unit floating point? (otherwise - integer)
     */
    #[JsonProperty('floating_point')]
    public bool $floatingPoint;

    /**
     * @var ?array<string, UnitInsertTranslationsValue> $translations an associative array with object translations
     */
    #[JsonProperty('translations'), ArrayType(['string' => UnitInsertTranslationsValue::class])]
    public ?array $translations;

    /**
     * @param array{
     *   floatingPoint: bool,
     *   translations?: ?array<string, UnitInsertTranslationsValue>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->floatingPoint = $values['floatingPoint'];
        $this->translations = $values['translations'] ?? null;
    }
}
