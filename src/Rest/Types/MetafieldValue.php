<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

/**
 * Values for [metafields](#tag/Metafields)
 */
class MetafieldValue extends JsonSerializableType
{
    /**
     * @var int $metafieldId [metafield](#tag/Metafields) identifier
     */
    #[JsonProperty('metafield_id')]
    public int $metafieldId;

    /**
     * @var ?int $objectId related object identifier
     */
    #[JsonProperty('object_id')]
    public ?int $objectId;

    /**
     * @var ?string $value [metafield](#tag/Metafields) value
     */
    #[JsonProperty('value')]
    public ?string $value;

    /**
     * @var ?int $valueId metafield value identifier
     */
    #[JsonProperty('value_id')]
    public ?int $valueId;

    /**
     * @param array{
     *   metafieldId: int,
     *   objectId?: ?int,
     *   value?: ?string,
     *   valueId?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->metafieldId = $values['metafieldId'];
        $this->objectId = $values['objectId'] ?? null;
        $this->value = $values['value'] ?? null;
        $this->valueId = $values['valueId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
