<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

class ProductOptionsNonStockItem extends JsonSerializableType
{
    /**
     * @var ?int $optionId [option](#tag/Options) identifier
     */
    #[JsonProperty('option_id')]
    public ?int $optionId;

    /**
     * @var ?string $type option type (for example: select, color)
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @var ?bool $required is option required for product configuration
     */
    #[JsonProperty('required')]
    public ?bool $required;

    /**
     * @var ?array<ProductOptionsNonStockItemValuesItem> $values array of active values assigned to the product for this non-stock option
     */
    #[JsonProperty('values'), ArrayType([ProductOptionsNonStockItemValuesItem::class])]
    public ?array $values;

    /**
     * @param array{
     *   optionId?: ?int,
     *   type?: ?string,
     *   required?: ?bool,
     *   values?: ?array<ProductOptionsNonStockItemValuesItem>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->optionId = $values['optionId'] ?? null;
        $this->type = $values['type'] ?? null;
        $this->required = $values['required'] ?? null;
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
