<?php

namespace Shoper\Sdk\Rest\OrderTransactions\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;

class ListOrderTransactionsRequest extends JsonSerializableType
{
    /**
     * @var ?int $limit
     */
    public ?int $limit;

    /**
     * @var ?int $page
     */
    public ?int $page;

    /**
     * @var ?string $filtersRefundId Filter by refund_id. Supports operators: eq, like, not_like, in, not_in.
     */
    public ?string $filtersRefundId;

    /**
     * @param array{
     *   limit?: ?int,
     *   page?: ?int,
     *   filtersRefundId?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->limit = $values['limit'] ?? null;
        $this->page = $values['page'] ?? null;
        $this->filtersRefundId = $values['filtersRefundId'] ?? null;
    }
}
