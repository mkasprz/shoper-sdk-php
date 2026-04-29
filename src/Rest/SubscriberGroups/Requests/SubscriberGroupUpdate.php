<?php

namespace Shoper\Sdk\Rest\SubscriberGroups\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class SubscriberGroupUpdate extends JsonSerializableType
{
    /**
     * @var ?bool $autoAdd should subscribers be automatically added to this group?
     */
    #[JsonProperty('auto_add')]
    public ?bool $autoAdd;

    /**
     * @var ?string $name group name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @param array{
     *   autoAdd?: ?bool,
     *   name?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->autoAdd = $values['autoAdd'] ?? null;
        $this->name = $values['name'] ?? null;
    }
}
