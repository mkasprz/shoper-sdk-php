<?php

namespace Shoper\Sdk\Rest\AuctionOrders\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class AuctionOrderInsert extends JsonSerializableType
{
    /**
     * @var ?int $auctionHouseId auction house identifier
     */
    #[JsonProperty('auction_house_id')]
    public ?int $auctionHouseId;

    /**
     * @var ?int $auctionId [auction](#tag/Auctions) identifier
     */
    #[JsonProperty('auction_id')]
    public ?int $auctionId;

    /**
     * @var ?int $buyerId auction system buyer identifier
     */
    #[JsonProperty('buyer_id')]
    public ?int $buyerId;

    /**
     * @var ?string $buyerLogin buyer login
     */
    #[JsonProperty('buyer_login')]
    public ?string $buyerLogin;

    /**
     * @var ?string $dealId auction system deal id
     */
    #[JsonProperty('deal_id')]
    public ?string $dealId;

    /**
     * @var int $orderId [order](#tag/Orders) identifier
     */
    #[JsonProperty('order_id')]
    public int $orderId;

    /**
     * @var ?string $paymentMethod payment method format
     */
    #[JsonProperty('payment_method')]
    public ?string $paymentMethod;

    /**
     * @var ?string $paymentTime time of payment in <a href="http://www.iso.org/iso/home/standards/iso8601.htm">ISO_8601</a> format
     */
    #[JsonProperty('payment_time')]
    public ?string $paymentTime;

    /**
     * @var ?string $realAuctionId auction identifier of auction system
     */
    #[JsonProperty('real_auction_id')]
    public ?string $realAuctionId;

    /**
     * @var ?string $shipmentMethod shipping method name
     */
    #[JsonProperty('shipment_method')]
    public ?string $shipmentMethod;

    /**
     * @var ?string $statusTime last auction status change time in <a href="http://www.iso.org/iso/home/standards/iso8601.htm">ISO_8601</a> format
     */
    #[JsonProperty('status_time')]
    public ?string $statusTime;

    /**
     * @var ?string $transactionId auction system transaction id
     */
    #[JsonProperty('transaction_id')]
    public ?string $transactionId;

    /**
     * @param array{
     *   orderId: int,
     *   auctionHouseId?: ?int,
     *   auctionId?: ?int,
     *   buyerId?: ?int,
     *   buyerLogin?: ?string,
     *   dealId?: ?string,
     *   paymentMethod?: ?string,
     *   paymentTime?: ?string,
     *   realAuctionId?: ?string,
     *   shipmentMethod?: ?string,
     *   statusTime?: ?string,
     *   transactionId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->auctionHouseId = $values['auctionHouseId'] ?? null;
        $this->auctionId = $values['auctionId'] ?? null;
        $this->buyerId = $values['buyerId'] ?? null;
        $this->buyerLogin = $values['buyerLogin'] ?? null;
        $this->dealId = $values['dealId'] ?? null;
        $this->orderId = $values['orderId'];
        $this->paymentMethod = $values['paymentMethod'] ?? null;
        $this->paymentTime = $values['paymentTime'] ?? null;
        $this->realAuctionId = $values['realAuctionId'] ?? null;
        $this->shipmentMethod = $values['shipmentMethod'] ?? null;
        $this->statusTime = $values['statusTime'] ?? null;
        $this->transactionId = $values['transactionId'] ?? null;
    }
}
