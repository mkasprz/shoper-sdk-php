<?php

namespace Shoper\Sdk\Rest\Products\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

/**
 * an associative array with base stock info
 */
class ProductInsertStock extends JsonSerializableType
{
    /**
     * @var ?bool $active is stock active?
     */
    #[JsonProperty('active')]
    public ?bool $active;

    /**
     * @var ?ProductInsertStockAdditionalCodes $additionalCodes additional codes
     */
    #[JsonProperty('additional_codes')]
    public ?ProductInsertStockAdditionalCodes $additionalCodes;

    /**
     * @var ?int $availabilityId stock [availability](#tag/Availabilities) identifier
     */
    #[JsonProperty('availability_id')]
    public ?int $availabilityId;

    /**
     * @var ?int $calculatedAvailabilityId stock [availability](#tag/Availabilities) identifier
     */
    #[JsonProperty('calculated_availability_id')]
    public ?int $calculatedAvailabilityId;

    /**
     * @var ?int $calculationUnitId unit price calculation [identifier](#tag/Units)
     */
    #[JsonProperty('calculation_unit_id')]
    public ?int $calculationUnitId;

    /**
     * @var ?float $calculationUnitRatio unit price calculation ratio
     */
    #[JsonProperty('calculation_unit_ratio')]
    public ?float $calculationUnitRatio;

    /**
     * @var ?string $code stock code
     */
    #[JsonProperty('code')]
    public ?string $code;

    /**
     * @var ?bool $default should the stock be selected as default upon selection?
     */
    #[JsonProperty('default')]
    public ?bool $default;

    /**
     * @var ?int $deliveryId stock [delivery](#tag/Deliveries) identifier
     */
    #[JsonProperty('delivery_id')]
    public ?int $deliveryId;

    /**
     * @var ?string $ean stock EAN code
     */
    #[JsonProperty('ean')]
    public ?string $ean;

    /**
     * @var ?bool $extended if enabled, object stock is extended by options group; if disabled: basic stock
     */
    #[JsonProperty('extended')]
    public ?bool $extended;

    /**
     * @var ?int $gfxId an identifier of product stock photo
     */
    #[JsonProperty('gfx_id')]
    public ?int $gfxId;

    /**
     * @var ?float $historicalLowestPrice price from the last 30 days before the promotion
     */
    #[JsonProperty('historical_lowest_price')]
    public ?float $historicalLowestPrice;

    /**
     * @var ?float $package package
     */
    #[JsonProperty('package')]
    public ?float $package;

    /**
     * @var ?float $price a price or its difference to the basic stock price (always greater than 0)
     */
    #[JsonProperty('price')]
    public ?float $price;

    /**
     * @var ?float $priceSpecial wholesale price second basic stock type
     */
    #[JsonProperty('price_special')]
    public ?float $priceSpecial;

    /**
     * @var ?float $priceWholesale wholesale price first basic stock type
     */
    #[JsonProperty('price_wholesale')]
    public ?float $priceWholesale;

    /**
     * @var ?int $productId [product](#tag/Products) identifier
     */
    #[JsonProperty('product_id')]
    public ?int $productId;

    /**
     * @var ?float $sold sold items count
     */
    #[JsonProperty('sold')]
    public ?float $sold;

    /**
     * @var ?float $soldRelative a sold items difference the shop value should be altered. If present, `sold` is ignored
     */
    #[JsonProperty('sold_relative')]
    public ?float $soldRelative;

    /**
     * @var ?float $specialHistoricalLowestPrice wholesale price second from the last 30 days before the promotion
     */
    #[JsonProperty('special_historical_lowest_price')]
    public ?float $specialHistoricalLowestPrice;

    /**
     * @var ?float $stock stock availability - if warehouses is enabled field is read only and includes the sum of all warehouses
     */
    #[JsonProperty('stock')]
    public ?float $stock;

    /**
     * @var ?int $stockId stock identifier
     */
    #[JsonProperty('stock_id')]
    public ?int $stockId;

    /**
     * @var ?float $stockRelative a stock difference the shop value should be altered. If present, `stock` is ignored
     */
    #[JsonProperty('stock_relative')]
    public ?float $stockRelative;

