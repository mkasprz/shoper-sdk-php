<?php

namespace Shoper\Sdk\Rest;

use Shoper\Sdk\Rest\Aboutpages\AboutpagesClient;
use Shoper\Sdk\Rest\AdditionalFields\AdditionalFieldsClient;
use Shoper\Sdk\Rest\AdditionalFieldOptions\AdditionalFieldOptionsClient;
use Shoper\Sdk\Rest\ApplicationConfigs\ApplicationConfigsClient;
use Shoper\Sdk\Rest\ApplicationLocks\ApplicationLocksClient;
use Shoper\Sdk\Rest\ApplicationVersions\ApplicationVersionsClient;
use Shoper\Sdk\Rest\AttributeGroups\AttributeGroupsClient;
use Shoper\Sdk\Rest\Attributes\AttributesClient;
use Shoper\Sdk\Rest\AuctionHouses\AuctionHousesClient;
use Shoper\Sdk\Rest\AuctionOrders\AuctionOrdersClient;
use Shoper\Sdk\Rest\Auctions\AuctionsClient;
use Shoper\Sdk\Rest\Availabilities\AvailabilitiesClient;
use Shoper\Sdk\Rest\Categories\CategoriesClient;
use Shoper\Sdk\Rest\CategoriesTrees\CategoriesTreesClient;
use Shoper\Sdk\Rest\Collections\CollectionsClient;
use Shoper\Sdk\Rest\CollectionsProducts\CollectionsProductsClient;
use Shoper\Sdk\Rest\Currencies\CurrenciesClient;
use Shoper\Sdk\Rest\DashboardActivities\DashboardActivitiesClient;
use Shoper\Sdk\Rest\DashboardStats\DashboardStatsClient;
use Shoper\Sdk\Rest\Deliveries\DeliveriesClient;
use Shoper\Sdk\Rest\Gauges\GaugesClient;
use Shoper\Sdk\Rest\GeolocationCountries\GeolocationCountriesClient;
use Shoper\Sdk\Rest\GeolocationRegions\GeolocationRegionsClient;
use Shoper\Sdk\Rest\GeolocationSubregions\GeolocationSubregionsClient;
use Shoper\Sdk\Rest\Languages\LanguagesClient;
use Shoper\Sdk\Rest\LoyaltyEvents\LoyaltyEventsClient;
use Shoper\Sdk\Rest\MetafieldValues\MetafieldValuesClient;
use Shoper\Sdk\Rest\Metafields\MetafieldsClient;
use Shoper\Sdk\Rest\News\NewsClient;
use Shoper\Sdk\Rest\NewsCategories\NewsCategoriesClient;
use Shoper\Sdk\Rest\NewsComments\NewsCommentsClient;
use Shoper\Sdk\Rest\NewsFiles\NewsFilesClient;
use Shoper\Sdk\Rest\NewsTags\NewsTagsClient;
use Shoper\Sdk\Rest\ObjectMtimes\ObjectMtimesClient;
use Shoper\Sdk\Rest\OptionGroups\OptionGroupsClient;
use Shoper\Sdk\Rest\OptionValues\OptionValuesClient;
use Shoper\Sdk\Rest\ProductOptions\ProductOptionsClient;
use Shoper\Sdk\Rest\OrderProducts\OrderProductsClient;
use Shoper\Sdk\Rest\OrderRefunds\OrderRefundsClient;
use Shoper\Sdk\Rest\OrderTransactions\OrderTransactionsClient;
use Shoper\Sdk\Rest\Orders\OrdersClient;
use Shoper\Sdk\Rest\OrderTags\OrderTagsClient;
use Shoper\Sdk\Rest\Parcels\ParcelsClient;
use Shoper\Sdk\Rest\Payments\PaymentsClient;
use Shoper\Sdk\Rest\PaymentsChannels\PaymentsChannelsClient;
use Shoper\Sdk\Rest\Producers\ProducersClient;
use Shoper\Sdk\Rest\ProductFiles\ProductFilesClient;
use Shoper\Sdk\Rest\ProductImages\ProductImagesClient;
use Shoper\Sdk\Rest\ProductSafetyCertificates\ProductSafetyCertificatesClient;
use Shoper\Sdk\Rest\ProductSafetyImporters\ProductSafetyImportersClient;
use Shoper\Sdk\Rest\ProductSafetyProducers\ProductSafetyProducersClient;
use Shoper\Sdk\Rest\ProductSafetyResponsibles\ProductSafetyResponsiblesClient;
use Shoper\Sdk\Rest\ProductStocks\ProductStocksClient;
use Shoper\Sdk\Rest\Products\ProductsClient;
use Shoper\Sdk\Rest\ProductTags\ProductTagsClient;
use Shoper\Sdk\Rest\Progresses\ProgressesClient;
use Shoper\Sdk\Rest\PromotionCodes\PromotionCodesClient;
use Shoper\Sdk\Rest\Redirects\RedirectsClient;
use Shoper\Sdk\Rest\Shippings\ShippingsClient;
use Shoper\Sdk\Rest\Specialoffers\SpecialoffersClient;
use Shoper\Sdk\Rest\Statuses\StatusesClient;
use Shoper\Sdk\Rest\SubscriberGroups\SubscriberGroupsClient;
use Shoper\Sdk\Rest\Subscribers\SubscribersClient;
use Shoper\Sdk\Rest\Taxes\TaxesClient;
use Shoper\Sdk\Rest\Units\UnitsClient;
use Shoper\Sdk\Rest\UserAddresses\UserAddressesClient;
use Shoper\Sdk\Rest\UserGroups\UserGroupsClient;
use Shoper\Sdk\Rest\Users\UsersClient;
use Shoper\Sdk\Rest\UserTags\UserTagsClient;
use Shoper\Sdk\Rest\WarehouseLogs\WarehouseLogsClient;
use Shoper\Sdk\Rest\WarehouseRelocations\WarehouseRelocationsClient;
use Shoper\Sdk\Rest\Warehouses\WarehousesClient;
use Shoper\Sdk\Rest\Webhooks\WebhooksClient;
use Shoper\Sdk\Rest\Zones\ZonesClient;
use Psr\Http\Client\ClientInterface;
use Shoper\Sdk\Rest\Core\Client\RawClient;

