<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

/**
 * Request body for creating a product review.
 */
class ProductReviewInsert extends JsonSerializableType
{
    /**
     * @var int $productId Product to attach the review to.
     */
    #[JsonProperty('product_id')]
    public int $productId;

    /**
     * @var ?int $userId Registered user ID. Optional — for guest reviews leave empty.
     */
    #[JsonProperty('user_id')]
    public ?int $userId;

    /**
     * @var string $author Display name of the reviewer.
     */
    #[JsonProperty('author')]
    public string $author;

    /**
     * @var int $rating Star rating from 1 to 5.
     */
    #[JsonProperty('rating')]
    public int $rating;

    /**
     * @var ?string $comment Review text body.
     */
    #[JsonProperty('comment')]
    public ?string $comment;

    /**
     * @var ?int $active 1 to publish immediately, 0 to hide.
     */
    #[JsonProperty('active')]
    public ?int $active;

    /**
     * @var ?int $verified 1 if the review is from a verified purchaser.
     */
    #[JsonProperty('verified')]
    public ?int $verified;

    /**
     * @param array{
     *   productId: int,
     *   author: string,
     *   rating: int,
     *   userId?: ?int,
     *   comment?: ?string,
     *   active?: ?int,
     *   verified?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->productId = $values['productId'];
        $this->userId = $values['userId'] ?? null;
        $this->author = $values['author'];
        $this->rating = $values['rating'];
        $this->comment = $values['comment'] ?? null;
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
