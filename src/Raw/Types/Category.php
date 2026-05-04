<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\Union;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

/**
 * Shop product categories
 */
class Category extends JsonSerializableType
{
    /**
     * @var (
     *    string
     *   |int
     * )|null $categoryId category identifier
     */
    #[JsonProperty('category_id'), Union('string', 'integer', 'null')]
    public string|int|null $categoryId;

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
     * @var ?string $order priority used to determine categories displaying order
     */
    #[JsonProperty('order')]
    public ?string $order;

    /**
     * @var ?value-of<CategoryRoot> $root if enabled, sets category as root (otherwise - child)
     */
    #[JsonProperty('root')]
    public ?string $root;

    /**
     * @var ?array<string, CategoryTranslationsValue> $translations an associative array with object translations; if you want to filter things - you can skip locale subkey
     */
    #[JsonProperty('translations'), ArrayType(['string' => CategoryTranslationsValue::class])]
    public ?array $translations;

    /**
     * @param array{
     *   categoryId?: (
     *    string
     *   |int
     * )|null,
     *   imageBackground?: ?string,
     *   imageThumbnail?: ?string,
     *   order?: ?string,
     *   root?: ?value-of<CategoryRoot>,
     *   translations?: ?array<string, CategoryTranslationsValue>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->categoryId = $values['categoryId'] ?? null;
        $this->imageBackground = $values['imageBackground'] ?? null;
        $this->imageThumbnail = $values['imageThumbnail'] ?? null;
        $this->order = $values['order'] ?? null;
        $this->root = $values['root'] ?? null;
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
