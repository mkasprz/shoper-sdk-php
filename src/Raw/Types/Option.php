<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

/**
 * An attribute is a thing describing the product. For example, color or material.
 */
class Option extends JsonSerializableType
{
    /**
     * only for <code>select</code>, <code>radio</code>, <code>color</code>:
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
     * @var ?value-of<OptionFilters> $filters show in filters (only for <code>select</code>, <code>radio</code>, <code>color</code>) — server delivers as "0"/"1" string
     */
    #[JsonProperty('filters')]
    public ?string $filters;

    /**
     * @var ?string $groupId [option group](#tag/OptionGroups) identifier option is bound to
     */
    #[JsonProperty('group_id')]
    public ?string $groupId;

    /**
     * @var ?string $optionId option identifier
     */
    #[JsonProperty('option_id')]
    public ?string $optionId;

    /**
     * @var ?string $order priority of sorting options order
     */
    #[JsonProperty('order')]
    public ?string $order;

    /**
     * should price be changed by percent (only for <code>select</code>, <code>radio</code>, <code>color</code>)?
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
     * @var ?value-of<OptionRequired> $required is option required
     */
    #[JsonProperty('required')]
    public ?string $required;

    /**
     * @var ?value-of<OptionStock> $stock stock modifier (only for <code>select</code>, <code>radio</code>, <code>color</code>; default: <code>false</code>)
     */
    #[JsonProperty('stock')]
    public ?string $stock;

    /**
     * @var ?array<string, OptionTranslationsValue> $translations an associative array with object translations
     */
    #[JsonProperty('translations'), ArrayType(['string' => OptionTranslationsValue::class])]
    public ?array $translations;

    /**
     * option type; one of following:
     * <ul>
     *     <li>file,</li>
     *     <li>text,</li>
     *     <li>radio,</li>
     *     <li>select,</li>
     *     <li>checkbox,</li>
     *     <li>color</li>
     * </ul>
     * default: <code>select</code>
     *
     * @var ?string $type
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @param array{
     *   changePriceType?: ?int,
     *   changePriceValue?: ?float,
     *   filters?: ?value-of<OptionFilters>,
     *   groupId?: ?string,
     *   optionId?: ?string,
     *   order?: ?string,
     *   percent?: ?string,
     *   required?: ?value-of<OptionRequired>,
     *   stock?: ?value-of<OptionStock>,
     *   translations?: ?array<string, OptionTranslationsValue>,
     *   type?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->changePriceType = $values['changePriceType'] ?? null;
        $this->changePriceValue = $values['changePriceValue'] ?? null;
        $this->filters = $values['filters'] ?? null;
        $this->groupId = $values['groupId'] ?? null;
        $this->optionId = $values['optionId'] ?? null;
        $this->order = $values['order'] ?? null;
        $this->percent = $values['percent'] ?? null;
        $this->required = $values['required'] ?? null;
        $this->stock = $values['stock'] ?? null;
        $this->translations = $values['translations'] ?? null;
        $this->type = $values['type'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
