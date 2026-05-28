<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

/**
 * Shop categories tree
 */
class CategoryTree extends JsonSerializableType
{
    /**
     * @var ?array<array<string, mixed>> $children an array of [subcategories](#tag/Categories). Returned arrays have the same structure as root ones
     */
    #[JsonProperty('children'), ArrayType([['string' => 'mixed']])]
    public ?array $children;

    /**
     * @var ?int $id [category](#tag/Categories) identifier
     */
    #[JsonProperty('id')]
    public ?int $id;

    /**
     * @param array{
     *   children?: ?array<array<string, mixed>>,
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
