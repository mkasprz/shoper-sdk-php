<?php

namespace Shoper\Sdk\Rest\OrderProducts\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

class OrderProductUpdateChildrenItem extends JsonSerializableType
{
    /**
     * @var int $bundleChildId bundle child identifier
     */
    #[JsonProperty('bundle_child_id')]
    public int $bundleChildId;

    /**
     * @var ?string $code product code
     */
    #[JsonProperty('code')]
    public ?string $code;

    /**
     * @var ?float $deliveryTime delivery time in days
     */
    #[JsonProperty('delivery_time')]
    public ?float $deliveryTime;

    /**
     * @var ?float $discountPerc percent of discount
     */
    #[JsonProperty('discount_perc')]
    public ?float $discountPerc;

    /**
     * array of objects with values entered in particular [options](#tag/Options), type: text
     * (only for products with stocks)
     *
     * @var ?array<OrderProductUpdateChildrenItemFileOptionsItem> $fileOptions
     */
    #[JsonProperty('file_options'), ArrayType([OrderProductUpdateChildrenItemFileOptionsItem::class])]
    public ?array $fileOptions;

    /**
     * @var ?int $id order product identifier
     */
    #[JsonProperty('id')]
    public ?int $id;

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
     * @var ?int $orderId [order](#tag/Orders) identifier
     */
    #[JsonProperty('order_id')]
    public ?int $orderId;

    /**
     * @var ?string $pkwiu
     */
    #[JsonProperty('pkwiu')]
    public ?string $pkwiu;

    /**
     * @var ?float $price child price
     */
    #[JsonProperty('price')]
    public ?float $price;

    /**
     * @var ?float $quantity quantity
     */
    #[JsonProperty('quantity')]
    public ?float $quantity;

    /**
     * [product stock](#tag/ProductStocks) identifier. Value <code>0</code> means the product has never existed
     * in catalog and has been added in different way (eg. using API). Attention: it may point on non-existing
     * or an invalid product
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
     * @var ?array<OrderProductUpdateChildrenItemTextOptionsItem> $textOptions
     */
    #[JsonProperty('text_options'), ArrayType([OrderProductUpdateChildrenItemTextOptionsItem::class])]
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
     * @var ?float $weight product weight
     */
    #[JsonProperty('weight')]
    public ?float $weight;

    /**
     * @param array{
     *   bundleChildId: int,
     *   code?: ?string,
     *   deliveryTime?: ?float,
     *   discountPerc?: ?float,
     *   fileOptions?: ?array<OrderProductUpdateChildrenItemFileOptionsItem>,
     *   id?: ?int,
     *   name?: ?string,
     *   option?: ?string,
     *   orderId?: ?int,
     *   pkwiu?: ?string,
     *   price?: ?float,
     *   quantity?: ?float,
     *   stockId?: ?int,
     *   tax?: ?string,
     *   taxValue?: ?float,
     *   textOptions?: ?array<OrderProductUpdateChildrenItemTextOptionsItem>,
     *   unit?: ?string,
     *   unitFp?: ?bool,
     *   unitId?: ?int,
     *   weight?: ?float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->bundleChildId = $values['bundleChildId'];
        $this->code = $values['code'] ?? null;
        $this->deliveryTime = $values['deliveryTime'] ?? null;
        $this->discountPerc = $values['discountPerc'] ?? null;
        $this->fileOptions = $values['fileOptions'] ?? null;
        $this->id = $values['id'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->option = $values['option'] ?? null;
        $this->orderId = $values['orderId'] ?? null;
        $this->pkwiu = $values['pkwiu'] ?? null;
        $this->price = $values['price'] ?? null;
        $this->quantity = $values['quantity'] ?? null;
        $this->stockId = $values['stockId'] ?? null;
        $this->tax = $values['tax'] ?? null;
        $this->taxValue = $values['taxValue'] ?? null;
        $this->textOptions = $values['textOptions'] ?? null;
        $this->unit = $values['unit'] ?? null;
        $this->unitFp = $values['unitFp'] ?? null;
        $this->unitId = $values['unitId'] ?? null;
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
