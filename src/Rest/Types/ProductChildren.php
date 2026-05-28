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
     * @var ?string $id child identifier
     */
    #[JsonProperty('id')]
    public ?string $id;

    /**
     * @var ?string $order child order
     */
    #[JsonProperty('order')]
    public ?string $order;

    /**
     * @var ?string $productId [product](#tag/Products) identifier
     */
    #[JsonProperty('product_id')]
    public ?string $productId;

    /**
     * @var ?string $stock stock availability
     */
    #[JsonProperty('stock')]
    public ?string $stock;

    /**
     * @var ?string $stockId [stock](#tag/ProductStocks) identifier
     */
    #[JsonProperty('stock_id')]
    public ?string $stockId;

    /**
     * @param array{
     *   bundleId?: ?int,
     *   id?: ?string,
     *   order?: ?string,
     *   productId?: ?string,
     *   stock?: ?string,
     *   stockId?: ?string,
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
