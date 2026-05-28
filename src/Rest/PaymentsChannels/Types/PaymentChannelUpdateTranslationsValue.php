<?php

namespace Shoper\Sdk\Rest\PaymentsChannels\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class PaymentChannelUpdateTranslationsValue extends JsonSerializableType
{
    /**
     * @var ?string $name channel display name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $description channel description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?string $additionalInfoLabel label for additional info field
     */
    #[JsonProperty('additional_info_label')]
    public ?string $additionalInfoLabel;

    /**
     * @var ?string $imageUrl URL of the channel logo or image
     */
    #[JsonProperty('image_url')]
    public ?string $imageUrl;

    /**
     * @var ?value-of<PaymentChannelUpdateTranslationsValueActive> $active is the channel active for this locale
     */
    #[JsonProperty('active')]
    public ?string $active;

    /**
     * @param array{
     *   name?: ?string,
     *   description?: ?string,
     *   additionalInfoLabel?: ?string,
     *   imageUrl?: ?string,
     *   active?: ?value-of<PaymentChannelUpdateTranslationsValueActive>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->name = $values['name'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->additionalInfoLabel = $values['additionalInfoLabel'] ?? null;
        $this->imageUrl = $values['imageUrl'] ?? null;
        $this->active = $values['active'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
