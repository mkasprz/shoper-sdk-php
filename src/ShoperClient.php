<?php

declare(strict_types=1);

namespace Shoper\Sdk;

use GuzzleHttp\Client as HttpClient;
use Shoper\Sdk\Exception\InvalidAuthCodeException;
use Shoper\Sdk\Exception\InvalidCredentialsException;
use Shoper\Sdk\Exception\InvalidRefreshTokenException;
use Shoper\Sdk\Rest\RestClient;

/**
 * Shoper REST API client facade.
 *
 * Usage:
 *   $client = new ShoperClient('https://shop.example.com');
 *   $client->authenticateOAuth($clientId, $clientSecret, $code);
 *   $products = $client->products()->list(['limit' => 50, 'page' => 1]);
 *
 * @method \Shoper\Sdk\Rest\Aboutpages\AboutpagesClient aboutpages()
 * @method \Shoper\Sdk\Rest\AdditionalFieldOptions\AdditionalFieldOptionsClient additionalFieldOptions()
 * @method \Shoper\Sdk\Rest\AdditionalFields\AdditionalFieldsClient additionalFields()
 * @method \Shoper\Sdk\Rest\ApplicationConfigs\ApplicationConfigsClient applicationConfigs()
 * @method \Shoper\Sdk\Rest\ApplicationLocks\ApplicationLocksClient applicationLocks()
 * @method \Shoper\Sdk\Rest\ApplicationVersions\ApplicationVersionsClient applicationVersions()
 * @method \Shoper\Sdk\Rest\AttributeGroups\AttributeGroupsClient attributeGroups()
 * @method \Shoper\Sdk\Rest\Attributes\AttributesClient attributes()
 * @method \Shoper\Sdk\Rest\AuctionHouses\AuctionHousesClient auctionHouses()
 * @method \Shoper\Sdk\Rest\AuctionOrders\AuctionOrdersClient auctionOrders()
 * @method \Shoper\Sdk\Rest\Auctions\AuctionsClient auctions()
 * @method \Shoper\Sdk\Rest\Availabilities\AvailabilitiesClient availabilities()
 * @method \Shoper\Sdk\Rest\Categories\CategoriesClient categories()
 * @method \Shoper\Sdk\Rest\CategoriesTrees\CategoriesTreesClient categoriesTrees()
 * @method \Shoper\Sdk\Rest\Collections\CollectionsClient collections()
 * @method \Shoper\Sdk\Rest\CollectionsProducts\CollectionsProductsClient collectionsProducts()
 * @method \Shoper\Sdk\Rest\Currencies\CurrenciesClient currencies()
 * @method \Shoper\Sdk\Rest\DashboardActivities\DashboardActivitiesClient dashboardActivities()
 * @method \Shoper\Sdk\Rest\DashboardStats\DashboardStatsClient dashboardStats()
 * @method \Shoper\Sdk\Rest\Deliveries\DeliveriesClient deliveries()
 * @method \Shoper\Sdk\Rest\Gauges\GaugesClient gauges()
 * @method \Shoper\Sdk\Rest\GeolocationCountries\GeolocationCountriesClient geolocationCountries()
 * @method \Shoper\Sdk\Rest\GeolocationRegions\GeolocationRegionsClient geolocationRegions()
 * @method \Shoper\Sdk\Rest\GeolocationSubregions\GeolocationSubregionsClient geolocationSubregions()
 * @method \Shoper\Sdk\Rest\Languages\LanguagesClient languages()
 * @method \Shoper\Sdk\Rest\LoyaltyEvents\LoyaltyEventsClient loyaltyEvents()
 * @method \Shoper\Sdk\Rest\MetafieldValues\MetafieldValuesClient metafieldValues()
 * @method \Shoper\Sdk\Rest\Metafields\MetafieldsClient metafields()
 * @method \Shoper\Sdk\Rest\News\NewsClient news()
 * @method \Shoper\Sdk\Rest\NewsCategories\NewsCategoriesClient newsCategories()
 * @method \Shoper\Sdk\Rest\NewsComments\NewsCommentsClient newsComments()
 * @method \Shoper\Sdk\Rest\NewsFiles\NewsFilesClient newsFiles()
 * @method \Shoper\Sdk\Rest\NewsTags\NewsTagsClient newsTags()
 * @method \Shoper\Sdk\Rest\ObjectMtimes\ObjectMtimesClient objectMtimes()
 * @method \Shoper\Sdk\Rest\OptionGroups\OptionGroupsClient optionGroups()
 * @method \Shoper\Sdk\Rest\OptionValues\OptionValuesClient optionValues()
 * @method \Shoper\Sdk\Rest\OrderProducts\OrderProductsClient orderProducts()
 * @method \Shoper\Sdk\Rest\OrderRefunds\OrderRefundsClient orderRefunds()
 * @method \Shoper\Sdk\Rest\OrderTags\OrderTagsClient orderTags()
 * @method \Shoper\Sdk\Rest\OrderTransactions\OrderTransactionsClient orderTransactions()
 * @method \Shoper\Sdk\Rest\Orders\OrdersClient orders()
 * @method \Shoper\Sdk\Rest\Parcels\ParcelsClient parcels()
 * @method \Shoper\Sdk\Rest\Payments\PaymentsClient payments()
 * @method \Shoper\Sdk\Rest\PaymentsChannels\PaymentsChannelsClient paymentsChannels()
 * @method \Shoper\Sdk\Rest\Producers\ProducersClient producers()
 * @method \Shoper\Sdk\Rest\ProductFiles\ProductFilesClient productFiles()
 * @method \Shoper\Sdk\Rest\ProductImages\ProductImagesClient productImages()
 * @method \Shoper\Sdk\Rest\ProductOptions\ProductOptionsClient productOptions()
 * @method \Shoper\Sdk\Rest\ProductSafetyCertificates\ProductSafetyCertificatesClient productSafetyCertificates()
 * @method \Shoper\Sdk\Rest\ProductSafetyImporters\ProductSafetyImportersClient productSafetyImporters()
 * @method \Shoper\Sdk\Rest\ProductSafetyProducers\ProductSafetyProducersClient productSafetyProducers()
 * @method \Shoper\Sdk\Rest\ProductSafetyResponsibles\ProductSafetyResponsiblesClient productSafetyResponsibles()
 * @method \Shoper\Sdk\Rest\ProductStocks\ProductStocksClient productStocks()
 * @method \Shoper\Sdk\Rest\ProductTags\ProductTagsClient productTags()
 * @method \Shoper\Sdk\Rest\Products\ProductsClient products()
 * @method \Shoper\Sdk\Rest\Progresses\ProgressesClient progresses()
 * @method \Shoper\Sdk\Rest\PromotionCodes\PromotionCodesClient promotionCodes()
 * @method \Shoper\Sdk\Rest\Redirects\RedirectsClient redirects()
 * @method \Shoper\Sdk\Rest\Shippings\ShippingsClient shippings()
 * @method \Shoper\Sdk\Rest\Specialoffers\SpecialoffersClient specialoffers()
 * @method \Shoper\Sdk\Rest\Statuses\StatusesClient statuses()
 * @method \Shoper\Sdk\Rest\SubscriberGroups\SubscriberGroupsClient subscriberGroups()
 * @method \Shoper\Sdk\Rest\Subscribers\SubscribersClient subscribers()
 * @method \Shoper\Sdk\Rest\Taxes\TaxesClient taxes()
 * @method \Shoper\Sdk\Rest\Units\UnitsClient units()
 * @method \Shoper\Sdk\Rest\UserAddresses\UserAddressesClient userAddresses()
 * @method \Shoper\Sdk\Rest\UserGroups\UserGroupsClient userGroups()
 * @method \Shoper\Sdk\Rest\UserTags\UserTagsClient userTags()
 * @method \Shoper\Sdk\Rest\Users\UsersClient users()
 * @method \Shoper\Sdk\Rest\WarehouseLogs\WarehouseLogsClient warehouseLogs()
 * @method \Shoper\Sdk\Rest\WarehouseRelocations\WarehouseRelocationsClient warehouseRelocations()
 * @method \Shoper\Sdk\Rest\Warehouses\WarehousesClient warehouses()
 * @method \Shoper\Sdk\Rest\Webhooks\WebhooksClient webhooks()
 * @method \Shoper\Sdk\Rest\Zones\ZonesClient zones()
 */