class RestClient
{
    /**
     * @var AboutpagesClient $aboutpages
     */
    public AboutpagesClient $aboutpages;

    /**
     * @var AdditionalFieldsClient $additionalFields
     */
    public AdditionalFieldsClient $additionalFields;

    /**
     * @var AdditionalFieldOptionsClient $additionalFieldOptions
     */
    public AdditionalFieldOptionsClient $additionalFieldOptions;

    /**
     * @var ApplicationConfigsClient $applicationConfigs
     */
    public ApplicationConfigsClient $applicationConfigs;

    /**
     * @var ApplicationLocksClient $applicationLocks
     */
    public ApplicationLocksClient $applicationLocks;

    /**
     * @var ApplicationVersionsClient $applicationVersions
     */
    public ApplicationVersionsClient $applicationVersions;

    /**
     * @var AttributeGroupsClient $attributeGroups
     */
    public AttributeGroupsClient $attributeGroups;

    /**
     * @var AttributesClient $attributes
     */
    public AttributesClient $attributes;

    /**
     * @var AuctionHousesClient $auctionHouses
     */
    public AuctionHousesClient $auctionHouses;

    /**
     * @var AuctionOrdersClient $auctionOrders
     */
    public AuctionOrdersClient $auctionOrders;

    /**
     * @var AuctionsClient $auctions
     */
    public AuctionsClient $auctions;

    /**
     * @var AvailabilitiesClient $availabilities
     */
    public AvailabilitiesClient $availabilities;

    /**
     * @var CategoriesClient $categories
     */
    public CategoriesClient $categories;

    /**
     * @var CategoriesTreesClient $categoriesTrees
     */
    public CategoriesTreesClient $categoriesTrees;

    /**
     * @var CollectionsClient $collections
     */
    public CollectionsClient $collections;

    /**
     * @var CollectionsProductsClient $collectionsProducts
     */
    public CollectionsProductsClient $collectionsProducts;

    /**
     * @var CurrenciesClient $currencies
     */
    public CurrenciesClient $currencies;

    /**
     * @var DashboardActivitiesClient $dashboardActivities
     */
    public DashboardActivitiesClient $dashboardActivities;

    /**
     * @var DashboardStatsClient $dashboardStats
     */
    public DashboardStatsClient $dashboardStats;

