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
     * @var ?int $langId [language](#tag/Languages) identifier
     */
    #[JsonProperty('lang_id')]
    public ?int $langId;

    /**
     * @var ?string $name name of delivery
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?int $transId translation identifier
     */
    #[JsonProperty('trans_id')]
    public ?int $transId;

    /**
     * @param array{
     *   deliveryId?: ?string,
     *   langId?: ?int,
     *   name?: ?string,
     *   transId?: ?int,
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
