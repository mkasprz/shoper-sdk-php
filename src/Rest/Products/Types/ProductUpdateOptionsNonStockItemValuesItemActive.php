<?php

namespace Shoper\Sdk\Rest\Products\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class ProductUpdateOptionsNonStockItemValuesItemActive extends JsonSerializableType
{
    /**
     * @var int $valueId [option value](#tag/OptionValues) identifier
     */
    #[JsonProperty('value_id')]
    public int $valueId;

    /**
     * @var ?bool $active whether the value is active for the product (defaults to true)
     */
    #[JsonProperty('active')]
    public ?bool $active;

    /**
     * product-level price change type:
     * <ul>
     *     <li>-1 - decrease by <code>change_price_value</code></li>
     *     <li>0 - no change</li>
     *     <li>1 - increase by <code>change_price_value</code></li>
     *     <li>2 - inherit from option value</li>
     * </ul>
     *
     * @var ?int $changePriceType
     */
    #[JsonProperty('change_price_type')]
    public ?int $changePriceType;

    /**
     * @var ?float $changePriceValue product-level price change value for selected option value
     */
    #[JsonProperty('change_price_value')]
    public ?float $changePriceValue;

    /**
     * should price be changed by percent?
     * <ul>
     *     <li>0 - no (change by value)</li>
     *     <li>1 - yes (change by percent)</li>
     *     <li>2 - inherit from option value</li>
     * </ul>
     *
     * @var ?int $percent
     */
    #[JsonProperty('percent')]
    public ?int $percent;

    /**
     * @var ?int $gfx optional image identifier assigned on product level for this option value
     */
    #[JsonProperty('gfx')]
    public ?int $gfx;

    /**
     * @param array{
     *   valueId: int,
     *   active?: ?bool,
     *   changePriceType?: ?int,
     *   changePriceValue?: ?float,
     *   percent?: ?int,
     *   gfx?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->valueId = $values['valueId'];
        $this->active = $values['active'] ?? null;
        $this->changePriceType = $values['changePriceType'] ?? null;
        $this->changePriceValue = $values['changePriceValue'] ?? null;
        $this->percent = $values['percent'] ?? null;
        $this->gfx = $values['gfx'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