    /**
     * @var DeliveriesClient $deliveries
     */
    public DeliveriesClient $deliveries;

    /**
     * @var GaugesClient $gauges
     */
    public GaugesClient $gauges;

    /**
     * @var GeolocationCountriesClient $geolocationCountries
     */
    public GeolocationCountriesClient $geolocationCountries;

    /**
     * @var GeolocationRegionsClient $geolocationRegions
     */
    public GeolocationRegionsClient $geolocationRegions;

    /**
     * @var GeolocationSubregionsClient $geolocationSubregions
     */
    public GeolocationSubregionsClient $geolocationSubregions;

    /**
     * @var LanguagesClient $languages
     */
    public LanguagesClient $languages;

    /**
     * @var LoyaltyEventsClient $loyaltyEvents
     */
    public LoyaltyEventsClient $loyaltyEvents;

    /**
     * @var MetafieldValuesClient $metafieldValues
     */
    public MetafieldValuesClient $metafieldValues;

    /**
     * @var MetafieldsClient $metafields
     */
    public MetafieldsClient $metafields;

    /**
     * @var NewsClient $news
     */
    public NewsClient $news;

    /**
     * @var NewsCategoriesClient $newsCategories
     */
    public NewsCategoriesClient $newsCategories;

    /**
     * @var NewsCommentsClient $newsComments
     */
    public NewsCommentsClient $newsComments;

    /**
     * @var NewsFilesClient $newsFiles
     */
    public NewsFilesClient $newsFiles;

    /**
     * @var NewsTagsClient $newsTags
     */
    public NewsTagsClient $newsTags;

    /**
     * @var ObjectMtimesClient $objectMtimes
     */
    public ObjectMtimesClient $objectMtimes;

    /**
     * @var OptionGroupsClient $optionGroups
     */
    public OptionGroupsClient $optionGroups;

    /**
     * @var OptionValuesClient $optionValues
     */
    public OptionValuesClient $optionValues;

    /**
     * @var ProductOptionsClient $productOptions
     */
    public ProductOptionsClient $productOptions;

    /**
     * @var OrderProductsClient $orderProducts
     */
    public OrderProductsClient $orderProducts;

    /**
     * @var OrderRefundsClient $orderRefunds
     */
    public OrderRefundsClient $orderRefunds;

    /**
     * @var OrderTransactionsClient $orderTransactions
     */
    public OrderTransactionsClient $orderTransactions;

    /**
     * @var OrdersClient $orders
     */
    public OrdersClient $orders;

    /**
     * @var OrderTagsClient $orderTags
     */
    public OrderTagsClient $orderTags;

    /**
     * @var ParcelsClient $parcels
     */
    public ParcelsClient $parcels;

    /**
     * @var PaymentsClient $payments
     */
    public PaymentsClient $payments;

    /**
     * @var PaymentsChannelsClient $paymentsChannels
     */
    public PaymentsChannelsClient $paymentsChannels;

    /**
     * @var ProducersClient $producers
     */
    public ProducersClient $producers;

    /**
     * @var ProductFilesClient $productFiles
     */
    public ProductFilesClient $productFiles;

    /**
     * @var ProductImagesClient $productImages
     */
    public ProductImagesClient $productImages;

    /**
     * @var ProductSafetyCertificatesClient $productSafetyCertificates
     */
    public ProductSafetyCertificatesClient $productSafetyCertificates;

    /**
     * @var ProductSafetyImportersClient $productSafetyImporters
     */
    public ProductSafetyImportersClient $productSafetyImporters;

    /**
     * @var ProductSafetyProducersClient $productSafetyProducers
     */
    public ProductSafetyProducersClient $productSafetyProducers;

    /**
     * @var ProductSafetyResponsiblesClient $productSafetyResponsibles
     */
    public ProductSafetyResponsiblesClient $productSafetyResponsibles;

    /**
     * @var ProductStocksClient $productStocks
     */
    public ProductStocksClient $productStocks;

    /**
     * @var ProductsClient $products
     */
    public ProductsClient $products;

    /**
     * @var ProductTagsClient $productTags
     */
    public ProductTagsClient $productTags;

    /**
     * @var ProgressesClient $progresses
     */
    public ProgressesClient $progresses;

