<?php

namespace Shoper\Sdk\Rest\AttributeGroups\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

class AttributeGroupInsert extends JsonSerializableType
{
    /**
     * @var ?bool $active is attribute group active?
     */
    #[JsonProperty('active')]
    public ?bool $active;

    /**
     * @var ?array<int> $categories an array of [categories](#tag/Categories) identifiers this attribute group belongs to
     */
    #[JsonProperty('categories'), ArrayType(['integer'])]
    public ?array $categories;

    /**
     * @var ?bool $filters show in filters?
     */
    #[JsonProperty('filters')]
    public ?bool $filters;

    /**
     * @var int $langId [language](#tag/Languages) identifier of this attribute group
     */
    #[JsonProperty('lang_id')]
    public int $langId;

    /**
     * @var string $name attribute group name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @param array{
     *   langId: int,
     *   name: string,
     *   active?: ?bool,
     *   categories?: ?array<int>,
     *   filters?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->active = $values['active'] ?? null;
        $this->categories = $values['categories'] ?? null;
        $this->filters = $values['filters'] ?? null;
        $this->langId = $values['langId'];
        $this->name = $values['name'];
    }
}
