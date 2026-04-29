<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

/**
 * Product safety importers
 */
class ProductSafetyImporter extends JsonSerializableType
{
    /**
     * @var string $city importer city - name or [GeolocationSubregion](#tag/GeolocationCountries) identifier
     */
    #[JsonProperty('city')]
    public string $city;

    /**
     * @var string $countryCode country code according to the <a href="http://en.wikipedia.org/wiki/List_of_ISO_639-1_codes">ISO 639-1</a> format - it has a higher priority than `country`
     */
    #[JsonProperty('country_code')]
    public string $countryCode;

    /**
     * @var ?string $email producer email
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var ?int $gpsrImporterId identifier
     */
    #[JsonProperty('gpsr_importer_id')]
    public ?int $gpsrImporterId;

    /**
     * @var string $internalName importer internal name
     */
    #[JsonProperty('internal_name')]
    public string $internalName;

    /**
     * @var string $name importer name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $phone phone number
     */
    #[JsonProperty('phone')]
    public ?string $phone;

    /**
     * @var string $postcode post code
     */
    #[JsonProperty('postcode')]
    public string $postcode;

    /**
     * @var string $street1 address line 1
     */
    #[JsonProperty('street1')]
    public string $street1;

    /**
     * @var ?string $street2 address line 2
     */
    #[JsonProperty('street2')]
    public ?string $street2;

    /**
     * @param array{
     *   city: string,
     *   countryCode: string,
     *   internalName: string,
     *   name: string,
     *   postcode: string,
     *   street1: string,
     *   email?: ?string,
     *   gpsrImporterId?: ?int,
     *   phone?: ?string,
     *   street2?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->city = $values['city'];
        $this->countryCode = $values['countryCode'];
        $this->email = $values['email'] ?? null;
        $this->gpsrImporterId = $values['gpsrImporterId'] ?? null;
        $this->internalName = $values['internalName'];
        $this->name = $values['name'];
        $this->phone = $values['phone'] ?? null;
        $this->postcode = $values['postcode'];
        $this->street1 = $values['street1'];
        $this->street2 = $values['street2'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
