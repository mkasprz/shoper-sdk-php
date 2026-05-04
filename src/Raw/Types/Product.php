<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;
use Shoper\Sdk\Rest\Core\Types\Union;

/**
 * Product in the shop
 */
class Product extends JsonSerializableType
{
    /**
     * @var ?string $addDate product addition date in <a href="https://www.iso.org/iso-8601-date-and-time-format.html">ISO 8601</a> (for example <code>2024-01-15 12:34:56</code>) format
     */
    #[JsonProperty('add_date')]
    public ?string $addDate;

    /**
     * @var ?int $additionalBloz12 **Deprecated since 5.25.6.** product BLOZ12 code (if enabled in shop configuration files)
     */
    #[JsonProperty('additional_bloz12')]
    public ?int $additionalBloz12;

    /**
     * @var ?int $additionalBloz7 **Deprecated since 5.25.6.** product BLOZ7 code (if enabled in shop configuration files)
     */
    #[JsonProperty('additional_bloz7')]
    public ?int $additionalBloz7;

    /**
     * @var ?int $additionalCode39 **Deprecated since 5.25.6.** Code 39 code (if enabled in shop configuration files)
     */
    #[JsonProperty('additional_code39')]
    public ?int $additionalCode39;

    /**
     * **Deprecated since 5.25.6.** product GTU code (if enabled in shop configuration files)
     * values: '', 'none', 'GTU_01', 'GTU_02', ... , 'GTU_13'
     *
     * @var ?string $additionalGtu
     */
    #[JsonProperty('additional_gtu')]
    public ?string $additionalGtu;

    /**
     * @var ?string $additionalIsbn **Deprecated since 5.25.6.** product ISBN code (if enabled in shop configuration files)
     */
    #[JsonProperty('additional_isbn')]
    public ?string $additionalIsbn;

    /**
     * @var ?string $additionalKgo **Deprecated since 5.25.6.** product KGO code (if enabled in shop configuration files)
     */
    #[JsonProperty('additional_kgo')]
    public ?string $additionalKgo;

    /**
     * @var ?string $additionalProducer **Deprecated since 5.25.6.** product vendor code (if enabled in shop configuration files)
     */
    #[JsonProperty('additional_producer')]
    public ?string $additionalProducer;

    /**
     * @var ?string $additionalWarehouse **Deprecated since 5.25.6.** product warehouse code (if enabled in shop configuration files)
     */
    #[JsonProperty('additional_warehouse')]
    public ?string $additionalWarehouse;

    /**
     * a nested associative array - keys of main array = [attribute group](#tag/AttributeGroups)
     * identifiers, values: an array of [attribute](#tag/Attributes) values for that group.
     *
     * @var ?array<string, mixed> $attributes
     */
    #[JsonProperty('attributes'), ArrayType(['string' => 'mixed'])]
    public ?array $attributes;

    /**
     * @var ?value-of<ProductBestseller> $bestseller is product marked as bestseller?
     */
    #[JsonProperty('bestseller')]
    public ?string $bestseller;

    /**
     * @var ?array<int> $categories an array of identifiers of [categories](#tag/Categories)
     */
    #[JsonProperty('categories'), ArrayType(['integer'])]
    public ?array $categories;

    /**
     * @var (
     *    string
     *   |int
     * ) $categoryId main [category](#tag/Categories) identifier
     */
    #[JsonProperty('category_id'), Union('string', 'integer')]
    public string|int $categoryId;

    /**
     * @var ?int $categoryTreeId tree category identifier to which the product belongs (allows filtering throughout the subjected category)
     */
    #[JsonProperty('category_tree_id')]
    public ?int $categoryTreeId;

    /**
     * @var ?ProductChildren $children an associative array with product bundle children info
     */
    #[JsonProperty('children')]
    public ?ProductChildren $children;

    /**
     * @var string $code product code
     */
    #[JsonProperty('code')]
    public string $code;

    /**
     * @var ?array<int> $collections an array of the collection identifiers to which the product belongs
     */
    #[JsonProperty('collections'), ArrayType(['integer'])]
    public ?array $collections;

    /**
     * @var ?string $currencyId product [currency](#tag/Currencies)
     */
    #[JsonProperty('currency_id')]
    public ?string $currencyId;

    /**
     * @var ?string $dimensionH product package height
     */
    #[JsonProperty('dimension_h')]
    public ?string $dimensionH;

    /**
     * @var ?string $dimensionL product package length
     */
    #[JsonProperty('dimension_l')]
    public ?string $dimensionL;

    /**
     * @var ?string $dimensionW product package width
     */
    #[JsonProperty('dimension_w')]
    public ?string $dimensionW;

    /**
     * @var ?string $ean product ean code
     */
    #[JsonProperty('ean')]
    public ?string $ean;

    /**
     * @var ?string $editDate last product modification date in <a href="https://www.iso.org/iso-8601-date-and-time-format.html">ISO 8601</a> (for example <code>2024-01-15 12:34:56</code>) format
     */
    #[JsonProperty('edit_date')]
    public ?string $editDate;

