<?php

declare(strict_types=1);

namespace Shoper\Sdk\Exception;

abstract class AuthenticationException extends \RuntimeException implements ShoperSdkException
{
    /** @var array<string, mixed> */
    private array $responseBody;

    /**
     * @param array<string, mixed> $responseBody
     */
    public function __construct(string $message, array $responseBody = [], ?\Throwable $previous = null)
    {
        parent::__construct($message, 0, $previous);
        $this->responseBody = $responseBody;
    }

    /**
     * @return array<string, mixed>
     */
    public function getResponseBody(): array
    {
        return $this->responseBody;
    }
}