final class ShoperClient
{
    private string $baseUrl;
    private ?string $accessToken = null;
    private HttpClient $http;
    private ?RestClient $rawClient = null;

    public function __construct(string $baseUrl, ?string $accessToken = null, ?HttpClient $http = null)
    {
        $this->baseUrl = rtrim($baseUrl, '/');
        $this->http = $http ?? new HttpClient(['http_errors' => false, 'base_uri' => $this->baseUrl]);
        if ($accessToken !== null) {
            $this->setToken($accessToken);
        }
    }

    public function getBaseUrl(): string
    {
        return $this->baseUrl;
    }

    public function getToken(): ?string
    {
        return $this->accessToken;
    }

    public function setToken(string $accessToken): void
    {
        $this->accessToken = $accessToken;
        $this->rawClient = null;
    }

    /**
     * Admin Basic auth → POST /webapi/rest/auth
     * @return array{access_token: string, expires_in: int}
     */
    public function authenticate(string $username, string $password): array
    {
        $response = $this->http->post($this->baseUrl . '/webapi/rest/auth', [
            'headers' => [
                'Authorization' => 'Basic ' . base64_encode($username . ':' . $password),
            ],
        ]);
        $body = json_decode((string) $response->getBody(), true) ?: [];
        if ($response->getStatusCode() !== 200 || !isset($body['access_token'])) {
            throw new InvalidCredentialsException(
                $body['error'] ?? 'Admin authentication failed', $body
            );
        }
        $this->setToken($body['access_token']);
        return $body;
    }

