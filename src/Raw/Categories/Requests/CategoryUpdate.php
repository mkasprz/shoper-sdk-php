<?php

namespace Shoper\Sdk\Rest\Categories\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Categories\Types\CategoryUpdateImageBackground;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Categories\Types\CategoryUpdateImageThumbnail;
use Shoper\Sdk\Rest\Categories\Types\CategoryUpdateTranslationsValue;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

class CategoryUpdate extends JsonSerializableType
{
    /**
     * @var ?CategoryUpdateImageBackground $imageBackground an array with background image information
     */
    #[JsonProperty('image_background')]
    public ?CategoryUpdateImageBackground $imageBackground;

    /**
     * @var ?CategoryUpdateImageThumbnail $imageThumbnail an array with thumbnail image information
     */
    #[JsonProperty('image_thumbnail')]
    public ?CategoryUpdateImageThumbnail $imageThumbnail;

    /**
     * @var ?int $order priority used to determine categories displaying order
     */
    #[JsonProperty('order')]
    public ?int $order;

    /**
     * @var ?int $parentId parent category identifier or <code>0</code> if should be root
     */
    #[JsonProperty('parent_id')]
    public ?int $parentId;

    /**
     * @var ?array<string, CategoryUpdateTranslationsValue> $translations an associative array with object translations; if you want to filter things - you can skip locale subkey
     */
    #[JsonProperty('translations'), ArrayType(['string' => CategoryUpdateTranslationsValue::class])]
    public ?array $translations;

    /**
     * @param array{
     *   imageBackground?: ?CategoryUpdateImageBackground,
     *   imageThumbnail?: ?CategoryUpdateImageThumbnail,
     *   order?: ?int,
     *   parentId?: ?int,
     *   translations?: ?array<string, CategoryUpdateTranslationsValue>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->imageBackground = $values['imageBackground'] ?? null;
        $this->imageThumbnail = $values['imageThumbnail'] ?? null;
        $this->order = $values['order'] ?? null;
        $this->parentId = $values['parentId'] ?? null;
        $this->translations = $values['translations'] ?? null;
    }
}
