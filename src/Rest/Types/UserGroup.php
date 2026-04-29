<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

/**
 * User groups
 */
class UserGroup extends JsonSerializableType
{
    /**
     * @var ?bool $autoAdd should users be automatically added to this group?
     */
    #[JsonProperty('auto_add')]
    public ?bool $autoAdd;

    /**
     * @var ?float $discount discount for group (percent)
     */
    #[JsonProperty('discount')]
    public ?float $discount;

    /**
     * @var ?int $groupId group identifier
     */
    #[JsonProperty('group_id')]
    public ?int $groupId;

    /**
     * @var string $name name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?int $priceLevel pricing level (1-3)
     */
    #[JsonProperty('price_level')]
    public ?int $priceLevel;

    /**
     * @param array{
     *   name: string,
     *   autoAdd?: ?bool,
     *   discount?: ?float,
     *   groupId?: ?int,
     *   priceLevel?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->autoAdd = $values['autoAdd'] ?? null;
        $this->discount = $values['discount'] ?? null;
        $this->groupId = $values['groupId'] ?? null;
        $this->name = $values['name'];
        $this->priceLevel = $values['priceLevel'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
