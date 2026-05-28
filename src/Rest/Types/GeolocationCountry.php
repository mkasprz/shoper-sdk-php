<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

/**
 * Returns geolocated countries.
 */
class GeolocationCountry extends JsonSerializableType
{
    /**
     * @var ?value-of<GeolocationCountryActive> $active is active
     */
    #[JsonProperty('active')]
    public ?string $active;

    /**
     * @var ?value-of<GeolocationCountryCodes> $codes are post codes supported
     */
    #[JsonProperty('codes')]
    public ?string $codes;

    /**
     * @var ?string $countryId resource identifier
     */
    #[JsonProperty('country_id')]
    public ?string $countryId;

    /**
     * @var ?string $isocode <a href="http://data.okfn.org/data/core/country-list">ISO 3133-1 alpha-2</a> country identifier
     */
    #[JsonProperty('isocode')]
    public ?string $isocode;

    /**
     * @var ?value-of<GeolocationCountryRegions> $regions are [regions](#tag/GeolocationRegions) supported
     */
    #[JsonProperty('regions')]
    public ?string $regions;

    /**
     * @param array{
     *   active?: ?value-of<GeolocationCountryActive>,
     *   codes?: ?value-of<GeolocationCountryCodes>,
     *   countryId?: ?string,
     *   isocode?: ?string,
     *   regions?: ?value-of<GeolocationCountryRegions>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->active = $values['active'] ?? null;
        $this->codes = $values['codes'] ?? null;
        $this->countryId = $values['countryId'] ?? null;
        $this->isocode = $values['isocode'] ?? null;
        $this->regions = $values['regions'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
