<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

/**
 * Returns countries subregions.
 */
class GeolocationSubregion extends JsonSerializableType
{
    /**
     * @var ?int $countryId [country](#tag/GeolocationCountries) identifier
     */
    #[JsonProperty('country_id')]
    public ?int $countryId;

    /**
     * @var ?string $name region name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?int $regionId [region](#tag/GeolocationRegions) identifier
     */
    #[JsonProperty('region_id')]
    public ?int $regionId;

    /**
     * @var ?int $subregionId city/subregion identifier
     */
    #[JsonProperty('subregion_id')]
    public ?int $subregionId;

    /**
     * @param array{
     *   countryId?: ?int,
     *   name?: ?string,
     *   regionId?: ?int,
     *   subregionId?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->countryId = $values['countryId'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->regionId = $values['regionId'] ?? null;
        $this->subregionId = $values['subregionId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
