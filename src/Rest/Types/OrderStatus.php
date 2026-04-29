<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

/**
 * order [status](#tag/Statuses) data
 */
class OrderStatus extends JsonSerializableType
{
    /**
     * @var ?string $active
     */
    #[JsonProperty('active')]
    public ?string $active;

    /**
     * @var ?string $color
     */
    #[JsonProperty('color')]
    public ?string $color;

    /**
     * @var ?string $default
     */
    #[JsonProperty('default')]
    public ?string $default;

    /**
     * @var ?string $emailChange
     */
    #[JsonProperty('email_change')]
    public ?string $emailChange;

    /**
     * @var ?string $order
     */
    #[JsonProperty('order')]
    public ?string $order;

    /**
     * @var ?string $statusId
     */
    #[JsonProperty('status_id')]
    public ?string $statusId;

    /**
     * @var ?string $type
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @param array{
     *   active?: ?string,
     *   color?: ?string,
     *   default?: ?string,
     *   emailChange?: ?string,
     *   order?: ?string,
     *   statusId?: ?string,
     *   type?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->active = $values['active'] ?? null;
        $this->color = $values['color'] ?? null;
        $this->default = $values['default'] ?? null;
        $this->emailChange = $values['emailChange'] ?? null;
        $this->order = $values['order'] ?? null;
        $this->statusId = $values['statusId'] ?? null;
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
