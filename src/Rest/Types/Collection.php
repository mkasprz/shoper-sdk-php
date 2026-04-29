<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

/**
 * Shop product collections
 */
class Collection extends JsonSerializableType
{
    /**
     * @var ?int $collectionId collection identifier
     */
    #[JsonProperty('collection_id')]
    public ?int $collectionId;

    /**
     * @var ?string $imageBackground background image filename
     */
    #[JsonProperty('image_background')]
    public ?string $imageBackground;

    /**
     * @var ?string $imageThumbnail thumbnail image filename
     */
    #[JsonProperty('image_thumbnail')]
    public ?string $imageThumbnail;

    /**
     * Collection sort strategy identifier. Changing this value triggers an asynchronous
     * resort job — the new ordering may not be visible immediately after the response.
     *
     * @var ?int $sortType
     */
    #[JsonProperty('sort_type')]
    public ?int $sortType;

    /**
     * @var ?array<string, CollectionTranslationsValue> $translations an associative array with object translations; if you want to filter things - you can skip locale subkey
     */
    #[JsonProperty('translations'), ArrayType(['string' => CollectionTranslationsValue::class])]
    public ?array $translations;

    /**
     * @param array{
     *   collectionId?: ?int,
     *   imageBackground?: ?string,
     *   imageThumbnail?: ?string,
     *   sortType?: ?int,
     *   translations?: ?array<string, CollectionTranslationsValue>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->collectionId = $values['collectionId'] ?? null;
        $this->imageBackground = $values['imageBackground'] ?? null;
        $this->imageThumbnail = $values['imageThumbnail'] ?? null;
        $this->sortType = $values['sortType'] ?? null;
        $this->translations = $values['translations'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
