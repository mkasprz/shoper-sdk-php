<?php

namespace Shoper\Sdk\Rest\NewsComments\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class NewsCommentInsert extends JsonSerializableType
{
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
     * @var ?int $langId ID comment lang
     */
    #[JsonProperty('lang_id')]
    public ?int $langId;

    /**
     * @var ?int $newsId ID news
     */
    #[JsonProperty('news_id')]
    public ?int $newsId;

    /**
     * @var ?int $userId author user id
     */
    #[JsonProperty('user_id')]
    public ?int $userId;

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
     *   content?: ?string,
     *   date?: ?string,
     *   langId?: ?int,
     *   newsId?: ?int,
     *   userId?: ?int,
     *   userName?: ?string,
     *   validated?: ?bool,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->content = $values['content'] ?? null;
        $this->date = $values['date'] ?? null;
        $this->langId = $values['langId'] ?? null;
        $this->newsId = $values['newsId'] ?? null;
        $this->userId = $values['userId'] ?? null;
        $this->userName = $values['userName'] ?? null;
        $this->validated = $values['validated'] ?? null;
    }
}
