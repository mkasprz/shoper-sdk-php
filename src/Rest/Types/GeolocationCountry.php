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
     * @var ?bool $active is active
     */
    #[JsonProperty('active')]
    public ?bool $active;

    /**
     * @var ?bool $codes are post codes supported
     */
    #[JsonProperty('codes')]
    public ?bool $codes;

    /**
     * @var ?int $countryId resource identifier
     */
    #[JsonProperty('country_id')]
    public ?int $countryId;

    /**
     * @var ?string $isocode <a href="http://data.okfn.org/data/core/country-list">ISO 3133-1 alpha-2</a> country identifier
     */
    #[JsonProperty('isocode')]
    public ?string $isocode;

    /**
     * @var ?bool $regions are [regions](#tag/GeolocationRegions) supported
     */
    #[JsonProperty('regions')]
    public ?bool $regions;

    /**
     * @param array{
     *   active?: ?bool,
     *   codes?: ?bool,
     *   countryId?: ?int,
     *   isocode?: ?string,
     *   regions?: ?bool,
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
