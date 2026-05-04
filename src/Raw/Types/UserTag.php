<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

/**
 * User tag — a label that can be attached to users.
 */
class UserTag extends JsonSerializableType
{
    /**
     * @var string $langId identifier of the language
     */
    #[JsonProperty('lang_id')]
    public string $langId;

    /**
     * @var string $name user tag name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $tagId user tag identifier
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
