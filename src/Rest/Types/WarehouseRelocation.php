<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

/**
 * Warehouses relocations.
 */
class WarehouseRelocation extends JsonSerializableType
{
    /**
     * @var ?string $quantity quantity to relocate
     */
    #[JsonProperty('quantity')]
    public ?string $quantity;

    /**
     * @var ?int $relocationId relocation identifier
     */
    #[JsonProperty('relocation_id')]
    public ?int $relocationId;

    /**
     * @var ?string $stockId stock identifier
     */
    #[JsonProperty('stock_id')]
    public ?string $stockId;

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
     *   quantity?: ?string,
     *   relocationId?: ?int,
     *   stockId?: ?string,
     *   warehouseFromId?: ?int,
     *   warehouseToId?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->quantity = $values['quantity'] ?? null;
        $this->relocationId = $values['relocationId'] ?? null;
        $this->stockId = $values['stockId'] ?? null;
        $this->warehouseFromId = $values['warehouseFromId'] ?? null;
        $this->warehouseToId = $values['warehouseToId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
