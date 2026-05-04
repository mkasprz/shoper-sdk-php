<?php

namespace Shoper\Sdk\Rest\Categories\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Categories\Types\CategoryInsertImageBackground;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Categories\Types\CategoryInsertImageThumbnail;
use Shoper\Sdk\Rest\Categories\Types\CategoryInsertTranslationsValue;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

class CategoryInsert extends JsonSerializableType
{
    /**
     * @var ?CategoryInsertImageBackground $imageBackground an array with background image information
     */
    #[JsonProperty('image_background')]
    public ?CategoryInsertImageBackground $imageBackground;

    /**
     * @var ?CategoryInsertImageThumbnail $imageThumbnail an array with thumbnail image information
     */
    #[JsonProperty('image_thumbnail')]
    public ?CategoryInsertImageThumbnail $imageThumbnail;

    /**
     * @var ?int $order priority used to determine categories displaying order
     */
    #[JsonProperty('order')]
    public ?int $order;

    /**
     * @var int $parentId parent category identifier or <code>0</code> if should be root
     */
    #[JsonProperty('parent_id')]
    public int $parentId;

    /**
     * @var ?array<string, CategoryInsertTranslationsValue> $translations an associative array with object translations; if you want to filter things - you can skip locale subkey
     */
    #[JsonProperty('translations'), ArrayType(['string' => CategoryInsertTranslationsValue::class])]
    public ?array $translations;

    /**
     * @param array{
     *   parentId: int,
     *   imageBackground?: ?CategoryInsertImageBackground,
     *   imageThumbnail?: ?CategoryInsertImageThumbnail,
     *   order?: ?int,
     *   translations?: ?array<string, CategoryInsertTranslationsValue>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->imageBackground = $values['imageBackground'] ?? null;
        $this->imageThumbnail = $values['imageThumbnail'] ?? null;
        $this->order = $values['order'] ?? null;
        $this->parentId = $values['parentId'];
        $this->translations = $values['translations'] ?? null;
    }
}
