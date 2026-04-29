<?php

namespace Shoper\Sdk\Rest\ProductSafetyProducers\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class ProductSafetyProducerUpdate extends JsonSerializableType
{
    /**
     * @var ?string $city producer city - name or [GeolocationSubregion](#tag/GeolocationCountries) identifier
     */
    #[JsonProperty('city')]
    public ?string $city;

    /**
     * @var ?string $contactFormUrl URL to the contact form
     */
    #[JsonProperty('contact_form_url')]
    public ?string $contactFormUrl;

    /**
     * @var ?string $countryCode country code according to the <a href="http://en.wikipedia.org/wiki/List_of_ISO_639-1_codes">ISO 639-1</a> format - it has a higher priority than `country`
     */
    #[JsonProperty('country_code')]
    public ?string $countryCode;

    /**
     * @var ?string $email producer email
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var ?string $internalName producer internal name
     */
    #[JsonProperty('internal_name')]
    public ?string $internalName;

    /**
     * @var ?string $name producer name
     */
    #[JsonProperty('name')]
    public ?string $name;

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
     * @var ?string $street1 address line 1
     */
    #[JsonProperty('street1')]
    public ?string $street1;

    /**
     * @var ?string $street2 address line 2
     */
    #[JsonProperty('street2')]
    public ?string $street2;

    /**
     * @param array{
     *   city?: ?string,
     *   contactFormUrl?: ?string,
     *   countryCode?: ?string,
     *   email?: ?string,
     *   internalName?: ?string,
     *   name?: ?string,
     *   phone?: ?string,
     *   postcode?: ?string,
     *   street1?: ?string,
     *   street2?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->city = $values['city'] ?? null;
        $this->contactFormUrl = $values['contactFormUrl'] ?? null;
        $this->countryCode = $values['countryCode'] ?? null;
        $this->email = $values['email'] ?? null;
        $this->internalName = $values['internalName'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->phone = $values['phone'] ?? null;
        $this->postcode = $values['postcode'] ?? null;
        $this->street1 = $values['street1'] ?? null;
        $this->street2 = $values['street2'] ?? null;
    }
}
