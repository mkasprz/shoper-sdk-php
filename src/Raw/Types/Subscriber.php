<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

/**
 * Newsletter subscribers
 */
class Subscriber extends JsonSerializableType
{
    /**
     * @var ?value-of<SubscriberActive> $active is subscriber active
     */
    #[JsonProperty('active')]
    public ?string $active;

    /**
     * @var ?string $dateadd addition date in <a href="https://www.iso.org/iso-8601-date-and-time-format.html">ISO 8601</a> (for example <code>2024-01-15 12:34:56</code>) format
     */
    #[JsonProperty('dateadd')]
    public ?string $dateadd;

    /**
     * @var string $email e-mail address
     */
    #[JsonProperty('email')]
    public string $email;

    /**
     * @var ?array<int> $groups List of subscriber group IDs the subscriber belongs to.
     */
    #[JsonProperty('groups'), ArrayType(['integer'])]
    public ?array $groups;

    /**
     * @var ?string $langId mailing [language](#tag/Languages)
     */
    #[JsonProperty('lang_id')]
    public ?string $langId;

    /**
     * @var ?string $subscriberId subscriber identifier
     */
    #[JsonProperty('subscriber_id')]
    public ?string $subscriberId;

    /**
     * @param array{
     *   email: string,
     *   active?: ?value-of<SubscriberActive>,
     *   dateadd?: ?string,
     *   groups?: ?array<int>,
     *   langId?: ?string,
     *   subscriberId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->active = $values['active'] ?? null;
        $this->dateadd = $values['dateadd'] ?? null;
        $this->email = $values['email'];
        $this->groups = $values['groups'] ?? null;
        $this->langId = $values['langId'] ?? null;
        $this->subscriberId = $values['subscriberId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
