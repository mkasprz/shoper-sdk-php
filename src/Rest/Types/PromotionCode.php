<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

/**
 * Promotion codes
 */
class PromotionCode extends JsonSerializableType
{
    /**
     * @var ?string $active is promo code active
     */
    #[JsonProperty('active')]
    public ?string $active;

    /**
     * @var ?string $additionalFreeShipping free shipping
     */
    #[JsonProperty('additional_free_shipping')]
    public ?string $additionalFreeShipping;

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
     * @var ?string $codeId Unique identifier of the promotion code.
     */
    #[JsonProperty('code_id')]
    public ?string $codeId;

    /**
     * @var ?array<int> $collectionsLimit promotion limited to selected collections. Array of collections ids.
     */
    #[JsonProperty('collections_limit'), ArrayType(['integer'])]
    public ?array $collectionsLimit;

    /**
     * @var ?string $discount value of discount
     */
    #[JsonProperty('discount')]
    public ?string $discount;

    /**
     * @var string $discountType promotion type
     */
    #[JsonProperty('discount_type')]
    public string $discountType;

    /**
     * @var ?string $global discount for all products in order
     */
    #[JsonProperty('global')]
    public ?string $global;

    /**
     * @var ?array<int> $groupsLimit promotion limited to selected groups. Array of groups ids.
     */
    #[JsonProperty('groups_limit'), ArrayType(['integer'])]
    public ?array $groupsLimit;

    /**
     * @var ?string $maxAmount maximum order value
     */
    #[JsonProperty('max_amount')]
    public ?string $maxAmount;

    /**
     * @var ?float $maxDiscountAmount maximum discount value
     */
    #[JsonProperty('max_discount_amount')]
    public ?float $maxDiscountAmount;

    /**
     * @var ?string $maxQuantity maximum quantity
     */
    #[JsonProperty('max_quantity')]
    public ?string $maxQuantity;

    /**
     * @var ?string $minAmount minimum order value
     */
    #[JsonProperty('min_amount')]
    public ?string $minAmount;

    /**
     * @var ?string $minQuantity minimum quantity
     */
    #[JsonProperty('min_quantity')]
    public ?string $minQuantity;

    /**
     * @var string $name promotion code name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $peruserLimit per user usage limit
     */
    #[JsonProperty('peruser_limit')]
    public ?string $peruserLimit;

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
     * @var ?array<PromotionCodeRangesItem> $ranges an array of progressive discount ranges
     */
    #[JsonProperty('ranges'), ArrayType([PromotionCodeRangesItem::class])]
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
     * @var ?string $timeTo promotion to - <a href="http://www.iso.org/iso/home/standards/iso8601.yml">ISO_8601</a>
     */
    #[JsonProperty('time_to')]
    public ?string $timeTo;

    /**
     * @var ?int $usageCount actual usage count
     */
    #[JsonProperty('usage_count')]
    public ?int $usageCount;

    /**
     * @var ?string $usageLimit usage limit
     */
    #[JsonProperty('usage_limit')]
    public ?string $usageLimit;

    /**
     * @param array{
     *   code: string,
     *   discountType: string,
     *   name: string,
     *   active?: ?string,
     *   additionalFreeShipping?: ?string,
     *   categoriesLimit?: ?array<int>,
     *   codeId?: ?string,
     *   collectionsLimit?: ?array<int>,
     *   discount?: ?string,
     *   global?: ?string,
     *   groupsLimit?: ?array<int>,
     *   maxAmount?: ?string,
     *   maxDiscountAmount?: ?float,
     *   maxQuantity?: ?string,
     *   minAmount?: ?string,
     *   minQuantity?: ?string,
     *   peruserLimit?: ?string,
     *   producersLimit?: ?array<int>,
     *   productsLimit?: ?array<int>,
     *   ranges?: ?array<PromotionCodeRangesItem>,
     *   shippings?: ?array<int>,
     *   timeFrom?: ?string,
     *   timeTo?: ?string,
     *   usageCount?: ?int,
     *   usageLimit?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->active = $values['active'] ?? null;
        $this->additionalFreeShipping = $values['additionalFreeShipping'] ?? null;
        $this->categoriesLimit = $values['categoriesLimit'] ?? null;
        $this->code = $values['code'];
        $this->codeId = $values['codeId'] ?? null;
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

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
