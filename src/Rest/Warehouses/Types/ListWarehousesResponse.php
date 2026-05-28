<?php

namespace Shoper\Sdk\Rest\Warehouses\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Types\Warehouse;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

class ListWarehousesResponse extends JsonSerializableType
{
    /**
     * @var ?string $count
     */
    #[JsonProperty('count')]
    public ?string $count;

    /**
     * @var ?array<Warehouse> $list
     */
    #[JsonProperty('list'), ArrayType([Warehouse::class])]
    public ?array $list;

    /**
     * @var ?int $page
     */
    #[JsonProperty('page')]
    public ?int $page;

    /**
     * @var ?int $pages
     */
    #[JsonProperty('pages')]
    public ?int $pages;

    /**
     * @param array{
     *   count?: ?string,
     *   list?: ?array<Warehouse>,
     *   page?: ?int,
     *   pages?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->count = $values['count'] ?? null;
        $this->list = $values['list'] ?? null;
        $this->page = $values['page'] ?? null;
        $this->pages = $values['pages'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
