<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class PromotionCodeRangesItem extends JsonSerializableType
{
    /**
     * @var ?string $discount discount amount or percent for this range
     */
    #[JsonProperty('discount')]
    public ?string $discount;

    /**
     * @var ?string $from lower range value
     */
    #[JsonProperty('from')]
    public ?string $from;

    /**
     * @var ?string $id range identifier
     */
    #[JsonProperty('id')]
    public ?string $id;

    /**
     * @var ?string $shippingId
     */
    #[JsonProperty('shipping_id')]
    public ?string $shippingId;

    /**
     * @var ?string $to upper range value (<code>0</code> means an infinity)
     */
    #[JsonProperty('to')]
    public ?string $to;

    /**
     * @param array{
     *   discount?: ?string,
     *   from?: ?string,
     *   id?: ?string,
     *   shippingId?: ?string,
     *   to?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->discount = $values['discount'] ?? null;
        $this->from = $values['from'] ?? null;
        $this->id = $values['id'] ?? null;
        $this->shippingId = $values['shippingId'] ?? null;
        $this->to = $values['to'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
