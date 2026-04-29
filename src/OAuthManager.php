<?php

declare(strict_types=1);

namespace Shoper\Sdk;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Exception\RequestException;
use Shoper\Sdk\Exception\InvalidAuthCodeException;
use Shoper\Sdk\Exception\InvalidRefreshTokenException;

final class OAuthManager
{
    private HttpClient $http;

    public function __construct(?HttpClient $http = null)
    {
        $this->http = $http ?? new HttpClient(['http_errors' => false]);
    }

    /**
     * @param array<int, string> $scopes
     */
    public function buildAuthorizationUrl(
        string $shopDomain,
        string $clientId,
        string $redirectUri,
        array $scopes = []
    ): string {
        $params = [
            'response_type' => 'code',
            'client_id' => $clientId,
            'redirect_uri' => $redirectUri,
        ];
        if (!empty($scopes)) {
            $params['scope'] = implode(' ', $scopes);
        }
        return rtrim($shopDomain, '/') . '/admin/oauth/authorize?' . http_build_query($params, '', '&', PHP_QUERY_RFC3986);
    }

    /**
     * @return array<string, mixed>
     * @throws InvalidAuthCodeException
     */
    public function exchangeCodeForToken(
        string $shopDomain,
        string $clientId,
        string $clientSecret,
        string $authorizationCode
    ): array {
        return $this->tokenRequest($shopDomain, $clientId, $clientSecret, [
            'grant_type' => 'authorization_code',
            'code' => $authorizationCode,
        ], InvalidAuthCodeException::class);
    }

    /**
     * @return array<string, mixed>
     * @throws InvalidRefreshTokenException
     */
    public function refreshAccessToken(
        string $shopDomain,
        string $clientId,
        string $clientSecret,
        string $refreshToken
    ): array {
        return $this->tokenRequest($shopDomain, $clientId, $clientSecret, [
            'grant_type' => 'refresh_token',
            'refresh_token' => $refreshToken,
        ], InvalidRefreshTokenException::class);
    }

    /**
     * @param array<string, string> $formParams
     * @param class-string<\Shoper\Sdk\Exception\AuthenticationException> $errorClass
     * @return array<string, mixed>
     */
    private function tokenRequest(
        string $shopDomain,
        string $clientId,
        string $clientSecret,
        array $formParams,
        string $errorClass
    ): array {
        $response = $this->http->post(rtrim($shopDomain, '/') . '/webapi/rest/oauth/token', [
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
        return $body;
    }
}
