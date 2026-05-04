<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

/**
 * Available order statuses
 */
class Status extends JsonSerializableType
{
    /**
     * @var ?string $active is status enabled
     */
    #[JsonProperty('active')]
    public ?string $active;

    /**
     * @var ?string $color status color (hex)
     */
    #[JsonProperty('color')]
    public ?string $color;

    /**
     * @var ?string $default is status default
     */
    #[JsonProperty('default')]
    public ?string $default;

    /**
     * @var ?value-of<StatusEmailChange> $emailChange notify on status change using e-mail?
     */
    #[JsonProperty('email_change')]
    public ?string $emailChange;

    /**
     * @var ?string $order status order
     */
    #[JsonProperty('order')]
    public ?string $order;

    /**
     * @var ?string $statusId status identifier
     */
    #[JsonProperty('status_id')]
    public ?string $statusId;

    /**
     * @var ?array<string, StatusTranslationsValue> $translations an associative array with object translations
     */
    #[JsonProperty('translations'), ArrayType(['string' => StatusTranslationsValue::class])]
    public ?array $translations;

    /**
     * one of following:
     * <ul>
     *     <li>1 - new,</li>
     *     <li>2 - opened,</li>
     *     <li>3 - closed,</li>
     *     <li>4 - not completed</li>
     * </ul>
     *
     * @var ?string $type
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @param array{
     *   active?: ?string,
     *   color?: ?string,
     *   default?: ?string,
     *   emailChange?: ?value-of<StatusEmailChange>,
     *   order?: ?string,
     *   statusId?: ?string,
     *   translations?: ?array<string, StatusTranslationsValue>,
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
