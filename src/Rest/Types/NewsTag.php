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
     * @var string $langId ID language
     */
    #[JsonProperty('lang_id')]
    public string $langId;

    /**
     * @var string $name news tag name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $tagId ID news tag
     */
    #[JsonProperty('tag_id')]
    public ?string $tagId;

    /**
     * @param array{
     *   langId: string,
     *   name: string,
     *   tagId?: ?string,
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
