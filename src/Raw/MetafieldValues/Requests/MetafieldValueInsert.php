<?php

namespace Shoper\Sdk\Rest\MetafieldValues\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class MetafieldValueInsert extends JsonSerializableType
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
     * @param array{
     *   metafieldId: int,
     *   objectId?: ?int,
     *   value?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->metafieldId = $values['metafieldId'];
        $this->objectId = $values['objectId'] ?? null;
        $this->value = $values['value'] ?? null;
    }
}
