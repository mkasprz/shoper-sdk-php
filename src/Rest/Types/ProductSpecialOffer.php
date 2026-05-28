<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

/**
 * **Deprecated since 5.24.35.** an associative array with product general special offer information (applies for product itself and all variants that do not have dedicated special offer)
 */
class ProductSpecialOffer extends JsonSerializableType
{
    /**
     * defines whether the promotion applies to the entire product (general promotion) or to the defined options
     * <ul>
     *     <li>1 - whole product with all options
     *     <li>2 - just defined options
     * </ul>
     *
     * @var ?string $conditionType
     */
    #[JsonProperty('condition_type')]
    public ?string $conditionType;

    /**
     * @var ?string $dateFrom start of product promotion in <a href="https://www.iso.org/iso-8601-date-and-time-format.html">ISO 8601</a> (for example <code>2024-01-15 12:34:56</code>) format
     */
    #[JsonProperty('date_from')]
    public ?string $dateFrom;

    /**
     * @var ?string $dateTo end of product promotion in <a href="https://www.iso.org/iso-8601-date-and-time-format.html">ISO 8601</a> (for example <code>2024-01-15 12:34:56</code>) format
     */
    #[JsonProperty('date_to')]
    public ?string $dateTo;

    /**
     * @var ?string $discount discount for the product
     */
    #[JsonProperty('discount')]
    public ?string $discount;

    /**
     * @var ?string $discountSpecial discount for the product (special)
     */
    #[JsonProperty('discount_special')]
    public ?string $discountSpecial;

    /**
     * a method of special offer calculation:
     * <ul>
     *     <li>1 - deprecated (discount by amount, did not applied for variants with dedicated price, product price changes affected discount value)</li>
     *     <li>2 - discount by amount, applies for all types of variants (with dedicated price also), does not change on prices changes</li>
     * </ul>
     *
     * @var ?string $discountType
     */
    #[JsonProperty('discount_type')]
    public ?string $discountType;

    /**
     * @var ?string $discountWholesale discount for the product (wholesale)
     */
    #[JsonProperty('discount_wholesale')]
    public ?string $discountWholesale;

    /**
     * @var ?string $promoId promotion identifier
     */
    #[JsonProperty('promo_id')]
    public ?string $promoId;

    /**
     * array of [stock](#tag/ProductStocks) identifiers
     * <ul>
     *     <li>base stock identifier - for special offer on whole product with all options ([condition_type](#tag/Specialoffers) = 1)
     *     <li>defined stocks identifiers - for special offer on defined options ([condition_type](#tag/Specialoffers) = 2)
     * </ul>
     *
     * @var ?array<int> $stocks
     */
    #[JsonProperty('stocks'), ArrayType(['integer'])]
    public ?array $stocks;

    /**
     * @param array{
     *   conditionType?: ?string,
     *   dateFrom?: ?string,
     *   dateTo?: ?string,
     *   discount?: ?string,
     *   discountSpecial?: ?string,
     *   discountType?: ?string,
     *   discountWholesale?: ?string,
     *   promoId?: ?string,
     *   stocks?: ?array<int>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->conditionType = $values['conditionType'] ?? null;
        $this->dateFrom = $values['dateFrom'] ?? null;
        $this->dateTo = $values['dateTo'] ?? null;
        $this->discount = $values['discount'] ?? null;
        $this->discountSpecial = $values['discountSpecial'] ?? null;
        $this->discountType = $values['discountType'] ?? null;
        $this->discountWholesale = $values['discountWholesale'] ?? null;
        $this->promoId = $values['promoId'] ?? null;
        $this->stocks = $values['stocks'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
