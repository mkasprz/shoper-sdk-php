<?php

namespace Shoper\Sdk\Rest\PromotionCodes\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;
use Shoper\Sdk\Rest\PromotionCodes\Types\PromotionCodeInsertRangesItem;

class PromotionCodeInsert extends JsonSerializableType
{
    /**
     * @var ?int $active is promo code active
     */
    #[JsonProperty('active')]
    public ?int $active;

    /**
     * @var ?int $additionalFreeShipping free shipping
     */
    #[JsonProperty('additional_free_shipping')]
    public ?int $additionalFreeShipping;

    /**
     * @var ?array<int> $categoriesLimit promotion limited to selected categories. Array of categories ids.
     */
    #[JsonProperty('categories_limit'), ArrayType(['integer'])]
    public ?array $categoriesLimit;

    /**
     * @var string $code promotion code
     */
    #[JsonProperty('code')]
    public string $code;

    /**
     * @var int $codeId promotion code identifier
     */
    #[JsonProperty('code_id')]
    public int $codeId;

    /**
     * @var ?array<int> $collectionsLimit promotion limited to selected collections. Array of collections ids.
     */
    #[JsonProperty('collections_limit'), ArrayType(['integer'])]
    public ?array $collectionsLimit;

    /**
     * @var ?int $discount value of discount
     */
    #[JsonProperty('discount')]
    public ?int $discount;

    /**
     * @var int $discountType promotion type
     */
    #[JsonProperty('discount_type')]
    public int $discountType;

    /**
     * @var ?int $global discount for all products in order
     */
    #[JsonProperty('global')]
    public ?int $global;

    /**
     * @var ?array<int> $groupsLimit promotion limited to selected groups. Array of groups ids.
     */
    #[JsonProperty('groups_limit'), ArrayType(['integer'])]
    public ?array $groupsLimit;

    /**
     * @var ?float $maxAmount maximum order value
     */
    #[JsonProperty('max_amount')]
    public ?float $maxAmount;

    /**
     * @var ?float $maxDiscountAmount maximum discount value
     */
    #[JsonProperty('max_discount_amount')]
    public ?float $maxDiscountAmount;

    /**
     * @var ?int $maxQuantity maximum quantity
     */
    #[JsonProperty('max_quantity')]
    public ?int $maxQuantity;

    /**
     * @var ?float $minAmount minimum order value
     */
    #[JsonProperty('min_amount')]
    public ?float $minAmount;

    /**
     * @var ?int $minQuantity minimum quantity
     */
    #[JsonProperty('min_quantity')]
    public ?int $minQuantity;

    /**
     * @var string $name promotion code name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?int $peruserLimit per user usage limit
     */
    #[JsonProperty('peruser_limit')]
    public ?int $peruserLimit;

    /**
     * @var ?array<int> $producersLimit promotion limited to selected producers. Array of producers ids.
     */
    #[JsonProperty('producers_limit'), ArrayType(['integer'])]
    public ?array $producersLimit;

    /**
     * @var ?array<int> $productsLimit promotion limited to selected products. Array of products ids.
     */
    #[JsonProperty('products_limit'), ArrayType(['integer'])]
    public ?array $productsLimit;

    /**
     * @var ?array<PromotionCodeInsertRangesItem> $ranges an array of progressive discount ranges
     */
    #[JsonProperty('ranges'), ArrayType([PromotionCodeInsertRangesItem::class])]
    public ?array $ranges;

    /**
     * @var ?array<int> $shippings Array of shipping method ids. You can use this element when discount_type equal 4 or 5
     */
    #[JsonProperty('shippings'), ArrayType(['integer'])]
    public ?array $shippings;

    /**
     * @var ?string $timeFrom promotion from - <a href="http://www.iso.org/iso/home/standards/iso8601.htm">ISO_8601</a>
     */
    #[JsonProperty('time_from')]
    public ?string $timeFrom;

    /**
     * @var ?string $timeTo promotion to - <a href="http://www.iso.org/iso/home/standards/iso8601.htm">ISO_8601</a>
     */
    #[JsonProperty('time_to')]
    public ?string $timeTo;

    /**
     * @var ?int $usageCount actual usage count
     */
    #[JsonProperty('usage_count')]
    public ?int $usageCount;

    /**
     * @var ?int $usageLimit usage limit
     */
    #[JsonProperty('usage_limit')]
    public ?int $usageLimit;

    /**
     * @param array{
     *   code: string,
     *   codeId: int,
     *   discountType: int,
     *   name: string,
     *   active?: ?int,
     *   additionalFreeShipping?: ?int,
     *   categoriesLimit?: ?array<int>,
     *   collectionsLimit?: ?array<int>,
     *   discount?: ?int,
     *   global?: ?int,
     *   groupsLimit?: ?array<int>,
     *   maxAmount?: ?float,
     *   maxDiscountAmount?: ?float,
     *   maxQuantity?: ?int,
     *   minAmount?: ?float,
     *   minQuantity?: ?int,
     *   peruserLimit?: ?int,
     *   producersLimit?: ?array<int>,
     *   productsLimit?: ?array<int>,
     *   ranges?: ?array<PromotionCodeInsertRangesItem>,
     *   shippings?: ?array<int>,
     *   timeFrom?: ?string,
     *   timeTo?: ?string,
     *   usageCount?: ?int,
     *   usageLimit?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->active = $values['active'] ?? null;
        $this->additionalFreeShipping = $values['additionalFreeShipping'] ?? null;
        $this->categoriesLimit = $values['categoriesLimit'] ?? null;
        $this->code = $values['code'];
        $this->codeId = $values['codeId'];
        $this->collectionsLimit = $values['collectionsLimit'] ?? null;
        $this->discount = $values['discount'] ?? null;
        $this->discountType = $values['discountType'];
        $this->global = $values['global'] ?? null;
        $this->groupsLimit = $values['groupsLimit'] ?? null;
        $this->maxAmount = $values['maxAmount'] ?? null;
        $this->maxDiscountAmount = $values['maxDiscountAmount'] ?? null;
        $this->maxQuantity = $values['maxQuantity'] ?? null;
        $this->minAmount = $values['minAmount'] ?? null;
        $this->minQuantity = $values['minQuantity'] ?? null;
        $this->name = $values['name'];
        $this->peruserLimit = $values['peruserLimit'] ?? null;
        $this->producersLimit = $values['producersLimit'] ?? null;
        $this->productsLimit = $values['productsLimit'] ?? null;
        $this->ranges = $values['ranges'] ?? null;
        $this->shippings = $values['shippings'] ?? null;
        $this->timeFrom = $values['timeFrom'] ?? null;
        $this->timeTo = $values['timeTo'] ?? null;
        $this->usageCount = $values['usageCount'] ?? null;
        $this->usageLimit = $values['usageLimit'] ?? null;
    }
}
