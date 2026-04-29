<?php

namespace Shoper\Sdk\Rest\OptionGroups\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\OptionGroups\Types\OptionGroupUpdateTranslationsValue;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

class OptionGroupUpdate extends JsonSerializableType
{
    /**
     * @var ?bool $filters is shown in filters? - moved to the `filters`
     */
    #[JsonProperty('filters')]
    public ?bool $filters;

    /**
     * @var ?array<string, OptionGroupUpdateTranslationsValue> $translations an associative array with object translations
     */
    #[JsonProperty('translations'), ArrayType(['string' => OptionGroupUpdateTranslationsValue::class])]
    public ?array $translations;

    /**
     * @param array{
     *   filters?: ?bool,
     *   translations?: ?array<string, OptionGroupUpdateTranslationsValue>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->filters = $values['filters'] ?? null;
        $this->translations = $values['translations'] ?? null;
    }
}
