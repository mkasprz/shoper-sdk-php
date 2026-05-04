<?php

namespace Shoper\Sdk\Rest\Collections\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Collections\Types\CollectionInsertImageBackground;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Collections\Types\CollectionInsertImageThumbnail;
use Shoper\Sdk\Rest\Collections\Types\CollectionInsertTranslationsValue;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

class CollectionInsert extends JsonSerializableType
{
    /**
     * @var ?CollectionInsertImageBackground $imageBackground an array with background image information
     */
    #[JsonProperty('image_background')]
    public ?CollectionInsertImageBackground $imageBackground;

    /**
     * @var ?CollectionInsertImageThumbnail $imageThumbnail an array with thumbnail image information
     */
    #[JsonProperty('image_thumbnail')]
    public ?CollectionInsertImageThumbnail $imageThumbnail;

    /**
     * @var ?int $sortType products in collection sort type identifier (sets asynchronously)
     */
    #[JsonProperty('sort_type')]
    public ?int $sortType;

    /**
     * @var ?array<string, CollectionInsertTranslationsValue> $translations an associative array with object translations; if you want to filter things - you can skip locale subkey
     */
    #[JsonProperty('translations'), ArrayType(['string' => CollectionInsertTranslationsValue::class])]
    public ?array $translations;

    /**
     * @param array{
     *   imageBackground?: ?CollectionInsertImageBackground,
     *   imageThumbnail?: ?CollectionInsertImageThumbnail,
     *   sortType?: ?int,
     *   translations?: ?array<string, CollectionInsertTranslationsValue>,
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
