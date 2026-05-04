<?php

namespace Shoper\Sdk\Rest\OptionValues\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\OptionValues\Types\OptionValueUpdateTranslationsValue;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

class OptionValueUpdate extends JsonSerializableType
{
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
     * @var ?int $optionId [option](#tag/Options) identifier this value is bound to
     */
    #[JsonProperty('option_id')]
    public ?int $optionId;

    /**
     * @var ?int $order priority of sorting options order
     */
    #[JsonProperty('order')]
    public ?int $order;

    /**
     * should price be changed by percent?
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
     * @var ?array<string, OptionValueUpdateTranslationsValue> $translations an associative array with object translations
     */
    #[JsonProperty('translations'), ArrayType(['string' => OptionValueUpdateTranslationsValue::class])]
    public ?array $translations;

    /**
     * @param array{
     *   changePriceType?: ?int,
     *   changePriceValue?: ?float,
     *   color?: ?string,
     *   optionId?: ?int,
     *   order?: ?int,
     *   percent?: ?int,
     *   translations?: ?array<string, OptionValueUpdateTranslationsValue>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->changePriceType = $values['changePriceType'] ?? null;
        $this->changePriceValue = $values['changePriceValue'] ?? null;
        $this->color = $values['color'] ?? null;
        $this->optionId = $values['optionId'] ?? null;
        $this->order = $values['order'] ?? null;
        $this->percent = $values['percent'] ?? null;
        $this->translations = $values['translations'] ?? null;
    }
}
