<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

/**
 * Product options group.
 */
class OptionGroup extends JsonSerializableType
{
    /**
     * @var ?bool $filters is shown in filters? - moved to the `filters`
     */
    #[JsonProperty('filters')]
    public ?bool $filters;

    /**
     * @var ?int $groupId group identifier
     */
    #[JsonProperty('group_id')]
    public ?int $groupId;

    /**
     * @var ?int $totalProducts amount of products the group is bound to
     */
    #[JsonProperty('total_products')]
    public ?int $totalProducts;

    /**
     * @var ?int $totalStock amount of products stocks the group is bound to
     */
    #[JsonProperty('total_stock')]
    public ?int $totalStock;

    /**
     * @var ?array<string, OptionGroupTranslationsValue> $translations an associative array with object translations
     */
    #[JsonProperty('translations'), ArrayType(['string' => OptionGroupTranslationsValue::class])]
    public ?array $translations;

    /**
     * @param array{
     *   filters?: ?bool,
     *   groupId?: ?int,
     *   totalProducts?: ?int,
     *   totalStock?: ?int,
     *   translations?: ?array<string, OptionGroupTranslationsValue>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->filters = $values['filters'] ?? null;
        $this->groupId = $values['groupId'] ?? null;
        $this->totalProducts = $values['totalProducts'] ?? null;
        $this->totalStock = $values['totalStock'] ?? null;
        $this->translations = $values['translations'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
