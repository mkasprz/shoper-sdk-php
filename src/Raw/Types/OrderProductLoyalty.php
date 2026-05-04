<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

/**
 * an associative array with loyalty exchange data, null if not exchanged
 */
class OrderProductLoyalty extends JsonSerializableType
{
    /**
     * @var ?bool $exchanged exchanged (always 1)
     */
    #[JsonProperty('exchanged')]
    public ?bool $exchanged;

    /**
     * @var ?string $ratio points to currency ratio
     */
    #[JsonProperty('ratio')]
    public ?string $ratio;

    /**
     * @var ?int $score amount of points used in exchange
     */
    #[JsonProperty('score')]
    public ?int $score;

    /**
     * @param array{
     *   exchanged?: ?bool,
     *   ratio?: ?string,
     *   score?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->exchanged = $values['exchanged'] ?? null;
        $this->ratio = $values['ratio'] ?? null;
        $this->score = $values['score'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
