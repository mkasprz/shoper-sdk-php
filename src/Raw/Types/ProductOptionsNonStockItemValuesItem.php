<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class ProductOptionsNonStockItemValuesItem extends JsonSerializableType
{
    /**
     * @var ?int $valueId [option value](#tag/OptionValues) identifier
     */
    #[JsonProperty('value_id')]
    public ?int $valueId;

    /**
     * @var ?bool $active whether value is active for the product (always true in this list)
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
     * @var ?float $changePriceOption default price change value defined on option value
     */
    #[JsonProperty('change_price_option')]
    public ?float $changePriceOption;

    /**
     * @var ?int $percentOption default percent flag defined on option value (0/1)
     */
    #[JsonProperty('percent_option')]
    public ?int $percentOption;

    /**
     * @var ?string $name [option value](#tag/OptionValues) title
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?int $order sorting order of option value
     */
    #[JsonProperty('order')]
    public ?int $order;

    /**
     * @var ?int $gfx optional image identifier assigned on product level for this option value
     */
    #[JsonProperty('gfx')]
    public ?int $gfx;

    /**
     * @param array{
     *   valueId?: ?int,
     *   active?: ?bool,
     *   changePriceType?: ?int,
     *   changePriceValue?: ?float,
     *   percent?: ?int,
     *   changePriceOption?: ?float,
     *   percentOption?: ?int,
     *   name?: ?string,
     *   order?: ?int,
     *   gfx?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->valueId = $values['valueId'] ?? null;
        $this->active = $values['active'] ?? null;
        $this->changePriceType = $values['changePriceType'] ?? null;
        $this->changePriceValue = $values['changePriceValue'] ?? null;
        $this->percent = $values['percent'] ?? null;
        $this->changePriceOption = $values['changePriceOption'] ?? null;
        $this->percentOption = $values['percentOption'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->order = $values['order'] ?? null;
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
