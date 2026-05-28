<?php

namespace Shoper\Sdk\Rest\Deliveries\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Deliveries\Types\DeliveryUpdateTranslationsValue;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

class DeliveryUpdate extends JsonSerializableType
{
    /**
     * @var ?string $hours hours count for delivery waiting
     */
    #[JsonProperty('hours')]
    public ?string $hours;

    /**
     * @var ?array<string, DeliveryUpdateTranslationsValue> $translations an associative array with object translations
     */
    #[JsonProperty('translations'), ArrayType(['string' => DeliveryUpdateTranslationsValue::class])]
    public ?array $translations;

    /**
     * @param array{
     *   hours?: ?string,
     *   translations?: ?array<string, DeliveryUpdateTranslationsValue>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->hours = $values['hours'] ?? null;
        $this->translations = $values['translations'] ?? null;
    }
}
