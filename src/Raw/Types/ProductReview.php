<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use DateTime;
use Shoper\Sdk\Rest\Core\Types\Date;

/**
 * Product review submitted by a customer.
 */
class ProductReview extends JsonSerializableType
{
    /**
     * @var ?int $reviewId Unique review identifier.
     */
    #[JsonProperty('review_id')]
    public ?int $reviewId;

    /**
     * @var ?int $productId Product this review belongs to.
     */
    #[JsonProperty('product_id')]
    public ?int $productId;

    /**
     * @var ?int $userId Registered user ID who submitted the review. Null for guest reviews.
     */
    #[JsonProperty('user_id')]
    public ?int $userId;

    /**
     * @var ?string $author Display name of the reviewer.
     */
    #[JsonProperty('author')]
    public ?string $author;

    /**
     * @var ?int $rating Star rating from 1 to 5.
     */
    #[JsonProperty('rating')]
    public ?int $rating;

    /**
     * @var ?string $comment Review text body.
     */
    #[JsonProperty('comment')]
    public ?string $comment;

    /**
     * @var ?DateTime $dateAdd Date and time when the review was created (UTC).
     */
    #[JsonProperty('date_add'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $dateAdd;

    /**
     * @var ?int $active 1 if the review is published, 0 if hidden.
     */
    #[JsonProperty('active')]
    public ?int $active;

    /**
     * @var ?int $verified 1 if the review is from a verified purchaser, 0 otherwise.
     */
    #[JsonProperty('verified')]
    public ?int $verified;

    /**
     * @param array{
     *   reviewId?: ?int,
     *   productId?: ?int,
     *   userId?: ?int,
     *   author?: ?string,
     *   rating?: ?int,
     *   comment?: ?string,
     *   dateAdd?: ?DateTime,
     *   active?: ?int,
     *   verified?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->reviewId = $values['reviewId'] ?? null;
        $this->productId = $values['productId'] ?? null;
        $this->userId = $values['userId'] ?? null;
        $this->author = $values['author'] ?? null;
        $this->rating = $values['rating'] ?? null;
        $this->comment = $values['comment'] ?? null;
        $this->dateAdd = $values['dateAdd'] ?? null;
        $this->active = $values['active'] ?? null;
        $this->verified = $values['verified'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
