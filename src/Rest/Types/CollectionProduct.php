<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

/**
 * List and change order of products in collection
 */
class CollectionProduct extends JsonSerializableType
{
    /**
     * @var ?int $position The position of product in a manually sorted collection (set asynchronously). Only present when the collection sort_type equals SORT_TYPE_MANUAL.
     */
    #[JsonProperty('position')]
    public ?int $position;

    /**
     * @var ?int $productId product identifier
     */
    #[JsonProperty('product_id')]
    public ?int $productId;

    /**
     * @param array{
     *   position?: ?int,
     *   productId?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->position = $values['position'] ?? null;
        $this->productId = $values['productId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
