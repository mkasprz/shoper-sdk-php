<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

/**
 * Warehouse resource (multi-warehouse mode, feature `warehouses` enabled).
 */
class Warehouse extends JsonSerializableType
{
    /**
     * @var ?bool $acceptsReturns the warehouse accepts goods sent back by customers
     */
    #[JsonProperty('accepts_returns')]
    public ?bool $acceptsReturns;

    /**
     * @var ?bool $active active
     */
    #[JsonProperty('active')]
    public ?bool $active;

    /**
     * @var ?string $city contact details - city
     */
    #[JsonProperty('city')]
    public ?string $city;

    /**
     * @var ?string $companyName contact details - company name
     */
    #[JsonProperty('company_name')]
    public ?string $companyName;

    /**
     * @var ?string $country contact details - country
     */
    #[JsonProperty('country')]
    public ?string $country;

    /**
     * @var ?string $countryCode contact details - country code
     */
    #[JsonProperty('country_code')]
    public ?string $countryCode;

    /**
     * @var ?bool $default default warehouse
     */
    #[JsonProperty('default')]
    public ?bool $default;

    /**
     * @var ?string $email contact details - phone
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var ?bool $fulfilment accepts goods from other warehouses
     */
    #[JsonProperty('fulfilment')]
    public ?bool $fulfilment;

    /**
     * @var string $name warehouse name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?int $online is the warehouse a warehouse shipping? ( use shipments_to_customer instead )
     */
    #[JsonProperty('online')]
    public ?int $online;

    /**
     * @var ?string $order warehouse order
     */
    #[JsonProperty('order')]
    public ?string $order;

    /**
     * @var ?string $personalPickupAdditionalInformations contact details - open hours
     */
    #[JsonProperty('personal_pickup_additional_informations')]
    public ?string $personalPickupAdditionalInformations;

    /**
     * @var ?string $phone contact details - phone
     */
    #[JsonProperty('phone')]
    public ?string $phone;

    /**
     * @var ?string $postcode contact details - postcode
     */
    #[JsonProperty('postcode')]
    public ?string $postcode;

    /**
     * @var ?bool $shipmentsToCustomer delivers orders directly to customers
     */
    #[JsonProperty('shipments_to_customer')]
    public ?bool $shipmentsToCustomer;

    /**
     * @var ?array<int> $shippings shippings identifiers
     */
    #[JsonProperty('shippings'), ArrayType(['integer'])]
    public ?array $shippings;

    /**
     * @var string $shortName warehouse short name
     */
    #[JsonProperty('short_name')]
    public string $shortName;

    /**
     * @var ?string $state contact details - state
     */
    #[JsonProperty('state')]
    public ?string $state;

    /**
     * @var ?float $stockRelocationPrice delivery cost
     */
    #[JsonProperty('stock_relocation_price')]
    public ?float $stockRelocationPrice;

    /**
     * @var ?int $stockRelocationTime delivery time
     */
    #[JsonProperty('stock_relocation_time')]
    public ?int $stockRelocationTime;

    /**
     * @var ?string $street1 contact details - street1
     */
    #[JsonProperty('street1')]
    public ?string $street1;

    /**
     * @var ?string $street2 contact details - street2
     */
    #[JsonProperty('street2')]
    public ?string $street2;

    /**
     * @var ?string $taxId contact details - tax id
     */
    #[JsonProperty('tax_id')]
    public ?string $taxId;

    /**
     * @var ?bool $visible include this warehouse inventory in the purchasing process
     */
    #[JsonProperty('visible')]
    public ?bool $visible;

    /**
     * @var ?int $warehouseId warehouse identifier
     */
    #[JsonProperty('warehouse_id')]
    public ?int $warehouseId;

    /**
     * @param array{
     *   name: string,
     *   shortName: string,
     *   acceptsReturns?: ?bool,
     *   active?: ?bool,
     *   city?: ?string,
     *   companyName?: ?string,
     *   country?: ?string,
     *   countryCode?: ?string,
     *   default?: ?bool,
     *   email?: ?string,
     *   fulfilment?: ?bool,
     *   online?: ?int,
     *   order?: ?string,
     *   personalPickupAdditionalInformations?: ?string,
     *   phone?: ?string,
     *   postcode?: ?string,
     *   shipmentsToCustomer?: ?bool,
     *   shippings?: ?array<int>,
     *   state?: ?string,
     *   stockRelocationPrice?: ?float,
     *   stockRelocationTime?: ?int,
     *   street1?: ?string,
     *   street2?: ?string,
     *   taxId?: ?string,
     *   visible?: ?bool,
     *   warehouseId?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->acceptsReturns = $values['acceptsReturns'] ?? null;
        $this->active = $values['active'] ?? null;
        $this->city = $values['city'] ?? null;
        $this->companyName = $values['companyName'] ?? null;
        $this->country = $values['country'] ?? null;
        $this->countryCode = $values['countryCode'] ?? null;
        $this->default = $values['default'] ?? null;
        $this->email = $values['email'] ?? null;
        $this->fulfilment = $values['fulfilment'] ?? null;
        $this->name = $values['name'];
        $this->online = $values['online'] ?? null;
        $this->order = $values['order'] ?? null;
        $this->personalPickupAdditionalInformations = $values['personalPickupAdditionalInformations'] ?? null;
        $this->phone = $values['phone'] ?? null;
        $this->postcode = $values['postcode'] ?? null;
        $this->shipmentsToCustomer = $values['shipmentsToCustomer'] ?? null;
        $this->shippings = $values['shippings'] ?? null;
        $this->shortName = $values['shortName'];
        $this->state = $values['state'] ?? null;
        $this->stockRelocationPrice = $values['stockRelocationPrice'] ?? null;
        $this->stockRelocationTime = $values['stockRelocationTime'] ?? null;
        $this->street1 = $values['street1'] ?? null;
        $this->street2 = $values['street2'] ?? null;
        $this->taxId = $values['taxId'] ?? null;
        $this->visible = $values['visible'] ?? null;
        $this->warehouseId = $values['warehouseId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
