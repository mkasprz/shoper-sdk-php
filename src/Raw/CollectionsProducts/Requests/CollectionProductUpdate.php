<?php

namespace Shoper\Sdk\Rest\CollectionsProducts\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class CollectionProductUpdate extends JsonSerializableType
{
    /**
     * @var ?int $position the position of product in a manually sorted collection ( set asynchronously )
     */
    #[JsonProperty('position')]
    public ?int $position;

    /**
     * @param array{
     *   position?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->position = $values['position'] ?? null;
    }
}
