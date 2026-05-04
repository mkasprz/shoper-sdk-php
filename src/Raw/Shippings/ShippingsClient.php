<?php

namespace Shoper\Sdk\Rest\Shippings;

use Psr\Http\Client\ClientInterface;
use Shoper\Sdk\Rest\Core\Client\RawClient;
use Shoper\Sdk\Rest\Shippings\Requests\ListShippingsRequest;
use Shoper\Sdk\Rest\Shippings\Types\ListShippingsResponse;
use Shoper\Sdk\Rest\Exceptions\ShoperException;
use Shoper\Sdk\Rest\Exceptions\ShoperApiException;
use Shoper\Sdk\Rest\Core\Json\JsonApiRequest;
use Shoper\Sdk\Rest\Environments;
use Shoper\Sdk\Rest\Core\Client\HttpMethod;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use Shoper\Sdk\Rest\Shippings\Requests\ShippingInsert;
use Shoper\Sdk\Rest\Types\Shipping;
use Shoper\Sdk\Rest\Core\Json\JsonDecoder;
use Shoper\Sdk\Rest\Core\Types\Union;
use Shoper\Sdk\Rest\Shippings\Requests\ShippingUpdate;

class ShippingsClient
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
     * @param ListShippingsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?ListShippingsResponse
     * @throws ShoperException
     * @throws ShoperApiException
     */
    public function listShippings(ListShippingsRequest $request = new ListShippingsRequest(), ?array $options = null): ?ListShippingsResponse
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
                    path: "webapi/rest/shippings",
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
                return ListShippingsResponse::fromJson($json);
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
     * @param ShippingInsert $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return (
     *    int
     *   |Shipping
     * )|null
     * @throws ShoperException
     * @throws ShoperApiException
     */
    public function createShipping(ShippingInsert $request, ?array $options = null): int|Shipping|null
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "webapi/rest/shippings",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return JsonDecoder::decodeUnion($json, new Union('integer', Shipping::class)); // @phpstan-ignore-line
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
     * @return ?Shipping
     * @throws ShoperException
     * @throws ShoperApiException
     */
    public function getShipping(string $id, ?array $options = null): ?Shipping
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "webapi/rest/shippings/{$id}",
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
                return Shipping::fromJson($json);
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
     * @param ShippingUpdate $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return (
     *    int
     *   |Shipping
     * )|null
     * @throws ShoperException
     * @throws ShoperApiException
     */
    public function updateShipping(string $id, ShippingUpdate $request = new ShippingUpdate(), ?array $options = null): int|Shipping|null
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "webapi/rest/shippings/{$id}",
                    method: HttpMethod::PUT,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return JsonDecoder::decodeUnion($json, new Union('integer', Shipping::class)); // @phpstan-ignore-line
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
     * @return ?int
     * @throws ShoperException
     * @throws ShoperApiException
     */
    public function deleteShipping(string $id, ?array $options = null): ?int
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "webapi/rest/shippings/{$id}",
                    method: HttpMethod::DELETE,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return JsonDecoder::decodeInt($json);
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
