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
     * @var ?value-of<OptionGroupFilters> $filters is shown in filters? — server delivers as "0"/"1" string. Moved to the `filters` field on Option.
     */
    #[JsonProperty('filters')]
    public ?string $filters;

    /**
     * @var ?string $groupId group identifier
     */
    #[JsonProperty('group_id')]
    public ?string $groupId;

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
     *   filters?: ?value-of<OptionGroupFilters>,
     *   groupId?: ?string,
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
