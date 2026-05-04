<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

/**
 * Shop static pages.
 */
class Aboutpage extends JsonSerializableType
{
    /**
     * @var ?value-of<AboutpageActive> $active is the page active?
     */
    #[JsonProperty('active')]
    public ?string $active;

    /**
     * @var ?string $content page contents
     */
    #[JsonProperty('content')]
    public ?string $content;

    /**
     * @var string $langId and identifier of [Language](#tag/Languages)
     */
    #[JsonProperty('lang_id')]
    public string $langId;

    /**
     * @var string $name page name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $pageId page identifier
     */
    #[JsonProperty('page_id')]
    public ?string $pageId;

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
     * @var ?string $seoTitle title displayed in <code>&lt;title&gt;</code> tag
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
     *   langId: string,
     *   name: string,
     *   active?: ?value-of<AboutpageActive>,
     *   content?: ?string,
     *   pageId?: ?string,
     *   seoDescription?: ?string,
     *   seoKeywords?: ?string,
     *   seoTitle?: ?string,
     *   seoUrl?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->active = $values['active'] ?? null;
        $this->content = $values['content'] ?? null;
        $this->langId = $values['langId'];
        $this->name = $values['name'];
        $this->pageId = $values['pageId'] ?? null;
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
