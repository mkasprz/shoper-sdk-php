<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

/**
 * An attribute is a thing describing the product. For example, color or material.
 */
class Attribute extends JsonSerializableType
{
    /**
     * @var ?value-of<AttributeActive> $active is attribute enabled
     */
    #[JsonProperty('active')]
    public ?string $active;

    /**
     * @var string $attributeGroupId [attribute group](#tag/AttributeGroups) identifier
     */
    #[JsonProperty('attribute_group_id')]
    public string $attributeGroupId;

    /**
     * @var ?string $attributeId attribute identifier
     */
    #[JsonProperty('attribute_id')]
    public ?string $attributeId;

    /**
     * @var ?string $default default attribute value (for checkbox - 0/1)
     */
    #[JsonProperty('default')]
    public ?string $default;

    /**
     * @var ?string $description attribute description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var string $name attribute name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?array<array<string, mixed>> $options an array of options for select
     */
    #[JsonProperty('options'), ArrayType([['string' => 'mixed']])]
    public ?array $options;

    /**
     * @var ?string $order attribute sort order priority
     */
    #[JsonProperty('order')]
    public ?string $order;

    /**
     * attribute type:
     * <ul>
     *     <li>0 - text field</li>
     *     <li>1 - checkbox</li>
     *     <li>2 - drop down</li>
     * </ul>
     *
     * @var string $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @param array{
     *   attributeGroupId: string,
     *   name: string,
     *   type: string,
     *   active?: ?value-of<AttributeActive>,
     *   attributeId?: ?string,
     *   default?: ?string,
     *   description?: ?string,
     *   options?: ?array<array<string, mixed>>,
     *   order?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->active = $values['active'] ?? null;
        $this->attributeGroupId = $values['attributeGroupId'];
        $this->attributeId = $values['attributeId'] ?? null;
        $this->default = $values['default'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->name = $values['name'];
        $this->options = $values['options'] ?? null;
        $this->order = $values['order'] ?? null;
        $this->type = $values['type'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
