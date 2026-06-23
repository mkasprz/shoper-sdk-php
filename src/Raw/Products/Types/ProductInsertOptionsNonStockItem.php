<?php

namespace Shoper\Sdk\Rest\Products\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;
use Shoper\Sdk\Rest\Core\Types\Union;

class ProductInsertOptionsNonStockItem extends JsonSerializableType
{
    /**
     * @var int $optionId [option](#tag/Options) identifier from the product option group
     */
    #[JsonProperty('option_id')]
    public int $optionId;

    /**
     * An array of selected [option values](#tag/OptionValues) for the option.
     * An empty array deactivates all values for this option. Supported element formats:
     * <ul>
     *     <li>integer (option value identifier)</li>
     *     <li>object with <code>value_id</code> and optional fields: <code>active</code>, <code>change_price_type</code>, <code>change_price_value</code>, <code>percent</code>, <code>gfx</code></li>
     * </ul>
     *
     * @var ?array<(
     *    int
     *   |ProductInsertOptionsNonStockItemValuesItemActive
     * )> $values
     */
    #[JsonProperty('values'), ArrayType([new Union('integer', ProductInsertOptionsNonStockItemValuesItemActive::class)])]
    public ?array $values;

    /**
     * @param array{
     *   optionId: int,
     *   values?: ?array<(
     *    int
     *   |ProductInsertOptionsNonStockItemValuesItemActive
     * )>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->optionId = $values['optionId'];
        $this->values = $values['values'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
