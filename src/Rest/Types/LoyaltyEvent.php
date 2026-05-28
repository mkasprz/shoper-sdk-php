<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

/**
 * Shop loyalty events
 */
class LoyaltyEvent extends JsonSerializableType
{
    /**
     * @var ?string $date event date
     */
    #[JsonProperty('date')]
    public ?string $date;

    /**
     * @var ?int $eventId ID loyalty event
     */
    #[JsonProperty('event_id')]
    public ?int $eventId;

    /**
     * @var ?int $eventType event identifier
     */
    #[JsonProperty('event_type')]
    public ?int $eventType;

    /**
     * @var ?int $expiredDate date of points expiration
     */
    #[JsonProperty('expired_date')]
    public ?int $expiredDate;

    /**
     * @var ?int $expiredDateUpdate
     */
    #[JsonProperty('expired_date_update')]
    public ?int $expiredDateUpdate;

    /**
     * @var ?int $expiredScore
     */
    #[JsonProperty('expired_score')]
    public ?int $expiredScore;

    /**
     * @var ?string $note note for event
     */
    #[JsonProperty('note')]
    public ?string $note;

    /**
     * @var ?int $objectId object identifier
     */
    #[JsonProperty('object_id')]
    public ?int $objectId;

    /**
     * @var ?string $quantity
     */
    #[JsonProperty('quantity')]
    public ?string $quantity;

    /**
     * @var ?int $ratio1 ratio amount to points
     */
    #[JsonProperty('ratio1')]
    public ?int $ratio1;

    /**
     * @var ?int $ratio2 ratio amount to points
     */
    #[JsonProperty('ratio2')]
    public ?int $ratio2;

    /**
     * @var int $score points
     */
    #[JsonProperty('score')]
    public int $score;

    /**
     * @var ?string $status
     */
    #[JsonProperty('status')]
    public ?string $status;

    /**
     * @var ?int $sum points after event
     */
    #[JsonProperty('sum')]
    public ?int $sum;

    /**
     * @var string $userId user identifier
     */
    #[JsonProperty('user_id')]
    public string $userId;

    /**
     * @param array{
     *   score: int,
     *   userId: string,
     *   date?: ?string,
     *   eventId?: ?int,
     *   eventType?: ?int,
     *   expiredDate?: ?int,
     *   expiredDateUpdate?: ?int,
     *   expiredScore?: ?int,
     *   note?: ?string,
     *   objectId?: ?int,
     *   quantity?: ?string,
     *   ratio1?: ?int,
     *   ratio2?: ?int,
     *   status?: ?string,
     *   sum?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->date = $values['date'] ?? null;
        $this->eventId = $values['eventId'] ?? null;
        $this->eventType = $values['eventType'] ?? null;
        $this->expiredDate = $values['expiredDate'] ?? null;
        $this->expiredDateUpdate = $values['expiredDateUpdate'] ?? null;
        $this->expiredScore = $values['expiredScore'] ?? null;
        $this->note = $values['note'] ?? null;
        $this->objectId = $values['objectId'] ?? null;
        $this->quantity = $values['quantity'] ?? null;
        $this->ratio1 = $values['ratio1'] ?? null;
        $this->ratio2 = $values['ratio2'] ?? null;
        $this->score = $values['score'];
        $this->status = $values['status'] ?? null;
        $this->sum = $values['sum'] ?? null;
        $this->userId = $values['userId'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
