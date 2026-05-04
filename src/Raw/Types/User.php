<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

/**
 * User registered in system
 */
class User extends JsonSerializableType
{
    /**
     * @var ?value-of<UserActive> $active is active?
     */
    #[JsonProperty('active')]
    public ?string $active;

    /**
     * [user additional fields](#tag/AdditionalFields):
     * To filter by additional field, use: additional_fields:{ "=": {"<field_id>": "<searched_value>"}}
     * Example: {"additional_fields":{"=": {"5": "test"}}}
     *
     * @var ?array<UserAdditionalFieldsItem> $additionalFields
     */
    #[JsonProperty('additional_fields'), ArrayType([UserAdditionalFieldsItem::class])]
    public ?array $additionalFields;

    /**
     * @var ?string $comment user administrative comments
     */
    #[JsonProperty('comment')]
    public ?string $comment;

    /**
     * @var ?string $dateAdd creation date in <a href="https://www.iso.org/iso-8601-date-and-time-format.html">ISO 8601</a> (for example <code>2024-01-15 12:34:56</code>) format
     */
    #[JsonProperty('date_add')]
    public ?string $dateAdd;

    /**
     * @var ?string $discount discount for this user (percent)
     */
    #[JsonProperty('discount')]
    public ?string $discount;

    /**
     * @var string $email e-mail address
     */
    #[JsonProperty('email')]
    public string $email;

    /**
     * @var ?string $firstname first name
     */
    #[JsonProperty('firstname')]
    public ?string $firstname;

    /**
     * @var ?string $groupId [user group](#tag/UserGroups) identifier
     */
    #[JsonProperty('group_id')]
    public ?string $groupId;

    /**
     * @var ?array<int> $groups an array with [user groups](#tag/UserGroups)
     */
    #[JsonProperty('groups'), ArrayType(['integer'])]
    public ?array $groups;

    /**
     * @var ?UserInfo $info Extended user information. Returned only when the `info=true` query parameter is passed.
     */
    #[JsonProperty('info')]
    public ?UserInfo $info;

    /**
     * @var ?string $langId [language](#tag/Languages) set upon registration
     */
    #[JsonProperty('lang_id')]
    public ?string $langId;

    /**
     * @var ?string $lastname last name
     */
    #[JsonProperty('lastname')]
    public ?string $lastname;

    /**
     * @var ?string $lastvisit last user logon date in <a href="https://www.iso.org/iso-8601-date-and-time-format.html">ISO 8601</a> (for example <code>2024-01-15 12:34:56</code>) format
     */
    #[JsonProperty('lastvisit')]
    public ?string $lastvisit;

    /**
     * @var ?string $login user login
     */
    #[JsonProperty('login')]
    public ?string $login;

    /**
     * @var ?value-of<UserNewsletter> $newsletter user wants to receive newsletter?
     */
    #[JsonProperty('newsletter')]
    public ?string $newsletter;

    /**
     * user origin:
     * <ul>
     *     <li>0 - shop,</li>
     *     <li>1 - Facebook,</li>
     *     <li>2 - mobile,</li>
     *     <li>3 - Allegro</li>
     * </ul>
     *
     * @var ?string $origin
     */
    #[JsonProperty('origin')]
    public ?string $origin;

    /**
     * @var ?array<string> $tags list of tags assigned to this user
     */
    #[JsonProperty('tags'), ArrayType(['string'])]
    public ?array $tags;

    /**
     * @var ?string $userId user identifier
     */
    #[JsonProperty('user_id')]
    public ?string $userId;

    /**
     * @var ?value-of<UserVerifyEmail> $verifyEmail has been user e-mail confirmed?
     */
    #[JsonProperty('verify_email')]
    public ?string $verifyEmail;

    /**
     * @param array{
     *   email: string,
     *   active?: ?value-of<UserActive>,
     *   additionalFields?: ?array<UserAdditionalFieldsItem>,
     *   comment?: ?string,
     *   dateAdd?: ?string,
     *   discount?: ?string,
     *   firstname?: ?string,
     *   groupId?: ?string,
     *   groups?: ?array<int>,
     *   info?: ?UserInfo,
     *   langId?: ?string,
     *   lastname?: ?string,
     *   lastvisit?: ?string,
     *   login?: ?string,
     *   newsletter?: ?value-of<UserNewsletter>,
     *   origin?: ?string,
     *   tags?: ?array<string>,
     *   userId?: ?string,
     *   verifyEmail?: ?value-of<UserVerifyEmail>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->active = $values['active'] ?? null;
        $this->additionalFields = $values['additionalFields'] ?? null;
        $this->comment = $values['comment'] ?? null;
        $this->dateAdd = $values['dateAdd'] ?? null;
        $this->discount = $values['discount'] ?? null;
        $this->email = $values['email'];
        $this->firstname = $values['firstname'] ?? null;
        $this->groupId = $values['groupId'] ?? null;
        $this->groups = $values['groups'] ?? null;
        $this->info = $values['info'] ?? null;
        $this->langId = $values['langId'] ?? null;
        $this->lastname = $values['lastname'] ?? null;
        $this->lastvisit = $values['lastvisit'] ?? null;
        $this->login = $values['login'] ?? null;
        $this->newsletter = $values['newsletter'] ?? null;
        $this->origin = $values['origin'] ?? null;
        $this->tags = $values['tags'] ?? null;
        $this->userId = $values['userId'] ?? null;
        $this->verifyEmail = $values['verifyEmail'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
