<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

/**
 * A refund of transaction. Resources available for selected applications. If you want to use them, please contact us at appstore@shoper.pl.
 */
class OrderRefund extends JsonSerializableType
{
    /**
     * @var ?string $comment refund comment, maximum 256 characters
     */
    #[JsonProperty('comment')]
    public ?string $comment;

    /**
     * @var int $currencyId [currency](#tag/Currencies) identifier
     */
    #[JsonProperty('currency_id')]
    public int $currencyId;

    /**
     * @var float $currencyValue refund value
     */
    #[JsonProperty('currency_value')]
    public float $currencyValue;

    /**
     * refund status:
     * <ul>
     *     <li>1 - pending</li>
     *     <li>2 - canceled</li>
     *     <li>3 - finished</li>
     *     <li>4 - failed</li>
     * </ul>
     *
     * @var int $status
     */
    #[JsonProperty('status')]
    public int $status;

    /**
     * @var ?string $statusDescription refund status description
     */
    #[JsonProperty('status_description')]
    public ?string $statusDescription;

    /**
     * @var int $transactionId [transaction](#tag/OrderTransactions) identifier
     */
    #[JsonProperty('transaction_id')]
    public int $transactionId;

    /**
     * @param array{
     *   currencyId: int,
     *   currencyValue: float,
     *   status: int,
     *   transactionId: int,
     *   comment?: ?string,
     *   statusDescription?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->comment = $values['comment'] ?? null;
        $this->currencyId = $values['currencyId'];
        $this->currencyValue = $values['currencyValue'];
        $this->status = $values['status'];
        $this->statusDescription = $values['statusDescription'] ?? null;
        $this->transactionId = $values['transactionId'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
