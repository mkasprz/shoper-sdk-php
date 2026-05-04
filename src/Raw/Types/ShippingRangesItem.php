<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class ShippingRangesItem extends JsonSerializableType
{
    /**
     * @var ?string $from lower range value
     */
    #[JsonProperty('from')]
    public ?string $from;

    /**
     * @var ?string $price shipping price for this range
     */
    #[JsonProperty('price')]
    public ?string $price;

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
     * @var ?int $weightId range identifier
     */
    #[JsonProperty('weight_id')]
    public ?int $weightId;

    /**
     * @param array{
     *   from?: ?string,
     *   price?: ?string,
     *   shippingId?: ?string,
     *   to?: ?string,
     *   weightId?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->from = $values['from'] ?? null;
        $this->price = $values['price'] ?? null;
        $this->shippingId = $values['shippingId'] ?? null;
        $this->to = $values['to'] ?? null;
        $this->weightId = $values['weightId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
