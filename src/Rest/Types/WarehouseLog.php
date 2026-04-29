<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

/**
 * Warehouses stock logs.
 */
class WarehouseLog extends JsonSerializableType
{
    /**
     * @var ?int $adminId admin identifier
     */
    #[JsonProperty('admin_id')]
    public ?int $adminId;

    /**
     * @var ?int $applicationId application identifier
     */
    #[JsonProperty('application_id')]
    public ?int $applicationId;

    /**
     * @var ?string $date date of the event
     */
    #[JsonProperty('date')]
    public ?string $date;

    /**
     * @var ?int $logId log identifier
     */
    #[JsonProperty('log_id')]
    public ?int $logId;

    /**
     * @var ?int $orderId order identifier
     */
    #[JsonProperty('order_id')]
    public ?int $orderId;

    /**
     * @var ?float $quantity quantity of change
     */
    #[JsonProperty('quantity')]
    public ?float $quantity;

    /**
     * @var ?int $relocationId relocation identifier
     */
    #[JsonProperty('relocation_id')]
    public ?int $relocationId;

    /**
     * @var ?int $stockId stock identifier
     */
    #[JsonProperty('stock_id')]
    public ?int $stockId;

    /**
     * @var ?float $sum sum after change
     */
    #[JsonProperty('sum')]
    public ?float $sum;

    /**
     * @var ?int $warehouseId warehouse identifier
     */
    #[JsonProperty('warehouse_id')]
    public ?int $warehouseId;

    /**
     * @param array{
     *   adminId?: ?int,
     *   applicationId?: ?int,
     *   date?: ?string,
     *   logId?: ?int,
     *   orderId?: ?int,
     *   quantity?: ?float,
     *   relocationId?: ?int,
     *   stockId?: ?int,
     *   sum?: ?float,
     *   warehouseId?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->adminId = $values['adminId'] ?? null;
        $this->applicationId = $values['applicationId'] ?? null;
        $this->date = $values['date'] ?? null;
        $this->logId = $values['logId'] ?? null;
        $this->orderId = $values['orderId'] ?? null;
        $this->quantity = $values['quantity'] ?? null;
        $this->relocationId = $values['relocationId'] ?? null;
        $this->stockId = $values['stockId'] ?? null;
        $this->sum = $values['sum'] ?? null;
        $this->warehouseId = $values['warehouseId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
