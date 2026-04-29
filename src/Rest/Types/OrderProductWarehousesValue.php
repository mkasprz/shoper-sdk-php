<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class OrderProductWarehousesValue extends JsonSerializableType
{
    /**
     * @var float $quantity qunatity
     */
    #[JsonProperty('quantity')]
    public float $quantity;

    /**
     * @var int $shippingWarehouseId shipping warehouse
     */
    #[JsonProperty('shipping_warehouse_id')]
    public int $shippingWarehouseId;

    /**
     * @var int $sourceWarehouseId source warehouse
     */
    #[JsonProperty('source_warehouse_id')]
    public int $sourceWarehouseId;

    /**
     * @param array{
     *   quantity: float,
     *   shippingWarehouseId: int,
     *   sourceWarehouseId: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->quantity = $values['quantity'];
        $this->shippingWarehouseId = $values['shippingWarehouseId'];
        $this->sourceWarehouseId = $values['sourceWarehouseId'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
