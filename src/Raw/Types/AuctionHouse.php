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
     * @var ?value-of<AuctionHouseActive> $active is active?
     */
    #[JsonProperty('active')]
    public ?string $active;

    /**
     * @var ?string $auctionHouseId auction house identifier
     */
    #[JsonProperty('auction_house_id')]
    public ?string $auctionHouseId;

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
     * @var ?string $order display order
     */
    #[JsonProperty('order')]
    public ?string $order;

    /**
     * @param array{
     *   name: string,
     *   active?: ?value-of<AuctionHouseActive>,
     *   auctionHouseId?: ?string,
     *   engine?: ?string,
     *   order?: ?string,
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