    /**
     * @var ?array<int> $feedsExludes array of product feed identifiers
     */
    #[JsonProperty('feeds_exludes'), ArrayType(['integer'])]
    public ?array $feedsExludes;

    /**
     * @var ?int $gaugeId [gauge](#tag/Gauges) identifier
     */
    #[JsonProperty('gauge_id')]
    public ?int $gaugeId;

    /**
     * @var ?string $groupId [option group](#tag/OptionGroups) identifier the product is bound to
     */
    #[JsonProperty('group_id')]
    public ?string $groupId;

    /**
     * @var ?value-of<ProductInLoyalty> $inLoyalty is loyalty enabled for product?
     */
    #[JsonProperty('in_loyalty')]
    public ?string $inLoyalty;

    /**
     * @var ?bool $isProductOfDay is product a product of the day?
     */
    #[JsonProperty('is_product_of_day')]
    public ?bool $isProductOfDay;

    /**
     * @var ?int $loyaltyPrice product price calculated to loyalty points
     */
    #[JsonProperty('loyalty_price')]
    public ?int $loyaltyPrice;

    /**
     * @var ?int $loyaltyScore loyalty points gained upon product buying
     */
    #[JsonProperty('loyalty_score')]
    public ?int $loyaltyScore;

    /**
     * @var ?ProductMainImage $mainImage an associative array with product main identifier
     */
    #[JsonProperty('main_image')]
    public ?ProductMainImage $mainImage;

    /**
     * @var ?value-of<ProductNewproduct> $newproduct is product marked as new?
     */
    #[JsonProperty('newproduct')]
    public ?string $newproduct;

    /**
     * @var ?array<int> $options array of product [stock](#tag/ProductStocks) identifiers
     */
    #[JsonProperty('options'), ArrayType(['integer'])]
    public ?array $options;

    /**
     * @var ?string $otherPrice price of product in other shops
     */
    #[JsonProperty('other_price')]
    public ?string $otherPrice;

    /**
     * @var string $pkwiu PKWiU (product quantifier)
     */
    #[JsonProperty('pkwiu')]
    public string $pkwiu;

    /**
     * @var ?string $producerId [producer](#tag/Producers) identifier
     */
    #[JsonProperty('producer_id')]
    public ?string $producerId;

    /**
     * @var ?string $productId product identifier
     */
    #[JsonProperty('product_id')]
    public ?string $productId;

    /**
     * @var ?string $promoPrice **Deprecated since 5.7.0.** current product discount calculated according to the default shop's currency
     */
    #[JsonProperty('promo_price')]
    public ?string $promoPrice;

    /**
     * @var ?array<int> $related array of identifiers of related products
     */
    #[JsonProperty('related'), ArrayType(['integer'])]
    public ?array $related;

    /**
     * @var ?ProductSafetyInformation $safetyInformation product safety information
     */
    #[JsonProperty('safety_information')]
    public ?ProductSafetyInformation $safetyInformation;

    /**
     * @var ?ProductSpecialOffer $specialOffer **Deprecated since 5.24.35.** an associative array with product general special offer information (applies for product itself and all variants that do not have dedicated special offer)
     */
    #[JsonProperty('special_offer')]
    public ?ProductSpecialOffer $specialOffer;

    /**
     * @var ProductStock $stock an associative array with base stock info
     */
    #[JsonProperty('stock')]
    public ProductStock $stock;

    /**
     * @var ?int $tagId filter products by specific tag identifier(s)
     */
    #[JsonProperty('tag_id')]
    public ?int $tagId;

    /**
     * @var ?array<int> $tags array of tags identifiers
     */
    #[JsonProperty('tags'), ArrayType(['integer'])]
    public ?array $tags;

    /**
     * @var ?string $taxId [tax](#tag/Taxes) identifier
     */
    #[JsonProperty('tax_id')]
    public ?string $taxId;

    /**
     * @var array<string, ProductTranslationsValue> $translations an associative array with object translations; if you want to filter things - you can skip locale subkey
     */
    #[JsonProperty('translations'), ArrayType(['string' => ProductTranslationsValue::class])]
    public array $translations;

    /**
     * type of product:
     * <ul>
     *     <li>0 - product,</li>
     *     <li>1 - bundle,</li>
     * </ul>
     *
     * @var ?string $type
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @var ?string $unitId measurement [unit](#tag/Units) identifier
     */
    #[JsonProperty('unit_id')]
    public ?string $unitId;

    /**
     * @var ?value-of<ProductUnitPriceCalculation> $unitPriceCalculation is product unit price calculation enabled?
     */
    #[JsonProperty('unit_price_calculation')]
    public ?string $unitPriceCalculation;

    /**
     * @var ?string $volWeight gauge product weight
     */
    #[JsonProperty('vol_weight')]
    public ?string $volWeight;

