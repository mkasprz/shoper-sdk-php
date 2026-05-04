<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

/**
 * Product image object. Limited to 255 images per product.
 */
class ProductImage extends JsonSerializableType
{
    /**
     * @var ?string $extension file extension
     */
    #[JsonProperty('extension')]
    public ?string $extension;

    /**
     * @var ?string $gfxId file asset identifier
     */
    #[JsonProperty('gfx_id')]
    public ?string $gfxId;

    /**
     * @var ?value-of<ProductImageHidden> $hidden is the photo hidden
     */
    #[JsonProperty('hidden')]
    public ?string $hidden;

    /**
     * @var ?int $main is the photo set as main
     */
    #[JsonProperty('main')]
    public ?int $main;

    /**
     * @var ?string $order photo order
     */
    #[JsonProperty('order')]
    public ?string $order;

    /**
     * @var ?string $productId [product](#tag/Products) identifier
     */
    #[JsonProperty('product_id')]
    public ?string $productId;

    /**
     * @var ?array<string, ProductImageTranslationsValue> $translations an associative array with object translations; if you want to filter things - you can skip locale subkey
     */
    #[JsonProperty('translations'), ArrayType(['string' => ProductImageTranslationsValue::class])]
    public ?array $translations;

    /**
     * @var ?string $unicName unique photo name, pointing to the file in filesystem
     */
    #[JsonProperty('unic_name')]
    public ?string $unicName;

    /**
     * @param array{
     *   extension?: ?string,
     *   gfxId?: ?string,
     *   hidden?: ?value-of<ProductImageHidden>,
     *   main?: ?int,
     *   order?: ?string,
     *   productId?: ?string,
     *   translations?: ?array<string, ProductImageTranslationsValue>,
     *   unicName?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->extension = $values['extension'] ?? null;
        $this->gfxId = $values['gfxId'] ?? null;
        $this->hidden = $values['hidden'] ?? null;
        $this->main = $values['main'] ?? null;
        $this->order = $values['order'] ?? null;
        $this->productId = $values['productId'] ?? null;
        $this->translations = $values['translations'] ?? null;
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
