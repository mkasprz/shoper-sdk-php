<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

/**
 * Orders in shop
 */
class Order extends JsonSerializableType
{
    /**
     * [additional order fields](#tag/AdditionalFields):
     * To filter by additional field, use: additional_fields:{ "=": {"<field_id>": "<searched_value>"}}
     * Example: {"additional_fields":{"=": {"5": "test"}}}
     *
     * @var ?array<OrderAdditionalFieldsItem> $additionalFields
     */
    #[JsonProperty('additional_fields'), ArrayType([OrderAdditionalFieldsItem::class])]
    public ?array $additionalFields;

    /**
     * @var ?array<string, mixed> $auction an associative array with auction information (present only if order has been added using auction house)
     */
    #[JsonProperty('auction'), ArrayType(['string' => 'mixed'])]
    public ?array $auction;

    /**
     * @var ?OrderBillingAddress $billingAddress an associative array with payment address
     */
    #[JsonProperty('billing_address')]
    public ?OrderBillingAddress $billingAddress;

    /**
     * @var ?string $code order confirmation code
     */
    #[JsonProperty('code')]
    public ?string $code;

    /**
     * @var ?string $codeId discount code identifier
     */
    #[JsonProperty('code_id')]
    public ?string $codeId;

    /**
     * @var ?value-of<OrderConfirm> $confirm is the order confirmed
     */
    #[JsonProperty('confirm')]
    public ?string $confirm;

    /**
     * @var ?string $confirmDate order confirmation date <a href="https://www.iso.org/iso-8601-date-and-time-format.html">ISO 8601</a> (for example <code>2024-01-15 12:34:56</code>) format
     */
    #[JsonProperty('confirm_date')]
    public ?string $confirmDate;

    /**
     * @var ?string $currencyId [currency](#tag/Currencies) identifier
     */
    #[JsonProperty('currency_id')]
    public ?string $currencyId;

    /**
     * @var ?string $currencyRate currency rate, for default currency always 1
     */
    #[JsonProperty('currency_rate')]
    public ?string $currencyRate;

    /**
     * @var ?string $date order creation date in <a href="https://www.iso.org/iso-8601-date-and-time-format.html">ISO 8601</a> (for example <code>2024-01-15 12:34:56</code>) format
     */
    #[JsonProperty('date')]
    public ?string $date;

    /**
     * @var ?OrderDeliveryAddress $deliveryAddress an associative array with delivery address
     */
    #[JsonProperty('delivery_address')]
    public ?OrderDeliveryAddress $deliveryAddress;

    /**
     * @var ?string $deliveryCode delivery code
     */
    #[JsonProperty('delivery_code')]
    public ?string $deliveryCode;

    /**
     * @var ?string $deliveryDate delivery date in <a href="https://www.iso.org/iso-8601-date-and-time-format.html">ISO 8601</a> (for example <code>2024-01-15 12:34:56</code>) format
     */
    #[JsonProperty('delivery_date')]
    public ?string $deliveryDate;

    /**
     * @var ?string $deliveryEmail Email address for delivery notifications.
     */
    #[JsonProperty('delivery_email')]
    public ?string $deliveryEmail;

    /**
     * @var ?string $discountClient client's discount (in percent)
     */
    #[JsonProperty('discount_client')]
    public ?string $discountClient;

    /**
     * @var ?string $discountCode amount of discount code (in percent)
     */
    #[JsonProperty('discount_code')]
    public ?string $discountCode;

    /**
     * @var ?string $discountGroup group discount (in percent)
     */
    #[JsonProperty('discount_group')]
    public ?string $discountGroup;

    /**
     * @var ?string $discountLevels order discount based on defined discount levels (Admin &raquo; Marketing &raquo; Discounts &raquo; Discounts thresholds)
     */
    #[JsonProperty('discount_levels')]
    public ?string $discountLevels;

    /**
     * @var string $email client 's e-mail address
     */
    #[JsonProperty('email')]
    public string $email;

    /**
     * @var ?string $ipAddress client's IP address (xxx.xxx.xxx.xxx)
     */
    #[JsonProperty('ip_address')]
    public ?string $ipAddress;

    /**
     * @var ?bool $isCashOnDelivery Is order's last payment method is cash on delivery?
     */
    #[JsonProperty('is_cash_on_delivery')]
    public ?bool $isCashOnDelivery;

    /**
     * @var ?bool $isOverpayment is the order been paid greater than order amount?
     */
    #[JsonProperty('is_overpayment')]
    public ?bool $isOverpayment;

    /**
     * @var ?bool $isPaid has order been paid?
     */
    #[JsonProperty('is_paid')]
    public ?bool $isPaid;

    /**
     * @var ?bool $isUnderpayment is the order been paid lower than order amount?
     */
    #[JsonProperty('is_underpayment')]
    public ?bool $isUnderpayment;

    /**
     * @var ?string $langId [language](#tag/Languages) identifier chosen during ordering
     */
    #[JsonProperty('lang_id')]
    public ?string $langId;