    /**
     * @param array{
     *   categoryId: (
     *    string
     *   |int
     * ),
     *   code: string,
     *   pkwiu: string,
     *   stock: ProductStock,
     *   translations: array<string, ProductTranslationsValue>,
     *   addDate?: ?string,
     *   additionalBloz12?: ?int,
     *   additionalBloz7?: ?int,
     *   additionalCode39?: ?int,
     *   additionalGtu?: ?string,
     *   additionalIsbn?: ?string,
     *   additionalKgo?: ?string,
     *   additionalProducer?: ?string,
     *   additionalWarehouse?: ?string,
     *   attributes?: ?array<string, mixed>,
     *   bestseller?: ?value-of<ProductBestseller>,
     *   categories?: ?array<int>,
     *   categoryTreeId?: ?int,
     *   children?: ?ProductChildren,
     *   collections?: ?array<int>,
     *   currencyId?: ?string,
     *   dimensionH?: ?string,
     *   dimensionL?: ?string,
     *   dimensionW?: ?string,
     *   ean?: ?string,
     *   editDate?: ?string,
     *   feedsExludes?: ?array<int>,
     *   gaugeId?: ?int,
     *   groupId?: ?string,
     *   inLoyalty?: ?value-of<ProductInLoyalty>,
     *   isProductOfDay?: ?bool,
     *   loyaltyPrice?: ?int,
     *   loyaltyScore?: ?int,
     *   mainImage?: ?ProductMainImage,
     *   newproduct?: ?value-of<ProductNewproduct>,
     *   options?: ?array<int>,
     *   otherPrice?: ?string,
     *   producerId?: ?string,
     *   productId?: ?string,
     *   promoPrice?: ?string,
     *   related?: ?array<int>,
     *   safetyInformation?: ?ProductSafetyInformation,
     *   specialOffer?: ?ProductSpecialOffer,
     *   tagId?: ?int,
     *   tags?: ?array<int>,
     *   taxId?: ?string,
     *   type?: ?string,
     *   unitId?: ?string,
     *   unitPriceCalculation?: ?value-of<ProductUnitPriceCalculation>,
     *   volWeight?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->addDate = $values['addDate'] ?? null;
        $this->additionalBloz12 = $values['additionalBloz12'] ?? null;
        $this->additionalBloz7 = $values['additionalBloz7'] ?? null;
        $this->additionalCode39 = $values['additionalCode39'] ?? null;
        $this->additionalGtu = $values['additionalGtu'] ?? null;
        $this->additionalIsbn = $values['additionalIsbn'] ?? null;
        $this->additionalKgo = $values['additionalKgo'] ?? null;
        $this->additionalProducer = $values['additionalProducer'] ?? null;
        $this->additionalWarehouse = $values['additionalWarehouse'] ?? null;
        $this->attributes = $values['attributes'] ?? null;
        $this->bestseller = $values['bestseller'] ?? null;
        $this->categories = $values['categories'] ?? null;
        $this->categoryId = $values['categoryId'];
        $this->categoryTreeId = $values['categoryTreeId'] ?? null;
        $this->children = $values['children'] ?? null;
        $this->code = $values['code'];
        $this->collections = $values['collections'] ?? null;
        $this->currencyId = $values['currencyId'] ?? null;
        $this->dimensionH = $values['dimensionH'] ?? null;
        $this->dimensionL = $values['dimensionL'] ?? null;
        $this->dimensionW = $values['dimensionW'] ?? null;
        $this->ean = $values['ean'] ?? null;
        $this->editDate = $values['editDate'] ?? null;
        $this->feedsExludes = $values['feedsExludes'] ?? null;
        $this->gaugeId = $values['gaugeId'] ?? null;
        $this->groupId = $values['groupId'] ?? null;
        $this->inLoyalty = $values['inLoyalty'] ?? null;
        $this->isProductOfDay = $values['isProductOfDay'] ?? null;
        $this->loyaltyPrice = $values['loyaltyPrice'] ?? null;
        $this->loyaltyScore = $values['loyaltyScore'] ?? null;
        $this->mainImage = $values['mainImage'] ?? null;
        $this->newproduct = $values['newproduct'] ?? null;
        $this->options = $values['options'] ?? null;
        $this->otherPrice = $values['otherPrice'] ?? null;
        $this->pkwiu = $values['pkwiu'];
        $this->producerId = $values['producerId'] ?? null;
        $this->productId = $values['productId'] ?? null;
        $this->promoPrice = $values['promoPrice'] ?? null;
        $this->related = $values['related'] ?? null;
        $this->safetyInformation = $values['safetyInformation'] ?? null;
        $this->specialOffer = $values['specialOffer'] ?? null;
        $this->stock = $values['stock'];
        $this->tagId = $values['tagId'] ?? null;
        $this->tags = $values['tags'] ?? null;
        $this->taxId = $values['taxId'] ?? null;
        $this->translations = $values['translations'];
        $this->type = $values['type'] ?? null;
        $this->unitId = $values['unitId'] ?? null;
        $this->unitPriceCalculation = $values['unitPriceCalculation'] ?? null;
        $this->volWeight = $values['volWeight'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
