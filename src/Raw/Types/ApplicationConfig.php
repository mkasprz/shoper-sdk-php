<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

/**
 * Returns shop configuration.
 */
class ApplicationConfig extends JsonSerializableType
{
    /**
     * default blog category URL format
     * <ul>
     *     <li>1 - /:lang/(n|blog)/category/:categoryId</li>
     *     <li>2 - /:lang/(n|blog)/category/:categoryName/:categoryId</li>
     * </ul>
     *
     * @var ?int $blogCategoryDefaultUrlFormat
     */
    #[JsonProperty('blog_category_default_url_format')]
    public ?int $blogCategoryDefaultUrlFormat;

    /**
     * @var ?bool $blogCommentsEnable enable blog comments
     */
    #[JsonProperty('blog_comments_enable')]
    public ?bool $blogCommentsEnable;

    /**
     * @var ?bool $blogCommentsForUsers only registered users are allowed to post blog_comments
     */
    #[JsonProperty('blog_comments_for_users')]
    public ?bool $blogCommentsForUsers;

    /**
     * @var ?bool $blogCommentsModeration is blog comments moderation enabled
     */
    #[JsonProperty('blog_comments_moderation')]
    public ?bool $blogCommentsModeration;

    /**
     * @var ?bool $blogDownloadEnable allow to download blog attached files
     */
    #[JsonProperty('blog_download_enable')]
    public ?bool $blogDownloadEnable;

    /**
     * @var ?bool $blogDownloadForUsers allow to download blog attached files only for registered users
     */
    #[JsonProperty('blog_download_for_users')]
    public ?bool $blogDownloadForUsers;

    /**
     * @var ?int $blogItemsPerPage blog items per page count
     */
    #[JsonProperty('blog_items_per_page')]
    public ?int $blogItemsPerPage;

    /**
     * default URL schema for blog:
     * <ul>
     *     <li>1 - /:lang/(n|blog)/:newsId</li>
     *     <li>2 - /:lang/(n|blog)/:newsName/:newsId</li>
     *     <li>3 - /:lang/(n|blog)/:newsYear/:newsName/:newsId</li>
     *     <li>4 - /:lang/(n|blog)/:newsYear/:newsMonth/:newsName/:newsId</li>
     *     <li>5 - /:lang/(n|blog)/:newsYear/:newsMonth/:newsDay/:newsName/:newsId</li>
     * </ul>
     *
     * @var ?int $blogNewsDefaultUrlFormat
     */
    #[JsonProperty('blog_news_default_url_format')]
    public ?int $blogNewsDefaultUrlFormat;

    /**
     * use new blog URL namespace:
     * <ul>
     *     <li>0 - /:lang/n/*</li>
     *     <li>1 - /:lang/blog/*</li>
     * </ul>
     *
     * @var ?int $blogUseNewUrlNamespace
     */
    #[JsonProperty('blog_use_new_url_namespace')]
    public ?int $blogUseNewUrlNamespace;

    /**
     * @var ?bool $commentEnable enable products comments
     */
    #[JsonProperty('comment_enable')]
    public ?bool $commentEnable;

    /**
     * @var ?bool $commentForUsers only registered users are allowed to post comments
     */
    #[JsonProperty('comment_for_users')]
    public ?bool $commentForUsers;

    /**
     * @var ?bool $commentModeration is comments moderation enabled
     */
    #[JsonProperty('comment_moderation')]
    public ?bool $commentModeration;

    /**
     * @var ?int $defaultCurrencyId default [currency](#tag/Currencies) identifier
     */
    #[JsonProperty('default_currency_id')]
    public ?int $defaultCurrencyId;

    /**
     * default [currency](#tag/Currencies) name -
     * <a href="http://www.iso.org/iso/home/standards/currency_codes.htm" target="_blank">ISO 4217</a> (eg. "PLN")
     *
     * @var ?string $defaultCurrencyName
     */
    #[JsonProperty('default_currency_name')]
    public ?string $defaultCurrencyName;

    /**
     * @var ?int $defaultLanguageId shop default [language](#tag/Languages) identifier
     */
    #[JsonProperty('default_language_id')]
    public ?int $defaultLanguageId;

