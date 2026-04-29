<?php

namespace Shoper\Sdk\Rest\Deliveries\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;

class ListDeliveriesRequest extends JsonSerializableType
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
     * @var ?float $filtersDays Filter by days. Supports operators: eq, gt, gte, lt, lte, in, not_in.
     */
    public ?float $filtersDays;

    /**
     * @param array{
     *   limit?: ?int,
     *   page?: ?int,
     *   filtersDays?: ?float,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->limit = $values['limit'] ?? null;
        $this->page = $values['page'] ?? null;
        $this->filtersDays = $values['filtersDays'] ?? null;
    }
}
