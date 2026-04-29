<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

/**
 * Represents information about delivery time.
 */
class Delivery extends JsonSerializableType
{
    /**
     * @var ?float $days **Deprecated since 5.20.14.** days count for delivery waiting
     */
    #[JsonProperty('days')]
    public ?float $days;

    /**
     * @var ?int $deliveryId delivery identifier
     */
    #[JsonProperty('delivery_id')]
    public ?int $deliveryId;

    /**
     * @var ?float $hours hours count for delivery waiting
     */
    #[JsonProperty('hours')]
    public ?float $hours;

    /**
     * @var ?array<string, DeliveryTranslationsValue> $translations an associative array with object translations
     */
    #[JsonProperty('translations'), ArrayType(['string' => DeliveryTranslationsValue::class])]
    public ?array $translations;

    /**
     * @param array{
     *   days?: ?float,
     *   deliveryId?: ?int,
     *   hours?: ?float,
     *   translations?: ?array<string, DeliveryTranslationsValue>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->days = $values['days'] ?? null;
        $this->deliveryId = $values['deliveryId'] ?? null;
        $this->hours = $values['hours'] ?? null;
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
