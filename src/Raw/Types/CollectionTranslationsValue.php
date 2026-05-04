<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class CollectionTranslationsValue extends JsonSerializableType
{
    /**
     * @var ?value-of<CollectionTranslationsValueActive> $active is translation active
     */
    #[JsonProperty('active')]
    public ?string $active;

    /**
     * @var ?string $description collection description (top)
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?string $descriptionBottom collection description (bottom)
     */
    #[JsonProperty('description_bottom')]
    public ?string $descriptionBottom;

    /**
     * @var ?string $langId [language](#tag/Languages) identifier
     */
    #[JsonProperty('lang_id')]
    public ?string $langId;

    /**
     * @var ?value-of<CollectionTranslationsValueMainPage> $mainPage Whether the collection is pinned to the main page (stored as string "0" or "1").
     */
    #[JsonProperty('main_page')]
    public ?string $mainPage;

    /**
     * @var ?string $name collection name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $seoDescription description displayed in meta description tag
     */
    #[JsonProperty('seo_description')]
    public ?string $seoDescription;

    /**
     * @var ?string $seoKeywords keywords displayed in meta keywords tag
     */
    #[JsonProperty('seo_keywords')]
    public ?string $seoKeywords;

    /**
     * @var ?string $seoTitle title displayed in &lt;title&gt; tag
     */
    #[JsonProperty('seo_title')]
    public ?string $seoTitle;

    /**
     * @var ?string $seoUrl slug displayed in URL
     */
    #[JsonProperty('seo_url')]
    public ?string $seoUrl;

    /**
     * @param array{
     *   active?: ?value-of<CollectionTranslationsValueActive>,
     *   description?: ?string,
     *   descriptionBottom?: ?string,
     *   langId?: ?string,
     *   mainPage?: ?value-of<CollectionTranslationsValueMainPage>,
     *   name?: ?string,
     *   seoDescription?: ?string,
     *   seoKeywords?: ?string,
     *   seoTitle?: ?string,
     *   seoUrl?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->active = $values['active'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->descriptionBottom = $values['descriptionBottom'] ?? null;
        $this->langId = $values['langId'] ?? null;
        $this->mainPage = $values['mainPage'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->seoDescription = $values['seoDescription'] ?? null;
        $this->seoKeywords = $values['seoKeywords'] ?? null;
        $this->seoTitle = $values['seoTitle'] ?? null;
        $this->seoUrl = $values['seoUrl'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