    /**
     * @var ?array<string, string> $warehouses if warehouses is enabled it represents stock availability (keys: [warehouse](#tag/Warehouses) identifiers, values: quantity value)
     */
    #[JsonProperty('warehouses'), ArrayType(['string' => 'string'])]
    public ?array $warehouses;

    /**
     * @var ?float $warnLevel stock availability warning level
     */
    #[JsonProperty('warn_level')]
    public ?float $warnLevel;

    /**
     * @var ?float $weight weight
     */
    #[JsonProperty('weight')]
    public ?float $weight;

    /**
     * a method of weight calculation:
     * <ul>
     *     <li>0 - no weight specified,</li>
     *     <li>1 - a new stock weight,</li>
     *     <li>2 - weight will be added to the base weight,</li>
     *     <li>3 - weight will be subtracted from the base weight</li>
     * </ul>
     *
     * @var ?int $weightType
     */
    #[JsonProperty('weight_type')]
    public ?int $weightType;

    /**
     * @var ?float $wholesaleHistoricalLowestPrice wholesale price first from the last 30 days before the promotion
     */
    #[JsonProperty('wholesale_historical_lowest_price')]
    public ?float $wholesaleHistoricalLowestPrice;

    /**
     * @param array{
     *   active?: ?bool,
     *   additionalCodes?: ?ProductInsertStockAdditionalCodes,
     *   availabilityId?: ?int,
     *   calculatedAvailabilityId?: ?int,
     *   calculationUnitId?: ?int,
     *   calculationUnitRatio?: ?float,
     *   code?: ?string,
     *   default?: ?bool,
     *   deliveryId?: ?int,
     *   ean?: ?string,
     *   extended?: ?bool,
     *   gfxId?: ?int,
     *   historicalLowestPrice?: ?float,
     *   package?: ?float,
     *   price?: ?float,
     *   priceSpecial?: ?float,
     *   priceWholesale?: ?float,
     *   productId?: ?int,
     *   sold?: ?float,
     *   soldRelative?: ?float,
     *   specialHistoricalLowestPrice?: ?float,
     *   stock?: ?float,
     *   stockId?: ?int,
     *   stockRelative?: ?float,
     *   warehouses?: ?array<string, string>,
     *   warnLevel?: ?float,
     *   weight?: ?float,
     *   weightType?: ?int,
     *   wholesaleHistoricalLowestPrice?: ?float,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->active = $values['active'] ?? null;
        $this->additionalCodes = $values['additionalCodes'] ?? null;
        $this->availabilityId = $values['availabilityId'] ?? null;
        $this->calculatedAvailabilityId = $values['calculatedAvailabilityId'] ?? null;
        $this->calculationUnitId = $values['calculationUnitId'] ?? null;
        $this->calculationUnitRatio = $values['calculationUnitRatio'] ?? null;
        $this->code = $values['code'] ?? null;
        $this->default = $values['default'] ?? null;
        $this->deliveryId = $values['deliveryId'] ?? null;
        $this->ean = $values['ean'] ?? null;
        $this->extended = $values['extended'] ?? null;
        $this->gfxId = $values['gfxId'] ?? null;
        $this->historicalLowestPrice = $values['historicalLowestPrice'] ?? null;
        $this->package = $values['package'] ?? null;
        $this->price = $values['price'] ?? null;
        $this->priceSpecial = $values['priceSpecial'] ?? null;
        $this->priceWholesale = $values['priceWholesale'] ?? null;
        $this->productId = $values['productId'] ?? null;
        $this->sold = $values['sold'] ?? null;
        $this->soldRelative = $values['soldRelative'] ?? null;
        $this->specialHistoricalLowestPrice = $values['specialHistoricalLowestPrice'] ?? null;
        $this->stock = $values['stock'] ?? null;
        $this->stockId = $values['stockId'] ?? null;
        $this->stockRelative = $values['stockRelative'] ?? null;
        $this->warehouses = $values['warehouses'] ?? null;
        $this->warnLevel = $values['warnLevel'] ?? null;
        $this->weight = $values['weight'] ?? null;
        $this->weightType = $values['weightType'] ?? null;
        $this->wholesaleHistoricalLowestPrice = $values['wholesaleHistoricalLowestPrice'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
