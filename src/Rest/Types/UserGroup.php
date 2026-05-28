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
     * @var ?int $autoAdd should users be automatically added to this group?
     */
    #[JsonProperty('auto_add')]
    public ?int $autoAdd;

    /**
     * @var ?string $discount discount for group (percent)
     */
    #[JsonProperty('discount')]
    public ?string $discount;

    /**
     * @var ?string $groupId group identifier
     */
    #[JsonProperty('group_id')]
    public ?string $groupId;

    /**
     * @var string $name name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $priceLevel pricing level (1-3)
     */
    #[JsonProperty('price_level')]
    public ?string $priceLevel;

    /**
     * @param array{
     *   name: string,
     *   autoAdd?: ?int,
     *   discount?: ?string,
     *   groupId?: ?string,
     *   priceLevel?: ?string,
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
