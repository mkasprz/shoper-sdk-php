<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class AdditionalFieldOptionTranslationsValue extends JsonSerializableType
{
    /**
     * @var ?string $value option value in this locale
     */
    #[JsonProperty('value')]
    public ?string $value;

    /**
     * @param array{
     *   value?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
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
