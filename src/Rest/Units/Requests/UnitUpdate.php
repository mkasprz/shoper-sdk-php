<?php

namespace Shoper\Sdk\Rest\Units\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Units\Types\UnitUpdateTranslationsValue;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

class UnitUpdate extends JsonSerializableType
{
    /**
     * @var ?bool $floatingPoint is the unit floating point? (otherwise - integer)
     */
    #[JsonProperty('floating_point')]
    public ?bool $floatingPoint;

    /**
     * @var ?array<string, UnitUpdateTranslationsValue> $translations an associative array with object translations
     */
    #[JsonProperty('translations'), ArrayType(['string' => UnitUpdateTranslationsValue::class])]
    public ?array $translations;

    /**
     * @param array{
     *   floatingPoint?: ?bool,
     *   translations?: ?array<string, UnitUpdateTranslationsValue>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->floatingPoint = $values['floatingPoint'] ?? null;
        $this->translations = $values['translations'] ?? null;
    }
}
