<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

/**
 * an associative array with payment address
 */
class OrderBillingAddress extends JsonSerializableType
{
    /**
     * @var ?int $addressId billing address identifier
     */
    #[JsonProperty('address_id')]
    public ?int $addressId;

    /**
     * @var ?string $city city - name or [GeolocationSubregion](#tag/GeolocationCountries) identifier
     */
    #[JsonProperty('city')]
    public ?string $city;

    /**
     * @var ?string $company
     */
    #[JsonProperty('company')]
    public ?string $company;

    /**
     * @var ?string $country country - name, code or [GeolocationCountry](#tag/GeolocationCountries) identifier
     */
    #[JsonProperty('country')]
    public ?string $country;

    /**
     * @var ?string $countryCode country code according to the <a href="http://en.wikipedia.org/wiki/List_of_ISO_639-1_codes">ISO 639-1</a> format - it has a higher priority than `country`
     */
    #[JsonProperty('country_code')]
    public ?string $countryCode;

    /**
     * @var ?string $firstname
     */
    #[JsonProperty('firstname')]
    public ?string $firstname;

    /**
     * @var ?string $lastname
     */
    #[JsonProperty('lastname')]
    public ?string $lastname;

    /**
     * @var ?string $orderId
     */
    #[JsonProperty('order_id')]
    public ?string $orderId;

    /**
     * @var ?string $phone
     */
    #[JsonProperty('phone')]
    public ?string $phone;

    /**
     * @var ?string $postcode
     */
    #[JsonProperty('postcode')]
    public ?string $postcode;

    /**
     * @var ?string $state state/district - name, code or [GeolocationRegion](#tag/GeolocationCountries) identifier
     */
    #[JsonProperty('state')]
    public ?string $state;

    /**
     * @var ?string $street1
     */
    #[JsonProperty('street1')]
    public ?string $street1;

    /**
     * @var ?string $street2
     */
    #[JsonProperty('street2')]
    public ?string $street2;

    /**
     * @var ?string $taxIdentificationNumber tax identification number (NIP)
     */
    #[JsonProperty('tax_identification_number')]
    public ?string $taxIdentificationNumber;

    /**
     * @var ?int $type address type, always 1
     */
    #[JsonProperty('type')]
    public ?int $type;

    /**
     * @param array{
     *   addressId?: ?int,
     *   city?: ?string,
     *   company?: ?string,
     *   country?: ?string,
     *   countryCode?: ?string,
     *   firstname?: ?string,
     *   lastname?: ?string,
     *   orderId?: ?string,
     *   phone?: ?string,
     *   postcode?: ?string,
     *   state?: ?string,
     *   street1?: ?string,
     *   street2?: ?string,
     *   taxIdentificationNumber?: ?string,
     *   type?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->addressId = $values['addressId'] ?? null;
        $this->city = $values['city'] ?? null;
        $this->company = $values['company'] ?? null;
        $this->country = $values['country'] ?? null;
        $this->countryCode = $values['countryCode'] ?? null;
        $this->firstname = $values['firstname'] ?? null;
        $this->lastname = $values['lastname'] ?? null;
        $this->orderId = $values['orderId'] ?? null;
        $this->phone = $values['phone'] ?? null;
        $this->postcode = $values['postcode'] ?? null;
        $this->state = $values['state'] ?? null;
        $this->street1 = $values['street1'] ?? null;
        $this->street2 = $values['street2'] ?? null;
        $this->taxIdentificationNumber = $values['taxIdentificationNumber'] ?? null;
        $this->type = $values['type'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
