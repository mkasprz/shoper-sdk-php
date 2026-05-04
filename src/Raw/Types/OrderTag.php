<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

/**
 * Order tag — a label that can be attached to orders.
 */
class OrderTag extends JsonSerializableType
{
    /**
     * @var string $langId identifier of the language
     */
    #[JsonProperty('lang_id')]
    public string $langId;

    /**
     * @var string $name order tag name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?int $tagId order tag identifier
     */
    #[JsonProperty('tag_id')]
    public ?int $tagId;

    /**
     * @param array{
     *   langId: string,
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
