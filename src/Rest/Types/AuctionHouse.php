<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

/**
 * Auction houses
 */
class AuctionHouse extends JsonSerializableType
{
    /**
     * @var ?bool $active is active?
     */
    #[JsonProperty('active')]
    public ?bool $active;

    /**
     * @var ?int $auctionHouseId auction house identifier
     */
    #[JsonProperty('auction_house_id')]
    public ?int $auctionHouseId;

    /**
     * @var ?string $engine auction system engine name
     */
    #[JsonProperty('engine')]
    public ?string $engine;

    /**
     * @var string $name displayed auction house name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?int $order display order
     */
    #[JsonProperty('order')]
    public ?int $order;

    /**
     * @param array{
     *   name: string,
     *   active?: ?bool,
     *   auctionHouseId?: ?int,
     *   engine?: ?string,
     *   order?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->active = $values['active'] ?? null;
        $this->auctionHouseId = $values['auctionHouseId'] ?? null;
        $this->engine = $values['engine'] ?? null;
        $this->name = $values['name'];
        $this->order = $values['order'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
