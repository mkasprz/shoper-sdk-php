<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class ProductStockOptionsItem extends JsonSerializableType
{
    /**
     * @var ?string $optionId option identifier
     */
    #[JsonProperty('option_id')]
    public ?string $optionId;

    /**
     * @var ?int $valueId option value identifier
     */
    #[JsonProperty('value_id')]
    public ?int $valueId;

    /**
     * @param array{
     *   optionId?: ?string,
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
