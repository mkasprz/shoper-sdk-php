<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class ParcelProductsItem extends JsonSerializableType
{
    /**
     * @var ?string $code product code
     */
    #[JsonProperty('code')]
    public ?string $code;

    /**
     * @var ?string $id reationship identifier
     */
    #[JsonProperty('id')]
    public ?string $id;

    /**
     * @var ?string $name product name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $option option name
     */
    #[JsonProperty('option')]
    public ?string $option;

    /**
     * @var ?int $orderProductId [order product](#tag/OrderProducts) identifier
     */
    #[JsonProperty('order_product_id')]
    public ?int $orderProductId;

    /**
     * @var ?string $parcelId
     */
    #[JsonProperty('parcel_id')]
    public ?string $parcelId;

    /**
     * @var ?string $productId [product](#tag/Products) identifier
     */
    #[JsonProperty('product_id')]
    public ?string $productId;

    /**
     * @var ?string $quantity product quantity
     */
    #[JsonProperty('quantity')]
    public ?string $quantity;

    /**
     * @var ?string $stockId [product stock](#tag/ProductStocks) identifier
     */
    #[JsonProperty('stock_id')]
    public ?string $stockId;

    /**
     * @var ?string $unit measurement unit
     */
    #[JsonProperty('unit')]
    public ?string $unit;

    /**
     * @var ?value-of<ParcelProductsItemUnitFp> $unitFp is the unit floating point?
     */
    #[JsonProperty('unit_fp')]
    public ?string $unitFp;

    /**
     * @var ?string $weight product weight
     */
    #[JsonProperty('weight')]
    public ?string $weight;

    /**
     * @param array{
     *   code?: ?string,
     *   id?: ?string,
     *   name?: ?string,
     *   option?: ?string,
     *   orderProductId?: ?int,
     *   parcelId?: ?string,
     *   productId?: ?string,
     *   quantity?: ?string,
     *   stockId?: ?string,
     *   unit?: ?string,
     *   unitFp?: ?value-of<ParcelProductsItemUnitFp>,
     *   weight?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->code = $values['code'] ?? null;
        $this->id = $values['id'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->option = $values['option'] ?? null;
        $this->orderProductId = $values['orderProductId'] ?? null;
        $this->parcelId = $values['parcelId'] ?? null;
        $this->productId = $values['productId'] ?? null;
        $this->quantity = $values['quantity'] ?? null;
        $this->stockId = $values['stockId'] ?? null;
        $this->unit = $values['unit'] ?? null;
        $this->unitFp = $values['unitFp'] ?? null;
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
