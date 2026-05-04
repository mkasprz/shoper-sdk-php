<?php

namespace Shoper\Sdk\Rest\PromotionCodes\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;

class ListPromotionCodesRequest extends JsonSerializableType
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
     * @var ?string $filtersName Filter by name. Supports operators: eq, like, not_like, in, not_in.
     */
    public ?string $filtersName;

    /**
     * @param array{
     *   limit?: ?int,
     *   page?: ?int,
     *   filtersName?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->limit = $values['limit'] ?? null;
        $this->page = $values['page'] ?? null;
        $this->filtersName = $values['filtersName'] ?? null;
    }
}
