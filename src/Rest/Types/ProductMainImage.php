<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

/**
 * an associative array with product main identifier
 */
class ProductMainImage extends JsonSerializableType
{
    /**
     * @var ?string $extension file extension
     */
    #[JsonProperty('extension')]
    public ?string $extension;

    /**
     * @var ?int $gfxId asset identifier
     */
    #[JsonProperty('gfx_id')]
    public ?int $gfxId;

    /**
     * @var ?bool $hidden is the photo hidden?
     */
    #[JsonProperty('hidden')]
    public ?bool $hidden;

    /**
     * @var ?string $name photo description
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?int $order photo order
     */
    #[JsonProperty('order')]
    public ?int $order;

    /**
     * @var ?string $unicName unique photo name, pointing to a file in filesystem
     */
    #[JsonProperty('unic_name')]
    public ?string $unicName;

    /**
     * @param array{
     *   extension?: ?string,
     *   gfxId?: ?int,
     *   hidden?: ?bool,
     *   name?: ?string,
     *   order?: ?int,
     *   unicName?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->extension = $values['extension'] ?? null;
        $this->gfxId = $values['gfxId'] ?? null;
        $this->hidden = $values['hidden'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->order = $values['order'] ?? null;
        $this->unicName = $values['unicName'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
