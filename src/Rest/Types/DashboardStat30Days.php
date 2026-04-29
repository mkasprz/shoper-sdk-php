<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

/**
 * stats of last 30 days
 */
class DashboardStat30Days extends JsonSerializableType
{
    /**
     * @var ?int $customers customers count
     */
    #[JsonProperty('customers')]
    public ?int $customers;

    /**
     * @var ?float $income orders income
     */
    #[JsonProperty('income')]
    public ?float $income;

    /**
     * @var ?int $newOrders count of new orders
     */
    #[JsonProperty('new_orders')]
    public ?int $newOrders;

    /**
     * @var ?int $openOrders opened orders count
     */
    #[JsonProperty('open_orders')]
    public ?int $openOrders;

    /**
     * @var ?int $orders orders count
     */
    #[JsonProperty('orders')]
    public ?int $orders;

    /**
     * @var ?int $subscribers registered subscribers count
     */
    #[JsonProperty('subscribers')]
    public ?int $subscribers;

    /**
     * @param array{
     *   customers?: ?int,
     *   income?: ?float,
     *   newOrders?: ?int,
     *   openOrders?: ?int,
     *   orders?: ?int,
     *   subscribers?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->customers = $values['customers'] ?? null;
        $this->income = $values['income'] ?? null;
        $this->newOrders = $values['newOrders'] ?? null;
        $this->openOrders = $values['openOrders'] ?? null;
        $this->orders = $values['orders'] ?? null;
        $this->subscribers = $values['subscribers'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
