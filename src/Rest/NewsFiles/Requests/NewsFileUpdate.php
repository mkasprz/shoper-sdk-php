<?php

namespace Shoper\Sdk\Rest\NewsFiles\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class NewsFileUpdate extends JsonSerializableType
{
    /**
     * @var ?string $content file content encoded with base 64
     */
    #[JsonProperty('content')]
    public ?string $content;

    /**
     * @var ?string $description file description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?string $name file name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?int $newsId ID news
     */
    #[JsonProperty('news_id')]
    public ?int $newsId;

    /**
     * @var ?string $order parameter used in sorting, determines the order of the news
     */
    #[JsonProperty('order')]
    public ?string $order;

    /**
     * @param array{
     *   content?: ?string,
     *   description?: ?string,
     *   name?: ?string,
     *   newsId?: ?int,
     *   order?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->content = $values['content'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->newsId = $values['newsId'] ?? null;
        $this->order = $values['order'] ?? null;
    }
}
