<?php

namespace Shoper\Sdk\Rest\Deliveries\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Deliveries\Types\DeliveryInsertTranslationsValue;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

class DeliveryInsert extends JsonSerializableType
{
    /**
     * @var string $hours hours count for delivery waiting
     */
    #[JsonProperty('hours')]
    public string $hours;

    /**
     * @var array<string, DeliveryInsertTranslationsValue> $translations an associative array with object translations
     */
    #[JsonProperty('translations'), ArrayType(['string' => DeliveryInsertTranslationsValue::class])]
    public array $translations;

    /**
     * @param array{
     *   hours: string,
     *   translations: array<string, DeliveryInsertTranslationsValue>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->hours = $values['hours'];
        $this->translations = $values['translations'];
    }
}
