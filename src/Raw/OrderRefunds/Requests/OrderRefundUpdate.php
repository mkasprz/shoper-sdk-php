<?php

namespace Shoper\Sdk\Rest\OrderRefunds\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class OrderRefundUpdate extends JsonSerializableType
{
    /**
     * @var ?string $comment refund comment, maximum 256 characters
     */
    #[JsonProperty('comment')]
    public ?string $comment;

    /**
     * @var ?int $currencyId [currency](#tag/Currencies) identifier
     */
    #[JsonProperty('currency_id')]
    public ?int $currencyId;

    /**
     * @var ?float $currencyValue refund value
     */
    #[JsonProperty('currency_value')]
    public ?float $currencyValue;

    /**
     * refund status:
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
     * @var ?string $statusDescription refund status description
     */
    #[JsonProperty('status_description')]
    public ?string $statusDescription;

    /**
     * @var ?int $transactionId [transaction](#tag/OrderTransactions) identifier
     */
    #[JsonProperty('transaction_id')]
    public ?int $transactionId;

    /**
     * @param array{
     *   comment?: ?string,
     *   currencyId?: ?int,
     *   currencyValue?: ?float,
     *   status?: ?int,
     *   statusDescription?: ?string,
     *   transactionId?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->comment = $values['comment'] ?? null;
        $this->currencyId = $values['currencyId'] ?? null;
        $this->currencyValue = $values['currencyValue'] ?? null;
        $this->status = $values['status'] ?? null;
        $this->statusDescription = $values['statusDescription'] ?? null;
        $this->transactionId = $values['transactionId'] ?? null;
    }
}
