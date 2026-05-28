<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

/**
 * UTM tracking parameters associated with this order (utm_source, utm_medium, utm_campaign, utm_content)
 */
class OrderUtms extends JsonSerializableType
{
    /**
     * @var ?string $utmCampaign UTM campaign name
     */
    #[JsonProperty('utm_campaign')]
    public ?string $utmCampaign;

    /**
     * @var ?string $utmContent UTM content identifier
     */
    #[JsonProperty('utm_content')]
    public ?string $utmContent;

    /**
     * @var ?string $utmMedium UTM medium (e.g. cpc, email)
     */
    #[JsonProperty('utm_medium')]
    public ?string $utmMedium;

    /**
     * @var ?string $utmSource UTM source (e.g. google, newsletter)
     */
    #[JsonProperty('utm_source')]
    public ?string $utmSource;

    /**
     * @param array{
     *   utmCampaign?: ?string,
     *   utmContent?: ?string,
     *   utmMedium?: ?string,
     *   utmSource?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->utmCampaign = $values['utmCampaign'] ?? null;
        $this->utmContent = $values['utmContent'] ?? null;
        $this->utmMedium = $values['utmMedium'] ?? null;
        $this->utmSource = $values['utmSource'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
