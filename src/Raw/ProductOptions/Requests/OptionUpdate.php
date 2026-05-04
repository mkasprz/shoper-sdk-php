<?php

namespace Shoper\Sdk\Rest\ProductOptions\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\ProductOptions\Types\OptionUpdateTranslationsValue;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

class OptionUpdate extends JsonSerializableType
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
     * @var ?bool $filters show in filters (only for <code>select</code>, <code>radio</code>, <code>color</code>)
     */
    #[JsonProperty('filters')]
    public ?bool $filters;

    /**
     * @var ?int $groupId [option group](#tag/OptionGroups) identifier option is bound to
     */
    #[JsonProperty('group_id')]
    public ?int $groupId;

    /**
     * @var ?int $order priority of sorting options order
     */
    #[JsonProperty('order')]
    public ?int $order;

    /**
     * should price be changed by percent (only for <code>select</code>, <code>radio</code>, <code>color</code>)?
     * <ul>
     *     <li>0 - no (change by value),</li>
     *     <li>1 - yes (change by percent)</li>
     * </ul>
     *
     * @var ?int $percent
     */
    #[JsonProperty('percent')]
    public ?int $percent;

    /**
     * @var ?bool $required is option required
     */
    #[JsonProperty('required')]
    public ?bool $required;

    /**
     * @var ?bool $stock stock modifier (only for <code>select</code>, <code>radio</code>, <code>color</code>; default: <code>false</code>)
     */
    #[JsonProperty('stock')]
    public ?bool $stock;

    /**
     * @var ?array<string, OptionUpdateTranslationsValue> $translations an associative array with object translations
     */
    #[JsonProperty('translations'), ArrayType(['string' => OptionUpdateTranslationsValue::class])]
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
     *   filters?: ?bool,
     *   groupId?: ?int,
     *   order?: ?int,
     *   percent?: ?int,
     *   required?: ?bool,
     *   stock?: ?bool,
     *   translations?: ?array<string, OptionUpdateTranslationsValue>,
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
        $this->order = $values['order'] ?? null;
        $this->percent = $values['percent'] ?? null;
        $this->required = $values['required'] ?? null;
        $this->stock = $values['stock'] ?? null;
        $this->translations = $values['translations'] ?? null;
        $this->type = $values['type'] ?? null;
    }
}
