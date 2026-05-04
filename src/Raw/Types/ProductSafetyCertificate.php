<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

/**
 * Product safety certificates
 */
class ProductSafetyCertificate extends JsonSerializableType
{
    /**
     * @var ?string $gpsrCertificateId identifier
     */
    #[JsonProperty('gpsr_certificate_id')]
    public ?string $gpsrCertificateId;

    /**
     * @var string $name certificate name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var array<string, ProductSafetyCertificateTranslationsValue> $translations an associative array with object translations
     */
    #[JsonProperty('translations'), ArrayType(['string' => ProductSafetyCertificateTranslationsValue::class])]
    public array $translations;

    /**
     * @param array{
     *   name: string,
     *   translations: array<string, ProductSafetyCertificateTranslationsValue>,
     *   gpsrCertificateId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->gpsrCertificateId = $values['gpsrCertificateId'] ?? null;
        $this->name = $values['name'];
        $this->translations = $values['translations'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
