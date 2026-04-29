<?php

namespace Shoper\Sdk\Rest\UserAddresses\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class UserAddressInsert extends JsonSerializableType
{
    /**
     * @var ?string $addressName full address
     */
    #[JsonProperty('address_name')]
    public ?string $addressName;

    /**
     * @var string $city city - name or [GeolocationSubregion](#tag/GeolocationCountries) identifier
     */
    #[JsonProperty('city')]
    public string $city;

    /**
     * @var ?string $companyName company name
     */
    #[JsonProperty('company_name')]
    public ?string $companyName;

    /**
     * country - name, code or [GeolocationCountry](#tag/GeolocationCountries) identifier.
     * At least one of the fields 'country_code' or 'country' is required.
     *
     * @var ?string $country
     */
    #[JsonProperty('country')]
    public ?string $country;

    /**
     * country code according to the <a href="http://en.wikipedia.org/wiki/List_of_ISO_639-1_codes">ISO 639-1</a> format - it has a higher priority than `country`.
     * At least one of the fields 'country_code' or 'country' is required.
     *
     * @var ?string $countryCode
     */
    #[JsonProperty('country_code')]
    public ?string $countryCode;

    /**
     * @var ?bool $default is address default for the client billing
     */
    #[JsonProperty('default')]
    public ?bool $default;

    /**
     * @var string $firstname first name
     */
    #[JsonProperty('firstname')]
    public string $firstname;

    /**
     * @var string $lastname last name
     */
    #[JsonProperty('lastname')]
    public string $lastname;

    /**
     * @var ?string $pesel PESEL
     */
    #[JsonProperty('pesel')]
    public ?string $pesel;

    /**
     * @var string $phone phone number
     */
    #[JsonProperty('phone')]
    public string $phone;

    /**
     * @var ?bool $shippingDefault is address default for the delivery
     */
    #[JsonProperty('shipping_default')]
    public ?bool $shippingDefault;

    /**
     * @var ?string $state state/district - name, code or [GeolocationRegion](#tag/GeolocationCountries) identifier
     */
    #[JsonProperty('state')]
    public ?string $state;

    /**
     * @var string $street1 address line 1
     */
    #[JsonProperty('street_1')]
    public string $street1;

    /**
     * @var ?string $street2 address line 2
     */
    #[JsonProperty('street_2')]
    public ?string $street2;

    /**
     * @var ?string $taxIdentificationNumber
     */
    #[JsonProperty('tax_identification_number')]
    public ?string $taxIdentificationNumber;

    /**
     * @var int $userId [user](#tag/Users) identifier
     */
    #[JsonProperty('user_id')]
    public int $userId;

    /**
     * @var string $zipCode post code
     */
    #[JsonProperty('zip_code')]
    public string $zipCode;

    /**
     * @param array{
     *   city: string,
     *   firstname: string,
     *   lastname: string,
     *   phone: string,
     *   street1: string,
     *   userId: int,
     *   zipCode: string,
     *   addressName?: ?string,
     *   companyName?: ?string,
     *   country?: ?string,
     *   countryCode?: ?string,
     *   default?: ?bool,
     *   pesel?: ?string,
     *   shippingDefault?: ?bool,
     *   state?: ?string,
     *   street2?: ?string,
     *   taxIdentificationNumber?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->addressName = $values['addressName'] ?? null;
        $this->city = $values['city'];
        $this->companyName = $values['companyName'] ?? null;
        $this->country = $values['country'] ?? null;
        $this->countryCode = $values['countryCode'] ?? null;
        $this->default = $values['default'] ?? null;
        $this->firstname = $values['firstname'];
        $this->lastname = $values['lastname'];
        $this->pesel = $values['pesel'] ?? null;
        $this->phone = $values['phone'];
        $this->shippingDefault = $values['shippingDefault'] ?? null;
        $this->state = $values['state'] ?? null;
        $this->street1 = $values['street1'];
        $this->street2 = $values['street2'] ?? null;
        $this->taxIdentificationNumber = $values['taxIdentificationNumber'] ?? null;
        $this->userId = $values['userId'];
        $this->zipCode = $values['zipCode'];
    }
}
