<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

/**
 * Returns modification time of specified object
 */
class ObjectMtime extends JsonSerializableType
{
    /**
     * @var ?int $date timestamp - latest object modification
     */
    #[JsonProperty('date')]
    public ?int $date;

    /**
     * @param array{
     *   date?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->date = $values['date'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