    /**
     * OAuth authorization_code grant.
     * @return array{access_token: string, refresh_token: string, expires_in: int, scope?: string}
     */
    public function authenticateOAuth(string $clientId, string $clientSecret, string $authorizationCode): array
    {
        return $this->oauthTokenRequest([
            'grant_type' => 'authorization_code',
            'code' => $authorizationCode,
        ], $clientId, $clientSecret, InvalidAuthCodeException::class);
    }

    /**
     * OAuth refresh_token grant.
     * @return array{access_token: string, refresh_token: string, expires_in: int}
     */
    public function refreshToken(string $clientId, string $clientSecret, string $refreshToken): array
    {
        return $this->oauthTokenRequest([
            'grant_type' => 'refresh_token',
            'refresh_token' => $refreshToken,
        ], $clientId, $clientSecret, InvalidRefreshTokenException::class);
    }

    public function bulk(): BulkRequestBuilder
    {
        if ($this->accessToken === null) {
            throw new \RuntimeException('ShoperClient is not authenticated — call authenticate/authenticateOAuth/setToken first.');
        }
        return new BulkRequestBuilder($this->baseUrl, $this->accessToken);
    }

    /**
     * Escape hatch — returns Fern-generated REST client for typed access.
     */
    public function restClient(): RestClient
    {
        return $this->raw();
    }

    public function aboutpages(): \Shoper\Sdk\Rest\Aboutpages\AboutpagesClient
    {
        return $this->raw()->aboutpages;
    }

    public function additionalFieldOptions(): \Shoper\Sdk\Rest\AdditionalFieldOptions\AdditionalFieldOptionsClient
    {
        return $this->raw()->additionalFieldOptions;
    }

    public function additionalFields(): \Shoper\Sdk\Rest\AdditionalFields\AdditionalFieldsClient
    {
        return $this->raw()->additionalFields;
    }

    public function applicationConfigs(): \Shoper\Sdk\Rest\ApplicationConfigs\ApplicationConfigsClient
    {
        return $this->raw()->applicationConfigs;
    }

    public function applicationLocks(): \Shoper\Sdk\Rest\ApplicationLocks\ApplicationLocksClient
    {
        return $this->raw()->applicationLocks;
    }

    public function applicationVersions(): \Shoper\Sdk\Rest\ApplicationVersions\ApplicationVersionsClient
    {
        return $this->raw()->applicationVersions;
    }

    public function attributeGroups(): \Shoper\Sdk\Rest\AttributeGroups\AttributeGroupsClient
    {
        return $this->raw()->attributeGroups;
    }

    public function attributes(): \Shoper\Sdk\Rest\Attributes\AttributesClient
    {
        return $this->raw()->attributes;
    }

