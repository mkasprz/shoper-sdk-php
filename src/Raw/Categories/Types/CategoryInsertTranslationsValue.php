<?php

namespace Shoper\Sdk\Rest\Categories\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

class CategoryInsertTranslationsValue extends JsonSerializableType
{
    /**
     * @var ?bool $active is translation active
     */
    #[JsonProperty('active')]
    public ?bool $active;

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
     * @var ?bool $isdefault is category added during installation
     */
    #[JsonProperty('isdefault')]
    public ?bool $isdefault;

    /**
     * @var ?int $items count of active products of language bound to this category
     */
    #[JsonProperty('items')]
    public ?int $items;

    /**
     * @var ?int $langId [language](#tag/Languages) identifier
     */
    #[JsonProperty('lang_id')]
    public ?int $langId;

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
     * @var ?int $transId translation identifier
     */
    #[JsonProperty('trans_id')]
    public ?int $transId;

    /**
     * @param array{
     *   active?: ?bool,
     *   categoryId?: ?string,
     *   description?: ?string,
     *   descriptionBottom?: ?string,
     *   isdefault?: ?bool,
     *   items?: ?int,
     *   langId?: ?int,
     *   name?: ?string,
     *   permalink?: ?string,
     *   presentations?: ?array<int>,
     *   seoDescription?: ?string,
     *   seoKeywords?: ?string,
     *   seoTitle?: ?string,
     *   seoUrl?: ?string,
     *   transId?: ?int,
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
