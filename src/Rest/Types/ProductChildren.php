<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

/**
 * an associative array with product bundle children info
 */
class ProductChildren extends JsonSerializableType
{
    /**
     * @var ?int $bundleId product bundle identifier
     */
    #[JsonProperty('bundle_id')]
    public ?int $bundleId;

    /**
     * @var ?int $id child identifier
     */
    #[JsonProperty('id')]
    public ?int $id;

    /**
     * @var ?int $order child order
     */
    #[JsonProperty('order')]
    public ?int $order;

    /**
     * @var ?int $productId [product](#tag/Products) identifier
     */
    #[JsonProperty('product_id')]
    public ?int $productId;

    /**
     * @var ?float $stock stock availability
     */
    #[JsonProperty('stock')]
    public ?float $stock;

    /**
     * @var ?int $stockId [stock](#tag/ProductStocks) identifier
     */
    #[JsonProperty('stock_id')]
    public ?int $stockId;

    /**
     * @param array{
     *   bundleId?: ?int,
     *   id?: ?int,
     *   order?: ?int,
     *   productId?: ?int,
     *   stock?: ?float,
     *   stockId?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->bundleId = $values['bundleId'] ?? null;
        $this->id = $values['id'] ?? null;
        $this->order = $values['order'] ?? null;
        $this->productId = $values['productId'] ?? null;
        $this->stock = $values['stock'] ?? null;
        $this->stockId = $values['stockId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
