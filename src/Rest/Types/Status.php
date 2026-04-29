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
     * @var ?int $active is status enabled
     */
    #[JsonProperty('active')]
    public ?int $active;

    /**
     * @var ?string $color status color (hex)
     */
    #[JsonProperty('color')]
    public ?string $color;

    /**
     * @var ?int $default is status default
     */
    #[JsonProperty('default')]
    public ?int $default;

    /**
     * @var ?bool $emailChange notify on status change using e-mail?
     */
    #[JsonProperty('email_change')]
    public ?bool $emailChange;

    /**
     * @var ?int $order status order
     */
    #[JsonProperty('order')]
    public ?int $order;

    /**
     * @var ?int $statusId status identifier
     */
    #[JsonProperty('status_id')]
    public ?int $statusId;

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
     * @var ?int $type
     */
    #[JsonProperty('type')]
    public ?int $type;

    /**
     * @param array{
     *   active?: ?int,
     *   color?: ?string,
     *   default?: ?int,
     *   emailChange?: ?bool,
     *   order?: ?int,
     *   statusId?: ?int,
     *   translations?: ?array<string, StatusTranslationsValue>,
     *   type?: ?int,
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