    /**
     * @var ?int $loyaltyCost loyalty points used for products exchange
     */
    #[JsonProperty('loyalty_cost')]
    public ?int $loyaltyCost;

    /**
     * @var ?int $loyaltyScore Loyalty points awarded for this order.
     */
    #[JsonProperty('loyalty_score')]
    public ?int $loyaltyScore;

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
     * @var ?string $orderId order identifier
     */
    #[JsonProperty('order_id')]
    public ?string $orderId;

    /**
     * @var ?string $orderUrl link to the order preview
     */
    #[JsonProperty('order_url')]
    public ?string $orderUrl;

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
     * @var ?string $origin
     */
    #[JsonProperty('origin')]
    public ?string $origin;

    /**
     * @var ?string $paid paid amount
     */
    #[JsonProperty('paid')]
    public ?string $paid;

    /**
     * @var ?array<string, string> $paymentAdditionalFields additional field value - key is name; value - value: keys depends on plugins enabled
     */
    #[JsonProperty('payment_additional_fields'), ArrayType(['string' => 'string'])]
    public ?array $paymentAdditionalFields;

    /**
     * @var string $paymentId [payment](#tag/Payments) method identifier
     */
    #[JsonProperty('payment_id')]
    public string $paymentId;

    /**
     * @var ?string $paymentUrl link to pay the order
     */
    #[JsonProperty('payment_url')]
    public ?string $paymentUrl;

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
     * @var ?OrderPickupPointData $pickupPointData
     */
    #[JsonProperty('pickup_point_data')]
    public ?OrderPickupPointData $pickupPointData;

    /**
     * @var ?string $promoCode promotion code; if empty - no code
     */
    #[JsonProperty('promo_code')]
    public ?string $promoCode;

    /**
     * @var ?array<string, string> $shippingAdditionalFields additional field value - key is name; value - value: keys depends on plugins enabled
     */
    #[JsonProperty('shipping_additional_fields'), ArrayType(['string' => 'string'])]
    public ?array $shippingAdditionalFields;

    /**
     * @var ?string $shippingCost shipping cost
     */
    #[JsonProperty('shipping_cost')]
    public ?string $shippingCost;

    /**
     * @var string $shippingId [shipping](#tag/Shippings) identifier
     */
    #[JsonProperty('shipping_id')]
    public string $shippingId;

    /**
     * @var string $shippingTaxId shipping [tax](#tag/Taxes) identifier
     */
    #[JsonProperty('shipping_tax_id')]
    public string $shippingTaxId;

    /**
     * @var ?string $shippingTaxName shipping tax name
     */
    #[JsonProperty('shipping_tax_name')]
    public ?string $shippingTaxName;

    /**
     * @var ?string $shippingTaxValue shipping tax value
     */
    #[JsonProperty('shipping_tax_value')]
    public ?string $shippingTaxValue;

    /**
     * @var ?OrderStatus $status order [status](#tag/Statuses) data
     */
    #[JsonProperty('status')]
    public ?OrderStatus $status;

    /**
     * @var ?string $statusDate date of the latest order status change in <a href="https://www.iso.org/iso-8601-date-and-time-format.html">ISO 8601</a> (for example <code>2024-01-15 12:34:56</code>) format
     */
    #[JsonProperty('status_date')]
    public ?string $statusDate;

    /**
     * @var string $statusId order [status](#tag/Statuses) identifier
     */
    #[JsonProperty('status_id')]
    public string $statusId;

    /**
     * @var ?string $sum order sum
     */
    #[JsonProperty('sum')]
    public ?string $sum;

    /**
     * @var ?int $totalParcels total parcels count
     */
    #[JsonProperty('total_parcels')]
    public ?int $totalParcels;

