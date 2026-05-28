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
     * @var ?string $days **Deprecated since 5.20.14.** days count for delivery waiting
     */
    #[JsonProperty('days')]
    public ?string $days;

    /**
     * @var ?string $deliveryId delivery identifier
     */
    #[JsonProperty('delivery_id')]
    public ?string $deliveryId;

    /**
     * @var ?string $hours hours count for delivery waiting
     */
    #[JsonProperty('hours')]
    public ?string $hours;

    /**
     * @var ?array<string, DeliveryTranslationsValue> $translations an associative array with object translations
     */
    #[JsonProperty('translations'), ArrayType(['string' => DeliveryTranslationsValue::class])]
    public ?array $translations;

    /**
     * @param array{
     *   days?: ?string,
     *   deliveryId?: ?string,
     *   hours?: ?string,
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
