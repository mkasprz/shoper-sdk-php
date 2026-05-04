<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

/**
 * Files attached to blog pages.
 */
class NewsFile extends JsonSerializableType
{
    /**
     * @var ?string $addDate product addition date in <a href="https://www.iso.org/iso-8601-date-and-time-format.html">ISO 8601</a> (for example <code>2024-01-15 12:34:56</code>) format
     */
    #[JsonProperty('add_date')]
    public ?string $addDate;

    /**
     * @var ?string $description file description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?string $fileId ID file
     */
    #[JsonProperty('file_id')]
    public ?string $fileId;

    /**
     * @var ?string $fileName file name
     */
    #[JsonProperty('file_name')]
    public ?string $fileName;

    /**
     * @var ?string $fileSize file size
     */
    #[JsonProperty('file_size')]
    public ?string $fileSize;

    /**
     * @var string $name file name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $newsId ID news
     */
    #[JsonProperty('news_id')]
    public ?string $newsId;

    /**
     * @var ?string $order parameter used in sorting, determines the order of the news
     */
    #[JsonProperty('order')]
    public ?string $order;

    /**
     * @param array{
     *   name: string,
     *   addDate?: ?string,
     *   description?: ?string,
     *   fileId?: ?string,
     *   fileName?: ?string,
     *   fileSize?: ?string,
     *   newsId?: ?string,
     *   order?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->addDate = $values['addDate'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->fileId = $values['fileId'] ?? null;
        $this->fileName = $values['fileName'] ?? null;
        $this->fileSize = $values['fileSize'] ?? null;
        $this->name = $values['name'];
        $this->newsId = $values['newsId'] ?? null;
        $this->order = $values['order'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
