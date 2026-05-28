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
     * @var ?int $autoAdd should subscribers be automatically added to this group?
     */
    #[JsonProperty('auto_add')]
    public ?int $autoAdd;

    /**
     * @var ?string $groupId group identifier
     */
    #[JsonProperty('group_id')]
    public ?string $groupId;

    /**
     * @var string $name group name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @param array{
     *   name: string,
     *   autoAdd?: ?int,
     *   groupId?: ?string,
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
