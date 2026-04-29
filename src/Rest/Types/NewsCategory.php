<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

/**
 * Shop blog categories.
 */
class NewsCategory extends JsonSerializableType
{
    /**
     * @var ?string $active is category active?
     */
    #[JsonProperty('active')]
    public ?string $active;

    /**
     * @var ?int $categoryId ID category
     */
    #[JsonProperty('category_id')]
    public ?int $categoryId;

    /**
     * @var ?string $langId ID category language
     */
    #[JsonProperty('lang_id')]
    public ?string $langId;

    /**
     * @var string $name category name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $order parameter used in sorting, determines the order of the categories
     */
    #[JsonProperty('order')]
    public ?string $order;

    /**
     * @var ?string $seoDescription appears in meta description tag
     */
    #[JsonProperty('seo_description')]
    public ?string $seoDescription;

    /**
     * @var ?string $seoKeywords appears in meta keywords tag
     */
    #[JsonProperty('seo_keywords')]
    public ?string $seoKeywords;

    /**
     * @var ?string $seoTitle appears in &lt;title&gt; tag
     */
    #[JsonProperty('seo_title')]
    public ?string $seoTitle;

    /**
     * @var ?string $seoUrl your own url address
     */
    #[JsonProperty('seo_url')]
    public ?string $seoUrl;

    /**
     * @param array{
     *   name: string,
     *   active?: ?string,
     *   categoryId?: ?int,
     *   langId?: ?string,
     *   order?: ?string,
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
        $this->categoryId = $values['categoryId'] ?? null;
        $this->langId = $values['langId'] ?? null;
        $this->name = $values['name'];
        $this->order = $values['order'] ?? null;
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