    /**
     * @var PromotionCodesClient $promotionCodes
     */
    public PromotionCodesClient $promotionCodes;

    /**
     * @var RedirectsClient $redirects
     */
    public RedirectsClient $redirects;

    /**
     * @var ShippingsClient $shippings
     */
    public ShippingsClient $shippings;

    /**
     * @var SpecialoffersClient $specialoffers
     */
    public SpecialoffersClient $specialoffers;

    /**
     * @var StatusesClient $statuses
     */
    public StatusesClient $statuses;

    /**
     * @var SubscriberGroupsClient $subscriberGroups
     */
    public SubscriberGroupsClient $subscriberGroups;

    /**
     * @var SubscribersClient $subscribers
     */
    public SubscribersClient $subscribers;

    /**
     * @var TaxesClient $taxes
     */
    public TaxesClient $taxes;

    /**
     * @var UnitsClient $units
     */
    public UnitsClient $units;

    /**
     * @var UserAddressesClient $userAddresses
     */
    public UserAddressesClient $userAddresses;

    /**
     * @var UserGroupsClient $userGroups
     */
    public UserGroupsClient $userGroups;

    /**
     * @var UsersClient $users
     */
    public UsersClient $users;

    /**
     * @var UserTagsClient $userTags
     */
    public UserTagsClient $userTags;

    /**
     * @var WarehouseLogsClient $warehouseLogs
     */
    public WarehouseLogsClient $warehouseLogs;

    /**
     * @var WarehouseRelocationsClient $warehouseRelocations
     */
    public WarehouseRelocationsClient $warehouseRelocations;

    /**
     * @var WarehousesClient $warehouses
     */
    public WarehousesClient $warehouses;

    /**
     * @var WebhooksClient $webhooks
     */
    public WebhooksClient $webhooks;

    /**
     * @var ZonesClient $zones
     */
    public ZonesClient $zones;

    /**
     * @var array{
     *   baseUrl?: string,
     *   client?: ClientInterface,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     * } $options @phpstan-ignore-next-line Property is used in endpoint methods via HttpEndpointGenerator
     */
    private array $options;

    /**
     * @var RawClient $client
     */
    private RawClient $client;

