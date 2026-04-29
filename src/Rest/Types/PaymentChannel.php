<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

/**
 * Payments methods channels. Resources available for selected applications. If you want to use them, please contact us at appstore@shoper.pl.
 */
class PaymentChannel extends JsonSerializableType
{
    /**
     * @var string $channelId channel id
     */
    #[JsonProperty('channel_id')]
    public string $channelId;

    /**
     * @var string $name channel name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @param array{
     *   channelId: string,
     *   name: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->channelId = $values['channelId'];
        $this->name = $values['name'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