    /**
     * shop default [language](#tag/Languages) -
     * <a target="_blank" href="http://tools.ietf.org/html/rfc5646">language_REGION format</a> (eg. "pl_PL")
     *
     * @var ?string $defaultLanguageName
     */
    #[JsonProperty('default_language_name')]
    public ?string $defaultLanguageName;

    /**
     * @var ?int $digitalProductLinkExpirationTime product link expiration time (days)
     */
    #[JsonProperty('digital_product_link_expiration_time')]
    public ?int $digitalProductLinkExpirationTime;

    /**
     * @var ?int $digitalProductNumberOfDownloads maximum downloads number of file per user
     */
    #[JsonProperty('digital_product_number_of_downloads')]
    public ?int $digitalProductNumberOfDownloads;

    /**
     * @var ?int $digitalProductUnlockingStatusId [status](#tag/Statuses) identifier which sends email with files for digital products
     */
    #[JsonProperty('digital_product_unlocking_status_id')]
    public ?int $digitalProductUnlockingStatusId;

    /**
     * products weight unit used in shop:
     * <ul>
     *     <li>KILOGRAM</li>
     *     <li>GRAM</li>
     *     <li>LBS</li>
     * </ul>
     *
     * @var ?string $localeDefaultWeight
     */
    #[JsonProperty('locale_default_weight')]
    public ?string $localeDefaultWeight;

    /**
     * @var ?string $localeTimezone shop timezone (eg. "Europe/Warsaw")
     */
    #[JsonProperty('locale_timezone')]
    public ?string $localeTimezone;

    /**
     * @var ?bool $loyaltyEnable is loyalty program enabled
     */
    #[JsonProperty('loyalty_enable')]
    public ?bool $loyaltyEnable;

    /**
     * @var ?bool $productDefaultsActive is product active by default
     */
    #[JsonProperty('product_defaults_active')]
    public ?bool $productDefaultsActive;

    /**
     * @var ?int $productDefaultsAvailabilityId default [availability](#tag/Availabilities) identifier
     */
    #[JsonProperty('product_defaults_availability_id')]
    public ?int $productDefaultsAvailabilityId;

    /**
     * @var ?int $productDefaultsBundleUnitId default [measurement unit](#tag/Units) identifier
     */
    #[JsonProperty('product_defaults_bundle_unit_id')]
    public ?int $productDefaultsBundleUnitId;

    /**
     * default product code generating method:
     * <ul>
     *     <li>1 - no method,</li>
     *     <li>2 - increasing ID,</li>
     *     <li>3 - random</li>
     * </ul>
     *
     * @var ?int $productDefaultsCode
     */
    #[JsonProperty('product_defaults_code')]
    public ?int $productDefaultsCode;

    /**
     * @var ?int $productDefaultsDeliveryId default product [delivery](#tag/Deliveries) identifier
     */
    #[JsonProperty('product_defaults_delivery_id')]
    public ?int $productDefaultsDeliveryId;

    /**
     * @var ?int $productDefaultsOrder default ordering factor value
     */
    #[JsonProperty('product_defaults_order')]
    public ?int $productDefaultsOrder;

    /**
     * @var ?int $productDefaultsStock default stock value
     */
    #[JsonProperty('product_defaults_stock')]
    public ?int $productDefaultsStock;

    /**
     * @var ?int $productDefaultsTaxId default tax value identifier
     */
    #[JsonProperty('product_defaults_tax_id')]
    public ?int $productDefaultsTaxId;

    /**
     * @var ?int $productDefaultsUnitId default [measurement unit](#tag/Units) identifier
     */
    #[JsonProperty('product_defaults_unit_id')]
    public ?int $productDefaultsUnitId;

    /**
     * @var ?int $productDefaultsWarnLevel default stock value warning level
     */
    #[JsonProperty('product_defaults_warn_level')]
    public ?int $productDefaultsWarnLevel;

    /**
     * @var ?float $productDefaultsWeight default product weight
     */
    #[JsonProperty('product_defaults_weight')]
    public ?float $productDefaultsWeight;

    /**
     * @var ?bool $productNotifiesEnable notify on product availabilities
     */
    #[JsonProperty('product_notifies_enable')]
    public ?bool $productNotifiesEnable;