    public function auctionHouses(): \Shoper\Sdk\Rest\AuctionHouses\AuctionHousesClient
    {
        return $this->raw()->auctionHouses;
    }

    public function auctionOrders(): \Shoper\Sdk\Rest\AuctionOrders\AuctionOrdersClient
    {
        return $this->raw()->auctionOrders;
    }

    public function auctions(): \Shoper\Sdk\Rest\Auctions\AuctionsClient
    {
        return $this->raw()->auctions;
    }

    public function availabilities(): \Shoper\Sdk\Rest\Availabilities\AvailabilitiesClient
    {
        return $this->raw()->availabilities;
    }

    public function categories(): \Shoper\Sdk\Rest\Categories\CategoriesClient
    {
        return $this->raw()->categories;
    }

    public function categoriesTrees(): \Shoper\Sdk\Rest\CategoriesTrees\CategoriesTreesClient
    {
        return $this->raw()->categoriesTrees;
    }

    public function collections(): \Shoper\Sdk\Rest\Collections\CollectionsClient
    {
        return $this->raw()->collections;
    }

    public function collectionsProducts(): \Shoper\Sdk\Rest\CollectionsProducts\CollectionsProductsClient
    {
        return $this->raw()->collectionsProducts;
    }

    public function currencies(): \Shoper\Sdk\Rest\Currencies\CurrenciesClient
    {
        return $this->raw()->currencies;
    }

    public function dashboardActivities(): \Shoper\Sdk\Rest\DashboardActivities\DashboardActivitiesClient
    {
        return $this->raw()->dashboardActivities;
    }

    public function dashboardStats(): \Shoper\Sdk\Rest\DashboardStats\DashboardStatsClient
    {
        return $this->raw()->dashboardStats;
    }

    public function deliveries(): \Shoper\Sdk\Rest\Deliveries\DeliveriesClient
    {
        return $this->raw()->deliveries;
    }

    public function gauges(): \Shoper\Sdk\Rest\Gauges\GaugesClient
    {
        return $this->raw()->gauges;
    }

    public function geolocationCountries(): \Shoper\Sdk\Rest\GeolocationCountries\GeolocationCountriesClient
    {
        return $this->raw()->geolocationCountries;
    }

    public function geolocationRegions(): \Shoper\Sdk\Rest\GeolocationRegions\GeolocationRegionsClient
    {
        return $this->raw()->geolocationRegions;
    }

    public function geolocationSubregions(): \Shoper\Sdk\Rest\GeolocationSubregions\GeolocationSubregionsClient
    {
        return $this->raw()->geolocationSubregions;
    }

    public function languages(): \Shoper\Sdk\Rest\Languages\LanguagesClient
    {
        return $this->raw()->languages;
    }

    public function loyaltyEvents(): \Shoper\Sdk\Rest\LoyaltyEvents\LoyaltyEventsClient
    {
        return $this->raw()->loyaltyEvents;
    }

    public function metafieldValues(): \Shoper\Sdk\Rest\MetafieldValues\MetafieldValuesClient
    {
        return $this->raw()->metafieldValues;
    }

    public function metafields(): \Shoper\Sdk\Rest\Metafields\MetafieldsClient
    {
        return $this->raw()->metafields;
    }

    public function news(): \Shoper\Sdk\Rest\News\NewsClient
    {
        return $this->raw()->news;
    }

    public function newsCategories(): \Shoper\Sdk\Rest\NewsCategories\NewsCategoriesClient
    {
        return $this->raw()->newsCategories;
    }

    public function newsComments(): \Shoper\Sdk\Rest\NewsComments\NewsCommentsClient
    {
        return $this->raw()->newsComments;
    }

    public function newsFiles(): \Shoper\Sdk\Rest\NewsFiles\NewsFilesClient
    {
        return $this->raw()->newsFiles;
    }

    public function newsTags(): \Shoper\Sdk\Rest\NewsTags\NewsTagsClient
    {
        return $this->raw()->newsTags;
    }

    public function objectMtimes(): \Shoper\Sdk\Rest\ObjectMtimes\ObjectMtimesClient
    {
        return $this->raw()->objectMtimes;
    }

