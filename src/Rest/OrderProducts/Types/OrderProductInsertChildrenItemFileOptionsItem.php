<?php

namespace Shoper\Sdk\Rest\OrderProducts\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class OrderProductInsertChildrenItemFileOptionsItem extends JsonSerializableType
{
    /**
     * @var ?string $name option name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?int $orderProductsFilesId object identifier
     */
    #[JsonProperty('order_products_files_id')]
    public ?int $orderProductsFilesId;

    /**
     * @var ?string $title file value
     */
    #[JsonProperty('title')]
    public ?string $title;

    /**
     * @param array{
     *   name?: ?string,
     *   orderProductsFilesId?: ?int,
     *   title?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->name = $values['name'] ?? null;
        $this->orderProductsFilesId = $values['orderProductsFilesId'] ?? null;
        $this->title = $values['title'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