    /**
     * @var ?bool $productSearchAllTokens only if `product_search_type` is <code>1</code> - require exact phrase
     */
    #[JsonProperty('product_search_all_tokens')]
    public ?bool $productSearchAllTokens;

    /**
     * @var ?bool $productSearchCode only if `product_search_type` is <code>2</code> - include product code
     */
    #[JsonProperty('product_search_code')]
    public ?bool $productSearchCode;

    /**
     * @var ?bool $productSearchDescription only if `product_search_type` is <code>1</code> - include product description
     */
    #[JsonProperty('product_search_description')]
    public ?bool $productSearchDescription;

    /**
     * @var ?bool $productSearchShortDescription only if `product_search_type` is <code>1</code> - include product short description
     */
    #[JsonProperty('product_search_short_description')]
    public ?bool $productSearchShortDescription;

    /**
     * product search mode:
     * <ul>
     *     <li>1 - only in product name,</li>
     *     <li>2 - in product name and other details</li>
     * </ul>
     *
     * @var ?int $productSearchType
     */
    #[JsonProperty('product_search_type')]
    public ?int $productSearchType;

    /**
     * @var ?bool $registrationConfirm require registration confirmation
     */
    #[JsonProperty('registration_confirm')]
    public ?bool $registrationConfirm;

    /**
     * @var ?bool $registrationEnable enable user registration
     */
    #[JsonProperty('registration_enable')]
    public ?bool $registrationEnable;

    /**
     * @var ?bool $registrationLoginToSeePrice show price only for signed in users
     */
    #[JsonProperty('registration_login_to_see_price')]
    public ?bool $registrationLoginToSeePrice;

    /**
     * @var ?float $registrationNewCustDiscount one-time discount for new customers
     */
    #[JsonProperty('registration_new_cust_discount')]
    public ?float $registrationNewCustDiscount;

    /**
     * new user address requirements:
     * <ul>
     *     <li>0 - only email address and password,</li>
     *     <li>1 - full address details</li>
     * </ul>
     *
     * @var ?int $registrationRequireAddress
     */
    #[JsonProperty('registration_require_address')]
    public ?int $registrationRequireAddress;

    /**
     * @var ?bool $shippingAddPaymentCostToFreeShipping force payment price addition even if free shipping is present
     */
    #[JsonProperty('shipping_add_payment_cost_to_free_shipping')]
    public ?bool $shippingAddPaymentCostToFreeShipping;

    /**
     * @var ?bool $shippingVolumetricWeightEnable enable volumetric weight
     */
    #[JsonProperty('shipping_volumetric_weight_enable')]
    public ?bool $shippingVolumetricWeightEnable;

    /**
     * @var ?string $shopAddress1 shop address line 1
     */
    #[JsonProperty('shop_address_1')]
    public ?string $shopAddress1;

    /**
     * @var ?string $shopAddress2 shop address line 2
     */
    #[JsonProperty('shop_address_2')]
    public ?string $shopAddress2;

    /**
     * @var ?string $shopCity shop city
     */
    #[JsonProperty('shop_city')]
    public ?string $shopCity;

    /**
     * @var ?string $shopCompanyName company name
     */
    #[JsonProperty('shop_company_name')]
    public ?string $shopCompanyName;

    /**
     * @var ?string $shopCountry country code
     */
    #[JsonProperty('shop_country')]
    public ?string $shopCountry;

    /**
     * @var ?string $shopEmail shop main e-mail address
     */
    #[JsonProperty('shop_email')]
    public ?string $shopEmail;

    /**
     * @var ?string $shopFullAddress shop full address
     */
    #[JsonProperty('shop_full_address')]
    public ?string $shopFullAddress;

    /**
     * @var ?string $shopName full shop name
     */
    #[JsonProperty('shop_name')]
    public ?string $shopName;

    /**
     * @var ?bool $shopOff is shop disabled
     */
    #[JsonProperty('shop_off')]
    public ?bool $shopOff;

    /**
     * @var ?string $shopPhone shop phone number
     */
    #[JsonProperty('shop_phone')]
    public ?string $shopPhone;

    /**
     * @var ?string $shopProvince province
     */
    #[JsonProperty('shop_province')]
    public ?string $shopProvince;

    /**
     * @var ?string $shopRegon company identifier number
     */
    #[JsonProperty('shop_regon')]
    public ?string $shopRegon;