    public function optionGroups(): \Shoper\Sdk\Rest\OptionGroups\OptionGroupsClient
    {
        return $this->raw()->optionGroups;
    }

    public function optionValues(): \Shoper\Sdk\Rest\OptionValues\OptionValuesClient
    {
        return $this->raw()->optionValues;
    }

    public function orderProducts(): \Shoper\Sdk\Rest\OrderProducts\OrderProductsClient
    {
        return $this->raw()->orderProducts;
    }

    public function orderRefunds(): \Shoper\Sdk\Rest\OrderRefunds\OrderRefundsClient
    {
        return $this->raw()->orderRefunds;
    }

    public function orderTags(): \Shoper\Sdk\Rest\OrderTags\OrderTagsClient
    {
        return $this->raw()->orderTags;
    }

    public function orderTransactions(): \Shoper\Sdk\Rest\OrderTransactions\OrderTransactionsClient
    {
        return $this->raw()->orderTransactions;
    }

    public function orders(): \Shoper\Sdk\Rest\Orders\OrdersClient
    {
        return $this->raw()->orders;
    }

    public function parcels(): \Shoper\Sdk\Rest\Parcels\ParcelsClient
    {
        return $this->raw()->parcels;
    }

    public function payments(): \Shoper\Sdk\Rest\Payments\PaymentsClient
    {
        return $this->raw()->payments;
    }

    public function paymentsChannels(): \Shoper\Sdk\Rest\PaymentsChannels\PaymentsChannelsClient
    {
        return $this->raw()->paymentsChannels;
    }

    public function producers(): \Shoper\Sdk\Rest\Producers\ProducersClient
    {
        return $this->raw()->producers;
    }

    public function productFiles(): \Shoper\Sdk\Rest\ProductFiles\ProductFilesClient
    {
        return $this->raw()->productFiles;
    }

    public function productImages(): \Shoper\Sdk\Rest\ProductImages\ProductImagesClient
    {
        return $this->raw()->productImages;
    }

    public function productOptions(): \Shoper\Sdk\Rest\ProductOptions\ProductOptionsClient
    {
        return $this->raw()->productOptions;
    }

    public function productSafetyCertificates(): \Shoper\Sdk\Rest\ProductSafetyCertificates\ProductSafetyCertificatesClient
    {
        return $this->raw()->productSafetyCertificates;
    }

    public function productSafetyImporters(): \Shoper\Sdk\Rest\ProductSafetyImporters\ProductSafetyImportersClient
    {
        return $this->raw()->productSafetyImporters;
    }

    public function productSafetyProducers(): \Shoper\Sdk\Rest\ProductSafetyProducers\ProductSafetyProducersClient
    {
        return $this->raw()->productSafetyProducers;
    }

    public function productSafetyResponsibles(): \Shoper\Sdk\Rest\ProductSafetyResponsibles\ProductSafetyResponsiblesClient
    {
        return $this->raw()->productSafetyResponsibles;
    }

    public function productStocks(): \Shoper\Sdk\Rest\ProductStocks\ProductStocksClient
    {
        return $this->raw()->productStocks;
    }

    public function productTags(): \Shoper\Sdk\Rest\ProductTags\ProductTagsClient
    {
        return $this->raw()->productTags;
    }

    public function products(): \Shoper\Sdk\Rest\Products\ProductsClient
    {
        return $this->raw()->products;
    }

    public function progresses(): \Shoper\Sdk\Rest\Progresses\ProgressesClient
    {
        return $this->raw()->progresses;
    }

    public function promotionCodes(): \Shoper\Sdk\Rest\PromotionCodes\PromotionCodesClient
    {
        return $this->raw()->promotionCodes;
    }

    public function redirects(): \Shoper\Sdk\Rest\Redirects\RedirectsClient
    {
        return $this->raw()->redirects;
    }

    public function shippings(): \Shoper\Sdk\Rest\Shippings\ShippingsClient
    {
        return $this->raw()->shippings;
    }

    public function specialoffers(): \Shoper\Sdk\Rest\Specialoffers\SpecialoffersClient
    {
        return $this->raw()->specialoffers;
    }

    public function statuses(): \Shoper\Sdk\Rest\Statuses\StatusesClient
    {
        return $this->raw()->statuses;
    }

