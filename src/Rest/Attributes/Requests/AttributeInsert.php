<?php

namespace Shoper\Sdk\Rest\Attributes\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

class AttributeInsert extends JsonSerializableType
{
    /**
     * @var ?bool $active is attribute enabled
     */
    #[JsonProperty('active')]
    public ?bool $active;

    /**
     * @var int $attributeGroupId [attribute group](#tag/AttributeGroups) identifier
     */
    #[JsonProperty('attribute_group_id')]
    public int $attributeGroupId;

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
     * @var ?array<string> $options an array of options for select
     */
    #[JsonProperty('options'), ArrayType(['string'])]
    public ?array $options;

    /**
     * @var ?int $order attribute sort order priority
     */
    #[JsonProperty('order')]
    public ?int $order;

    /**
     * attribute type:
     * <ul>
     *     <li>0 - text field</li>
     *     <li>1 - checkbox</li>
     *     <li>2 - drop down</li>
     * </ul>
     *
     * @var int $type
     */
    #[JsonProperty('type')]
    public int $type;

    /**
     * @param array{
     *   attributeGroupId: int,
     *   name: string,
     *   type: int,
     *   active?: ?bool,
     *   default?: ?string,
     *   description?: ?string,
     *   options?: ?array<string>,
     *   order?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->active = $values['active'] ?? null;
        $this->attributeGroupId = $values['attributeGroupId'];
        $this->default = $values['default'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->name = $values['name'];
        $this->options = $values['options'] ?? null;
        $this->order = $values['order'] ?? null;
        $this->type = $values['type'];
    }
}
