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
     * @var ?int $langId [language](#tag/Languages) identifier
     */
    #[JsonProperty('lang_id')]
    public ?int $langId;

    /**
     * @var ?int $translationId translation identifier
     */
    #[JsonProperty('translation_id')]
    public ?int $translationId;

    /**
     * @param array{
     *   description?: ?string,
     *   gpsrCertificateId?: ?string,
     *   langId?: ?int,
     *   translationId?: ?int,
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