    /**
     * @var ?int $totalProducts total products count
     */
    #[JsonProperty('total_products')]
    public ?int $totalProducts;

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
     * @var ?string $userId [client](#tag/Users) identifier
     */
    #[JsonProperty('user_id')]
    public ?string $userId;

    /**
     * @var ?value-of<OrderUserOrder> $userOrder has the order been created by registered user?
     */
    #[JsonProperty('user_order')]
    public ?string $userOrder;

    /**
     * @var ?bool $vatEu is B2B order within the Intra-Community Supply of Goods (EU VAT)?
     */
    #[JsonProperty('vat_eu')]
    public ?bool $vatEu;

    /**
     * @param array{
     *   email: string,
     *   paymentId: string,
     *   shippingId: string,
     *   shippingTaxId: string,
     *   statusId: string,
     *   additionalFields?: ?array<OrderAdditionalFieldsItem>,
     *   auction?: ?array<string, mixed>,
     *   billingAddress?: ?OrderBillingAddress,
     *   code?: ?string,
     *   codeId?: ?string,
     *   confirm?: ?value-of<OrderConfirm>,
     *   confirmDate?: ?string,
     *   currencyId?: ?string,
     *   currencyRate?: ?string,
     *   date?: ?string,
     *   deliveryAddress?: ?OrderDeliveryAddress,
     *   deliveryCode?: ?string,
     *   deliveryDate?: ?string,
     *   deliveryEmail?: ?string,
     *   discountClient?: ?string,
     *   discountCode?: ?string,
     *   discountGroup?: ?string,
     *   discountLevels?: ?string,
     *   ipAddress?: ?string,
     *   isCashOnDelivery?: ?bool,
     *   isOverpayment?: ?bool,
     *   isPaid?: ?bool,
     *   isUnderpayment?: ?bool,
     *   langId?: ?string,
     *   loyaltyCost?: ?int,
     *   loyaltyScore?: ?int,
     *   notes?: ?string,
     *   notesPriv?: ?string,
     *   notesPub?: ?string,
     *   orderId?: ?string,
     *   orderUrl?: ?string,
     *   origin?: ?string,
     *   paid?: ?string,
     *   paymentAdditionalFields?: ?array<string, string>,
     *   paymentUrl?: ?string,
     *   pickupPoint?: ?string,
     *   pickupPointData?: ?OrderPickupPointData,
     *   promoCode?: ?string,
     *   shippingAdditionalFields?: ?array<string, string>,
     *   shippingCost?: ?string,
     *   shippingTaxName?: ?string,
     *   shippingTaxValue?: ?string,
     *   status?: ?OrderStatus,
     *   statusDate?: ?string,
     *   sum?: ?string,
     *   totalParcels?: ?int,
     *   totalProducts?: ?int,
     *   useShippingAddress?: ?bool,
     *   userId?: ?string,
     *   userOrder?: ?value-of<OrderUserOrder>,
     *   vatEu?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->additionalFields = $values['additionalFields'] ?? null;
        $this->auction = $values['auction'] ?? null;
        $this->billingAddress = $values['billingAddress'] ?? null;
        $this->code = $values['code'] ?? null;
        $this->codeId = $values['codeId'] ?? null;
        $this->confirm = $values['confirm'] ?? null;
        $this->confirmDate = $values['confirmDate'] ?? null;
        $this->currencyId = $values['currencyId'] ?? null;
        $this->currencyRate = $values['currencyRate'] ?? null;
        $this->date = $values['date'] ?? null;
        $this->deliveryAddress = $values['deliveryAddress'] ?? null;
        $this->deliveryCode = $values['deliveryCode'] ?? null;
        $this->deliveryDate = $values['deliveryDate'] ?? null;
        $this->deliveryEmail = $values['deliveryEmail'] ?? null;
        $this->discountClient = $values['discountClient'] ?? null;
        $this->discountCode = $values['discountCode'] ?? null;
        $this->discountGroup = $values['discountGroup'] ?? null;
        $this->discountLevels = $values['discountLevels'] ?? null;
        $this->email = $values['email'];
        $this->ipAddress = $values['ipAddress'] ?? null;
        $this->isCashOnDelivery = $values['isCashOnDelivery'] ?? null;
        $this->isOverpayment = $values['isOverpayment'] ?? null;
        $this->isPaid = $values['isPaid'] ?? null;
        $this->isUnderpayment = $values['isUnderpayment'] ?? null;
        $this->langId = $values['langId'] ?? null;
        $this->loyaltyCost = $values['loyaltyCost'] ?? null;
        $this->loyaltyScore = $values['loyaltyScore'] ?? null;
        $this->notes = $values['notes'] ?? null;
        $this->notesPriv = $values['notesPriv'] ?? null;
        $this->notesPub = $values['notesPub'] ?? null;
        $this->orderId = $values['orderId'] ?? null;
        $this->orderUrl = $values['orderUrl'] ?? null;
        $this->origin = $values['origin'] ?? null;
        $this->paid = $values['paid'] ?? null;
        $this->paymentAdditionalFields = $values['paymentAdditionalFields'] ?? null;
        $this->paymentId = $values['paymentId'];
        $this->paymentUrl = $values['paymentUrl'] ?? null;
        $this->pickupPoint = $values['pickupPoint'] ?? null;
        $this->pickupPointData = $values['pickupPointData'] ?? null;
        $this->promoCode = $values['promoCode'] ?? null;
        $this->shippingAdditionalFields = $values['shippingAdditionalFields'] ?? null;
        $this->shippingCost = $values['shippingCost'] ?? null;
        $this->shippingId = $values['shippingId'];
        $this->shippingTaxId = $values['shippingTaxId'];
        $this->shippingTaxName = $values['shippingTaxName'] ?? null;
        $this->shippingTaxValue = $values['shippingTaxValue'] ?? null;
        $this->status = $values['status'] ?? null;
        $this->statusDate = $values['statusDate'] ?? null;
        $this->statusId = $values['statusId'];
        $this->sum = $values['sum'] ?? null;
        $this->totalParcels = $values['totalParcels'] ?? null;
        $this->totalProducts = $values['totalProducts'] ?? null;
        $this->useShippingAddress = $values['useShippingAddress'] ?? null;
        $this->userId = $values['userId'] ?? null;
        $this->userOrder = $values['userOrder'] ?? null;
        $this->vatEu = $values['vatEu'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
