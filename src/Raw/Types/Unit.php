<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

/**
 * Measurement units
 */
class Unit extends JsonSerializableType
{
    /**
     * @var value-of<UnitFloatingPoint> $floatingPoint is the unit floating point? (otherwise - integer)
     */
    #[JsonProperty('floating_point')]
    public string $floatingPoint;

    /**
     * @var ?array<string, UnitTranslationsValue> $translations an associative array with object translations
     */
    #[JsonProperty('translations'), ArrayType(['string' => UnitTranslationsValue::class])]
    public ?array $translations;

    /**
     * @var ?string $unitId measurement unit identifier
     */
    #[JsonProperty('unit_id')]
    public ?string $unitId;

    /**
     * @param array{
     *   floatingPoint: value-of<UnitFloatingPoint>,
     *   translations?: ?array<string, UnitTranslationsValue>,
     *   unitId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->floatingPoint = $values['floatingPoint'];
        $this->translations = $values['translations'] ?? null;
        $this->unitId = $values['unitId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
