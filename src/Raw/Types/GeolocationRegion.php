<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

/**
 * Returns countries regions.
 */
class GeolocationRegion extends JsonSerializableType
{
    /**
     * @var ?string $countryId [country](#tag/GeolocationRegions) identifier
     */
    #[JsonProperty('country_id')]
    public ?string $countryId;

    /**
     * @var ?string $isocode <a href="http://data.okfn.org/data/core/country-list">ISO 3133-1 alpha-2</a> country identifier
     */
    #[JsonProperty('isocode')]
    public ?string $isocode;

    /**
     * @var ?string $name region name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?int $regionId region identifier
     */
    #[JsonProperty('region_id')]
    public ?int $regionId;

    /**
     * @param array{
     *   countryId?: ?string,
     *   isocode?: ?string,
     *   name?: ?string,
     *   regionId?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->countryId = $values['countryId'] ?? null;
        $this->isocode = $values['isocode'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->regionId = $values['regionId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
