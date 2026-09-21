<?php

declare(strict_types=1);

namespace Shoper\Sdk;

use GuzzleHttp\Client as HttpClient;
use Shoper\Sdk\Exception\BulkValidationException;

final class BulkRequestBuilder
{
    private const MAX_OPS = 25;
    private const VALID_METHODS = ['GET', 'POST', 'PUT', 'DELETE', 'HEAD', 'PATCH'];

    private string $baseUrl;
    private string $token;
    /** @var array<int, array<string, mixed>> */
    private array $operations = [];

    public function __construct(string $baseUrl, string $token)
    {
        $this->baseUrl = rtrim($baseUrl, '/');
        $this->token = $token;
    }

    public static function fromClient(ShoperClient $client): self
    {
        $token = $client->getToken();
        if ($token === null) {
            throw new \RuntimeException('ShoperClient is not authenticated — set a token first.');
        }
        return new self($client->getBaseUrl(), $token);
    }

    /**
     * @param array<string, mixed>|null $body
     * @param array<string, mixed>|null $params
     */
    public function add(string $id, string $method, string $path, ?array $body = null, ?array $params = null): self
    {
        if (count($this->operations) >= self::MAX_OPS) {
            throw new BulkValidationException(
                sprintf('Bulk request limit of %d operations exceeded', self::MAX_OPS)
            );
        }
        $methodUpper = strtoupper($method);
        if (!in_array($methodUpper, self::VALID_METHODS, true)) {
            throw new BulkValidationException(
                sprintf('Invalid HTTP method "%s". Valid methods: %s', $method, implode(', ', self::VALID_METHODS))
            );
        }
        $op = ['id' => $id, 'method' => $methodUpper, 'path' => $path];
        if ($body !== null) {
            $op['body'] = $body;
        }
        if ($params !== null) {
            $op['params'] = $params;
        }
        $this->operations[] = $op;
        return $this;
    }

    /** @return array<int, array<string, mixed>> */
    public function getOperations(): array
    {
        return $this->operations;
    }

    /**
     * Execute the batch. Returns an array of per-operation results keyed by op id.
     * @return array<string, mixed>
     */
    public function execute(?HttpClient $http = null): array
    {
        $http ??= new HttpClient();
        $response = $http->post($this->baseUrl . '/webapi/rest/bulk', [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->token,
                'Content-Type' => 'application/json',
            ],
            'body' => $this->operations,
        ]);
        $this->operations = [];
        $decoded = json_decode((string) $response->getBody(), true);
        return is_array($decoded) ? $decoded : [];
    }
}
