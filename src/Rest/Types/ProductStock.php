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
     * @var ?value-of<ProductStockActive> $active is stock active
     */
    #[JsonProperty('active')]
    public ?string $active;

    /**
     * @var ?ProductStockAdditionalCodes $additionalCodes additional codes
     */
    #[JsonProperty('additional_codes')]
    public ?ProductStockAdditionalCodes $additionalCodes;

    /**
     * @var ?string $availabilityId stock [availability](#tag/Availabilities) identifier
     */
    #[JsonProperty('availability_id')]
    public ?string $availabilityId;

    /**
     * @var ?string $calculatedAvailabilityId stock [availability](#tag/Availabilities) identifier
     */
    #[JsonProperty('calculated_availability_id')]
    public ?string $calculatedAvailabilityId;

    /**
     * @var ?int $calculationUnitId unit price calculation [identifier](#tag/Units)
     */
    #[JsonProperty('calculation_unit_id')]
    public ?int $calculationUnitId;

    /**
     * @var ?string $calculationUnitRatio unit price calculation ratio
     */
    #[JsonProperty('calculation_unit_ratio')]
    public ?string $calculationUnitRatio;

    /**
     * @var ?string $code stock code
     */
    #[JsonProperty('code')]
    public ?string $code;

    /**
     * @var ?value-of<ProductStockDefault> $default should the stock be selected as default upon selection?
     */
    #[JsonProperty('default')]
    public ?string $default;

    /**
     * @var ?string $deliveryId stock [delivery](#tag/Deliveries) identifier
     */
    #[JsonProperty('delivery_id')]
    public ?string $deliveryId;

    /**
     * @var ?string $ean stock EAN code
     */
    #[JsonProperty('ean')]
    public ?string $ean;

    /**
     * @var ?value-of<ProductStockExtended> $extended flag determining, if object is a basic stock (0) or extended by options group (1)
     */
    #[JsonProperty('extended')]
    public ?string $extended;

    /**
     * @var ?string $gfxId an identifier of product stock photo
     */
    #[JsonProperty('gfx_id')]
    public ?string $gfxId;

    /**
     * @var ?string $historicalLowestPrice price from the last 30 days before the promotion
     */
    #[JsonProperty('historical_lowest_price')]
    public ?string $historicalLowestPrice;

    /**
     * Assoc map {option_id: value_id} - legacy quirk; NOT array of objects.
     * Keys are option identifiers (string), values are option value identifiers (integer).
     * Example: {"1": 5, "3": 12}
     *
     * @var ?array<string, int> $options
     */
    #[JsonProperty('options'), ArrayType(['string' => 'integer'])]
    public ?array $options;

    /**
     * @var ?string $package package
     */
    #[JsonProperty('package')]
    public ?string $package;

    /**
     * @var ?string $price a price or price difference to the basic stock price (always greater than 0)
     */
    #[JsonProperty('price')]
    public ?string $price;

    /**
     * @var ?string $priceBuying wholesale price second basic stock type
     */
    #[JsonProperty('price_buying')]
    public ?string $priceBuying;

    /**
     * @var ?string $priceSpecial wholesale price second basic stock type
     */
    #[JsonProperty('price_special')]
    public ?string $priceSpecial;

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
     * @var ?string $priceType
     */
    #[JsonProperty('price_type')]
    public ?string $priceType;

    /**
     * second wholesale price calculation type:
     * <ul>
     *     <li>0 - price from product,</li>
     *     <li>1 - new stock price,</li>
     *     <li>2 - price will be added to the base price,</li>
     *     <li>3 - price will be subtracted from the base price</li>
     * </ul>
     *
     * @var ?string $priceTypeSpecial
     */
    #[JsonProperty('price_type_special')]
    public ?string $priceTypeSpecial;

    /**
     * first wholesale price calculation type:
     * <ul>
     *     <li>0 - price from product,</li>
     *     <li>1 - new stock price,</li>
     *     <li>2 - price will be added to the base price,</li>
     *     <li>3 - price will be subtracted from the base price</li>
     * </ul>
     *
     * @var ?string $priceTypeWholesale
     */
    #[JsonProperty('price_type_wholesale')]
    public ?string $priceTypeWholesale;

    /**
     * @var ?string $priceWholesale wholesale price first basic stock type
     */
    #[JsonProperty('price_wholesale')]
    public ?string $priceWholesale;

    /**
     * @var ?string $productId [product](#tag/Products) identifier
     */
    #[JsonProperty('product_id')]
    public ?string $productId;

    /**
     * @var ?string $sold sold items count
     */
    #[JsonProperty('sold')]
    public ?string $sold;

    /**
     * @var ?string $specialHistoricalLowestPrice wholesale price second from the last 30 days before the promotion
     */
    #[JsonProperty('special_historical_lowest_price')]
    public ?string $specialHistoricalLowestPrice;

    /**
     * @var ?ProductStockSpecialOffer $specialOffer an associative array with stock special offer information
     */
    #[JsonProperty('special_offer')]
    public ?ProductStockSpecialOffer $specialOffer;

    /**
     * @var ?string $stock stock availability - if warehouses is enabled field is read only and includes the sum of all warehouses
     */
    #[JsonProperty('stock')]
    public ?string $stock;

    /**
     * @var ?string $stockId stock identifier
     */
    #[JsonProperty('stock_id')]
    public ?string $stockId;

    /**
     * @var ?array<string, string> $warehouses if warehouses is enabled it represents stock availability (keys: [warehouse](#tag/Warehouses) identifiers, values: quantity value)
     */
    #[JsonProperty('warehouses'), ArrayType(['string' => 'string'])]
    public ?array $warehouses;

    /**
     * @var ?string $warnLevel stock availability warning level
     */
    #[JsonProperty('warn_level')]
    public ?string $warnLevel;

    /**
     * @var ?string $weight weight
     */
    #[JsonProperty('weight')]
    public ?string $weight;

    /**
     * a method of weight calculation:
     * <ul>
     *     <li>0 - no weight specified,</li>
     *     <li>1 - a new stock weight,</li>
     *     <li>2 - weight will be added to the base weight,</li>
     *     <li>3 - weight will be subtracted from the base weight</li>
     * </ul>
     *
     * @var ?string $weightType
     */
    #[JsonProperty('weight_type')]
    public ?string $weightType;

    /**
     * @var ?string $wholesaleHistoricalLowestPrice wholesale price first from the last 30 days before the promotion
     */
    #[JsonProperty('wholesale_historical_lowest_price')]
    public ?string $wholesaleHistoricalLowestPrice;

    /**
     * @param array{
     *   active?: ?value-of<ProductStockActive>,
     *   additionalCodes?: ?ProductStockAdditionalCodes,
     *   availabilityId?: ?string,
     *   calculatedAvailabilityId?: ?string,
     *   calculationUnitId?: ?int,
     *   calculationUnitRatio?: ?string,
     *   code?: ?string,
     *   default?: ?value-of<ProductStockDefault>,
     *   deliveryId?: ?string,
     *   ean?: ?string,
     *   extended?: ?value-of<ProductStockExtended>,
     *   gfxId?: ?string,
     *   historicalLowestPrice?: ?string,
     *   options?: ?array<string, int>,
     *   package?: ?string,
     *   price?: ?string,
     *   priceBuying?: ?string,
     *   priceSpecial?: ?string,
     *   priceType?: ?string,
     *   priceTypeSpecial?: ?string,
     *   priceTypeWholesale?: ?string,
     *   priceWholesale?: ?string,
     *   productId?: ?string,
     *   sold?: ?string,
     *   specialHistoricalLowestPrice?: ?string,
     *   specialOffer?: ?ProductStockSpecialOffer,
     *   stock?: ?string,
     *   stockId?: ?string,
     *   warehouses?: ?array<string, string>,
     *   warnLevel?: ?string,
     *   weight?: ?string,
     *   weightType?: ?string,
     *   wholesaleHistoricalLowestPrice?: ?string,
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
