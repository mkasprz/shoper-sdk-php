<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

/**
 * Parcels info
 */
class Parcel extends JsonSerializableType
{
    /**
     * @var ?ParcelBillingAddress $billingAddress an associative array with billing address (same structure as `delivery_address`)
     */
    #[JsonProperty('billing_address')]
    public ?ParcelBillingAddress $billingAddress;

    /**
     * @var ?value-of<ParcelCod> $cod COD parcel?
     */
    #[JsonProperty('cod')]
    public ?string $cod;

    /**
     * @var ?string $codCost COD cost
     */
    #[JsonProperty('cod_cost')]
    public ?string $codCost;

    /**
     * @var ?ParcelDeliveryAddress $deliveryAddress an associative array with delivery address
     */
    #[JsonProperty('delivery_address')]
    public ?ParcelDeliveryAddress $deliveryAddress;

    /**
     * @var ?string $deliveryDate parcel delivery date in <a href="https://www.iso.org/iso-8601-date-and-time-format.html">ISO 8601</a> (for example <code>2024-01-15 12:34:56</code>) format
     */
    #[JsonProperty('delivery_date')]
    public ?string $deliveryDate;

    /**
     * @var ?string $email client's e-mail address
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var ?value-of<ParcelInsurance> $insurance has the parcel been insured?
     */
    #[JsonProperty('insurance')]
    public ?string $insurance;

    /**
     * @var ?string $insuranceCost insurance cost
     */
    #[JsonProperty('insurance_cost')]
    public ?string $insuranceCost;

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
     * @var ?value-of<ParcelOnline> $online
     */
    #[JsonProperty('online')]
    public ?string $online;

    /**
     * @var ?string $orderDate order date in <a href="https://www.iso.org/iso-8601-date-and-time-format.html">ISO 8601</a> (for example <code>2024-01-15 12:34:56</code>) format
     */
    #[JsonProperty('order_date')]
    public ?string $orderDate;

    /**
     * @var ?string $orderId [order](#tag/Orders) identifier
     */
    #[JsonProperty('order_id')]
    public ?string $orderId;

    /**
     * @var ?string $parcelId parcel identifier
     */
    #[JsonProperty('parcel_id')]
    public ?string $parcelId;

    /**
     * @var ?array<ParcelProductsItem> $products an  array with products
     */
    #[JsonProperty('products'), ArrayType([ParcelProductsItem::class])]
    public ?array $products;

    /**
     * @var ?string $sendDate parcel sending date in <a href="https://www.iso.org/iso-8601-date-and-time-format.html">ISO 8601</a> (for example <code>2024-01-15 12:34:56</code>) format
     */
    #[JsonProperty('send_date')]
    public ?string $sendDate;

    /**
     * @var ?value-of<ParcelSent> $sent has the parcel been sent? Also accepted as a write alias for `send` on POST/PUT — if `sent` is provided and `send` is absent, the value is mapped to `send` (backport alias for legacy clients).
     */
    #[JsonProperty('sent')]
    public ?string $sent;

    /**
     * @var ?string $shippingCode waybill number
     */
    #[JsonProperty('shipping_code')]
    public ?string $shippingCode;

    /**
     * @var string $shippingId [shipping](#tag/Shippings) method identifier
     */
    #[JsonProperty('shipping_id')]
    public string $shippingId;

    /**
     * @var ?int $warehouseId warehouse identifier
     */
    #[JsonProperty('warehouse_id')]
    public ?int $warehouseId;

    /**
     * @var ?string $weight parcel weight (kg)
     */
    #[JsonProperty('weight')]
    public ?string $weight;

    /**
     * @param array{
     *   shippingId: string,
     *   billingAddress?: ?ParcelBillingAddress,
     *   cod?: ?value-of<ParcelCod>,
     *   codCost?: ?string,
     *   deliveryAddress?: ?ParcelDeliveryAddress,
     *   deliveryDate?: ?string,
     *   email?: ?string,
     *   insurance?: ?value-of<ParcelInsurance>,
     *   insuranceCost?: ?string,
     *   notes?: ?string,
     *   online?: ?value-of<ParcelOnline>,
     *   orderDate?: ?string,
     *   orderId?: ?string,
     *   parcelId?: ?string,
     *   products?: ?array<ParcelProductsItem>,
     *   sendDate?: ?string,
     *   sent?: ?value-of<ParcelSent>,
     *   shippingCode?: ?string,
     *   warehouseId?: ?int,
     *   weight?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->billingAddress = $values['billingAddress'] ?? null;
        $this->cod = $values['cod'] ?? null;
        $this->codCost = $values['codCost'] ?? null;
        $this->deliveryAddress = $values['deliveryAddress'] ?? null;
        $this->deliveryDate = $values['deliveryDate'] ?? null;
        $this->email = $values['email'] ?? null;
        $this->insurance = $values['insurance'] ?? null;
        $this->insuranceCost = $values['insuranceCost'] ?? null;
        $this->notes = $values['notes'] ?? null;
        $this->online = $values['online'] ?? null;
        $this->orderDate = $values['orderDate'] ?? null;
        $this->orderId = $values['orderId'] ?? null;
        $this->parcelId = $values['parcelId'] ?? null;
        $this->products = $values['products'] ?? null;
        $this->sendDate = $values['sendDate'] ?? null;
        $this->sent = $values['sent'] ?? null;
        $this->shippingCode = $values['shippingCode'] ?? null;
        $this->shippingId = $values['shippingId'];
        $this->warehouseId = $values['warehouseId'] ?? null;
        $this->weight = $values['weight'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
