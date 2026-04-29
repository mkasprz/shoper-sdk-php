<?php

namespace Shoper\Sdk\Rest\Producers\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Producers\Types\ProducerInsertGfx;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Producers\Types\ProducerInsertTranslationsValue;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

class ProducerInsert extends JsonSerializableType
{
    /**
     * @var ?ProducerInsertGfx $gfx an array with producer logotype information
     */
    #[JsonProperty('gfx')]
    public ?ProducerInsertGfx $gfx;

    /**
     * @var string $name producer name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?array<string, ProducerInsertTranslationsValue> $translations an associative array with object translations
     */
    #[JsonProperty('translations'), ArrayType(['string' => ProducerInsertTranslationsValue::class])]
    public ?array $translations;

    /**
     * @var ?string $web website URL
     */
    #[JsonProperty('web')]
    public ?string $web;

    /**
     * @param array{
     *   name: string,
     *   gfx?: ?ProducerInsertGfx,
     *   translations?: ?array<string, ProducerInsertTranslationsValue>,
     *   web?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->gfx = $values['gfx'] ?? null;
        $this->name = $values['name'];
        $this->translations = $values['translations'] ?? null;
        $this->web = $values['web'] ?? null;
    }
}
