<?php

namespace Shoper\Sdk\Rest\WarehouseRelocations\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class WarehouseRelocationInsert extends JsonSerializableType
{
    /**
     * @var ?float $quantity quantity to relocate
     */
    #[JsonProperty('quantity')]
    public ?float $quantity;

    /**
     * @var ?int $stockId stock identifier
     */
    #[JsonProperty('stock_id')]
    public ?int $stockId;

    /**
     * @var ?int $warehouseFromId warehouse from identifier
     */
    #[JsonProperty('warehouse_from_id')]
    public ?int $warehouseFromId;

    /**
     * @var ?int $warehouseToId warehouse to identifier
     */
    #[JsonProperty('warehouse_to_id')]
    public ?int $warehouseToId;

    /**
     * @param array{
     *   quantity?: ?float,
     *   stockId?: ?int,
     *   warehouseFromId?: ?int,
     *   warehouseToId?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->quantity = $values['quantity'] ?? null;
        $this->stockId = $values['stockId'] ?? null;
        $this->warehouseFromId = $values['warehouseFromId'] ?? null;
        $this->warehouseToId = $values['warehouseToId'] ?? null;
    }
}
