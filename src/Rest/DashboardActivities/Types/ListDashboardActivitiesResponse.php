<?php

namespace Shoper\Sdk\Rest\DashboardActivities\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Types\DashboardActivity;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

class ListDashboardActivitiesResponse extends JsonSerializableType
{
    /**
     * @var ?int $count
     */
    #[JsonProperty('count')]
    public ?int $count;

    /**
     * @var ?array<DashboardActivity> $list
     */
    #[JsonProperty('list'), ArrayType([DashboardActivity::class])]
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
     *   list?: ?array<DashboardActivity>,
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
