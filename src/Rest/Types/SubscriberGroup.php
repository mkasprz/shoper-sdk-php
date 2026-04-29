<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

/**
 * Subscriber groups
 */
class SubscriberGroup extends JsonSerializableType
{
    /**
     * @var ?bool $autoAdd should subscribers be automatically added to this group?
     */
    #[JsonProperty('auto_add')]
    public ?bool $autoAdd;

    /**
     * @var ?int $groupId group identifier
     */
    #[JsonProperty('group_id')]
    public ?int $groupId;

    /**
     * @var string $name group name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @param array{
     *   name: string,
     *   autoAdd?: ?bool,
     *   groupId?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->autoAdd = $values['autoAdd'] ?? null;
        $this->groupId = $values['groupId'] ?? null;
        $this->name = $values['name'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
