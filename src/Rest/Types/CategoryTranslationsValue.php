<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

class CategoryTranslationsValue extends JsonSerializableType
{
    /**
     * @var ?value-of<CategoryTranslationsValueActive> $active is translation active
     */
    #[JsonProperty('active')]
    public ?string $active;

    /**
     * @var ?string $categoryId
     */
    #[JsonProperty('category_id')]
    public ?string $categoryId;

    /**
     * @var ?string $description category description (top)
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?string $descriptionBottom category description (bottom)
     */
    #[JsonProperty('description_bottom')]
    public ?string $descriptionBottom;

    /**
     * @var ?value-of<CategoryTranslationsValueIsdefault> $isdefault is category added during installation
     */
    #[JsonProperty('isdefault')]
    public ?string $isdefault;

    /**
     * @var ?int $items count of active products of language bound to this category
     */
    #[JsonProperty('items')]
    public ?int $items;

    /**
     * @var ?string $langId [language](#tag/Languages) identifier
     */
    #[JsonProperty('lang_id')]
    public ?string $langId;

    /**
     * @var ?string $name category name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $permalink full, direct URL to the category
     */
    #[JsonProperty('permalink')]
    public ?string $permalink;

    /**
     * @var ?array<int> $presentations an array of [attribute groups](#tag/AttributeGroups) bound to this category
     */
    #[JsonProperty('presentations'), ArrayType(['integer'])]
    public ?array $presentations;

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
     * @var ?string $transId translation identifier
     */
    #[JsonProperty('trans_id')]
    public ?string $transId;

    /**
     * @param array{
     *   active?: ?value-of<CategoryTranslationsValueActive>,
     *   categoryId?: ?string,
     *   description?: ?string,
     *   descriptionBottom?: ?string,
     *   isdefault?: ?value-of<CategoryTranslationsValueIsdefault>,
     *   items?: ?int,
     *   langId?: ?string,
     *   name?: ?string,
     *   permalink?: ?string,
     *   presentations?: ?array<int>,
     *   seoDescription?: ?string,
     *   seoKeywords?: ?string,
     *   seoTitle?: ?string,
     *   seoUrl?: ?string,
     *   transId?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->active = $values['active'] ?? null;
        $this->categoryId = $values['categoryId'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->descriptionBottom = $values['descriptionBottom'] ?? null;
        $this->isdefault = $values['isdefault'] ?? null;
        $this->items = $values['items'] ?? null;
        $this->langId = $values['langId'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->permalink = $values['permalink'] ?? null;
        $this->presentations = $values['presentations'] ?? null;
        $this->seoDescription = $values['seoDescription'] ?? null;
        $this->seoKeywords = $values['seoKeywords'] ?? null;
        $this->seoTitle = $values['seoTitle'] ?? null;
        $this->seoUrl = $values['seoUrl'] ?? null;
        $this->transId = $values['transId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
