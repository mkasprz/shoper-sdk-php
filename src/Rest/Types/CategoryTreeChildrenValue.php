<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class CategoryTreeChildrenValue extends JsonSerializableType
{
    /**
     * @var ?string $children an array of [subcategories](#tag/Categories). Returned arrays have the same structure as root ones
     */
    #[JsonProperty('children')]
    public ?string $children;

    /**
     * @var ?int $id [category](#tag/Categories) identifier
     */
    #[JsonProperty('id')]
    public ?int $id;

    /**
     * @param array{
     *   children?: ?string,
     *   id?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->children = $values['children'] ?? null;
        $this->id = $values['id'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
