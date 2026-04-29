<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

/**
 * Product stock entry. Note: the `notifier_queue` field is intentionally stripped
 * from all API responses and is never returned.
 */
class ProductStock extends JsonSerializableType
{
    /**
     * @var ?bool $active is stock active
     */
    #[JsonProperty('active')]
    public ?bool $active;

    /**
     * @var ?ProductStockAdditionalCodes $additionalCodes additional codes
     */
    #[JsonProperty('additional_codes')]
    public ?ProductStockAdditionalCodes $additionalCodes;

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
     * @var ?bool $extended flag determining, if object is a basic stock (0) or extended by options group (1)
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
     * @var ?array<ProductStockOptionsItem> $options an array of stock options
     */
    #[JsonProperty('options'), ArrayType([ProductStockOptionsItem::class])]
    public ?array $options;

    /**
     * @var ?float $package package
     */
    #[JsonProperty('package')]
    public ?float $package;

    /**
     * @var ?float $price a price or price difference to the basic stock price (always greater than 0)
     */
    #[JsonProperty('price')]
    public ?float $price;

    /**
     * @var ?float $priceBuying wholesale price second basic stock type
     */
    #[JsonProperty('price_buying')]
    public ?float $priceBuying;

    /**
     * @var ?float $priceSpecial wholesale price second basic stock type
     */
    #[JsonProperty('price_special')]
    public ?float $priceSpecial;

    /**
     * price calculation method:
     *     <ul>
     *         <li>0 - price from product,</li>
     *         <li>1 - a new stock price,</li>
     *         <li>2 - price will be added to the base price,</li>
     *         <li>3 - price will be subtracted from the base price</li>
     *     </ul>
     *
     *     if `extended` is <code>false</code> the only valid value is <code>1</code>.
     *
     * @var ?int $priceType
     */
    #[JsonProperty('price_type')]
    public ?int $priceType;

    /**
     * second wholesale price calculation type:
     * <ul>
     *     <li>0 - price from product,</li>
     *     <li>1 - new stock price,</li>
     *     <li>2 - price will be added to the base price,</li>
     *     <li>3 - price will be subtracted from the base price</li>
     * </ul>
     *
     * @var ?int $priceTypeSpecial
     */
    #[JsonProperty('price_type_special')]
    public ?int $priceTypeSpecial;

    /**
     * first wholesale price calculation type:
     * <ul>
     *     <li>0 - price from product,</li>
     *     <li>1 - new stock price,</li>
     *     <li>2 - price will be added to the base price,</li>
     *     <li>3 - price will be subtracted from the base price</li>
     * </ul>
     *
     * @var ?int $priceTypeWholesale
     */
    #[JsonProperty('price_type_wholesale')]
    public ?int $priceTypeWholesale;

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
     * @var ?float $specialHistoricalLowestPrice wholesale price second from the last 30 days before the promotion
     */
    #[JsonProperty('special_historical_lowest_price')]
    public ?float $specialHistoricalLowestPrice;

    /**
     * @var ?ProductStockSpecialOffer $specialOffer an associative array with stock special offer information
     */
    #[JsonProperty('special_offer')]
    public ?ProductStockSpecialOffer $specialOffer;

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
     *   additionalCodes?: ?ProductStockAdditionalCodes,
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
     *   options?: ?array<ProductStockOptionsItem>,
     *   package?: ?float,
     *   price?: ?float,
     *   priceBuying?: ?float,
     *   priceSpecial?: ?float,
     *   priceType?: ?int,
     *   priceTypeSpecial?: ?int,
     *   priceTypeWholesale?: ?int,
     *   priceWholesale?: ?float,
     *   productId?: ?int,
     *   sold?: ?float,
     *   specialHistoricalLowestPrice?: ?float,
     *   specialOffer?: ?ProductStockSpecialOffer,
     *   stock?: ?float,
     *   stockId?: ?int,
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
        $this->options = $values['options'] ?? null;
        $this->package = $values['package'] ?? null;
        $this->price = $values['price'] ?? null;
        $this->priceBuying = $values['priceBuying'] ?? null;
        $this->priceSpecial = $values['priceSpecial'] ?? null;
        $this->priceType = $values['priceType'] ?? null;
        $this->priceTypeSpecial = $values['priceTypeSpecial'] ?? null;
        $this->priceTypeWholesale = $values['priceTypeWholesale'] ?? null;
        $this->priceWholesale = $values['priceWholesale'] ?? null;
        $this->productId = $values['productId'] ?? null;
        $this->sold = $values['sold'] ?? null;
        $this->specialHistoricalLowestPrice = $values['specialHistoricalLowestPrice'] ?? null;
        $this->specialOffer = $values['specialOffer'] ?? null;
        $this->stock = $values['stock'] ?? null;
        $this->stockId = $values['stockId'] ?? null;
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
