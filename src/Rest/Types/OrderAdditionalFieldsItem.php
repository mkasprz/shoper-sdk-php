<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class OrderAdditionalFieldsItem extends JsonSerializableType
{
    /**
     * @var ?value-of<OrderAdditionalFieldsItemActive> $active is active?
     */
    #[JsonProperty('active')]
    public ?string $active;

    /**
     * @var ?string $fieldId additional field identifier
     */
    #[JsonProperty('field_id')]
    public ?string $fieldId;

    /**
     * Show in (bit mask):
     * <ul>
     *     <li>8 - order field,</li>
     *     <li>16 - with registration,</li>
     *     <li>32 - without registration,</li>
     *     <li>64 - signed in client</li>
     * </ul>
     *
     * @var ?string $locate
     */
    #[JsonProperty('locate')]
    public ?string $locate;

    /**
     * @var ?string $order sorting order
     */
    #[JsonProperty('order')]
    public ?string $order;

    /**
     * @var ?value-of<OrderAdditionalFieldsItemReq> $req is required?
     */
    #[JsonProperty('req')]
    public ?string $req;

    /**
     * field type:
     * <ul>
     *     <li>1 - text,</li>
     *     <li>2 - checkbox,</li>
     *     <li>3 - drop down</li>
     * </ul>
     *
     * @var ?string $type
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @var ?string $value additional field value
     */
    #[JsonProperty('value')]
    public ?string $value;

    /**
     * @param array{
     *   active?: ?value-of<OrderAdditionalFieldsItemActive>,
     *   fieldId?: ?string,
     *   locate?: ?string,
     *   order?: ?string,
     *   req?: ?value-of<OrderAdditionalFieldsItemReq>,
     *   type?: ?string,
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
