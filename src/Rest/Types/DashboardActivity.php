<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

/**
 * Represents a list of messages with recent system activity
 */
class DashboardActivity extends JsonSerializableType
{
    /**
     * @var ?int $id event context
     */
    #[JsonProperty('id')]
    public ?int $id;

    /**
     * @var ?string $info message
     */
    #[JsonProperty('info')]
    public ?string $info;

    /**
     * one of following values:
     * <ul>
     *     <li><code>order</code>,</li>
     *     <li><code>client</code></li>
     * </ul>
     *
     * @var ?string $object
     */
    #[JsonProperty('object')]
    public ?string $object;

    /**
     * @var ?int $time event timestamp
     */
    #[JsonProperty('time')]
    public ?int $time;

    /**
     * @param array{
     *   id?: ?int,
     *   info?: ?string,
     *   object?: ?string,
     *   time?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->id = $values['id'] ?? null;
        $this->info = $values['info'] ?? null;
        $this->object = $values['object'] ?? null;
        $this->time = $values['time'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
