<?php

namespace Shoper\Sdk\Rest\LoyaltyEvents\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class LoyaltyEventInsert extends JsonSerializableType
{
    /**
     * @var ?string $note note for event
     */
    #[JsonProperty('note')]
    public ?string $note;

    /**
     * @var int $score points
     */
    #[JsonProperty('score')]
    public int $score;

    /**
     * @var int $userId user identifier
     */
    #[JsonProperty('user_id')]
    public int $userId;

    /**
     * @param array{
     *   score: int,
     *   userId: int,
     *   note?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->note = $values['note'] ?? null;
        $this->score = $values['score'];
        $this->userId = $values['userId'];
    }
}
