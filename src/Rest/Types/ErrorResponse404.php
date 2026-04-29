<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

/**
 * Error response envelope for HTTP 404.
 */
class ErrorResponse404 extends JsonSerializableType
{
    /**
     * @var value-of<ErrorResponse404Error> $error Machine-readable error code.
     */
    #[JsonProperty('error')]
    public string $error;

    /**
     * @var ?string $errorDescription Human-readable explanation of the error, when available.
     */
    #[JsonProperty('error_description')]
    public ?string $errorDescription;

    /**
     * @param array{
     *   error: value-of<ErrorResponse404Error>,
     *   errorDescription?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->error = $values['error'];
        $this->errorDescription = $values['errorDescription'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
