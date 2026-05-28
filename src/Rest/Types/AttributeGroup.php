<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

/**
 * Shop attribute groups
 */
class AttributeGroup extends JsonSerializableType
{
    /**
     * @var ?value-of<AttributeGroupActive> $active is attribute group active?
     */
    #[JsonProperty('active')]
    public ?string $active;

    /**
     * @var ?string $attributeGroupId attribute group identifier
     */
    #[JsonProperty('attribute_group_id')]
    public ?string $attributeGroupId;

    /**
     * @var ?array<int> $categories an array of [categories](#tag/Categories) identifiers this attribute group belongs to
     */
    #[JsonProperty('categories'), ArrayType(['integer'])]
    public ?array $categories;

    /**
     * @var ?value-of<AttributeGroupFilters> $filters show in filters?
     */
    #[JsonProperty('filters')]
    public ?string $filters;

    /**
     * @var string $langId [language](#tag/Languages) identifier of this attribute group
     */
    #[JsonProperty('lang_id')]
    public string $langId;

    /**
     * @var string $name attribute group name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @param array{
     *   langId: string,
     *   name: string,
     *   active?: ?value-of<AttributeGroupActive>,
     *   attributeGroupId?: ?string,
     *   categories?: ?array<int>,
     *   filters?: ?value-of<AttributeGroupFilters>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->active = $values['active'] ?? null;
        $this->attributeGroupId = $values['attributeGroupId'] ?? null;
        $this->categories = $values['categories'] ?? null;
        $this->filters = $values['filters'] ?? null;
        $this->langId = $values['langId'];
        $this->name = $values['name'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
