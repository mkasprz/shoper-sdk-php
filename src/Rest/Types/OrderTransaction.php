<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

/**
 * A transaction of order. Resources available for selected applications. If you want to use them, please contact us at appstore@shoper.pl.
 */
class OrderTransaction extends JsonSerializableType
{
    /**
     * @var ?string $currencyId [currency](#tag/Currencies) identifier
     */
    #[JsonProperty('currency_id')]
    public ?string $currencyId;

    /**
     * @var float $currencyValue transaction value
     */
    #[JsonProperty('currency_value')]
    public float $currencyValue;

    /**
     * @var ?string $date creation date(format: YYYY-MM-dd HH:mm:ss), default "now"
     */
    #[JsonProperty('date')]
    public ?string $date;

    /**
     * @var string $orderId [order](#tag/Orders) identifier
     */
    #[JsonProperty('order_id')]
    public string $orderId;

    /**
     * @var string $paymentId [payment](#tag/Payments) identifier
     */
    #[JsonProperty('payment_id')]
    public string $paymentId;

    /**
     * @var ?string $refundId refund identifier
     */
    #[JsonProperty('refund_id')]
    public ?string $refundId;

    /**
     * transaction status:
     * <ul>
     *     <li>1 - pending</li>
     *     <li>2 - canceled</li>
     *     <li>3 - finished</li>
     *     <li>4 - failed</li>
     * </ul>
     *
     * @var string $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?string $statusDescription transaction status description
     */
    #[JsonProperty('status_description')]
    public ?string $statusDescription;

    /**
     * @param array{
     *   currencyValue: float,
     *   orderId: string,
     *   paymentId: string,
     *   status: string,
     *   currencyId?: ?string,
     *   date?: ?string,
     *   refundId?: ?string,
     *   statusDescription?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->currencyId = $values['currencyId'] ?? null;
        $this->currencyValue = $values['currencyValue'];
        $this->date = $values['date'] ?? null;
        $this->orderId = $values['orderId'];
        $this->paymentId = $values['paymentId'];
        $this->refundId = $values['refundId'] ?? null;
        $this->status = $values['status'];
        $this->statusDescription = $values['statusDescription'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
