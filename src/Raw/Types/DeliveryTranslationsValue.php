<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class DeliveryTranslationsValue extends JsonSerializableType
{
    /**
     * @var ?string $deliveryId
     */
    #[JsonProperty('delivery_id')]
    public ?string $deliveryId;

    /**
     * @var ?string $langId [language](#tag/Languages) identifier
     */
    #[JsonProperty('lang_id')]
    public ?string $langId;

    /**
     * @var ?string $name name of delivery
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $transId translation identifier
     */
    #[JsonProperty('trans_id')]
    public ?string $transId;

    /**
     * @param array{
     *   deliveryId?: ?string,
     *   langId?: ?string,
     *   name?: ?string,
     *   transId?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->deliveryId = $values['deliveryId'] ?? null;
        $this->langId = $values['langId'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->transId = $values['transId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
