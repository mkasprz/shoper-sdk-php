<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

/**
 * Shop blog pages.
 */
class News extends JsonSerializableType
{
    /**
     * @var ?string $active is news active?
     */
    #[JsonProperty('active')]
    public ?string $active;

    /**
     * @var ?string $author news author
     */
    #[JsonProperty('author')]
    public ?string $author;

    /**
     * @var ?string $box determine whether news will appear on box
     */
    #[JsonProperty('box')]
    public ?string $box;

    /**
     * @var string $content news content
     */
    #[JsonProperty('content')]
    public string $content;

    /**
     * @var string $date creation date
     */
    #[JsonProperty('date')]
    public string $date;

    /**
     * @var string $langId ID news language
     */
    #[JsonProperty('lang_id')]
    public string $langId;

    /**
     * @var string $name news name
     */
    #[JsonProperty('name')]
    public string $name;

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
     * @var ?string $seoDescription appears in meta description tag
     */
    #[JsonProperty('seo_description')]
    public ?string $seoDescription;

    /**
     * @var ?string $seoKeywords appears in meta keywords tag
     */
    #[JsonProperty('seo_keywords')]
    public ?string $seoKeywords;

    /**
     * @var ?string $seoTitle appears in &lt;title&gt; tag
     */
    #[JsonProperty('seo_title')]
    public ?string $seoTitle;

    /**
     * @var ?string $seoUrl your own url address
     */
    #[JsonProperty('seo_url')]
    public ?string $seoUrl;

    /**
     * @var ?string $shortContent news summary
     */
    #[JsonProperty('short_content')]
    public ?string $shortContent;

    /**
     * @var ?string $startPage determines whether news will appear on the home page
     */
    #[JsonProperty('start_page')]
    public ?string $startPage;

    /**
     * @param array{
     *   content: string,
     *   date: string,
     *   langId: string,
     *   name: string,
     *   active?: ?string,
     *   author?: ?string,
     *   box?: ?string,
     *   newsId?: ?int,
     *   order?: ?string,
     *   seoDescription?: ?string,
     *   seoKeywords?: ?string,
     *   seoTitle?: ?string,
     *   seoUrl?: ?string,
     *   shortContent?: ?string,
     *   startPage?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->active = $values['active'] ?? null;
        $this->author = $values['author'] ?? null;
        $this->box = $values['box'] ?? null;
        $this->content = $values['content'];
        $this->date = $values['date'];
        $this->langId = $values['langId'];
        $this->name = $values['name'];
        $this->newsId = $values['newsId'] ?? null;
        $this->order = $values['order'] ?? null;
        $this->seoDescription = $values['seoDescription'] ?? null;
        $this->seoKeywords = $values['seoKeywords'] ?? null;
        $this->seoTitle = $values['seoTitle'] ?? null;
        $this->seoUrl = $values['seoUrl'] ?? null;
        $this->shortContent = $values['shortContent'] ?? null;
        $this->startPage = $values['startPage'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
