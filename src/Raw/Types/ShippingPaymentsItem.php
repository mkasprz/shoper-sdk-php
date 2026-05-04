<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class ShippingPaymentsItem extends JsonSerializableType
{
    /**
     * @var ?int $cost payment method cost within this shipping method
     */
    #[JsonProperty('cost')]
    public ?int $cost;

    /**
     * @var ?string $paymentId payment identifier
     */
    #[JsonProperty('payment_id')]
    public ?string $paymentId;

    /**
     * @var ?bool $percent is the cost percent based? (if <code>false</code> - fixed)
     */
    #[JsonProperty('percent')]
    public ?bool $percent;

    /**
     * @param array{
     *   cost?: ?int,
     *   paymentId?: ?string,
     *   percent?: ?bool,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->cost = $values['cost'] ?? null;
        $this->paymentId = $values['paymentId'] ?? null;
        $this->percent = $values['percent'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
