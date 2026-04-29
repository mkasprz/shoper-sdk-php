<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

/**
 * A product of order
 */
class OrderProduct extends JsonSerializableType
{
    /**
     * @var ?array<OrderProductChildrenItem> $children an associative array with product bundle children info
     */
    #[JsonProperty('children'), ArrayType([OrderProductChildrenItem::class])]
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
     * array of objects with values entered in particular [options](#tag/Options), type: text
     * (only for products with stocks)
     *
     * @var ?array<OrderProductFileOptionsItem> $fileOptions
     */
    #[JsonProperty('file_options'), ArrayType([OrderProductFileOptionsItem::class])]
    public ?array $fileOptions;

    /**
     * @var ?int $id identifier
     */
    #[JsonProperty('id')]
    public ?int $id;

    /**
     * @var ?OrderProductLoyalty $loyalty an associative array with loyalty exchange data, null if not exchanged
     */
    #[JsonProperty('loyalty')]
    public ?OrderProductLoyalty $loyalty;

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
     * @var int $orderId [order](#tag/Orders) identifier
     */
    #[JsonProperty('order_id')]
    public int $orderId;

    /**
     * @var string $pkwiu PKWiU (product quantifier)
     */
    #[JsonProperty('pkwiu')]
    public string $pkwiu;

    /**
     * @var ?float $price product price
     */
    #[JsonProperty('price')]
    public ?float $price;

    /**
     * [product](#tag/Products) identifier. Value <code>0</code> means the product has never existed
     * in catalog and has been added in different way (eg. using API). Attention: it may point on non-existing
     * or an invalid product. You need to add a main product first before you can add a product variant.
     *
     * @var int $productId
     */
    #[JsonProperty('product_id')]
    public int $productId;

    /**
     * @var float $quantity quantity - if warehouses is enabled field is read only
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
     * [product stock](#tag/ProductStocks) identifier. Value <code>0</code> means the product has never existed
     * in catalog and has been added in different way (eg. using API). Attention: it may point on non-existing
     * or an invalid product. You don't need to add a main product, but you must add a product variant.
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
     * array of objects with values entered in particular [options](#tag/Options), type: text
     * (only for products with stocks)
     *
     * @var ?array<OrderProductTextOptionsItem> $textOptions
     */
    #[JsonProperty('text_options'), ArrayType([OrderProductTextOptionsItem::class])]
    public ?array $textOptions;

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
     * @var ?array<string, OrderProductWarehousesValue> $warehouses if warehouses is enabled it represents source warehouses, shipping warehouses and quantities
     */
    #[JsonProperty('warehouses'), ArrayType(['string' => OrderProductWarehousesValue::class])]
    public ?array $warehouses;

    /**
     * @var ?float $weight product weight
     */
    #[JsonProperty('weight')]
    public ?float $weight;

    /**
     * @param array{
     *   orderId: int,
     *   pkwiu: string,
     *   productId: int,
     *   quantity: float,
     *   children?: ?array<OrderProductChildrenItem>,
     *   code?: ?string,
     *   deliveryTime?: ?float,
     *   deliveryTimeHours?: ?string,
     *   discountPerc?: ?float,
     *   fileOptions?: ?array<OrderProductFileOptionsItem>,
     *   id?: ?int,
     *   loyalty?: ?OrderProductLoyalty,
     *   name?: ?string,
     *   option?: ?string,
     *   price?: ?float,
     *   specialOfferPrice?: ?bool,
     *   stockId?: ?int,
     *   tax?: ?string,
     *   taxValue?: ?float,
     *   textOptions?: ?array<OrderProductTextOptionsItem>,
     *   unit?: ?string,
     *   unitFp?: ?bool,
     *   unitId?: ?int,
     *   warehouses?: ?array<string, OrderProductWarehousesValue>,
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
        $this->fileOptions = $values['fileOptions'] ?? null;
        $this->id = $values['id'] ?? null;
        $this->loyalty = $values['loyalty'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->option = $values['option'] ?? null;
        $this->orderId = $values['orderId'];
        $this->pkwiu = $values['pkwiu'];
        $this->price = $values['price'] ?? null;
        $this->productId = $values['productId'];
        $this->quantity = $values['quantity'];
        $this->specialOfferPrice = $values['specialOfferPrice'] ?? null;
        $this->stockId = $values['stockId'] ?? null;
        $this->tax = $values['tax'] ?? null;
        $this->taxValue = $values['taxValue'] ?? null;
        $this->textOptions = $values['textOptions'] ?? null;
        $this->unit = $values['unit'] ?? null;
        $this->unitFp = $values['unitFp'] ?? null;
        $this->unitId = $values['unitId'] ?? null;
        $this->warehouses = $values['warehouses'] ?? null;
        $this->weight = $values['weight'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
