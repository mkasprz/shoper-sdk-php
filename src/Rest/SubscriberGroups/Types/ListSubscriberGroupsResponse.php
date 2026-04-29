<?php

namespace Shoper\Sdk\Rest\SubscriberGroups\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Types\SubscriberGroup;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

class ListSubscriberGroupsResponse extends JsonSerializableType
{
    /**
     * @var ?int $count
     */
    #[JsonProperty('count')]
    public ?int $count;

    /**
     * @var ?array<SubscriberGroup> $list
     */
    #[JsonProperty('list'), ArrayType([SubscriberGroup::class])]
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
     *   count?: ?int,
     *   list?: ?array<SubscriberGroup>,
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
