<?php

namespace Shoper\Sdk\Rest\Shippings\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class ShippingUpdateTranslationsValue extends JsonSerializableType
{
    /**
     * @var string $active is shipping method available for this locale
     */
    #[JsonProperty('active')]
    public string $active;

    /**
     * @var ?string $description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var string $isDefault
     */
    #[JsonProperty('is_default')]
    public string $isDefault;

    /**
     * @var ?string $langId
     */
    #[JsonProperty('lang_id')]
    public ?string $langId;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $shippingId
     */
    #[JsonProperty('shipping_id')]
    public ?string $shippingId;

    /**
     * @var ?int $translationId translation identifier
     */
    #[JsonProperty('translation_id')]
    public ?int $translationId;

    /**
     * @var ?string $url
     */
    #[JsonProperty('url')]
    public ?string $url;

    /**
     * @var ?string $vendorDescription
     */
    #[JsonProperty('vendor_description')]
    public ?string $vendorDescription;

    /**
     * @param array{
     *   active: string,
     *   isDefault: string,
     *   name: string,
     *   description?: ?string,
     *   langId?: ?string,
     *   shippingId?: ?string,
     *   translationId?: ?int,
     *   url?: ?string,
     *   vendorDescription?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->active = $values['active'];
        $this->description = $values['description'] ?? null;
        $this->isDefault = $values['isDefault'];
        $this->langId = $values['langId'] ?? null;
        $this->name = $values['name'];
        $this->shippingId = $values['shippingId'] ?? null;
        $this->translationId = $values['translationId'] ?? null;
        $this->url = $values['url'] ?? null;
        $this->vendorDescription = $values['vendorDescription'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
