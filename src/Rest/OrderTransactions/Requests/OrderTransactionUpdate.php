<?php

namespace Shoper\Sdk\Rest\OrderTransactions\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class OrderTransactionUpdate extends JsonSerializableType
{
    /**
     * @var ?int $currencyId [currency](#tag/Currencies) identifier
     */
    #[JsonProperty('currency_id')]
    public ?int $currencyId;

    /**
     * @var ?float $currencyValue transaction value
     */
    #[JsonProperty('currency_value')]
    public ?float $currencyValue;

    /**
     * @var ?string $date creation date(format: YYYY-MM-dd HH:mm:ss), default "now"
     */
    #[JsonProperty('date')]
    public ?string $date;

    /**
     * @var ?int $orderId [order](#tag/Orders) identifier
     */
    #[JsonProperty('order_id')]
    public ?int $orderId;

    /**
     * @var ?int $paymentId [payment](#tag/Payments) identifier
     */
    #[JsonProperty('payment_id')]
    public ?int $paymentId;

    /**
     * transaction status:
     * <ul>
     *     <li>1 - pending</li>
     *     <li>2 - canceled</li>
     *     <li>3 - finished</li>
     *     <li>4 - failed</li>
     * </ul>
     *
     * @var ?int $status
     */
    #[JsonProperty('status')]
    public ?int $status;

    /**
     * @var ?string $statusDescription transaction status description
     */
    #[JsonProperty('status_description')]
    public ?string $statusDescription;

    /**
     * @param array{
     *   currencyId?: ?int,
     *   currencyValue?: ?float,
     *   date?: ?string,
     *   orderId?: ?int,
     *   paymentId?: ?int,
     *   status?: ?int,
     *   statusDescription?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->currencyId = $values['currencyId'] ?? null;
        $this->currencyValue = $values['currencyValue'] ?? null;
        $this->date = $values['date'] ?? null;
        $this->orderId = $values['orderId'] ?? null;
        $this->paymentId = $values['paymentId'] ?? null;
        $this->status = $values['status'] ?? null;
        $this->statusDescription = $values['statusDescription'] ?? null;
    }
}
