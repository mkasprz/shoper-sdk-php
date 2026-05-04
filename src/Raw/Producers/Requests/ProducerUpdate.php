<?php

namespace Shoper\Sdk\Rest\Producers\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Producers\Types\ProducerUpdateGfx;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Producers\Types\ProducerUpdateTranslationsValue;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

class ProducerUpdate extends JsonSerializableType
{
    /**
     * @var ?ProducerUpdateGfx $gfx an array with producer logotype information
     */
    #[JsonProperty('gfx')]
    public ?ProducerUpdateGfx $gfx;

    /**
     * @var ?string $name producer name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?array<string, ProducerUpdateTranslationsValue> $translations an associative array with object translations
     */
    #[JsonProperty('translations'), ArrayType(['string' => ProducerUpdateTranslationsValue::class])]
    public ?array $translations;

    /**
     * @var ?string $web website URL
     */
    #[JsonProperty('web')]
    public ?string $web;

    /**
     * @param array{
     *   gfx?: ?ProducerUpdateGfx,
     *   name?: ?string,
     *   translations?: ?array<string, ProducerUpdateTranslationsValue>,
     *   web?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->gfx = $values['gfx'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->translations = $values['translations'] ?? null;
        $this->web = $values['web'] ?? null;
    }
}
