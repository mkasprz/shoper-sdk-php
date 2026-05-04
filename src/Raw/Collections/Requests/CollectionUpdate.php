<?php

namespace Shoper\Sdk\Rest\Collections\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Collections\Types\CollectionUpdateImageBackground;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Collections\Types\CollectionUpdateImageThumbnail;
use Shoper\Sdk\Rest\Collections\Types\CollectionUpdateTranslationsValue;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

class CollectionUpdate extends JsonSerializableType
{
    /**
     * @var ?CollectionUpdateImageBackground $imageBackground an array with background image information
     */
    #[JsonProperty('image_background')]
    public ?CollectionUpdateImageBackground $imageBackground;

    /**
     * @var ?CollectionUpdateImageThumbnail $imageThumbnail an array with thumbnail image information
     */
    #[JsonProperty('image_thumbnail')]
    public ?CollectionUpdateImageThumbnail $imageThumbnail;

    /**
     * @var ?int $sortType products in collection sort type identifier (sets asynchronously)
     */
    #[JsonProperty('sort_type')]
    public ?int $sortType;

    /**
     * @var ?array<string, CollectionUpdateTranslationsValue> $translations an associative array with object translations; if you want to filter things - you can skip locale subkey
     */
    #[JsonProperty('translations'), ArrayType(['string' => CollectionUpdateTranslationsValue::class])]
    public ?array $translations;

    /**
     * @param array{
     *   imageBackground?: ?CollectionUpdateImageBackground,
     *   imageThumbnail?: ?CollectionUpdateImageThumbnail,
     *   sortType?: ?int,
     *   translations?: ?array<string, CollectionUpdateTranslationsValue>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->imageBackground = $values['imageBackground'] ?? null;
        $this->imageThumbnail = $values['imageThumbnail'] ?? null;
        $this->sortType = $values['sortType'] ?? null;
        $this->translations = $values['translations'] ?? null;
    }
}
