<?php

namespace Shoper\Sdk\Rest\Shippings\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;
use Shoper\Sdk\Rest\Shippings\Types\ShippingUpdateRangesItem;
use Shoper\Sdk\Rest\Shippings\Types\ShippingUpdateTranslationsValue;

class ShippingUpdate extends JsonSerializableType
{
    /**
     * @var ?bool $active is shipping method active
     */
    #[JsonProperty('active')]
    public ?bool $active;

    /**
     * @var ?float $cost fixed delivery cost or <code>0</code> if weight/contents-dependent
     */
    #[JsonProperty('cost')]
    public ?float $cost;

    /**
     * an array of <a href="http://userpage.chemie.fu-berlin.de/diverse/doc/ISO_3166.html">country codes</a>
     * supported by this shipping method
     *
     * @var ?array<string> $countries
     */
    #[JsonProperty('countries'), ArrayType(['string'])]
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
     * @var ?int $dependOnW
     */
    #[JsonProperty('depend_on_w')]
    public ?int $dependOnW;

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
     * @var ?float $freeShipping a minimum value of order for free delivery or <code>if there's no free shipping option
     */
    #[JsonProperty('free_shipping')]
    public ?float $freeShipping;

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
     * @var ?bool $isDefault is default shipping method?
     */
    #[JsonProperty('is_default')]
    public ?bool $isDefault;

    /**
     * @var ?int $langId [language](#tag/Languages) language identifier
     */
    #[JsonProperty('lang_id')]
    public ?int $langId;

    /**
     * @var ?float $maxCost max order amount supported by this shipping method or <code>0</code> if unrestricted
     */
    #[JsonProperty('max_cost')]
    public ?float $maxCost;

    /**
     * @var ?float $maxWeight max weight of products the shipping supports
     */
    #[JsonProperty('max_weight')]
    public ?float $maxWeight;

    /**
     * @var ?float $minCost min order amount supported by this shipping method or <code>0</code> if unrestricted
     */
    #[JsonProperty('min_cost')]
    public ?float $minCost;

    /**
     * @var ?float $minWeight minimal weight of products required for the shipping
     */
    #[JsonProperty('min_weight')]
    public ?float $minWeight;

    /**
     * @var ?string $name shipping name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?float $order priority used to calculate display order
     */
    #[JsonProperty('order')]
    public ?float $order;

    /**
     * @var ?array<int> $payments an array with identifiers of [payments](#tag/Payments) assigned to this shipping
     */
    #[JsonProperty('payments'), ArrayType(['integer'])]
    public ?array $payments;

    /**
     * @var ?float $pkwiu PKWiU (product quantifier) of shipping
     */
    #[JsonProperty('pkwiu')]
    public ?float $pkwiu;

    /**
     * @var ?array<ShippingUpdateRangesItem> $ranges an array of weight/price ranges
     */
    #[JsonProperty('ranges'), ArrayType([ShippingUpdateRangesItem::class])]
    public ?array $ranges;

    /**
     * @var ?int $taxId [tax](#tag/Taxes) identifier
     */
    #[JsonProperty('tax_id')]
    public ?int $taxId;

    /**
     * @var ?array<string, ShippingUpdateTranslationsValue> $translations an associative array with object translations
     */
    #[JsonProperty('translations'), ArrayType(['string' => ShippingUpdateTranslationsValue::class])]
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
     * @var ?int $zoneId [zone](#tag/Zones) identifier
     */
    #[JsonProperty('zone_id')]
    public ?int $zoneId;

    /**
     * @param array{
     *   active?: ?bool,
     *   cost?: ?float,
     *   countries?: ?array<string>,
     *   dependOnW?: ?int,
     *   description?: ?string,
     *   engine?: ?string,
     *   freeShipping?: ?float,
     *   gauges?: ?array<int>,
     *   isDefault?: ?bool,
     *   langId?: ?int,
     *   maxCost?: ?float,
     *   maxWeight?: ?float,
     *   minCost?: ?float,
     *   minWeight?: ?float,
     *   name?: ?string,
     *   order?: ?float,
     *   payments?: ?array<int>,
     *   pkwiu?: ?float,
     *   ranges?: ?array<ShippingUpdateRangesItem>,
     *   taxId?: ?int,
     *   translations?: ?array<string, ShippingUpdateTranslationsValue>,
     *   url?: ?string,
     *   vendorDescription?: ?string,
     *   warehouses?: ?array<int>,
     *   zoneId?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
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
        $this->payments = $values['payments'] ?? null;
        $this->pkwiu = $values['pkwiu'] ?? null;
        $this->ranges = $values['ranges'] ?? null;
        $this->taxId = $values['taxId'] ?? null;
        $this->translations = $values['translations'] ?? null;
        $this->url = $values['url'] ?? null;
        $this->vendorDescription = $values['vendorDescription'] ?? null;
        $this->warehouses = $values['warehouses'] ?? null;
        $this->zoneId = $values['zoneId'] ?? null;
    }
}
