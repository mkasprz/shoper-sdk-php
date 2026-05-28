<?php

namespace Shoper\Sdk\Rest\ProductImages\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Types\ProductImage;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

class ListProductImagesResponse extends JsonSerializableType
{
    /**
     * @var ?string $count
     */
    #[JsonProperty('count')]
    public ?string $count;

    /**
     * @var ?array<ProductImage> $list
     */
    #[JsonProperty('list'), ArrayType([ProductImage::class])]
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
     *   list?: ?array<ProductImage>,
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