    /**
     * @var ?string $shopTaxId tax identifier
     */
    #[JsonProperty('shop_tax_id')]
    public ?string $shopTaxId;

    /**
     * @var ?string $shopTrade trade
     */
    #[JsonProperty('shop_trade')]
    public ?string $shopTrade;

    /**
     * @var ?string $shopTradeCode trade code
     */
    #[JsonProperty('shop_trade_code')]
    public ?string $shopTradeCode;

    /**
     * @var ?string $shopUrl shop URL
     */
    #[JsonProperty('shop_url')]
    public ?string $shopUrl;

    /**
     * @var ?string $shopZipCode shop post code
     */
    #[JsonProperty('shop_zip_code')]
    public ?string $shopZipCode;

    /**
     * @var ?bool $shoppingAllowOverselling allow to sell more products than stock value
     */
    #[JsonProperty('shopping_allow_overselling')]
    public ?bool $shoppingAllowOverselling;

    /**
     * @var ?bool $shoppingAllowProductDifferentCurrency allow to set currency per product
     */
    #[JsonProperty('shopping_allow_product_different_currency')]
    public ?bool $shoppingAllowProductDifferentCurrency;

    /**
     * @var ?bool $shoppingAllowToBuyNotReg allow buying without registration
     */
    #[JsonProperty('shopping_allow_to_buy_not_reg')]
    public ?bool $shoppingAllowToBuyNotReg;

    /**
     * action performed upon product adding:
     * <ul>
     *     <li>1 - refresh page and do not redirect to the basket,</li>
     *     <li>2 - refresh page and perform redirection to the basket,</li>
     *     <li>3 - do not refresh page, show confirmation message</li>
     * </ul>
     *
     * @var ?int $shoppingBasketAdding
     */
    #[JsonProperty('shopping_basket_adding')]
    public ?int $shoppingBasketAdding;

    /**
     * bestseller calculation algorithm:
     * <ul>
     *     <li>1 - most orders count,</li>
     *     <li>2 - most orders amount</li>
     * </ul>
     *
     * @var ?int $shoppingBestsellerAlgorithm
     */
    #[JsonProperty('shopping_bestseller_algorithm')]
    public ?int $shoppingBestsellerAlgorithm;

    /**
     * only if `shopping_bestseller_mode` is <code>1</code> - amount of days for product is marked as bestseller.
     * Choose from following values:
     * <ul>
     *     <li>7 - last 7 days,</li>
     *     <li>30 - last 30 days,</li>
     *     <li>90 - last 90 days,</li>
     *     <li>0 - lifetime</li>
     * </ul>
     *
     * @var ?int $shoppingBestsellerDays
     */
    #[JsonProperty('shopping_bestseller_days')]
    public ?int $shoppingBestsellerDays;

    /**
     * marking as "bestseller" mode:
     * <ul>
     *     <li>0 - manual,</li>
     *     <li>1 - automatic, based on users orders count</li>
     * </ul>
     *
     * @var ?int $shoppingBestsellerMode
     */
    #[JsonProperty('shopping_bestseller_mode')]
    public ?int $shoppingBestsellerMode;

    /**
     * @var ?int $shoppingChangeStatusPaymentMadeId order status after receiving [payment](#tag/Payments)
     */
    #[JsonProperty('shopping_change_status_payment_made_id')]
    public ?int $shoppingChangeStatusPaymentMadeId;

    /**
     * @var ?int $shoppingChangeStatusRefundMadeId order status after refund has been made
     */
    #[JsonProperty('shopping_change_status_refund_made_id')]
    public ?int $shoppingChangeStatusRefundMadeId;

    /**
     * @var ?bool $shoppingConfirmOrder require order confirmation
     */
    #[JsonProperty('shopping_confirm_order')]
    public ?bool $shoppingConfirmOrder;

    /**
     * @var ?float $shoppingMinOrderValue minimal order value
     */
    #[JsonProperty('shopping_min_order_value')]
    public ?float $shoppingMinOrderValue;

    /**
     * @var ?float $shoppingMinProdQuantity minimal product quantity
     */
    #[JsonProperty('shopping_min_prod_quantity')]
    public ?float $shoppingMinProdQuantity;