    /**
     * @param string $token The token to use for authentication.
     * @param ?array{
     *   baseUrl?: string,
     *   client?: ClientInterface,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     * } $options
     */
    public function __construct(
        string $token,
        ?array $options = null,
    ) {
        $defaultHeaders = [
            'Authorization' => "Bearer $token",
            'X-Fern-Language' => 'PHP',
            'X-Fern-SDK-Name' => 'Shoper\Sdk\Rest',
        ];

        $this->options = $options ?? [];

        $this->options['headers'] = array_merge(
            $defaultHeaders,
            $this->options['headers'] ?? [],
        );

        $this->client = new RawClient(
            options: $this->options,
        );

        $this->aboutpages = new AboutpagesClient($this->client, $this->options);
        $this->additionalFields = new AdditionalFieldsClient($this->client, $this->options);
        $this->additionalFieldOptions = new AdditionalFieldOptionsClient($this->client, $this->options);
        $this->applicationConfigs = new ApplicationConfigsClient($this->client, $this->options);
        $this->applicationLocks = new ApplicationLocksClient($this->client, $this->options);
        $this->applicationVersions = new ApplicationVersionsClient($this->client, $this->options);
        $this->attributeGroups = new AttributeGroupsClient($this->client, $this->options);
        $this->attributes = new AttributesClient($this->client, $this->options);
        $this->auctionHouses = new AuctionHousesClient($this->client, $this->options);
        $this->auctionOrders = new AuctionOrdersClient($this->client, $this->options);
        $this->auctions = new AuctionsClient($this->client, $this->options);
        $this->availabilities = new AvailabilitiesClient($this->client, $this->options);
        $this->categories = new CategoriesClient($this->client, $this->options);
        $this->categoriesTrees = new CategoriesTreesClient($this->client, $this->options);
        $this->collections = new CollectionsClient($this->client, $this->options);
        $this->collectionsProducts = new CollectionsProductsClient($this->client, $this->options);
        $this->currencies = new CurrenciesClient($this->client, $this->options);
        $this->dashboardActivities = new DashboardActivitiesClient($this->client, $this->options);
        $this->dashboardStats = new DashboardStatsClient($this->client, $this->options);
        $this->deliveries = new DeliveriesClient($this->client, $this->options);
        $this->gauges = new GaugesClient($this->client, $this->options);
        $this->geolocationCountries = new GeolocationCountriesClient($this->client, $this->options);
        $this->geolocationRegions = new GeolocationRegionsClient($this->client, $this->options);
        $this->geolocationSubregions = new GeolocationSubregionsClient($this->client, $this->options);
        $this->languages = new LanguagesClient($this->client, $this->options);
        $this->loyaltyEvents = new LoyaltyEventsClient($this->client, $this->options);
        $this->metafieldValues = new MetafieldValuesClient($this->client, $this->options);
        $this->metafields = new MetafieldsClient($this->client, $this->options);
        $this->news = new NewsClient($this->client, $this->options);
        $this->newsCategories = new NewsCategoriesClient($this->client, $this->options);
        $this->newsComments = new NewsCommentsClient($this->client, $this->options);
        $this->newsFiles = new NewsFilesClient($this->client, $this->options);
        $this->newsTags = new NewsTagsClient($this->client, $this->options);
        $this->objectMtimes = new ObjectMtimesClient($this->client, $this->options);
        $this->optionGroups = new OptionGroupsClient($this->client, $this->options);
        $this->optionValues = new OptionValuesClient($this->client, $this->options);
        $this->productOptions = new ProductOptionsClient($this->client, $this->options);
        $this->orderProducts = new OrderProductsClient($this->client, $this->options);
        $this->orderRefunds = new OrderRefundsClient($this->client, $this->options);
        $this->orderTransactions = new OrderTransactionsClient($this->client, $this->options);
        $this->orders = new OrdersClient($this->client, $this->options);
        $this->orderTags = new OrderTagsClient($this->client, $this->options);
        $this->parcels = new ParcelsClient($this->client, $this->options);
        $this->payments = new PaymentsClient($this->client, $this->options);
        $this->paymentsChannels = new PaymentsChannelsClient($this->client, $this->options);
        $this->producers = new ProducersClient($this->client, $this->options);
        $this->productFiles = new ProductFilesClient($this->client, $this->options);
        $this->productImages = new ProductImagesClient($this->client, $this->options);
        $this->productSafetyCertificates = new ProductSafetyCertificatesClient($this->client, $this->options);
        $this->productSafetyImporters = new ProductSafetyImportersClient($this->client, $this->options);
        $this->productSafetyProducers = new ProductSafetyProducersClient($this->client, $this->options);
        $this->productSafetyResponsibles = new ProductSafetyResponsiblesClient($this->client, $this->options);
        $this->productStocks = new ProductStocksClient($this->client, $this->options);
        $this->products = new ProductsClient($this->client, $this->options);
        $this->productTags = new ProductTagsClient($this->client, $this->options);
        $this->progresses = new ProgressesClient($this->client, $this->options);
        $this->promotionCodes = new PromotionCodesClient($this->client, $this->options);
        $this->redirects = new RedirectsClient($this->client, $this->options);
        $this->shippings = new ShippingsClient($this->client, $this->options);
        $this->specialoffers = new SpecialoffersClient($this->client, $this->options);
        $this->statuses = new StatusesClient($this->client, $this->options);
        $this->subscriberGroups = new SubscriberGroupsClient($this->client, $this->options);
        $this->subscribers = new SubscribersClient($this->client, $this->options);
        $this->taxes = new TaxesClient($this->client, $this->options);
        $this->units = new UnitsClient($this->client, $this->options);
        $this->userAddresses = new UserAddressesClient($this->client, $this->options);
        $this->userGroups = new UserGroupsClient($this->client, $this->options);
        $this->users = new UsersClient($this->client, $this->options);
        $this->userTags = new UserTagsClient($this->client, $this->options);
        $this->warehouseLogs = new WarehouseLogsClient($this->client, $this->options);
        $this->warehouseRelocations = new WarehouseRelocationsClient($this->client, $this->options);
        $this->warehouses = new WarehousesClient($this->client, $this->options);
        $this->webhooks = new WebhooksClient($this->client, $this->options);
        $this->zones = new ZonesClient($this->client, $this->options);
    }
}
