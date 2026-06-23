<?php

namespace Shoper\Sdk\Rest\Products\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;
use Shoper\Sdk\Rest\Products\Types\ProductUpdateOptionsNonStockItem;
use Shoper\Sdk\Rest\Products\Types\ProductUpdateSafetyInformation;
use Shoper\Sdk\Rest\Products\Types\ProductUpdateSpecialOffer;
use Shoper\Sdk\Rest\Products\Types\ProductUpdateStock;
use Shoper\Sdk\Rest\Products\Types\ProductUpdateTranslationsValue;

class ProductUpdate extends JsonSerializableType
{
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
     * @var ?array<string, string> $attributes an associative array (keys: [attribute](#tag/Attributes) identifiers, values: attribute value)
     */
    #[JsonProperty('attributes'), ArrayType(['string' => 'string'])]
    public ?array $attributes;

    /**
     * @var ?array<int> $categories an array of identifiers of [categories](#tag/Categories)
     */
    #[JsonProperty('categories'), ArrayType(['integer'])]
    public ?array $categories;

    /**
     * @var ?int $categoryId main [category](#tag/Categories) identifier
     */
    #[JsonProperty('category_id')]
    public ?int $categoryId;

    /**
     * @var ?string $code product code
     */
    #[JsonProperty('code')]
    public ?string $code;

    /**
     * @var ?array<int> $collections an array of the collection identifiers to which the product belongs
     */
    #[JsonProperty('collections'), ArrayType(['integer'])]
    public ?array $collections;

    /**
     * @var ?int $currencyId product [currency](#tag/Currencies)
     */
    #[JsonProperty('currency_id')]
    public ?int $currencyId;

    /**
     * @var ?float $dimensionH product package height
     */
    #[JsonProperty('dimension_h')]
    public ?float $dimensionH;

    /**
     * @var ?float $dimensionL product package length
     */
    #[JsonProperty('dimension_l')]
    public ?float $dimensionL;

    /**
     * @var ?float $dimensionW product package width
     */
    #[JsonProperty('dimension_w')]
    public ?float $dimensionW;

    /**
     * @var ?string $ean product ean code
     */
    #[JsonProperty('ean')]
    public ?string $ean;

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
     * @var ?bool $isProductOfDay is product a product of the day?
     */
    #[JsonProperty('is_product_of_day')]
    public ?bool $isProductOfDay;

    /**
     * @var ?array<string> $options an associative array (keys: product feed identifiers, values: boolean)
     */
    #[JsonProperty('options'), ArrayType(['string'])]
    public ?array $options;

    /**
     * An array used to fully synchronize non-stock option assignments for the product.
     *
     * Available only when the `non_stock_variants_ipa` feature is enabled. Each entry targets one
     * non-stock [option](#tag/Options) of the product option group and replaces its full set of
     * assigned values. Values omitted from `values` are deactivated.
     *
     * @var ?array<ProductUpdateOptionsNonStockItem> $optionsNonStock
     */
    #[JsonProperty('options_non_stock'), ArrayType([ProductUpdateOptionsNonStockItem::class])]
    public ?array $optionsNonStock;

    /**
     * @var ?float $otherPrice price of product in other shops
     */
    #[JsonProperty('other_price')]
    public ?float $otherPrice;

    /**
     * @var ?string $pkwiu PKWiU (product quantifier)
     */
    #[JsonProperty('pkwiu')]
    public ?string $pkwiu;

    /**
     * @var ?int $producerId [producer](#tag/Producers) identifier
     */
    #[JsonProperty('producer_id')]
    public ?int $producerId;

    /**
     * @var ?array<int> $related array of identifiers of related products
     */
    #[JsonProperty('related'), ArrayType(['integer'])]
    public ?array $related;

    /**
     * @var ?ProductUpdateSafetyInformation $safetyInformation product safety information
     */
    #[JsonProperty('safety_information')]
    public ?ProductUpdateSafetyInformation $safetyInformation;

    /**
     * @var ?ProductUpdateSpecialOffer $specialOffer **Deprecated since 5.24.35.** an associative array with product general special offer information (applies for product itself and all variants that do not have dedicated special offer)
     */
    #[JsonProperty('special_offer')]
    public ?ProductUpdateSpecialOffer $specialOffer;

    /**
     * @var ?ProductUpdateStock $stock an associative array with base stock info
     */
    #[JsonProperty('stock')]
    public ?ProductUpdateStock $stock;

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
     * @var ?array<string, ProductUpdateTranslationsValue> $translations an associative array with object translations; if you want to filter things - you can skip locale subkey
     */
    #[JsonProperty('translations'), ArrayType(['string' => ProductUpdateTranslationsValue::class])]
    public ?array $translations;

    /**
     * @var ?int $unitId measurement [unit](#tag/Units) identifier
     */
    #[JsonProperty('unit_id')]
    public ?int $unitId;

    /**
     * @var ?bool $unitPriceCalculation is product unit price calculation enabled?
     */
    #[JsonProperty('unit_price_calculation')]
    public ?bool $unitPriceCalculation;

    /**
     * @var ?float $volWeight gauge product weight
     */
    #[JsonProperty('vol_weight')]
    public ?float $volWeight;

    /**
     * @param array{
     *   additionalBloz12?: ?int,
     *   additionalBloz7?: ?int,
     *   additionalCode39?: ?int,
     *   additionalGtu?: ?string,
     *   additionalIsbn?: ?string,
     *   additionalKgo?: ?string,
     *   additionalProducer?: ?string,
     *   additionalWarehouse?: ?string,
     *   attributes?: ?array<string, string>,
     *   categories?: ?array<int>,
     *   categoryId?: ?int,
     *   code?: ?string,
     *   collections?: ?array<int>,
     *   currencyId?: ?int,
     *   dimensionH?: ?float,
     *   dimensionL?: ?float,
     *   dimensionW?: ?float,
     *   ean?: ?string,
     *   feedsExludes?: ?array<int>,
     *   gaugeId?: ?int,
     *   isProductOfDay?: ?bool,
     *   options?: ?array<string>,
     *   optionsNonStock?: ?array<ProductUpdateOptionsNonStockItem>,
     *   otherPrice?: ?float,
     *   pkwiu?: ?string,
     *   producerId?: ?int,
     *   related?: ?array<int>,
     *   safetyInformation?: ?ProductUpdateSafetyInformation,
     *   specialOffer?: ?ProductUpdateSpecialOffer,
     *   stock?: ?ProductUpdateStock,
     *   tagId?: ?int,
     *   tags?: ?array<int>,
     *   translations?: ?array<string, ProductUpdateTranslationsValue>,
     *   unitId?: ?int,
     *   unitPriceCalculation?: ?bool,
     *   volWeight?: ?float,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->additionalBloz12 = $values['additionalBloz12'] ?? null;
        $this->additionalBloz7 = $values['additionalBloz7'] ?? null;
        $this->additionalCode39 = $values['additionalCode39'] ?? null;
        $this->additionalGtu = $values['additionalGtu'] ?? null;
        $this->additionalIsbn = $values['additionalIsbn'] ?? null;
        $this->additionalKgo = $values['additionalKgo'] ?? null;
        $this->additionalProducer = $values['additionalProducer'] ?? null;
        $this->additionalWarehouse = $values['additionalWarehouse'] ?? null;
        $this->attributes = $values['attributes'] ?? null;
        $this->categories = $values['categories'] ?? null;
        $this->categoryId = $values['categoryId'] ?? null;
        $this->code = $values['code'] ?? null;
        $this->collections = $values['collections'] ?? null;
        $this->currencyId = $values['currencyId'] ?? null;
        $this->dimensionH = $values['dimensionH'] ?? null;
        $this->dimensionL = $values['dimensionL'] ?? null;
        $this->dimensionW = $values['dimensionW'] ?? null;
        $this->ean = $values['ean'] ?? null;
        $this->feedsExludes = $values['feedsExludes'] ?? null;
        $this->gaugeId = $values['gaugeId'] ?? null;
        $this->isProductOfDay = $values['isProductOfDay'] ?? null;
        $this->options = $values['options'] ?? null;
        $this->optionsNonStock = $values['optionsNonStock'] ?? null;
        $this->otherPrice = $values['otherPrice'] ?? null;
        $this->pkwiu = $values['pkwiu'] ?? null;
        $this->producerId = $values['producerId'] ?? null;
        $this->related = $values['related'] ?? null;
        $this->safetyInformation = $values['safetyInformation'] ?? null;
        $this->specialOffer = $values['specialOffer'] ?? null;
        $this->stock = $values['stock'] ?? null;
        $this->tagId = $values['tagId'] ?? null;
        $this->tags = $values['tags'] ?? null;
        $this->translations = $values['translations'] ?? null;
        $this->unitId = $values['unitId'] ?? null;
        $this->unitPriceCalculation = $values['unitPriceCalculation'] ?? null;
        $this->volWeight = $values['volWeight'] ?? null;
    }
}
