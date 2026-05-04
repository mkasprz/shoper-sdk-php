<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

/**
 * Shop comments to blog posts.
 */
class NewsComment extends JsonSerializableType
{
    /**
     * @var ?int $commId ID comment
     */
    #[JsonProperty('comm_id')]
    public ?int $commId;

    /**
     * @var ?string $content comment content
     */
    #[JsonProperty('content')]
    public ?string $content;

    /**
     * @var ?string $date creation date(format: YYYY-MM-dd HH:mm:ss)
     */
    #[JsonProperty('date')]
    public ?string $date;

    /**
     * @var ?string $langId ID comment lang
     */
    #[JsonProperty('lang_id')]
    public ?string $langId;

    /**
     * @var ?string $newsId ID news
     */
    #[JsonProperty('news_id')]
    public ?string $newsId;

    /**
     * @var ?string $userId author user id
     */
    #[JsonProperty('user_id')]
    public ?string $userId;

    /**
     * @var ?string $userName author user name
     */
    #[JsonProperty('user_name')]
    public ?string $userName;

    /**
     * @var ?bool $validated is comment accepted by admin?
     */
    #[JsonProperty('validated')]
    public ?bool $validated;

    /**
     * @param array{
     *   commId?: ?int,
     *   content?: ?string,
     *   date?: ?string,
     *   langId?: ?string,
     *   newsId?: ?string,
     *   userId?: ?string,
     *   userName?: ?string,
     *   validated?: ?bool,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->commId = $values['commId'] ?? null;
        $this->content = $values['content'] ?? null;
        $this->date = $values['date'] ?? null;
        $this->langId = $values['langId'] ?? null;
        $this->newsId = $values['newsId'] ?? null;
        $this->userId = $values['userId'] ?? null;
        $this->userName = $values['userName'] ?? null;
        $this->validated = $values['validated'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
