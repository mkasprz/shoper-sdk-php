<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

/**
 * Gauges.
 */
class Gauge extends JsonSerializableType
{
    /**
     * @var ?int $gaugeId gauge identifier
     */
    #[JsonProperty('gauge_id')]
    public ?int $gaugeId;

    /**
     * @var ?array<string, GaugeTranslationsValue> $translations an associative array with object translations
     */
    #[JsonProperty('translations'), ArrayType(['string' => GaugeTranslationsValue::class])]
    public ?array $translations;

    /**
     * @param array{
     *   gaugeId?: ?int,
     *   translations?: ?array<string, GaugeTranslationsValue>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->gaugeId = $values['gaugeId'] ?? null;
        $this->translations = $values['translations'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
