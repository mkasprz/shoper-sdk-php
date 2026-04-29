<?php

namespace Shoper\Sdk\Rest\GeolocationSubregions;

use Psr\Http\Client\ClientInterface;
use Shoper\Sdk\Rest\Core\Client\RawClient;
use Shoper\Sdk\Rest\GeolocationSubregions\Requests\ListGeolocationSubregionsRequest;
use Shoper\Sdk\Rest\GeolocationSubregions\Types\ListGeolocationSubregionsResponse;
use Shoper\Sdk\Rest\Exceptions\ShoperException;
use Shoper\Sdk\Rest\Exceptions\ShoperApiException;
use Shoper\Sdk\Rest\Core\Json\JsonApiRequest;
use Shoper\Sdk\Rest\Environments;
use Shoper\Sdk\Rest\Core\Client\HttpMethod;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use Shoper\Sdk\Rest\Types\GeolocationSubregion;

class GeolocationSubregionsClient
{
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
     * @param RawClient $client
     * @param ?array{
     *   baseUrl?: string,
     *   client?: ClientInterface,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     * } $options
     */
    public function __construct(
        RawClient $client,
        ?array $options = null,
    ) {
        $this->client = $client;
        $this->options = $options ?? [];
    }

    /**
     * @param ListGeolocationSubregionsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?ListGeolocationSubregionsResponse
     * @throws ShoperException
     * @throws ShoperApiException
     */
    public function listGeolocationSubregions(ListGeolocationSubregionsRequest $request = new ListGeolocationSubregionsRequest(), ?array $options = null): ?ListGeolocationSubregionsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        if ($request->limit != null) {
            $query['limit'] = $request->limit;
        }
        if ($request->page != null) {
            $query['page'] = $request->page;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "webapi/rest/geolocation-subregions",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return ListGeolocationSubregionsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ShoperException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ShoperException(message: $e->getMessage(), previous: $e);
        }
        throw new ShoperApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * @param string $id
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GeolocationSubregion
     * @throws ShoperException
     * @throws ShoperApiException
     */
    public function getGeolocationSubregion(string $id, ?array $options = null): ?GeolocationSubregion
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "webapi/rest/geolocation-subregions/{$id}",
                    method: HttpMethod::GET,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return GeolocationSubregion::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ShoperException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new ShoperException(message: $e->getMessage(), previous: $e);
        }
        throw new ShoperApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }
}