    /**
     * @var ?int $shoppingNewproductsDays if `shopping_newproducts_mode` is <code>1</code> - number of days after product creation it will be marked as "new"
     */
    #[JsonProperty('shopping_newproducts_days')]
    public ?int $shoppingNewproductsDays;

    /**
     * products marking as "new" mode:
     * <ul>
     *     <li>0 - manual,</li>
     *     <li>1 - automatic, based on product creation date</li>
     * </ul>
     *
     * @var ?int $shoppingNewproductsMode
     */
    #[JsonProperty('shopping_newproducts_mode')]
    public ?int $shoppingNewproductsMode;

    /**
     * @var ?bool $shoppingOff is shopping disabled
     */
    #[JsonProperty('shopping_off')]
    public ?bool $shoppingOff;

    /**
     * @var ?bool $shoppingOrderOrderViaToken allow order sharing via link
     */
    #[JsonProperty('shopping_order_order_via_token')]
    public ?bool $shoppingOrderOrderViaToken;

    /**
     * @var ?int $shoppingParcelCreateStatusId order status after [parcel](#tag/Parcels) is created
     */
    #[JsonProperty('shopping_parcel_create_status_id')]
    public ?int $shoppingParcelCreateStatusId;

    /**
     * @var ?int $shoppingParcelSendStatusId order status after [parcel](#tag/Parcels) is sent
     */
    #[JsonProperty('shopping_parcel_send_status_id')]
    public ?int $shoppingParcelSendStatusId;

    /**
     * for price comparison website: comparison field
     * <ul>
     *     <li>code - product code,</li>
     *     <li>additional_isbn - ISBN code,</li>
     *     <li>additional_kgo - KGO price,</li>
     *     <li>additional_bloz7 - BLOZ7 code,</li>
     *     <li>additional_bloz12 - BLOZ12 code</li>
     * </ul>
     *
     * @var ?string $shoppingPriceComparisonField
     */
    #[JsonProperty('shopping_price_comparison_field')]
    public ?string $shoppingPriceComparisonField;

    /**
     * @var ?int $shoppingPriceLevels defined price levels (1-3)
     */
    #[JsonProperty('shopping_price_levels')]
    public ?int $shoppingPriceLevels;

    /**
     * @var ?bool $shoppingProductsAllowZero allow to buy zero-priced products
     */
    #[JsonProperty('shopping_products_allow_zero')]
    public ?bool $shoppingProductsAllowZero;

    /**
     * @var ?bool $shoppingPromoCodesEnable is promotion codes support enabled?
     */
    #[JsonProperty('shopping_promo_codes_enable')]
    public ?bool $shoppingPromoCodesEnable;

    /**
     * @var ?bool $shoppingSaveBasket update stock values on buy
     */
    #[JsonProperty('shopping_save_basket')]
    public ?bool $shoppingSaveBasket;

    /**
     * show shipping and payment:
     * <ul>
     *     <li>0 - show in basket,</li>
     *     <li>1 - show as separated step</li>
     * </ul>
     *
     * @var ?int $shoppingShippingExtraStep
     */
    #[JsonProperty('shopping_shipping_extra_step')]
    public ?int $shoppingShippingExtraStep;

    /**
     * @var ?bool $shoppingVatEuEnable is VAT EU enabled?
     */
    #[JsonProperty('shopping_vat_eu_enable')]
    public ?bool $shoppingVatEuEnable;

    /**
     * @var ?bool $storefrontEnabled is storefront enabled?
     */
    #[JsonProperty('storefront_enabled')]
    public ?bool $storefrontEnabled;

    /**
     * @var ?string $technicalUrl technical URL
     */
    #[JsonProperty('technical_url')]
    public ?string $technicalUrl;

    /**
     * @var ?bool $warehousesEnabled is warehouses enabled?
     */
    #[JsonProperty('warehouses_enabled')]
    public ?bool $warehousesEnabled;

    /**
     * Shop license type. Returned only when the access token has the <code>shop_license_type</code> scope (scope id: 201).
     * Values:
     * <ul>
     *     <li>1 - basic</li>
     *     <li>2 - pro</li>
     *     <li>3 - enterprise</li>
     * </ul>
     *
     * @var ?int $licenseType
     */
    #[JsonProperty('license_type')]
    public ?int $licenseType;

