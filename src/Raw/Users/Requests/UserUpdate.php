<?php

namespace Shoper\Sdk\Rest\Users\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

class UserUpdate extends JsonSerializableType
{
    /**
     * @var ?bool $active is active?
     */
    #[JsonProperty('active')]
    public ?bool $active;

    /**
     * @var ?array<string, string> $additionalFields additional user fields - key: additional field identifier, value: field value
     */
    #[JsonProperty('additional_fields'), ArrayType(['string' => 'string'])]
    public ?array $additionalFields;

    /**
     * @var ?string $comment user administrative comments
     */
    #[JsonProperty('comment')]
    public ?string $comment;

    /**
     * @var ?float $discount discount for this user (percent)
     */
    #[JsonProperty('discount')]
    public ?float $discount;

    /**
     * @var ?string $email e-mail address
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var ?string $firstname first name
     */
    #[JsonProperty('firstname')]
    public ?string $firstname;

    /**
     * @var ?int $groupId [user group](#tag/UserGroups) identifier
     */
    #[JsonProperty('group_id')]
    public ?int $groupId;

    /**
     * @var ?string $lastname last name
     */
    #[JsonProperty('lastname')]
    public ?string $lastname;

    /**
     * @var ?string $password password (12 chars at least)
     */
    #[JsonProperty('password')]
    public ?string $password;

    /**
     * @var ?string $tags user tags
     */
    #[JsonProperty('tags')]
    public ?string $tags;

    /**
     * @var ?bool $verifyEmail has been user e-mail confirmed?
     */
    #[JsonProperty('verify_email')]
    public ?bool $verifyEmail;

    /**
     * @param array{
     *   active?: ?bool,
     *   additionalFields?: ?array<string, string>,
     *   comment?: ?string,
     *   discount?: ?float,
     *   email?: ?string,
     *   firstname?: ?string,
     *   groupId?: ?int,
     *   lastname?: ?string,
     *   password?: ?string,
     *   tags?: ?string,
     *   verifyEmail?: ?bool,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->active = $values['active'] ?? null;
        $this->additionalFields = $values['additionalFields'] ?? null;
        $this->comment = $values['comment'] ?? null;
        $this->discount = $values['discount'] ?? null;
        $this->email = $values['email'] ?? null;
        $this->firstname = $values['firstname'] ?? null;
        $this->groupId = $values['groupId'] ?? null;
        $this->lastname = $values['lastname'] ?? null;
        $this->password = $values['password'] ?? null;
        $this->tags = $values['tags'] ?? null;
        $this->verifyEmail = $values['verifyEmail'] ?? null;
    }
}
