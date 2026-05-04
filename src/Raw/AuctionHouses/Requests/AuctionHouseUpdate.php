<?php

namespace Shoper\Sdk\Rest\AuctionHouses\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class AuctionHouseUpdate extends JsonSerializableType
{
    /**
     * @var ?bool $active is active?
     */
    #[JsonProperty('active')]
    public ?bool $active;

    /**
     * @var ?string $name displayed auction house name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?int $order display order
     */
    #[JsonProperty('order')]
    public ?int $order;

    /**
     * @param array{
     *   active?: ?bool,
     *   name?: ?string,
     *   order?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->active = $values['active'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->order = $values['order'] ?? null;
    }
}
