<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

/**
 * Extended user information. Returned only when the `info=true` query parameter is passed.
 */
class UserInfo extends JsonSerializableType
{
    /**
     * @var ?value-of<UserInfoActive> $active Is the user account active.
     */
    #[JsonProperty('active')]
    public ?string $active;

    /**
     * @var ?string $comment Administrative comment.
     */
    #[JsonProperty('comment')]
    public ?string $comment;

    /**
     * @var ?string $discount User discount (in percent).
     */
    #[JsonProperty('discount')]
    public ?string $discount;

    /**
     * @var ?string $email User e-mail address.
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var ?string $firstname First name.
     */
    #[JsonProperty('firstname')]
    public ?string $firstname;

    /**
     * @var ?string $langId Language set upon registration.
     */
    #[JsonProperty('lang_id')]
    public ?string $langId;

    /**
     * @var ?string $lastname Last name.
     */
    #[JsonProperty('lastname')]
    public ?string $lastname;

    /**
     * @var ?string $newsletter Whether the user is subscribed to newsletter (stored as string "0" or "1").
     */
    #[JsonProperty('newsletter')]
    public ?string $newsletter;

    /**
     * @param array{
     *   active?: ?value-of<UserInfoActive>,
     *   comment?: ?string,
     *   discount?: ?string,
     *   email?: ?string,
     *   firstname?: ?string,
     *   langId?: ?string,
     *   lastname?: ?string,
     *   newsletter?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->active = $values['active'] ?? null;
        $this->comment = $values['comment'] ?? null;
        $this->discount = $values['discount'] ?? null;
        $this->email = $values['email'] ?? null;
        $this->firstname = $values['firstname'] ?? null;
        $this->langId = $values['langId'] ?? null;
        $this->lastname = $values['lastname'] ?? null;
        $this->newsletter = $values['newsletter'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
