<?php

namespace Shoper\Sdk\Rest\ProductSafetyResponsibles;

use Psr\Http\Client\ClientInterface;
use Shoper\Sdk\Rest\Core\Client\RawClient;
use Shoper\Sdk\Rest\ProductSafetyResponsibles\Requests\ListProductSafetyResponsiblesRequest;
use Shoper\Sdk\Rest\ProductSafetyResponsibles\Types\ListProductSafetyResponsiblesResponse;
use Shoper\Sdk\Rest\Exceptions\ShoperException;
use Shoper\Sdk\Rest\Exceptions\ShoperApiException;
use Shoper\Sdk\Rest\Core\Json\JsonApiRequest;
use Shoper\Sdk\Rest\Environments;
use Shoper\Sdk\Rest\Core\Client\HttpMethod;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use Shoper\Sdk\Rest\ProductSafetyResponsibles\Requests\ProductSafetyResponsibleInsert;
use Shoper\Sdk\Rest\Types\ProductSafetyResponsible;
use Shoper\Sdk\Rest\Core\Json\JsonDecoder;
use Shoper\Sdk\Rest\Core\Types\Union;
use Shoper\Sdk\Rest\ProductSafetyResponsibles\Requests\ProductSafetyResponsibleUpdate;

class ProductSafetyResponsiblesClient
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
     * @param ListProductSafetyResponsiblesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?ListProductSafetyResponsiblesResponse
     * @throws ShoperException
     * @throws ShoperApiException
     */
    public function list(ListProductSafetyResponsiblesRequest $request = new ListProductSafetyResponsiblesRequest(), ?array $options = null): ?ListProductSafetyResponsiblesResponse
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
                    path: "webapi/rest/product-safety-responsibles",
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
                return ListProductSafetyResponsiblesResponse::fromJson($json);
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
     * @param ProductSafetyResponsibleInsert $request
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
     *   |ProductSafetyResponsible
     * )|null
     * @throws ShoperException
     * @throws ShoperApiException
     */
    public function create(ProductSafetyResponsibleInsert $request, ?array $options = null): int|ProductSafetyResponsible|null
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "webapi/rest/product-safety-responsibles",
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
                return JsonDecoder::decodeUnion($json, new Union('integer', ProductSafetyResponsible::class)); // @phpstan-ignore-line
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
     * @param string $id Resource identifier.
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?ProductSafetyResponsible
     * @throws ShoperException
     * @throws ShoperApiException
     */
    public function get(string $id, ?array $options = null): ?ProductSafetyResponsible
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "webapi/rest/product-safety-responsibles/{$id}",
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
                return ProductSafetyResponsible::fromJson($json);
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
     * @param string $id Resource identifier.
     * @param ProductSafetyResponsibleUpdate $request
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
     *   |ProductSafetyResponsible
     * )|null
     * @throws ShoperException
     * @throws ShoperApiException
     */
    public function update(string $id, ProductSafetyResponsibleUpdate $request = new ProductSafetyResponsibleUpdate(), ?array $options = null): int|ProductSafetyResponsible|null
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "webapi/rest/product-safety-responsibles/{$id}",
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
                return JsonDecoder::decodeUnion($json, new Union('integer', ProductSafetyResponsible::class)); // @phpstan-ignore-line
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
     * @param string $id Resource identifier.
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
    public function delete(string $id, ?array $options = null): ?int
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Default_->value,
                    path: "webapi/rest/product-safety-responsibles/{$id}",
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
