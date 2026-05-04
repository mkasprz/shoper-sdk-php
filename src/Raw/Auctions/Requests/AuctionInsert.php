<?php

namespace Shoper\Sdk\Rest\Auctions\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class AuctionInsert extends JsonSerializableType
{
    /**
     * @var int $auctionHouseId [auction house](#tag/AuctionHouses) identifier
     */
    #[JsonProperty('auction_house_id')]
    public int $auctionHouseId;

    /**
     * @var ?float $bestPrice best offer price
     */
    #[JsonProperty('best_price')]
    public ?float $bestPrice;

    /**
     * @var ?int $binds bids number
     */
    #[JsonProperty('binds')]
    public ?int $binds;

    /**
     * @var ?float $buyNowPrice buy now price
     */
    #[JsonProperty('buy_now_price')]
    public ?float $buyNowPrice;

    /**
     * @var ?float $cost auction setup cost
     */
    #[JsonProperty('cost')]
    public ?float $cost;

    /**
     * @var ?string $endTime auction end time in <a href="http://www.iso.org/iso/home/standards/iso8601.htm">ISO_8601</a> format
     */
    #[JsonProperty('end_time')]
    public ?string $endTime;

    /**
     * @var ?bool $finished is auction ended?
     */
    #[JsonProperty('finished')]
    public ?bool $finished;

    /**
     * @var ?float $minPrice minimal price
     */
    #[JsonProperty('min_price')]
    public ?float $minPrice;

    /**
     * @var int $productId [product](#tag/Products) identifier
     */
    #[JsonProperty('product_id')]
    public int $productId;

    /**
     * @var int $quantity quantity of auction elements
     */
    #[JsonProperty('quantity')]
    public int $quantity;

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
     * @var int $salesFormat
     */
    #[JsonProperty('sales_format')]
    public int $salesFormat;

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
     * @var ?int $stockId [product stock](#tag/ProductStocks) identifier
     */
    #[JsonProperty('stock_id')]
    public ?int $stockId;

    /**
     * @var string $title auction title
     */
    #[JsonProperty('title')]
    public string $title;

    /**
     * @var ?int $views views count
     */
    #[JsonProperty('views')]
    public ?int $views;

    /**
     * @param array{
     *   auctionHouseId: int,
     *   productId: int,
     *   quantity: int,
     *   realAuctionId: string,
     *   salesFormat: int,
     *   title: string,
     *   bestPrice?: ?float,
     *   binds?: ?int,
     *   buyNowPrice?: ?float,
     *   cost?: ?float,
     *   endTime?: ?string,
     *   finished?: ?bool,
     *   minPrice?: ?float,
     *   startPrice?: ?float,
     *   startTime?: ?string,
     *   statusTime?: ?string,
     *   stockId?: ?int,
     *   views?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->auctionHouseId = $values['auctionHouseId'];
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
}
