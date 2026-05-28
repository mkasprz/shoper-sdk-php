<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class ProducerTranslationsValue extends JsonSerializableType
{
    /**
     * @var ?string $description producer description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?string $langId
     */
    #[JsonProperty('lang_id')]
    public ?string $langId;

    /**
     * @var ?string $permalink full producer link
     */
    #[JsonProperty('permalink')]
    public ?string $permalink;

    /**
     * @var ?string $producerId [producer](#tag/Producers) identifier
     */
    #[JsonProperty('producer_id')]
    public ?string $producerId;

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
     * @var ?string $translationId translation identifier
     */
    #[JsonProperty('translation_id')]
    public ?string $translationId;

    /**
     * @param array{
     *   description?: ?string,
     *   langId?: ?string,
     *   permalink?: ?string,
     *   producerId?: ?string,
     *   seoDescription?: ?string,
     *   seoKeywords?: ?string,
     *   seoTitle?: ?string,
     *   seoUrl?: ?string,
     *   translationId?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->description = $values['description'] ?? null;
        $this->langId = $values['langId'] ?? null;
        $this->permalink = $values['permalink'] ?? null;
        $this->producerId = $values['producerId'] ?? null;
        $this->seoDescription = $values['seoDescription'] ?? null;
        $this->seoKeywords = $values['seoKeywords'] ?? null;
        $this->seoTitle = $values['seoTitle'] ?? null;
        $this->seoUrl = $values['seoUrl'] ?? null;
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
