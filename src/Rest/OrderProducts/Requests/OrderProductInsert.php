<?php

namespace Shoper\Sdk\Rest\OrderProducts\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\OrderProducts\Types\OrderProductInsertChildrenItem;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;
use Shoper\Sdk\Rest\OrderProducts\Types\OrderProductInsertWarehousesValue;

class OrderProductInsert extends JsonSerializableType
{
    /**
     * @var ?array<OrderProductInsertChildrenItem> $children an associative array with product bundle children info
     */
    #[JsonProperty('children'), ArrayType([OrderProductInsertChildrenItem::class])]
    public ?array $children;

    /**
     * product code, up to 100 characters. Inherited from the product stock when `product_id` or `stock_id` is sent;
     * supply it yourself for a free line item.
     *
     * @var ?string $code
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
     * product name, up to 255 characters. Inherited from the product when `product_id` or `stock_id` is sent;
     * supply it yourself for a free line item.
     *
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $option product stock name
     */
    #[JsonProperty('option')]
    public ?string $option;

    /**
     * [order](#tag/Orders) identifier. **Required** and it must point to an existing order - a missing or
     * non-numeric value is rejected with <code>400</code>.
     *
     * @var int $orderId
     */
    #[JsonProperty('order_id')]
    public int $orderId;

    /**
     * PKWiU (product quantifier), up to 20 characters. **Optional** - the resource can be created without this key.
     * When omitted and the line item is linked to a product (`product_id` or `stock_id`), the value is copied from
     * that product; for a free line item it stays empty.
     *
     * @var ?string $pkwiu
     */
    #[JsonProperty('pkwiu')]
    public ?string $pkwiu;

    /**
     * product price. Inherited from the product when `product_id` or `stock_id` is sent (the special offer price is
     * used when one is active and `special_offer_price` is <code>1</code>); supply it yourself for a free line item.
     *
     * @var ?float $price
     */
    #[JsonProperty('price')]
    public ?float $price;

    /**
     * [product](#tag/Products) identifier. **Optional** - send `product_id`, or `stock_id`, or neither of them.
     * When sent it must point to an existing product and it takes precedence over `stock_id`; the line item then
     * inherits from that product every field you did not send. When neither identifier is sent, a free line item
     * is created and <code>0</code> is stored in both `product_id` and `stock_id`. You need to add a main product
     * first before you can add a product variant.
     *
     * @var ?int $productId
     */
    #[JsonProperty('product_id')]
    public ?int $productId;

    /**
     * quantity. **Required**, with one exception: when the warehouse feature is enabled and the line item is linked
     * to a product (`product_id` or `stock_id`), `quantity` must not be sent at all - send the `warehouses` object
     * instead and the quantity is derived from it. Sending both is rejected. The value must be an integer unless the
     * unit is floating point (`unit_fp` = <code>1</code>).
     *
     * @var float $quantity
     */
    #[JsonProperty('quantity')]
    public float $quantity;

    /**
     * should price be affected by a special offer? - only if either `product_id`
     * or `stock_id` is specified - defaults to <code>true</code>
     *
     * @var ?bool $specialOfferPrice
     */
    #[JsonProperty('special_offer_price')]
    public ?bool $specialOfferPrice;

    /**
     * [product stock](#tag/ProductStocks) identifier. **Optional** - an alternative to `product_id` for pointing
     * the line item at a specific product variant. When sent it must point to an existing stock, and it is ignored
     * if `product_id` is sent as well. When neither identifier is sent, a free line item is created and
     * <code>0</code> is stored in both `product_id` and `stock_id`. You don't need to add a main product, but you
     * must add a product variant.
     *
     * @var ?int $stockId
     */
    #[JsonProperty('stock_id')]
    public ?int $stockId;

    /**
     * tax rate name. Inherited from the product when `product_id` or `stock_id` is sent; supply `tax` or `tax_value`
     * yourself for a free line item.
     *
     * @var ?string $tax
     */
    #[JsonProperty('tax')]
    public ?string $tax;

    /**
     * tax rate value. Inherited from the product when `product_id` or `stock_id` is sent; supply `tax_value` or `tax`
     * yourself for a free line item.
     *
     * @var ?float $taxValue
     */
    #[JsonProperty('tax_value')]
    public ?float $taxValue;

    /**
     * measurement unit, up to 50 characters. Inherited from the product when `product_id` or `stock_id` is sent.
     * For a free line item it is required together with `unit_fp`, unless you send `unit_id`.
     *
     * @var ?string $unit
     */
    #[JsonProperty('unit')]
    public ?string $unit;

    /**
     * determines if unit is floating point. Inherited from the product when `product_id` or `stock_id` is sent.
     * For a free line item it is required together with `unit`, unless you send `unit_id`.
     *
     * @var ?bool $unitFp
     */
    #[JsonProperty('unit_fp')]
    public ?bool $unitFp;

    /**
     * [unit](#tag/Units) identifier. Sending it fills `unit` and `unit_fp` from that unit. For a free line item you
     * must send either `unit_id`, or `unit` together with `unit_fp`.
     *
     * @var ?int $unitId
     */
    #[JsonProperty('unit_id')]
    public ?int $unitId;

    /**
     * @var ?array<string, OrderProductInsertWarehousesValue> $warehouses if warehouses is enabled it represents source warehouses, shipping warehouses and quantities
     */
    #[JsonProperty('warehouses'), ArrayType(['string' => OrderProductInsertWarehousesValue::class])]
    public ?array $warehouses;

    /**
     * product weight. Inherited from the product when `product_id` or `stock_id` is sent; defaults to <code>0</code>
     * for a free line item.
     *
     * @var ?float $weight
     */
    #[JsonProperty('weight')]
    public ?float $weight;

    /**
     * @param array{
     *   orderId: int,
     *   quantity: float,
     *   children?: ?array<OrderProductInsertChildrenItem>,
     *   code?: ?string,
     *   deliveryTime?: ?float,
     *   deliveryTimeHours?: ?string,
     *   discountPerc?: ?float,
     *   name?: ?string,
     *   option?: ?string,
     *   pkwiu?: ?string,
     *   price?: ?float,
     *   productId?: ?int,
     *   specialOfferPrice?: ?bool,
     *   stockId?: ?int,
     *   tax?: ?string,
     *   taxValue?: ?float,
     *   unit?: ?string,
     *   unitFp?: ?bool,
     *   unitId?: ?int,
     *   warehouses?: ?array<string, OrderProductInsertWarehousesValue>,
     *   weight?: ?float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->children = $values['children'] ?? null;
        $this->code = $values['code'] ?? null;
        $this->deliveryTime = $values['deliveryTime'] ?? null;
        $this->deliveryTimeHours = $values['deliveryTimeHours'] ?? null;
        $this->discountPerc = $values['discountPerc'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->option = $values['option'] ?? null;
        $this->orderId = $values['orderId'];
        $this->pkwiu = $values['pkwiu'] ?? null;
        $this->price = $values['price'] ?? null;
        $this->productId = $values['productId'] ?? null;
        $this->quantity = $values['quantity'];
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
