<?php

namespace Shoper\Sdk\Rest\NewsCategories\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;

class ListNewsCategoriesRequest extends JsonSerializableType
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
     * @param array{
     *   limit?: ?int,
     *   page?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->limit = $values['limit'] ?? null;
        $this->page = $values['page'] ?? null;
    }
}