    public function subscriberGroups(): \Shoper\Sdk\Rest\SubscriberGroups\SubscriberGroupsClient
    {
        return $this->raw()->subscriberGroups;
    }

    public function subscribers(): \Shoper\Sdk\Rest\Subscribers\SubscribersClient
    {
        return $this->raw()->subscribers;
    }

    public function taxes(): \Shoper\Sdk\Rest\Taxes\TaxesClient
    {
        return $this->raw()->taxes;
    }

    public function units(): \Shoper\Sdk\Rest\Units\UnitsClient
    {
        return $this->raw()->units;
    }

    public function userAddresses(): \Shoper\Sdk\Rest\UserAddresses\UserAddressesClient
    {
        return $this->raw()->userAddresses;
    }

    public function userGroups(): \Shoper\Sdk\Rest\UserGroups\UserGroupsClient
    {
        return $this->raw()->userGroups;
    }

    public function userTags(): \Shoper\Sdk\Rest\UserTags\UserTagsClient
    {
        return $this->raw()->userTags;
    }

    public function users(): \Shoper\Sdk\Rest\Users\UsersClient
    {
        return $this->raw()->users;
    }

    public function warehouseLogs(): \Shoper\Sdk\Rest\WarehouseLogs\WarehouseLogsClient
    {
        return $this->raw()->warehouseLogs;
    }

    public function warehouseRelocations(): \Shoper\Sdk\Rest\WarehouseRelocations\WarehouseRelocationsClient
    {
        return $this->raw()->warehouseRelocations;
    }

    public function warehouses(): \Shoper\Sdk\Rest\Warehouses\WarehousesClient
    {
        return $this->raw()->warehouses;
    }

    public function webhooks(): \Shoper\Sdk\Rest\Webhooks\WebhooksClient
    {
        return $this->raw()->webhooks;
    }

    public function zones(): \Shoper\Sdk\Rest\Zones\ZonesClient
    {
        return $this->raw()->zones;
    }

    /**
     * Magic delegation to Fern-generated resource clients.
     * e.g. $client->products() -> $this->restClient()->products
     *
     * Fern generates resource clients as public properties on RestClient,
     * not as methods. This magic method first tries a real method call,
     * then falls back to property access so callers can use the ergonomic
     * $client->products()->list(...) style regardless of Fern output mode.
     *
     * @param array<int, mixed> $arguments
     */
    public function __call(string $name, array $arguments): mixed
    {
        $rest = $this->restClient();
        if (method_exists($rest, $name)) {
            return $rest->$name(...$arguments);
        }
        if (property_exists($rest, $name)) {
            // Fern generates resource clients as public properties;
            // expose them as no-arg method calls for ergonomic access.
            return $rest->$name;
        }
        throw new \BadMethodCallException(sprintf(
            'Method or resource %s::%s does not exist on the REST client.',
            get_class($rest),
            $name
        ));
    }

    private function raw(): RestClient
    {
        if ($this->accessToken === null) {
            throw new \RuntimeException('ShoperClient is not authenticated — call authenticate/authenticateOAuth/setToken first.');
        }
        if ($this->rawClient === null) {
            $this->rawClient = new RestClient($this->accessToken, ['baseUrl' => $this->baseUrl]);
        }
        return $this->rawClient;
    }

    /**
     * @param array<string, string> $formParams
     * @param class-string<Exception\AuthenticationException> $errorClass
     * @return array<string, mixed>
     */
    private function oauthTokenRequest(array $formParams, string $clientId, string $clientSecret, string $errorClass): array
    {
        $response = $this->http->post($this->baseUrl . '/webapi/rest/oauth/token', [
            'headers' => [
                'Authorization' => 'Basic ' . base64_encode($clientId . ':' . $clientSecret),
                'Content-Type' => 'application/x-www-form-urlencoded',
            ],
            'form_params' => $formParams,
        ]);
        $body = json_decode((string) $response->getBody(), true) ?: [];
        if ($response->getStatusCode() !== 200 || !isset($body['access_token'])) {
            $msg = $body['error_description'] ?? $body['error'] ?? 'OAuth token request failed';
            throw new $errorClass((string) $msg, $body);
        }
        $this->setToken($body['access_token']);
        return $body;
    }
}
