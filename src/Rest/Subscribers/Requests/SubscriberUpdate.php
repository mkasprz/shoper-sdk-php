<?php

namespace Shoper\Sdk\Rest\Subscribers\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

class SubscriberUpdate extends JsonSerializableType
{
    /**
     * @var ?bool $active is subscriber active
     */
    #[JsonProperty('active')]
    public ?bool $active;

    /**
     * @var ?string $email e-mail address
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * an array of [group identifiers](#tag/SubscriberGroups) subscriber will be added.
     * If not present, default group is used
     *
     * @var ?array<int> $groups
     */
    #[JsonProperty('groups'), ArrayType(['integer'])]
    public ?array $groups;

    /**
     * @var ?int $langId mailing [language](#tag/Languages)
     */
    #[JsonProperty('lang_id')]
    public ?int $langId;

    /**
     * @var ?int $subscriberId subscriber identifier
     */
    #[JsonProperty('subscriber_id')]
    public ?int $subscriberId;

    /**
     * @param array{
     *   active?: ?bool,
     *   email?: ?string,
     *   groups?: ?array<int>,
     *   langId?: ?int,
     *   subscriberId?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->active = $values['active'] ?? null;
        $this->email = $values['email'] ?? null;
        $this->groups = $values['groups'] ?? null;
        $this->langId = $values['langId'] ?? null;
        $this->subscriberId = $values['subscriberId'] ?? null;
    }
}
