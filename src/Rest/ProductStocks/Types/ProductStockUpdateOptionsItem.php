<?php

namespace Shoper\Sdk\Rest\ProductStocks\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class ProductStockUpdateOptionsItem extends JsonSerializableType
{
    /**
     * @var ?int $optionId option identifier
     */
    #[JsonProperty('option_id')]
    public ?int $optionId;

    /**
     * @var ?int $valueId option value identifier
     */
    #[JsonProperty('value_id')]
    public ?int $valueId;

    /**
     * @param array{
     *   optionId?: ?int,
     *   valueId?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->optionId = $values['optionId'] ?? null;
        $this->valueId = $values['valueId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
