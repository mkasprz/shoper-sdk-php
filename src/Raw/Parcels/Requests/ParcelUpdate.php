<?php

namespace Shoper\Sdk\Rest\Parcels\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Parcels\Types\ParcelUpdateProductsItem;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

class ParcelUpdate extends JsonSerializableType
{
    /**
     * @var ?string $billingAddress
     */
    #[JsonProperty('billing_address')]
    public ?string $billingAddress;

    /**
     * @var ?bool $cod COD parcel?
     */
    #[JsonProperty('cod')]
    public ?bool $cod;

    /**
     * @var ?float $codCost COD cost
     */
    #[JsonProperty('cod_cost')]
    public ?float $codCost;

    /**
     * @var ?bool $insurance has the parcel been insured?
     */
    #[JsonProperty('insurance')]
    public ?bool $insurance;

    /**
     * @var ?float $insuranceCost insurance cost
     */
    #[JsonProperty('insurance_cost')]
    public ?float $insuranceCost;

    /**
     * @var ?string $notes parcel comments
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * Type of parcel:
     * <ul>
     *     <li>0 - not connected with parcel delivery company,</li>
     *     <li>1 - connected: after sending parcel from shop administration panel, parcel is in "pending" status - then using API can be either mark as sent or reseted</li>
     * </ul>
     *
     * @var ?bool $online
     */
    #[JsonProperty('online')]
    public ?bool $online;

    /**
     * @var ?string $orderDate order date in <a href="https://www.iso.org/iso-8601-date-and-time-format.html">ISO 8601</a> (for example <code>2024-01-15 12:34:56</code>) format
     */
    #[JsonProperty('order_date')]
    public ?string $orderDate;

    /**
     * @var ?int $orderId [order](#tag/Orders) identifier
     */
    #[JsonProperty('order_id')]
    public ?int $orderId;

    /**
     * @var ?array<ParcelUpdateProductsItem> $products an  array with products
     */
    #[JsonProperty('products'), ArrayType([ParcelUpdateProductsItem::class])]
    public ?array $products;

    /**
     * @var ?bool $send Use in POST/PUT to send (true) or reset (false) a parcel
     */
    #[JsonProperty('send')]
    public ?bool $send;

    /**
     * @var ?string $shippingCode waybill number
     */
    #[JsonProperty('shipping_code')]
    public ?string $shippingCode;

    /**
     * @var ?int $shippingId [shipping](#tag/Shippings) method identifier
     */
    #[JsonProperty('shipping_id')]
    public ?int $shippingId;

    /**
     * @var ?int $warehouseId warehouse identifier
     */
    #[JsonProperty('warehouse_id')]
    public ?int $warehouseId;

    /**
     * @var ?float $weight parcel weight (kg)
     */
    #[JsonProperty('weight')]
    public ?float $weight;

    /**
     * @param array{
     *   billingAddress?: ?string,
     *   cod?: ?bool,
     *   codCost?: ?float,
     *   insurance?: ?bool,
     *   insuranceCost?: ?float,
     *   notes?: ?string,
     *   online?: ?bool,
     *   orderDate?: ?string,
     *   orderId?: ?int,
     *   products?: ?array<ParcelUpdateProductsItem>,
     *   send?: ?bool,
     *   shippingCode?: ?string,
     *   shippingId?: ?int,
     *   warehouseId?: ?int,
     *   weight?: ?float,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->billingAddress = $values['billingAddress'] ?? null;
        $this->cod = $values['cod'] ?? null;
        $this->codCost = $values['codCost'] ?? null;
        $this->insurance = $values['insurance'] ?? null;
        $this->insuranceCost = $values['insuranceCost'] ?? null;
        $this->notes = $values['notes'] ?? null;
        $this->online = $values['online'] ?? null;
        $this->orderDate = $values['orderDate'] ?? null;
        $this->orderId = $values['orderId'] ?? null;
        $this->products = $values['products'] ?? null;
        $this->send = $values['send'] ?? null;
        $this->shippingCode = $values['shippingCode'] ?? null;
        $this->shippingId = $values['shippingId'] ?? null;
        $this->warehouseId = $values['warehouseId'] ?? null;
        $this->weight = $values['weight'] ?? null;
    }
}
