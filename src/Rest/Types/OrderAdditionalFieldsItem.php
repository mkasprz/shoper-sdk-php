<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class OrderAdditionalFieldsItem extends JsonSerializableType
{
    /**
     * @var ?bool $active is active?
     */
    #[JsonProperty('active')]
    public ?bool $active;

    /**
     * @var ?int $fieldId additional field identifier
     */
    #[JsonProperty('field_id')]
    public ?int $fieldId;

    /**
     * Show in (bit mask):
     * <ul>
     *     <li>8 - order field,</li>
     *     <li>16 - with registration,</li>
     *     <li>32 - without registration,</li>
     *     <li>64 - signed in client</li>
     * </ul>
     *
     * @var ?int $locate
     */
    #[JsonProperty('locate')]
    public ?int $locate;

    /**
     * @var ?int $order sorting order
     */
    #[JsonProperty('order')]
    public ?int $order;

    /**
     * @var ?bool $req is required?
     */
    #[JsonProperty('req')]
    public ?bool $req;

    /**
     * field type:
     * <ul>
     *     <li>1 - text,</li>
     *     <li>2 - checkbox,</li>
     *     <li>3 - drop down</li>
     * </ul>
     *
     * @var ?int $type
     */
    #[JsonProperty('type')]
    public ?int $type;

    /**
     * @var ?string $value additional field value
     */
    #[JsonProperty('value')]
    public ?string $value;

    /**
     * @param array{
     *   active?: ?bool,
     *   fieldId?: ?int,
     *   locate?: ?int,
     *   order?: ?int,
     *   req?: ?bool,
     *   type?: ?int,
     *   value?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->active = $values['active'] ?? null;
        $this->fieldId = $values['fieldId'] ?? null;
        $this->locate = $values['locate'] ?? null;
        $this->order = $values['order'] ?? null;
        $this->req = $values['req'] ?? null;
        $this->type = $values['type'] ?? null;
        $this->value = $values['value'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
