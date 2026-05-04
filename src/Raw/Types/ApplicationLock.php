<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

/**
 * Allows to lock administrator panel access. If <code>user_id</code> is specified, this user keeps the access to the panel.
 * The lock may be used in case there is a risk of data integrity corruption upon user modifications (eg. to prevent
 * collision when modification on the same data is being performed by API and user at the same time).
 */
class ApplicationLock extends JsonSerializableType
{
    /**
     * @var ?int $date timestamp of time when the lock has been engaged
     */
    #[JsonProperty('date')]
    public ?int $date;

    /**
     * @var ?bool $locked lock state
     */
    #[JsonProperty('locked')]
    public ?bool $locked;

    /**
     * @var string $message lock reason
     */
    #[JsonProperty('message')]
    public string $message;

    /**
     * @var ?string $userId an identifier of lock owner (only when the administration is an owner)
     */
    #[JsonProperty('user_id')]
    public ?string $userId;

    /**
     * @param array{
     *   message: string,
     *   date?: ?int,
     *   locked?: ?bool,
     *   userId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->date = $values['date'] ?? null;
        $this->locked = $values['locked'] ?? null;
        $this->message = $values['message'];
        $this->userId = $values['userId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
