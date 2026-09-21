<?php

namespace Shoper\Sdk\Rest\OrderProducts\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\OrderProducts\Types\OrderProductUpdateChildrenItem;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;
use Shoper\Sdk\Rest\OrderProducts\Types\OrderProductUpdateWarehousesValue;

class OrderProductUpdate extends JsonSerializableType
{
    /**
     * @var ?array<OrderProductUpdateChildrenItem> $children an associative array with product bundle children info
     */
    #[JsonProperty('children'), ArrayType([OrderProductUpdateChildrenItem::class])]
    public ?array $children;

    /**
     * @var ?string $code product code
     */
    #[JsonProperty('code')]
    public ?string $code;

    /**
     * @var ?float $deliveryTime **Deprecated since 5.20.14.** delivery time in days
     */
    #[JsonProperty('delivery_time')]
    public ?float $deliveryTime;

    /**
     * @var ?string $deliveryTimeHours delivery time in hours
     */
    #[JsonProperty('delivery_time_hours')]
    public ?string $deliveryTimeHours;

    /**
     * @var ?float $discountPerc percent of discount
     */
    #[JsonProperty('discount_perc')]
    public ?float $discountPerc;

    /**
     * @var ?string $name product name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $option product stock name
     */
    #[JsonProperty('option')]
    public ?string $option;

    /**
     * @var ?int $orderId [order](#tag/Orders) identifier. **Ignored on update** - a line item cannot be moved to another order.
     */
    #[JsonProperty('order_id')]
    public ?int $orderId;

    /**
     * @var ?string $pkwiu PKWiU (product quantifier), up to 20 characters. Optional - omitting it keeps the current value.
     */
    #[JsonProperty('pkwiu')]
    public ?string $pkwiu;

    /**
     * @var ?float $price product price
     */
    #[JsonProperty('price')]
    public ?float $price;

    /**
     * [product](#tag/Products) identifier. **Ignored on update** - the catalog product behind an existing line item
     * cannot be changed. Delete the line item and create a new one instead.
     *
     * @var ?int $productId
     */
    #[JsonProperty('product_id')]
    public ?int $productId;

    /**
     * quantity. Optional - omitting it keeps the current value. When the warehouse feature is enabled and the line
     * item is distributed across warehouses, `quantity` must not be sent at all - update the `warehouses` object
     * instead and the quantity is derived from it. Sending both is rejected.
     *
     * @var ?float $quantity
     */
    #[JsonProperty('quantity')]
    public ?float $quantity;

    /**
     * should price be affected by a special offer? - only if either `product_id`
     * or `stock_id` is specified - defaults to <code>true</code>
     *
     * @var ?bool $specialOfferPrice
     */
    #[JsonProperty('special_offer_price')]
    public ?bool $specialOfferPrice;

    /**
     * [product stock](#tag/ProductStocks) identifier. **Ignored on update** - the product variant behind an existing
     * line item cannot be changed. Delete the line item and create a new one instead.
     *
     * @var ?int $stockId
     */
    #[JsonProperty('stock_id')]
    public ?int $stockId;

    /**
     * @var ?string $tax tax rate name
     */
    #[JsonProperty('tax')]
    public ?string $tax;

    /**
     * @var ?float $taxValue tax rate value
     */
    #[JsonProperty('tax_value')]
    public ?float $taxValue;

    /**
     * @var ?string $unit measurement unit
     */
    #[JsonProperty('unit')]
    public ?string $unit;

    /**
     * @var ?bool $unitFp determines if unit is floating point
     */
    #[JsonProperty('unit_fp')]
    public ?bool $unitFp;

    /**
     * @var ?int $unitId [unit](#tag/Units) identifier
     */
    #[JsonProperty('unit_id')]
    public ?int $unitId;

    /**
     * @var ?array<string, OrderProductUpdateWarehousesValue> $warehouses if warehouses is enabled it represents source warehouses, shipping warehouses and quantities
     */
    #[JsonProperty('warehouses'), ArrayType(['string' => OrderProductUpdateWarehousesValue::class])]
    public ?array $warehouses;

    /**
     * @var ?float $weight product weight
     */
    #[JsonProperty('weight')]
    public ?float $weight;

    /**
     * @param array{
     *   children?: ?array<OrderProductUpdateChildrenItem>,
     *   code?: ?string,
     *   deliveryTime?: ?float,
     *   deliveryTimeHours?: ?string,
     *   discountPerc?: ?float,
     *   name?: ?string,
     *   option?: ?string,
     *   orderId?: ?int,
     *   pkwiu?: ?string,
     *   price?: ?float,
     *   productId?: ?int,
     *   quantity?: ?float,
     *   specialOfferPrice?: ?bool,
     *   stockId?: ?int,
     *   tax?: ?string,
     *   taxValue?: ?float,
     *   unit?: ?string,
     *   unitFp?: ?bool,
     *   unitId?: ?int,
     *   warehouses?: ?array<string, OrderProductUpdateWarehousesValue>,
     *   weight?: ?float,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->children = $values['children'] ?? null;
        $this->code = $values['code'] ?? null;
        $this->deliveryTime = $values['deliveryTime'] ?? null;
        $this->deliveryTimeHours = $values['deliveryTimeHours'] ?? null;
        $this->discountPerc = $values['discountPerc'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->option = $values['option'] ?? null;
        $this->orderId = $values['orderId'] ?? null;
        $this->pkwiu = $values['pkwiu'] ?? null;
        $this->price = $values['price'] ?? null;
        $this->productId = $values['productId'] ?? null;
        $this->quantity = $values['quantity'] ?? null;
        $this->specialOfferPrice = $values['specialOfferPrice'] ?? null;
        $this->stockId = $values['stockId'] ?? null;
        $this->tax = $values['tax'] ?? null;
        $this->taxValue = $values['taxValue'] ?? null;
        $this->unit = $values['unit'] ?? null;
        $this->unitFp = $values['unitFp'] ?? null;
        $this->unitId = $values['unitId'] ?? null;
        $this->warehouses = $values['warehouses'] ?? null;
        $this->weight = $values['weight'] ?? null;
    }
}