    /**
     * @param array{
     *   blogCategoryDefaultUrlFormat?: ?int,
     *   blogCommentsEnable?: ?bool,
     *   blogCommentsForUsers?: ?bool,
     *   blogCommentsModeration?: ?bool,
     *   blogDownloadEnable?: ?bool,
     *   blogDownloadForUsers?: ?bool,
     *   blogItemsPerPage?: ?int,
     *   blogNewsDefaultUrlFormat?: ?int,
     *   blogUseNewUrlNamespace?: ?int,
     *   commentEnable?: ?bool,
     *   commentForUsers?: ?bool,
     *   commentModeration?: ?bool,
     *   defaultCurrencyId?: ?int,
     *   defaultCurrencyName?: ?string,
     *   defaultLanguageId?: ?int,
     *   defaultLanguageName?: ?string,
     *   digitalProductLinkExpirationTime?: ?int,
     *   digitalProductNumberOfDownloads?: ?int,
     *   digitalProductUnlockingStatusId?: ?int,
     *   localeDefaultWeight?: ?string,
     *   localeTimezone?: ?string,
     *   loyaltyEnable?: ?bool,
     *   productDefaultsActive?: ?bool,
     *   productDefaultsAvailabilityId?: ?int,
     *   productDefaultsBundleUnitId?: ?int,
     *   productDefaultsCode?: ?int,
     *   productDefaultsDeliveryId?: ?int,
     *   productDefaultsOrder?: ?int,
     *   productDefaultsStock?: ?int,
     *   productDefaultsTaxId?: ?int,
     *   productDefaultsUnitId?: ?int,
     *   productDefaultsWarnLevel?: ?int,
     *   productDefaultsWeight?: ?float,
     *   productNotifiesEnable?: ?bool,
     *   productSearchAllTokens?: ?bool,
     *   productSearchCode?: ?bool,
     *   productSearchDescription?: ?bool,
     *   productSearchShortDescription?: ?bool,
     *   productSearchType?: ?int,
     *   registrationConfirm?: ?bool,
     *   registrationEnable?: ?bool,
     *   registrationLoginToSeePrice?: ?bool,
     *   registrationNewCustDiscount?: ?float,
     *   registrationRequireAddress?: ?int,
     *   shippingAddPaymentCostToFreeShipping?: ?bool,
     *   shippingVolumetricWeightEnable?: ?bool,
     *   shopAddress1?: ?string,
     *   shopAddress2?: ?string,
     *   shopCity?: ?string,
     *   shopCompanyName?: ?string,
     *   shopCountry?: ?string,
     *   shopEmail?: ?string,
     *   shopFullAddress?: ?string,
     *   shopName?: ?string,
     *   shopOff?: ?bool,
     *   shopPhone?: ?string,
     *   shopProvince?: ?string,
     *   shopRegon?: ?string,
     *   shopTaxId?: ?string,
     *   shopTrade?: ?string,
     *   shopTradeCode?: ?string,
     *   shopUrl?: ?string,
     *   shopZipCode?: ?string,
     *   shoppingAllowOverselling?: ?bool,
     *   shoppingAllowProductDifferentCurrency?: ?bool,
     *   shoppingAllowToBuyNotReg?: ?bool,
     *   shoppingBasketAdding?: ?int,
     *   shoppingBestsellerAlgorithm?: ?int,
     *   shoppingBestsellerDays?: ?int,
     *   shoppingBestsellerMode?: ?int,
     *   shoppingChangeStatusPaymentMadeId?: ?int,
     *   shoppingChangeStatusRefundMadeId?: ?int,
     *   shoppingConfirmOrder?: ?bool,
     *   shoppingMinOrderValue?: ?float,
     *   shoppingMinProdQuantity?: ?float,
     *   shoppingNewproductsDays?: ?int,
     *   shoppingNewproductsMode?: ?int,
     *   shoppingOff?: ?bool,
     *   shoppingOrderOrderViaToken?: ?bool,
     *   shoppingParcelCreateStatusId?: ?int,
     *   shoppingParcelSendStatusId?: ?int,
     *   shoppingPriceComparisonField?: ?string,
     *   shoppingPriceLevels?: ?int,
     *   shoppingProductsAllowZero?: ?bool,
     *   shoppingPromoCodesEnable?: ?bool,
     *   shoppingSaveBasket?: ?bool,
     *   shoppingShippingExtraStep?: ?int,
     *   shoppingVatEuEnable?: ?bool,
     *   storefrontEnabled?: ?bool,
     *   technicalUrl?: ?string,
     *   warehousesEnabled?: ?bool,
     *   licenseType?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->blogCategoryDefaultUrlFormat = $values['blogCategoryDefaultUrlFormat'] ?? null;
        $this->blogCommentsEnable = $values['blogCommentsEnable'] ?? null;
        $this->blogCommentsForUsers = $values['blogCommentsForUsers'] ?? null;
        $this->blogCommentsModeration = $values['blogCommentsModeration'] ?? null;
        $this->blogDownloadEnable = $values['blogDownloadEnable'] ?? null;
        $this->blogDownloadForUsers = $values['blogDownloadForUsers'] ?? null;
        $this->blogItemsPerPage = $values['blogItemsPerPage'] ?? null;
        $this->blogNewsDefaultUrlFormat = $values['blogNewsDefaultUrlFormat'] ?? null;
        $this->blogUseNewUrlNamespace = $values['blogUseNewUrlNamespace'] ?? null;
        $this->commentEnable = $values['commentEnable'] ?? null;
        $this->commentForUsers = $values['commentForUsers'] ?? null;
        $this->commentModeration = $values['commentModeration'] ?? null;
        $this->defaultCurrencyId = $values['defaultCurrencyId'] ?? null;
        $this->defaultCurrencyName = $values['defaultCurrencyName'] ?? null;
        $this->defaultLanguageId = $values['defaultLanguageId'] ?? null;
        $this->defaultLanguageName = $values['defaultLanguageName'] ?? null;
        $this->digitalProductLinkExpirationTime = $values['digitalProductLinkExpirationTime'] ?? null;
        $this->digitalProductNumberOfDownloads = $values['digitalProductNumberOfDownloads'] ?? null;
        $this->digitalProductUnlockingStatusId = $values['digitalProductUnlockingStatusId'] ?? null;
        $this->localeDefaultWeight = $values['localeDefaultWeight'] ?? null;
        $this->localeTimezone = $values['localeTimezone'] ?? null;
        $this->loyaltyEnable = $values['loyaltyEnable'] ?? null;
        $this->productDefaultsActive = $values['productDefaultsActive'] ?? null;
        $this->productDefaultsAvailabilityId = $values['productDefaultsAvailabilityId'] ?? null;
        $this->productDefaultsBundleUnitId = $values['productDefaultsBundleUnitId'] ?? null;
        $this->productDefaultsCode = $values['productDefaultsCode'] ?? null;
        $this->productDefaultsDeliveryId = $values['productDefaultsDeliveryId'] ?? null;
        $this->productDefaultsOrder = $values['productDefaultsOrder'] ?? null;
        $this->productDefaultsStock = $values['productDefaultsStock'] ?? null;
        $this->productDefaultsTaxId = $values['productDefaultsTaxId'] ?? null;
        $this->productDefaultsUnitId = $values['productDefaultsUnitId'] ?? null;
        $this->productDefaultsWarnLevel = $values['productDefaultsWarnLevel'] ?? null;
        $this->productDefaultsWeight = $values['productDefaultsWeight'] ?? null;
        $this->productNotifiesEnable = $values['productNotifiesEnable'] ?? null;
        $this->productSearchAllTokens = $values['productSearchAllTokens'] ?? null;
        $this->productSearchCode = $values['productSearchCode'] ?? null;
        $this->productSearchDescription = $values['productSearchDescription'] ?? null;
        $this->productSearchShortDescription = $values['productSearchShortDescription'] ?? null;
        $this->productSearchType = $values['productSearchType'] ?? null;
        $this->registrationConfirm = $values['registrationConfirm'] ?? null;
        $this->registrationEnable = $values['registrationEnable'] ?? null;
        $this->registrationLoginToSeePrice = $values['registrationLoginToSeePrice'] ?? null;
        $this->registrationNewCustDiscount = $values['registrationNewCustDiscount'] ?? null;
        $this->registrationRequireAddress = $values['registrationRequireAddress'] ?? null;
        $this->shippingAddPaymentCostToFreeShipping = $values['shippingAddPaymentCostToFreeShipping'] ?? null;
        $this->shippingVolumetricWeightEnable = $values['shippingVolumetricWeightEnable'] ?? null;
        $this->shopAddress1 = $values['shopAddress1'] ?? null;
        $this->shopAddress2 = $values['shopAddress2'] ?? null;
        $this->shopCity = $values['shopCity'] ?? null;
        $this->shopCompanyName = $values['shopCompanyName'] ?? null;
        $this->shopCountry = $values['shopCountry'] ?? null;
        $this->shopEmail = $values['shopEmail'] ?? null;
        $this->shopFullAddress = $values['shopFullAddress'] ?? null;
        $this->shopName = $values['shopName'] ?? null;
        $this->shopOff = $values['shopOff'] ?? null;
        $this->shopPhone = $values['shopPhone'] ?? null;
        $this->shopProvince = $values['shopProvince'] ?? null;
        $this->shopRegon = $values['shopRegon'] ?? null;
        $this->shopTaxId = $values['shopTaxId'] ?? null;
        $this->shopTrade = $values['shopTrade'] ?? null;
        $this->shopTradeCode = $values['shopTradeCode'] ?? null;
        $this->shopUrl = $values['shopUrl'] ?? null;
        $this->shopZipCode = $values['shopZipCode'] ?? null;
        $this->shoppingAllowOverselling = $values['shoppingAllowOverselling'] ?? null;
        $this->shoppingAllowProductDifferentCurrency = $values['shoppingAllowProductDifferentCurrency'] ?? null;
        $this->shoppingAllowToBuyNotReg = $values['shoppingAllowToBuyNotReg'] ?? null;
        $this->shoppingBasketAdding = $values['shoppingBasketAdding'] ?? null;
        $this->shoppingBestsellerAlgorithm = $values['shoppingBestsellerAlgorithm'] ?? null;
        $this->shoppingBestsellerDays = $values['shoppingBestsellerDays'] ?? null;
        $this->shoppingBestsellerMode = $values['shoppingBestsellerMode'] ?? null;
        $this->shoppingChangeStatusPaymentMadeId = $values['shoppingChangeStatusPaymentMadeId'] ?? null;
        $this->shoppingChangeStatusRefundMadeId = $values['shoppingChangeStatusRefundMadeId'] ?? null;
        $this->shoppingConfirmOrder = $values['shoppingConfirmOrder'] ?? null;
        $this->shoppingMinOrderValue = $values['shoppingMinOrderValue'] ?? null;
        $this->shoppingMinProdQuantity = $values['shoppingMinProdQuantity'] ?? null;
        $this->shoppingNewproductsDays = $values['shoppingNewproductsDays'] ?? null;
        $this->shoppingNewproductsMode = $values['shoppingNewproductsMode'] ?? null;
        $this->shoppingOff = $values['shoppingOff'] ?? null;
        $this->shoppingOrderOrderViaToken = $values['shoppingOrderOrderViaToken'] ?? null;
        $this->shoppingParcelCreateStatusId = $values['shoppingParcelCreateStatusId'] ?? null;
        $this->shoppingParcelSendStatusId = $values['shoppingParcelSendStatusId'] ?? null;
        $this->shoppingPriceComparisonField = $values['shoppingPriceComparisonField'] ?? null;
        $this->shoppingPriceLevels = $values['shoppingPriceLevels'] ?? null;
        $this->shoppingProductsAllowZero = $values['shoppingProductsAllowZero'] ?? null;
        $this->shoppingPromoCodesEnable = $values['shoppingPromoCodesEnable'] ?? null;
        $this->shoppingSaveBasket = $values['shoppingSaveBasket'] ?? null;
        $this->shoppingShippingExtraStep = $values['shoppingShippingExtraStep'] ?? null;
        $this->shoppingVatEuEnable = $values['shoppingVatEuEnable'] ?? null;
        $this->storefrontEnabled = $values['storefrontEnabled'] ?? null;
        $this->technicalUrl = $values['technicalUrl'] ?? null;
        $this->warehousesEnabled = $values['warehousesEnabled'] ?? null;
        $this->licenseType = $values['licenseType'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
