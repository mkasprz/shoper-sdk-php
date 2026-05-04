<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

/**
 * Defined shipping methods
 */
class Shipping extends JsonSerializableType
{
    /**
     * @var ?value-of<ShippingActive> $active is shipping method active
     */
    #[JsonProperty('active')]
    public ?string $active;

    /**
     * @var ?string $cost fixed delivery cost or <code>0</code> if weight/contents-dependent
     */
    #[JsonProperty('cost')]
    public ?string $cost;

    /**
     * an array of <a href="http://userpage.chemie.fu-berlin.de/diverse/doc/ISO_3166.html">country codes</a>
     * supported by this shipping method
     *
     * @var ?array<string, string> $countries
     */
    #[JsonProperty('countries'), ArrayType(['string' => 'string'])]
    public ?array $countries;

    /**
     * is the shipping dependent on:
     * <ul>
     *     <li>0 - shipping is independent,</li>
     *     <li>1 - weight,</li>
     *     <li>2 - order amount,</li>
     *     <li>3 - products quantity,</li>
     *     <li data-since="5.7.0">4 - package gauge weight</li>
     * </ul>
     *
     * @var ?string $dependOnW
     */
    #[JsonProperty('depend_on_w')]
    public ?string $dependOnW;

    /**
     * @var ?string $description shipping description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * engine used by shipping method. Available values:
     * <ul>
     *     <li>personal</li>
     *     <li>pickupPoint</li>
     *     <li>apaczka</li>
     *     <li>pocztaPolska</li>
     *     <li>paczkomaty</li>
     * </ul>
     *
     * @var ?string $engine
     */
    #[JsonProperty('engine')]
    public ?string $engine;

    /**
     * @var ?string $freeShipping a minimum value of order for free delivery or <code>if there's no free shipping option
     */
    #[JsonProperty('free_shipping')]
    public ?string $freeShipping;

    /**
     * <ul>
     *     <li>if <code>null</code> - all available [gauges](#tag/Gauges) are available for this shipping method,</li>
     *     <li><code>0</code> - associated with non-existing  [gauges](#tag/Gauges),</li>
     *     <li>an array of [gauges](#tag/Gauges) identifiers supported by this shipping method</li>
     *  </ul>
     *
     * @var ?array<int> $gauges
     */
    #[JsonProperty('gauges'), ArrayType(['integer'])]
    public ?array $gauges;

    /**
     * @var ?value-of<ShippingIsDefault> $isDefault is default shipping method?
     */
    #[JsonProperty('is_default')]
    public ?string $isDefault;

    /**
     * @var ?string $langId [language](#tag/Languages) language identifier
     */
    #[JsonProperty('lang_id')]
    public ?string $langId;

    /**
     * @var ?string $maxCost max order amount supported by this shipping method or <code>0</code> if unrestricted
     */
    #[JsonProperty('max_cost')]
    public ?string $maxCost;

    /**
     * @var ?string $maxWeight max weight of products the shipping supports
     */
    #[JsonProperty('max_weight')]
    public ?string $maxWeight;

    /**
     * @var ?string $minCost min order amount supported by this shipping method or <code>0</code> if unrestricted
     */
    #[JsonProperty('min_cost')]
    public ?string $minCost;

    /**
     * @var ?string $minWeight minimal weight of products required for the shipping
     */
    #[JsonProperty('min_weight')]
    public ?string $minWeight;

    /**
     * @var ?string $name shipping name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $order priority used to calculate display order
     */
    #[JsonProperty('order')]
    public ?string $order;

    /**
     * @var array<ShippingPaymentsItem> $payments [payments](#tag/Payments) assigned to this shipping
     */
    #[JsonProperty('payments'), ArrayType([ShippingPaymentsItem::class])]
    public array $payments;

    /**
     * @var ?string $pkwiu PKWiU (product quantifier) of shipping
     */
    #[JsonProperty('pkwiu')]
    public ?string $pkwiu;

    /**
     * @var ?array<ShippingRangesItem> $ranges an array of weight/price ranges
     */
    #[JsonProperty('ranges'), ArrayType([ShippingRangesItem::class])]
    public ?array $ranges;

    /**
     * @var ?string $shippingId shipping identifier
     */
    #[JsonProperty('shipping_id')]
    public ?string $shippingId;

    /**
     * @var string $taxId [tax](#tag/Taxes) identifier
     */
    #[JsonProperty('tax_id')]
    public string $taxId;

    /**
     * @var ?array<string, ShippingTranslationsValue> $translations an associative array with object translations
     */
    #[JsonProperty('translations'), ArrayType(['string' => ShippingTranslationsValue::class])]
    public ?array $translations;

    /**
     * @var ?string $url parcel tracking URL
     */
    #[JsonProperty('url')]
    public ?string $url;

    /**
     * @var ?string $vendorDescription internal shipping vendor description
     */
    #[JsonProperty('vendor_description')]
    public ?string $vendorDescription;

    /**
     * @var ?array<int> $warehouses Warehouses identifiers
     */
    #[JsonProperty('warehouses'), ArrayType(['integer'])]
    public ?array $warehouses;

    /**
     * @var string $zoneId [zone](#tag/Zones) identifier
     */
    #[JsonProperty('zone_id')]
    public string $zoneId;

    /**
     * @param array{
     *   payments: array<ShippingPaymentsItem>,
     *   taxId: string,
     *   zoneId: string,
     *   active?: ?value-of<ShippingActive>,
     *   cost?: ?string,
     *   countries?: ?array<string, string>,
     *   dependOnW?: ?string,
     *   description?: ?string,
     *   engine?: ?string,
     *   freeShipping?: ?string,
     *   gauges?: ?array<int>,
     *   isDefault?: ?value-of<ShippingIsDefault>,
     *   langId?: ?string,
     *   maxCost?: ?string,
     *   maxWeight?: ?string,
     *   minCost?: ?string,
     *   minWeight?: ?string,
     *   name?: ?string,
     *   order?: ?string,
     *   pkwiu?: ?string,
     *   ranges?: ?array<ShippingRangesItem>,
     *   shippingId?: ?string,
     *   translations?: ?array<string, ShippingTranslationsValue>,
     *   url?: ?string,
     *   vendorDescription?: ?string,
     *   warehouses?: ?array<int>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->active = $values['active'] ?? null;
        $this->cost = $values['cost'] ?? null;
        $this->countries = $values['countries'] ?? null;
        $this->dependOnW = $values['dependOnW'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->engine = $values['engine'] ?? null;
        $this->freeShipping = $values['freeShipping'] ?? null;
        $this->gauges = $values['gauges'] ?? null;
        $this->isDefault = $values['isDefault'] ?? null;
        $this->langId = $values['langId'] ?? null;
        $this->maxCost = $values['maxCost'] ?? null;
        $this->maxWeight = $values['maxWeight'] ?? null;
        $this->minCost = $values['minCost'] ?? null;
        $this->minWeight = $values['minWeight'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->order = $values['order'] ?? null;
        $this->payments = $values['payments'];
        $this->pkwiu = $values['pkwiu'] ?? null;
        $this->ranges = $values['ranges'] ?? null;
        $this->shippingId = $values['shippingId'] ?? null;
        $this->taxId = $values['taxId'];
        $this->translations = $values['translations'] ?? null;
        $this->url = $values['url'] ?? null;
        $this->vendorDescription = $values['vendorDescription'] ?? null;
        $this->warehouses = $values['warehouses'] ?? null;
        $this->zoneId = $values['zoneId'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
