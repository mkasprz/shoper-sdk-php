<?php

namespace Shoper\Sdk\Rest\PaymentsChannels\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class PaymentChannelInsert extends JsonSerializableType
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
}
