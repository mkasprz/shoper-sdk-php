<?php

namespace Shoper\Sdk\Rest\Shippings\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class ShippingUpdateRangesItem extends JsonSerializableType
{
    /**
     * @var ?float $from lower range value
     */
    #[JsonProperty('from')]
    public ?float $from;

    /**
     * @var ?float $price shipping price for this range
     */
    #[JsonProperty('price')]
    public ?float $price;

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
     * @var ?int $weightId range identifier
     */
    #[JsonProperty('weight_id')]
    public ?int $weightId;

    /**
     * @param array{
     *   from?: ?float,
     *   price?: ?float,
     *   shippingId?: ?string,
     *   to?: ?float,
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
