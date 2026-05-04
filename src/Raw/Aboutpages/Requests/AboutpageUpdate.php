<?php

namespace Shoper\Sdk\Rest\Aboutpages\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class AboutpageUpdate extends JsonSerializableType
{
    /**
     * @var ?bool $active is the page active?
     */
    #[JsonProperty('active')]
    public ?bool $active;

    /**
     * @var ?string $content page contents
     */
    #[JsonProperty('content')]
    public ?string $content;

    /**
     * @var ?int $langId and identifier of [Language](#tag/Languages)
     */
    #[JsonProperty('lang_id')]
    public ?int $langId;

    /**
     * @var ?string $name page name
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
     *   active?: ?bool,
     *   content?: ?string,
     *   langId?: ?int,
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
        $this->content = $values['content'] ?? null;
        $this->langId = $values['langId'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->seoDescription = $values['seoDescription'] ?? null;
        $this->seoKeywords = $values['seoKeywords'] ?? null;
        $this->seoTitle = $values['seoTitle'] ?? null;
        $this->seoUrl = $values['seoUrl'] ?? null;
    }
}
