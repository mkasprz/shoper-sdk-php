<?php

namespace Shoper\Sdk\Rest\Collections\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

/**
 * an array with thumbnail image information
 */
class CollectionUpdateImageThumbnail extends JsonSerializableType
{
    /**
     * image contents, base64-encoded; supported formats: JPEG, PNG, GIF, WebP.
     * Send <code>null</code> instead of the object to remove the image.
     *
     * @var ?string $content
     */
    #[JsonProperty('content')]
    public ?string $content;

    /**
     * @param array{
     *   content?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->content = $values['content'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
