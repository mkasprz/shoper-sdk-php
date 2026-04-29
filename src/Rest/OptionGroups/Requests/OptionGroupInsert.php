<?php

namespace Shoper\Sdk\Rest\OptionGroups\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\OptionGroups\Types\OptionGroupInsertTranslationsValue;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

class OptionGroupInsert extends JsonSerializableType
{
    /**
     * @var ?bool $filters is shown in filters? - moved to the `filters`
     */
    #[JsonProperty('filters')]
    public ?bool $filters;

    /**
     * @var ?array<string, OptionGroupInsertTranslationsValue> $translations an associative array with object translations
     */
    #[JsonProperty('translations'), ArrayType(['string' => OptionGroupInsertTranslationsValue::class])]
    public ?array $translations;

    /**
     * @param array{
     *   filters?: ?bool,
     *   translations?: ?array<string, OptionGroupInsertTranslationsValue>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->filters = $values['filters'] ?? null;
        $this->translations = $values['translations'] ?? null;
    }
}
