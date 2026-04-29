<?php

namespace Shoper\Sdk\Rest\Parcels\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class ParcelInsertProductsItem extends JsonSerializableType
{
    /**
     * @var ?string $code product code
     */
    #[JsonProperty('code')]
    public ?string $code;

    /**
     * @var ?int $id reationship identifier
     */
    #[JsonProperty('id')]
    public ?int $id;

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
     * @var ?int $productId [product](#tag/Products) identifier
     */
    #[JsonProperty('product_id')]
    public ?int $productId;

    /**
     * @var ?string $quantity product quantity
     */
    #[JsonProperty('quantity')]
    public ?string $quantity;

    /**
     * @var ?int $stockId [product stock](#tag/ProductStocks) identifier
     */
    #[JsonProperty('stock_id')]
    public ?int $stockId;

    /**
     * @var ?string $unit measurement unit
     */
    #[JsonProperty('unit')]
    public ?string $unit;

    /**
     * @var ?bool $unitFp is the unit floating point?
     */
    #[JsonProperty('unit_fp')]
    public ?bool $unitFp;

    /**
     * @var ?float $weight product weight
     */
    #[JsonProperty('weight')]
    public ?float $weight;

    /**
     * @param array{
     *   code?: ?string,
     *   id?: ?int,
     *   name?: ?string,
     *   option?: ?string,
     *   orderProductId?: ?int,
     *   parcelId?: ?string,
     *   productId?: ?int,
     *   quantity?: ?string,
     *   stockId?: ?int,
     *   unit?: ?string,
     *   unitFp?: ?bool,
     *   weight?: ?float,
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
