<?php

namespace Shoper\Sdk\Rest\Producers\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

/**
 * an array with producer logotype information
 */
class ProducerUpdateGfx extends JsonSerializableType
{
    /**
     * image contents, base64-encoded (a picture <strong>after</strong> scaling); in case this field
     * is not empty, it's also required to enter `gfx.file`
     *
     * @var ?string $content
     */
    #[JsonProperty('content')]
    public ?string $content;

    /**
     * @var ?string $file filename
     */
    #[JsonProperty('file')]
    public ?string $file;

    /**
     * @param array{
     *   content?: ?string,
     *   file?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->content = $values['content'] ?? null;
        $this->file = $values['file'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
