<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

/**
 * Shop blog tags.
 */
class NewsTag extends JsonSerializableType
{
    /**
     * @var int $langId ID language
     */
    #[JsonProperty('lang_id')]
    public int $langId;

    /**
     * @var string $name news tag name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?int $tagId ID news tag
     */
    #[JsonProperty('tag_id')]
    public ?int $tagId;

    /**
     * @param array{
     *   langId: int,
     *   name: string,
     *   tagId?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->langId = $values['langId'];
        $this->name = $values['name'];
        $this->tagId = $values['tagId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
