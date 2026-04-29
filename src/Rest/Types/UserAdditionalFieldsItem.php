<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class UserAdditionalFieldsItem extends JsonSerializableType
{
    /**
     * @var ?bool $active is field active
     */
    #[JsonProperty('active')]
    public ?bool $active;

    /**
     * @var ?int $fieldId field identifier
     */
    #[JsonProperty('field_id')]
    public ?int $fieldId;

    /**
     * show in (bitmask):
     * <ul>
     *     <li>1 - user fields,</li>
     *     <li>2 - user panel,</li>
     *     <li>4 - registration</li>
     * </ul>
     *
     * @var ?int $locate
     */
    #[JsonProperty('locate')]
    public ?int $locate;

    /**
     * @var ?int $order field order
     */
    #[JsonProperty('order')]
    public ?int $order;

    /**
     * @var ?bool $req is field required
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
     * @var ?string $value field value
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
