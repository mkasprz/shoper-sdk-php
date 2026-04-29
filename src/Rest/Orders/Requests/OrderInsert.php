<?php

namespace Shoper\Sdk\Rest\Orders\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;
use Shoper\Sdk\Rest\Orders\Types\OrderInsertBillingAddress;
use Shoper\Sdk\Rest\Orders\Types\OrderInsertDeliveryAddress;
use Shoper\Sdk\Rest\Orders\Types\OrderInsertPickupPointData;

class OrderInsert extends JsonSerializableType
{
    /**
     * additional field value - key is name; value - value:
     *     <ul>
     *         <li><code>0/1</code> if field type is <code>checkbox</code></li>
     *         <li><code>string</code> if type is <code>text</code></li>
     *         <li><code>string</code> if type is <code>select</code> - value points to defined option</li>
     *     </ul>
     *
     * @var ?array<string, string> $additionalFields
     */
    #[JsonProperty('additional_fields'), ArrayType(['string' => 'string'])]
    public ?array $additionalFields;

    /**
     * @var ?OrderInsertBillingAddress $billingAddress an associative array with payment address
     */
    #[JsonProperty('billing_address')]
    public ?OrderInsertBillingAddress $billingAddress;

    /**
     * @var ?int $billingAddressId an identifier of client [address](#tag/UserAddresses)
     */
    #[JsonProperty('billing_address_id')]
    public ?int $billingAddressId;

    /**
     * @var ?int $codeId discount code identifier
     */
    #[JsonProperty('code_id')]
    public ?int $codeId;

    /**
     * @var ?bool $confirm is the order confirmed
     */
    #[JsonProperty('confirm')]
    public ?bool $confirm;

    /**
     * @var ?string $confirmDate order confirmation date <a href="https://www.iso.org/iso-8601-date-and-time-format.html">ISO 8601</a> (for example <code>2024-01-15 12:34:56</code>) format
     */
    #[JsonProperty('confirm_date')]
    public ?string $confirmDate;

    /**
     * @var ?int $currencyId [currency](#tag/Currencies) identifier
     */
    #[JsonProperty('currency_id')]
    public ?int $currencyId;

    /**
     * @var ?float $currencyRate currency rate, for default currency always 1
     */
    #[JsonProperty('currency_rate')]
    public ?float $currencyRate;

    /**
     * @var ?string $date order creation date in <a href="https://www.iso.org/iso-8601-date-and-time-format.html">ISO 8601</a> (for example <code>2024-01-15 12:34:56</code>) format
     */
    #[JsonProperty('date')]
    public ?string $date;

    /**
     * @var ?OrderInsertDeliveryAddress $deliveryAddress an associative array with delivery address
     */
    #[JsonProperty('delivery_address')]
    public ?OrderInsertDeliveryAddress $deliveryAddress;

    /**
     * @var ?int $deliveryAddressId an identifier of client [address](#tag/UserAddresses)
     */
    #[JsonProperty('delivery_address_id')]
    public ?int $deliveryAddressId;

    /**
     * should the different address be used for delivery? If order has two addresses and if you want to delete
     * `delivery_address`, set this address to <code>true</code>.
     *
     * @var ?bool $differentAddress
     */
    #[JsonProperty('different_address')]
    public ?bool $differentAddress;

    /**
     * @var string $email client 's e-mail address
     */
    #[JsonProperty('email')]
    public string $email;

    /**
     * @var ?int $langId [language](#tag/Languages) identifier chosen during ordering
     */
    #[JsonProperty('lang_id')]
    public ?int $langId;

    /**
     * @var ?string $notes client notes
     */
    #[JsonProperty('notes')]
    public ?string $notes;

    /**
     * @var ?string $notesPriv private administrator's notes
     */
    #[JsonProperty('notes_priv')]
    public ?string $notesPriv;

    /**
     * @var ?string $notesPub public administrator's notes
     */
    #[JsonProperty('notes_pub')]
    public ?string $notesPub;

    /**
     * order origin
     * <ul>
     *     <li>0 - shop,</li>
     *     <li>1 - facebook,</li>
     *     <li>2 - mobile,</li>
     *     <li>3 - allegro,</li>
     *     <li>4 - webapi</li>
     *     <li>5 - shop's control panel (since 5.8.22)</li>
     *     <li>6 - authenticated admin shop order</li>
     *     <li>8 - Google</li>
     *     <li>100-111 - Apilo</li>
     * </ul>
     *
     * @var ?int $origin
     */
    #[JsonProperty('origin')]
    public ?int $origin;

    /**
     * @var ?float $paid paid amount
     */
    #[JsonProperty('paid')]
    public ?float $paid;

    /**
     * @var int $paymentId [payment](#tag/Payments) method identifier
     */
    #[JsonProperty('payment_id')]
    public int $paymentId;

    /**
     * pickup point identifier (present only if order has pickup point chosen for delivery)
     *
     * NOTE: Depending on shipping implementation, even if order has pickup point assigned,
     * the extended field `pickup_point_data` may not be returned in response.
     *
     * @var ?string $pickupPoint
     */
    #[JsonProperty('pickup_point')]
    public ?string $pickupPoint;

