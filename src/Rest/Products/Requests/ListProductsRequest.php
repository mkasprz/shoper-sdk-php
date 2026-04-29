<?php

namespace Shoper\Sdk\Rest\Products\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;

class ListProductsRequest extends JsonSerializableType
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
     * @var ?int $filtersCategoryTreeId Filter by category_tree_id. Supports operators: eq, gt, gte, lt, lte, in, not_in.
     */
    public ?int $filtersCategoryTreeId;

    /**
     * @var ?bool $filtersBestseller Filter by bestseller. Supports operators: eq.
     */
    public ?bool $filtersBestseller;

    /**
     * @var ?int $filtersTags Filter by tags. Supports operators: in, not_in.
     */
    public ?int $filtersTags;

    /**
     * @var ?int $filtersTagId Filter by tag_id. Supports operators: eq, gt, gte, lt, lte, in, not_in.
     */
    public ?int $filtersTagId;

    /**
     * @var ?int $filtersCollections Filter by collections. Supports operators: in, not_in.
     */
    public ?int $filtersCollections;

    /**
     * @param array{
     *   limit?: ?int,
     *   page?: ?int,
     *   filtersCategoryTreeId?: ?int,
     *   filtersBestseller?: ?bool,
     *   filtersTags?: ?int,
     *   filtersTagId?: ?int,
     *   filtersCollections?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->limit = $values['limit'] ?? null;
        $this->page = $values['page'] ?? null;
        $this->filtersCategoryTreeId = $values['filtersCategoryTreeId'] ?? null;
        $this->filtersBestseller = $values['filtersBestseller'] ?? null;
        $this->filtersTags = $values['filtersTags'] ?? null;
        $this->filtersTagId = $values['filtersTagId'] ?? null;
        $this->filtersCollections = $values['filtersCollections'] ?? null;
    }
}
