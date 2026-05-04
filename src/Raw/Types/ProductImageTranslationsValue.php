<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class ProductImageTranslationsValue extends JsonSerializableType
{
    /**
     * @var ?string $description photo description availability
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?string $gfxId
     */
    #[JsonProperty('gfx_id')]
    public ?string $gfxId;

    /**
     * @var ?string $langId [language](#tag/Languages) identifier
     */
    #[JsonProperty('lang_id')]
    public ?string $langId;

    /**
     * @var ?string $name photo description SEO
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $translationId translation identifier
     */
    #[JsonProperty('translation_id')]
    public ?string $translationId;

    /**
     * @param array{
     *   description?: ?string,
     *   gfxId?: ?string,
     *   langId?: ?string,
     *   name?: ?string,
     *   translationId?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->description = $values['description'] ?? null;
        $this->gfxId = $values['gfxId'] ?? null;
        $this->langId = $values['langId'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->translationId = $values['translationId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
