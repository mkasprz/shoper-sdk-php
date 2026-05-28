<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

/**
 * an associative array with billing address (same structure as `delivery_address`)
 */
class ParcelBillingAddress extends JsonSerializableType
{
    /**
     * @var ?string $city city
     */
    #[JsonProperty('city')]
    public ?string $city;

    /**
     * @var ?string $company company
     */
    #[JsonProperty('company')]
    public ?string $company;

    /**
     * @var ?string $country country
     */
    #[JsonProperty('country')]
    public ?string $country;

    /**
     * @var ?string $countryCode country code
     */
    #[JsonProperty('country_code')]
    public ?string $countryCode;

    /**
     * @var ?string $firstname first name
     */
    #[JsonProperty('firstname')]
    public ?string $firstname;

    /**
     * @var ?string $lastname last name
     */
    #[JsonProperty('lastname')]
    public ?string $lastname;

    /**
     * @var ?string $phone phone number
     */
    #[JsonProperty('phone')]
    public ?string $phone;

    /**
     * @var ?string $postcode post code
     */
    #[JsonProperty('postcode')]
    public ?string $postcode;

    /**
     * @var ?string $state state/district
     */
    #[JsonProperty('state')]
    public ?string $state;

    /**
     * @var ?string $street1 address
     */
    #[JsonProperty('street1')]
    public ?string $street1;

    /**
     * @var ?string $street2 address continuation
     */
    #[JsonProperty('street2')]
    public ?string $street2;

    /**
     * @var ?string $taxIdentificationNumber tax identification number (NIP)
     */
    #[JsonProperty('tax_identification_number')]
    public ?string $taxIdentificationNumber;

    /**
     * @param array{
     *   city?: ?string,
     *   company?: ?string,
     *   country?: ?string,
     *   countryCode?: ?string,
     *   firstname?: ?string,
     *   lastname?: ?string,
     *   phone?: ?string,
     *   postcode?: ?string,
     *   state?: ?string,
     *   street1?: ?string,
     *   street2?: ?string,
     *   taxIdentificationNumber?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->city = $values['city'] ?? null;
        $this->company = $values['company'] ?? null;
        $this->country = $values['country'] ?? null;
        $this->countryCode = $values['countryCode'] ?? null;
        $this->firstname = $values['firstname'] ?? null;
        $this->lastname = $values['lastname'] ?? null;
        $this->phone = $values['phone'] ?? null;
        $this->postcode = $values['postcode'] ?? null;
        $this->state = $values['state'] ?? null;
        $this->street1 = $values['street1'] ?? null;
        $this->street2 = $values['street2'] ?? null;
        $this->taxIdentificationNumber = $values['taxIdentificationNumber'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
