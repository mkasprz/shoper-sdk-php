<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class UnprocessableEntityErrorBody extends JsonSerializableType
{
    /**
     * @var value-of<UnprocessableEntityErrorBodyError> $error Machine-readable error code.
     */
    #[JsonProperty('error')]
    public string $error;

    /**
     * @var ?string $errorDescription Human-readable explanation of the error.
     */
    #[JsonProperty('error_description')]
    public ?string $errorDescription;

    /**
     * @param array{
     *   error: value-of<UnprocessableEntityErrorBodyError>,
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
