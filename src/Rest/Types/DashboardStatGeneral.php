<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

/**
 * general shop stats
 */
class DashboardStatGeneral extends JsonSerializableType
{
    /**
     * @var ?int $customers customers count
     */
    #[JsonProperty('customers')]
    public ?int $customers;

    /**
     * @var ?int $expiringOrders expiring orders count
     */
    #[JsonProperty('expiring_orders')]
    public ?int $expiringOrders;

    /**
     * @var ?int $openOrders open orders count
     */
    #[JsonProperty('open_orders')]
    public ?int $openOrders;

    /**
     * @var ?int $orders overall orders count
     */
    #[JsonProperty('orders')]
    public ?int $orders;

    /**
     * @var ?int $outOfStockProducts numbers of products with empty stock
     */
    #[JsonProperty('out_of_stock_products')]
    public ?int $outOfStockProducts;

    /**
     * @var ?int $overdueOrders overdue orders count
     */
    #[JsonProperty('overdue_orders')]
    public ?int $overdueOrders;

    /**
     * @var ?int $products products count
     */
    #[JsonProperty('products')]
    public ?int $products;

    /**
     * @var ?int $subscribers subscribers count
     */
    #[JsonProperty('subscribers')]
    public ?int $subscribers;

    /**
     * @param array{
     *   customers?: ?int,
     *   expiringOrders?: ?int,
     *   openOrders?: ?int,
     *   orders?: ?int,
     *   outOfStockProducts?: ?int,
     *   overdueOrders?: ?int,
     *   products?: ?int,
     *   subscribers?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->customers = $values['customers'] ?? null;
        $this->expiringOrders = $values['expiringOrders'] ?? null;
        $this->openOrders = $values['openOrders'] ?? null;
        $this->orders = $values['orders'] ?? null;
        $this->outOfStockProducts = $values['outOfStockProducts'] ?? null;
        $this->overdueOrders = $values['overdueOrders'] ?? null;
        $this->products = $values['products'] ?? null;
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
