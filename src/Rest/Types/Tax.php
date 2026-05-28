<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

/**
 * Shop tax values
 */
class Tax extends JsonSerializableType
{
    /**
     * @var ?string $class tax class (visible for admin)
     */
    #[JsonProperty('class')]
    public ?string $class;

    /**
     * @var ?string $name name shown on tax values list (for user)
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $taxId tax identifier
     */
    #[JsonProperty('tax_id')]
    public ?string $taxId;

    /**
     * @var ?string $value percent value used for calculations
     */
    #[JsonProperty('value')]
    public ?string $value;

    /**
     * @param array{
     *   class?: ?string,
     *   name?: ?string,
     *   taxId?: ?string,
     *   value?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->class = $values['class'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->taxId = $values['taxId'] ?? null;
        $this->value = $values['value'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
