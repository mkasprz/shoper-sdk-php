<?php

namespace Shoper\Sdk\Rest\MetafieldBind\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class MetafieldBind extends JsonSerializableType
{
    /**
     * @var string $type object type to bind the metafield to (e.g. product, category, order)
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var string $itemId identifier of the object to bind the metafield to
     */
    #[JsonProperty('item_id')]
    public string $itemId;

    /**
     * @var int $metafieldId [metafield](#tag/Metafields) identifier
     */
    #[JsonProperty('metafield_id')]
    public int $metafieldId;

    /**
     * @var string $value value to store for the metafield binding
     */
    #[JsonProperty('value')]
    public string $value;

    /**
     * @param array{
     *   type: string,
     *   itemId: string,
     *   metafieldId: int,
     *   value: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->type = $values['type'];
        $this->itemId = $values['itemId'];
        $this->metafieldId = $values['metafieldId'];
        $this->value = $values['value'];
    }
}
