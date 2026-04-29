<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class PromotionCodeRangesItem extends JsonSerializableType
{
    /**
     * @var ?float $discount discount amount or percent for this range
     */
    #[JsonProperty('discount')]
    public ?float $discount;

    /**
     * @var ?float $from lower range value
     */
    #[JsonProperty('from')]
    public ?float $from;

    /**
     * @var ?int $id range identifier
     */
    #[JsonProperty('id')]
    public ?int $id;

    /**
     * @var ?string $shippingId
     */
    #[JsonProperty('shipping_id')]
    public ?string $shippingId;

    /**
     * @var ?float $to upper range value (<code>0</code> means an infinity)
     */
    #[JsonProperty('to')]
    public ?float $to;

    /**
     * @param array{
     *   discount?: ?float,
     *   from?: ?float,
     *   id?: ?int,
     *   shippingId?: ?string,
     *   to?: ?float,
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
