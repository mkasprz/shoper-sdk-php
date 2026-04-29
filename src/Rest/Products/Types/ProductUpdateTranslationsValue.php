<?php

namespace Shoper\Sdk\Rest\Products\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class ProductUpdateTranslationsValue extends JsonSerializableType
{
    /**
     * @var ?bool $active is product translation active
     */
    #[JsonProperty('active')]
    public ?bool $active;

    /**
     * @var ?string $description product description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?bool $isdefault is product added during the install
     */
    #[JsonProperty('isdefault')]
    public ?bool $isdefault;

    /**
     * @var ?int $langId [language](#tag/Languages) identifier
     */
    #[JsonProperty('lang_id')]
    public ?int $langId;

    /**
     * @var ?bool $mainPage **Deprecated since 5.22.7.** put product on home page ( since 5.22.7 replace the Recommended Products on the Home Page with any one collection )
     */
    #[JsonProperty('main_page')]
    public ?bool $mainPage;

    /**
     * @var ?int $mainPageOrder **Deprecated since 5.22.7.** priority used to calculate upon product list sorting on home page ( since 5.22.7 you can change the order of the products in the collection that is set on the home page )
     */
    #[JsonProperty('main_page_order')]
    public ?int $mainPageOrder;

    /**
     * @var ?string $name product name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?int $order priority used to calculate upon product list sorting
     */
    #[JsonProperty('order')]
    public ?int $order;

    /**
     * @var ?string $permalink full, direct URL to the product
     */
    #[JsonProperty('permalink')]
    public ?string $permalink;

    /**
     * @var ?string $productId
     */
    #[JsonProperty('product_id')]
    public ?string $productId;

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
     * @var ?string $shortDescription short product description
     */
    #[JsonProperty('short_description')]
    public ?string $shortDescription;

    /**
     * @var ?int $translationId translation identifier
     */
    #[JsonProperty('translation_id')]
    public ?int $translationId;

    /**
     * @param array{
     *   active?: ?bool,
     *   description?: ?string,
     *   isdefault?: ?bool,
     *   langId?: ?int,
     *   mainPage?: ?bool,
     *   mainPageOrder?: ?int,
     *   name?: ?string,
     *   order?: ?int,
     *   permalink?: ?string,
     *   productId?: ?string,
     *   seoDescription?: ?string,
     *   seoKeywords?: ?string,
     *   seoTitle?: ?string,
     *   seoUrl?: ?string,
     *   shortDescription?: ?string,
     *   translationId?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->active = $values['active'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->isdefault = $values['isdefault'] ?? null;
        $this->langId = $values['langId'] ?? null;
        $this->mainPage = $values['mainPage'] ?? null;
        $this->mainPageOrder = $values['mainPageOrder'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->order = $values['order'] ?? null;
        $this->permalink = $values['permalink'] ?? null;
        $this->productId = $values['productId'] ?? null;
        $this->seoDescription = $values['seoDescription'] ?? null;
        $this->seoKeywords = $values['seoKeywords'] ?? null;
        $this->seoTitle = $values['seoTitle'] ?? null;
        $this->seoUrl = $values['seoUrl'] ?? null;
        $this->shortDescription = $values['shortDescription'] ?? null;
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
