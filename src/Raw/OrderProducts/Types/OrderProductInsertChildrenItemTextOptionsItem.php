<?php

namespace Shoper\Sdk\Rest\OrderProducts\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class OrderProductInsertChildrenItemTextOptionsItem extends JsonSerializableType
{
    /**
     * @var ?string $name option name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?int $orderProductsTextId object identifier
     */
    #[JsonProperty('order_products_text_id')]
    public ?int $orderProductsTextId;

    /**
     * @var ?string $value option value
     */
    #[JsonProperty('value')]
    public ?string $value;

    /**
     * @param array{
     *   name?: ?string,
     *   orderProductsTextId?: ?int,
     *   value?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->name = $values['name'] ?? null;
        $this->orderProductsTextId = $values['orderProductsTextId'] ?? null;
        $this->value = $values['value'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
