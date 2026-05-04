<?php

namespace Shoper\Sdk\Rest\Specialoffers\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

class SpecialofferUpdate extends JsonSerializableType
{
    /**
     * defines whether the promotion applies to the entire product (general promotion) or to the defined options
     * <ul>
     *     <li>1 - whole product with all options
     *     <li>2 - just defined options
     * </ul>
     *
     * @var ?int $conditionType
     */
    #[JsonProperty('condition_type')]
    public ?int $conditionType;

    /**
     * @var ?string $dateFrom start of product promotion
     */
    #[JsonProperty('date_from')]
    public ?string $dateFrom;

    /**
     * @var ?string $dateTo end of product promotion
     */
    #[JsonProperty('date_to')]
    public ?string $dateTo;

    /**
     * @var ?float $discount discount for the product
     */
    #[JsonProperty('discount')]
    public ?float $discount;

    /**
     * @var ?float $discountSpecial discount for the product (special)
     */
    #[JsonProperty('discount_special')]
    public ?float $discountSpecial;

    /**
     * a method of special offer calculation:
     * <ul>
     *     <li>1 - deprecated (discount by amount, did not applied for variants with dedicated price, product price changes were affecting discount value)</li>
     *     <li>2 - discount by amount, applies for all types of variants (with dedicated price also)</li>
     *     <li>3 - percentage discount, applies for all types of variants (with dedicated price also)</li>
     * </ul>
     *
     * @var ?int $discountType
     */
    #[JsonProperty('discount_type')]
    public ?int $discountType;

    /**
     * @var ?float $discountWholesale discount for the product (wholesale)
     */
    #[JsonProperty('discount_wholesale')]
    public ?float $discountWholesale;

    /**
     * @var ?int $productId product identifier
     */
    #[JsonProperty('product_id')]
    public ?int $productId;

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
     *   conditionType?: ?int,
     *   dateFrom?: ?string,
     *   dateTo?: ?string,
     *   discount?: ?float,
     *   discountSpecial?: ?float,
     *   discountType?: ?int,
     *   discountWholesale?: ?float,
     *   productId?: ?int,
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
        $this->productId = $values['productId'] ?? null;
        $this->stocks = $values['stocks'] ?? null;
    }
}