    /**
     * pickup point details.
     *
     * Returned only for orders which have a pickup point assigned. If order does not have pickup point assigned,
     * this field is not present in response.
     *
     * The same structure should be sent in request body for:
     * <ul>
     *     <li><code>POST /webapi/rest/orders/</code> - to add a pickup point to an order,</li>
     *     <li><code>PUT /webapi/rest/orders/{order_id}</code> - to edit an existing pickup point in an order.</li>
     * </ul>
     *
     * @var ?OrderInsertPickupPointData $pickupPointData
     */
    #[JsonProperty('pickup_point_data')]
    public ?OrderInsertPickupPointData $pickupPointData;

    /**
     * @var ?float $shippingCost shipping cost
     */
    #[JsonProperty('shipping_cost')]
    public ?float $shippingCost;

    /**
     * @var int $shippingId [shipping](#tag/Shippings) identifier
     */
    #[JsonProperty('shipping_id')]
    public int $shippingId;

    /**
     * @var int $shippingTaxId shipping [tax](#tag/Taxes) identifier
     */
    #[JsonProperty('shipping_tax_id')]
    public int $shippingTaxId;

    /**
     * @var ?string $statusDate date of the latest order status change in <a href="https://www.iso.org/iso-8601-date-and-time-format.html">ISO 8601</a> (for example <code>2024-01-15 12:34:56</code>) format
     */
    #[JsonProperty('status_date')]
    public ?string $statusDate;

    /**
     * @var int $statusId order [status](#tag/Statuses) identifier
     */
    #[JsonProperty('status_id')]
    public int $statusId;

    /**
     * should the default address be used for delivery if `billing_address`,
     * `billing_address_id`, `delivery_address`,
     * `delivery_address_id` are missing?
     *
     * @var ?bool $useShippingAddress
     */
    #[JsonProperty('use_shipping_address')]
    public ?bool $useShippingAddress;

    /**
     * @var ?int $userId [client](#tag/Users) identifier
     */
    #[JsonProperty('user_id')]
    public ?int $userId;

    /**
     * @var ?bool $userOrder has the order been created by registered user?
     */
    #[JsonProperty('user_order')]
    public ?bool $userOrder;

    /**
     * @param array{
     *   email: string,
     *   paymentId: int,
     *   shippingId: int,
     *   shippingTaxId: int,
     *   statusId: int,
     *   additionalFields?: ?array<string, string>,
     *   billingAddress?: ?OrderInsertBillingAddress,
     *   billingAddressId?: ?int,
     *   codeId?: ?int,
     *   confirm?: ?bool,
     *   confirmDate?: ?string,
     *   currencyId?: ?int,
     *   currencyRate?: ?float,
     *   date?: ?string,
     *   deliveryAddress?: ?OrderInsertDeliveryAddress,
     *   deliveryAddressId?: ?int,
     *   differentAddress?: ?bool,
     *   langId?: ?int,
     *   notes?: ?string,
     *   notesPriv?: ?string,
     *   notesPub?: ?string,
     *   origin?: ?int,
     *   paid?: ?float,
     *   pickupPoint?: ?string,
     *   pickupPointData?: ?OrderInsertPickupPointData,
     *   shippingCost?: ?float,
     *   statusDate?: ?string,
     *   useShippingAddress?: ?bool,
     *   userId?: ?int,
     *   userOrder?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->additionalFields = $values['additionalFields'] ?? null;
        $this->billingAddress = $values['billingAddress'] ?? null;
        $this->billingAddressId = $values['billingAddressId'] ?? null;
        $this->codeId = $values['codeId'] ?? null;
        $this->confirm = $values['confirm'] ?? null;
        $this->confirmDate = $values['confirmDate'] ?? null;
        $this->currencyId = $values['currencyId'] ?? null;
        $this->currencyRate = $values['currencyRate'] ?? null;
        $this->date = $values['date'] ?? null;
        $this->deliveryAddress = $values['deliveryAddress'] ?? null;
        $this->deliveryAddressId = $values['deliveryAddressId'] ?? null;
        $this->differentAddress = $values['differentAddress'] ?? null;
        $this->email = $values['email'];
        $this->langId = $values['langId'] ?? null;
        $this->notes = $values['notes'] ?? null;
        $this->notesPriv = $values['notesPriv'] ?? null;
        $this->notesPub = $values['notesPub'] ?? null;
        $this->origin = $values['origin'] ?? null;
        $this->paid = $values['paid'] ?? null;
        $this->paymentId = $values['paymentId'];
        $this->pickupPoint = $values['pickupPoint'] ?? null;
        $this->pickupPointData = $values['pickupPointData'] ?? null;
        $this->shippingCost = $values['shippingCost'] ?? null;
        $this->shippingId = $values['shippingId'];
        $this->shippingTaxId = $values['shippingTaxId'];
        $this->statusDate = $values['statusDate'] ?? null;
        $this->statusId = $values['statusId'];
        $this->useShippingAddress = $values['useShippingAddress'] ?? null;
        $this->userId = $values['userId'] ?? null;
        $this->userOrder = $values['userOrder'] ?? null;
    }
}
