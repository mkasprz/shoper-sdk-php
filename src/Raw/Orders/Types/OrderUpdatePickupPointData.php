<?php

namespace Shoper\Sdk\Rest\Orders\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

/**
 * pickup point details.
 *
 * Returned only for orders which have a pickup point assigned. If order does not have pickup point assigned,
 * this field is not present in response.
 *
 * The same structure should be sent in request body for:
 * <ul>
 *     <li><code>POST /webapi/rest/orders/</code> - to add a pickup point to an order,</li>
 *     <li><code>PUT /webapi/rest/orders/{order_id}</code> - to edit an existing pickup point in an order.</li>
 * </ul>
 */
class OrderUpdatePickupPointData extends JsonSerializableType
{
    /**
     * @var ?string $city optional city
     */
    #[JsonProperty('city')]
    public ?string $city;

    /**
     * @var ?string $countryCode optional country code (e.g. PL)
     */
    #[JsonProperty('country_code')]
    public ?string $countryCode;

    /**
     * @var ?string $description optional pickup point description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?string $houseNumber optional house number
     */
    #[JsonProperty('house_number')]
    public ?string $houseNumber;

    /**
     * @var ?string $latitude optional latitude
     */
    #[JsonProperty('latitude')]
    public ?string $latitude;

    /**
     * @var ?string $longitude optional longitude
     */
    #[JsonProperty('longitude')]
    public ?string $longitude;

    /**
     * @var ?string $openingHours optional opening hours
     */
    #[JsonProperty('opening_hours')]
    public ?string $openingHours;

    /**
     * @var string $point pickup point name/identifier
     */
    #[JsonProperty('point')]
    public string $point;

    /**
     * @var ?string $postalCode optional postal code
     */
    #[JsonProperty('postal_code')]
    public ?string $postalCode;

    /**
     * @var ?string $province optional province
     */
    #[JsonProperty('province')]
    public ?string $province;

    /**
     * @var ?bool $servicesCod optional - whether COD service is available
     */
    #[JsonProperty('services_cod')]
    public ?bool $servicesCod;

    /**
     * @var ?string $street optional street name
     */
    #[JsonProperty('street')]
    public ?string $street;

    /**
     * pickup point supplier name.
     * Allowed values:
     * <code>POCZTA</code>, <code>INPOST</code>, <code>DHL_PARCEL</code>, <code>DHL</code>,
     * <code>DPD</code>, <code>PWR</code>, <code>UPS</code>, <code>OTHER</code>
     *
     * @var string $supplier
     */
    #[JsonProperty('supplier')]
    public string $supplier;

    /**
     * optional supplier display name.
     * Can be set only if `supplier` is <code>OTHER</code>.
     * Otherwise it will be set automatically based on `supplier`.
     *
     * @var ?string $supplierName
     */
    #[JsonProperty('supplier_name')]
    public ?string $supplierName;

    /**
     * @param array{
     *   point: string,
     *   supplier: string,
     *   city?: ?string,
     *   countryCode?: ?string,
     *   description?: ?string,
     *   houseNumber?: ?string,
     *   latitude?: ?string,
     *   longitude?: ?string,
     *   openingHours?: ?string,
     *   postalCode?: ?string,
     *   province?: ?string,
     *   servicesCod?: ?bool,
     *   street?: ?string,
     *   supplierName?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->city = $values['city'] ?? null;
        $this->countryCode = $values['countryCode'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->houseNumber = $values['houseNumber'] ?? null;
        $this->latitude = $values['latitude'] ?? null;
        $this->longitude = $values['longitude'] ?? null;
        $this->openingHours = $values['openingHours'] ?? null;
        $this->point = $values['point'];
        $this->postalCode = $values['postalCode'] ?? null;
        $this->province = $values['province'] ?? null;
        $this->servicesCod = $values['servicesCod'] ?? null;
        $this->street = $values['street'] ?? null;
        $this->supplier = $values['supplier'];
        $this->supplierName = $values['supplierName'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
