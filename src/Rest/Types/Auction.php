<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

/**
 * Auctions
 */
class Auction extends JsonSerializableType
{
    /**
     * @var ?string $auctionHouseId [auction house](#tag/AuctionHouses) identifier
     */
    #[JsonProperty('auction_house_id')]
    public ?string $auctionHouseId;

    /**
     * @var ?string $auctionId auction identifier
     */
    #[JsonProperty('auction_id')]
    public ?string $auctionId;

    /**
     * @var ?float $bestPrice best offer price
     */
    #[JsonProperty('best_price')]
    public ?float $bestPrice;

    /**
     * @var ?string $binds bids number
     */
    #[JsonProperty('binds')]
    public ?string $binds;

    /**
     * @var ?float $buyNowPrice buy now price
     */
    #[JsonProperty('buy_now_price')]
    public ?float $buyNowPrice;

    /**
     * @var ?string $cost auction setup cost
     */
    #[JsonProperty('cost')]
    public ?string $cost;

    /**
     * @var ?string $endTime auction end time in <a href="http://www.iso.org/iso/home/standards/iso8601.htm">ISO_8601</a> format
     */
    #[JsonProperty('end_time')]
    public ?string $endTime;

    /**
     * @var ?value-of<AuctionFinished> $finished is auction ended?
     */
    #[JsonProperty('finished')]
    public ?string $finished;

    /**
     * @var ?float $minPrice minimal price
     */
    #[JsonProperty('min_price')]
    public ?float $minPrice;

    /**
     * @var string $productId [product](#tag/Products) identifier
     */
    #[JsonProperty('product_id')]
    public string $productId;

    /**
     * @var string $quantity quantity of auction elements
     */
    #[JsonProperty('quantity')]
    public string $quantity;

    /**
     * @var string $realAuctionId auction identifier from auction house
     */
    #[JsonProperty('real_auction_id')]
    public string $realAuctionId;

    /**
     * sale format
     * <ul>
     *     <li>0 - bidding,</li>
     *     <li>1 - immediate</li>
     * </ul>
     *
     * @var string $salesFormat
     */
    #[JsonProperty('sales_format')]
    public string $salesFormat;

    /**
     * @var ?float $startPrice start price
     */
    #[JsonProperty('start_price')]
    public ?float $startPrice;

    /**
     * @var ?string $startTime auction start time in <a href="http://www.iso.org/iso/home/standards/iso8601.htm">ISO_8601</a> format
     */
    #[JsonProperty('start_time')]
    public ?string $startTime;

    /**
     * @var ?string $statusTime order time from auction system in <a href="http://www.iso.org/iso/home/standards/iso8601.htm">ISO_8601</a> format
     */
    #[JsonProperty('status_time')]
    public ?string $statusTime;

    /**
     * @var ?string $stockId [product stock](#tag/ProductStocks) identifier
     */
    #[JsonProperty('stock_id')]
    public ?string $stockId;

    /**
     * @var string $title auction title
     */
    #[JsonProperty('title')]
    public string $title;

    /**
     * @var ?string $views views count
     */
    #[JsonProperty('views')]
    public ?string $views;

    /**
     * @param array{
     *   productId: string,
     *   quantity: string,
     *   realAuctionId: string,
     *   salesFormat: string,
     *   title: string,
     *   auctionHouseId?: ?string,
     *   auctionId?: ?string,
     *   bestPrice?: ?float,
     *   binds?: ?string,
     *   buyNowPrice?: ?float,
     *   cost?: ?string,
     *   endTime?: ?string,
     *   finished?: ?value-of<AuctionFinished>,
     *   minPrice?: ?float,
     *   startPrice?: ?float,
     *   startTime?: ?string,
     *   statusTime?: ?string,
     *   stockId?: ?string,
     *   views?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->auctionHouseId = $values['auctionHouseId'] ?? null;
        $this->auctionId = $values['auctionId'] ?? null;
        $this->bestPrice = $values['bestPrice'] ?? null;
        $this->binds = $values['binds'] ?? null;
        $this->buyNowPrice = $values['buyNowPrice'] ?? null;
        $this->cost = $values['cost'] ?? null;
        $this->endTime = $values['endTime'] ?? null;
        $this->finished = $values['finished'] ?? null;
        $this->minPrice = $values['minPrice'] ?? null;
        $this->productId = $values['productId'];
        $this->quantity = $values['quantity'];
        $this->realAuctionId = $values['realAuctionId'];
        $this->salesFormat = $values['salesFormat'];
        $this->startPrice = $values['startPrice'] ?? null;
        $this->startTime = $values['startTime'] ?? null;
        $this->statusTime = $values['statusTime'] ?? null;
        $this->stockId = $values['stockId'] ?? null;
        $this->title = $values['title'];
        $this->views = $values['views'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
