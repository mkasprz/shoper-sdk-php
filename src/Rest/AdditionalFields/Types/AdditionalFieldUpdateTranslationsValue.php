<?php

namespace Shoper\Sdk\Rest\AdditionalFields\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

class AdditionalFieldUpdateTranslationsValue extends JsonSerializableType
{
    /**
     * @var ?string $description field description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var string $name field name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?array<string> $options array of options for <code>selected</code> field
     */
    #[JsonProperty('options'), ArrayType(['string'])]
    public ?array $options;

    /**
     * @param array{
     *   name: string,
     *   description?: ?string,
     *   options?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->description = $values['description'] ?? null;
        $this->name = $values['name'];
        $this->options = $values['options'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
