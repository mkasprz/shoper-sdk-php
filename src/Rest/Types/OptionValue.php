<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

/**
 * Value of [option](#tag/Options) within product stock.
 */
class OptionValue extends JsonSerializableType
{
    /**
     * Denomination amount (value of a gift card variant). Set only for denomination
     * option values (when parent option_group has `denomination=1`). Read-only —
     * cannot be modified via REST API. SHOPAPI-780.
     *
     * @var ?string $amount
     */
    #[JsonProperty('amount')]
    public ?string $amount;

    /**
     * <ul>
     *     <li>-1 - decrease price by `change_price_value`,</li>
     *     <li>0 - keep price unchanged,</li>
     *     <li>1 - increse price by `change_price_value`</li>
     * </ul>
     *
     * @var ?int $changePriceType
     */
    #[JsonProperty('change_price_type')]
    public ?int $changePriceType;

    /**
     * @var ?float $changePriceValue value that modifies price
     */
    #[JsonProperty('change_price_value')]
    public ?float $changePriceValue;

    /**
     * @var ?string $color color in hex format or "transparent"
     */
    #[JsonProperty('color')]
    public ?string $color;

    /**
     * @var ?string $optionId [option](#tag/Options) identifier this value is bound to
     */
    #[JsonProperty('option_id')]
    public ?string $optionId;

    /**
     * @var ?string $order priority of sorting options order
     */
    #[JsonProperty('order')]
    public ?string $order;

    /**
     * @var ?string $ovalueId option value identifier
     */
    #[JsonProperty('ovalue_id')]
    public ?string $ovalueId;

    /**
     * should price be changed by percent?
     * <ul>
     *     <li>0 - no (change by value),</li>
     *     <li>1 - yes (change by percent)</li>
     * </ul>
     *
     * @var ?string $percent
     */
    #[JsonProperty('percent')]
    public ?string $percent;

    /**
     * @var ?int $totalProducts amount of products this option value is bound to
     */
    #[JsonProperty('total_products')]
    public ?int $totalProducts;

    /**
     * @var ?int $totalStocks amount of stocks this option value is bound to
     */
    #[JsonProperty('total_stocks')]
    public ?int $totalStocks;

    /**
     * @var ?array<string, OptionValueTranslationsValue> $translations an associative array with object translations
     */
    #[JsonProperty('translations'), ArrayType(['string' => OptionValueTranslationsValue::class])]
    public ?array $translations;

    /**
     * @param array{
     *   amount?: ?string,
     *   changePriceType?: ?int,
     *   changePriceValue?: ?float,
     *   color?: ?string,
     *   optionId?: ?string,
     *   order?: ?string,
     *   ovalueId?: ?string,
     *   percent?: ?string,
     *   totalProducts?: ?int,
     *   totalStocks?: ?int,
     *   translations?: ?array<string, OptionValueTranslationsValue>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->amount = $values['amount'] ?? null;
        $this->changePriceType = $values['changePriceType'] ?? null;
        $this->changePriceValue = $values['changePriceValue'] ?? null;
        $this->color = $values['color'] ?? null;
        $this->optionId = $values['optionId'] ?? null;
        $this->order = $values['order'] ?? null;
        $this->ovalueId = $values['ovalueId'] ?? null;
        $this->percent = $values['percent'] ?? null;
        $this->totalProducts = $values['totalProducts'] ?? null;
        $this->totalStocks = $values['totalStocks'] ?? null;
        $this->translations = $values['translations'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
