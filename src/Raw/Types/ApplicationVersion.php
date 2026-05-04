<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

/**
 * Returns an application version
 */
class ApplicationVersion extends JsonSerializableType
{
    /**
     * @var ?string $version shopping system version (in. "x.y.z" format)
     */
    #[JsonProperty('version')]
    public ?string $version;

    /**
     * @param array{
     *   version?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->version = $values['version'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
