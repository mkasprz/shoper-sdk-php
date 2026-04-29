<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;
use Shoper\Sdk\Rest\Core\Types\Union;

/**
 * Shopping zones
 */
class Zone extends JsonSerializableType
{
    /**
     * @var ?array<string, ?string> $codes post codes. <code>Key</code> is an identifier whereas value - regular expression pattern
     */
    #[JsonProperty('codes'), ArrayType(['string' => new Union('string', 'null')])]
    public ?array $codes;

    /**
     * @var ?array<int> $countries an array of zone [countries](#tag/GeolocationCountries) identifiers (only if `mode` is <code>1</code>)
     */
    #[JsonProperty('countries'), ArrayType(['integer'])]
    public ?array $countries;

    /**
     * @var ?int $countryId [country](#tag/GeolocationCountries) identifier (returned only if mode is 2)
     */
    #[JsonProperty('country_id')]
    public ?int $countryId;

    /**
     * zone mode:
     * <ul>
     *     <li>1 - countries,</li>
     *     <li>2 - countries with regions,</li>
     *     <li>3 - post codes</li>
     * </ul>
     *
     * @var int $mode
     */
    #[JsonProperty('mode')]
    public int $mode;

    /**
     * @var string $name zone name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?array<int> $regions an array of zone [regions](#tag/GeolocationRegions) identifiers (only if `mode` is <code>2</code>)
     */
    #[JsonProperty('regions'), ArrayType(['integer'])]
    public ?array $regions;

    /**
     * @var ?int $zoneId resource identifier
     */
    #[JsonProperty('zone_id')]
    public ?int $zoneId;

    /**
     * @param array{
     *   mode: int,
     *   name: string,
     *   codes?: ?array<string, ?string>,
     *   countries?: ?array<int>,
     *   countryId?: ?int,
     *   regions?: ?array<int>,
     *   zoneId?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->codes = $values['codes'] ?? null;
        $this->countries = $values['countries'] ?? null;
        $this->countryId = $values['countryId'] ?? null;
        $this->mode = $values['mode'];
        $this->name = $values['name'];
        $this->regions = $values['regions'] ?? null;
        $this->zoneId = $values['zoneId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
