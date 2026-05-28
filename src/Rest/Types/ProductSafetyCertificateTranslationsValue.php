<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class ProductSafetyCertificateTranslationsValue extends JsonSerializableType
{
    /**
     * @var ?string $description certificate description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?string $gpsrCertificateId
     */
    #[JsonProperty('gpsr_certificate_id')]
    public ?string $gpsrCertificateId;

    /**
     * @var ?string $langId [language](#tag/Languages) identifier
     */
    #[JsonProperty('lang_id')]
    public ?string $langId;

    /**
     * @var ?string $translationId translation identifier
     */
    #[JsonProperty('translation_id')]
    public ?string $translationId;

    /**
     * @param array{
     *   description?: ?string,
     *   gpsrCertificateId?: ?string,
     *   langId?: ?string,
     *   translationId?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->description = $values['description'] ?? null;
        $this->gpsrCertificateId = $values['gpsrCertificateId'] ?? null;
        $this->langId = $values['langId'] ?? null;
        $this->translationId = $values['translationId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
