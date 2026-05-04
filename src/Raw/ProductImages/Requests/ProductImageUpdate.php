<?php

namespace Shoper\Sdk\Rest\ProductImages\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\ProductImages\Types\ProductImageUpdateTranslationsValue;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

class ProductImageUpdate extends JsonSerializableType
{
    /**
     * @var ?string $content base64-encoded file contents
     */
    #[JsonProperty('content')]
    public ?string $content;

    /**
     * @var ?bool $hidden is the photo hidden
     */
    #[JsonProperty('hidden')]
    public ?bool $hidden;

    /**
     * @var ?int $productId [product](#tag/Products) identifier
     */
    #[JsonProperty('product_id')]
    public ?int $productId;

    /**
     * @var ?array<string, ProductImageUpdateTranslationsValue> $translations an associative array with object translations; if you want to filter things - you can skip locale subkey
     */
    #[JsonProperty('translations'), ArrayType(['string' => ProductImageUpdateTranslationsValue::class])]
    public ?array $translations;

    /**
     * @var ?string $url if present, file contents is being downloaded from specified URL
     */
    #[JsonProperty('url')]
    public ?string $url;

    /**
     * @param array{
     *   content?: ?string,
     *   hidden?: ?bool,
     *   productId?: ?int,
     *   translations?: ?array<string, ProductImageUpdateTranslationsValue>,
     *   url?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->content = $values['content'] ?? null;
        $this->hidden = $values['hidden'] ?? null;
        $this->productId = $values['productId'] ?? null;
        $this->translations = $values['translations'] ?? null;
        $this->url = $values['url'] ?? null;
    }
}
