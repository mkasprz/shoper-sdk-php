<?php

namespace Shoper\Sdk\Rest\ProductImages\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class ProductImageInsertTranslationsValue extends JsonSerializableType
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
     * @var ?int $langId [language](#tag/Languages) identifier
     */
    #[JsonProperty('lang_id')]
    public ?int $langId;

    /**
     * @var ?string $name photo description SEO
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?int $translationId translation identifier
     */
    #[JsonProperty('translation_id')]
    public ?int $translationId;

    /**
     * @param array{
     *   description?: ?string,
     *   gfxId?: ?string,
     *   langId?: ?int,
     *   name?: ?string,
     *   translationId?: ?int,
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
