<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

/**
 * Producers (manufacturers) on shop
 */
class Producer extends JsonSerializableType
{
    /**
     * @var ?string $gfx produce logotype filename
     */
    #[JsonProperty('gfx')]
    public ?string $gfx;

    /**
     * @var ?value-of<ProducerIsdefault> $isdefault has been this object added during the install?
     */
    #[JsonProperty('isdefault')]
    public ?string $isdefault;

    /**
     * @var string $name producer name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $producerId producer identifier
     */
    #[JsonProperty('producer_id')]
    public ?string $producerId;

    /**
     * @var ?array<string, ProducerTranslationsValue> $translations an associative array with object translations
     */
    #[JsonProperty('translations'), ArrayType(['string' => ProducerTranslationsValue::class])]
    public ?array $translations;

    /**
     * @var ?string $web website URL
     */
    #[JsonProperty('web')]
    public ?string $web;

    /**
     * @param array{
     *   name: string,
     *   gfx?: ?string,
     *   isdefault?: ?value-of<ProducerIsdefault>,
     *   producerId?: ?string,
     *   translations?: ?array<string, ProducerTranslationsValue>,
     *   web?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->gfx = $values['gfx'] ?? null;
        $this->isdefault = $values['isdefault'] ?? null;
        $this->name = $values['name'];
        $this->producerId = $values['producerId'] ?? null;
        $this->translations = $values['translations'] ?? null;
        $this->web = $values['web'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
