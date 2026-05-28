<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

/**
 * product safety information
 */
class ProductSafetyInformation extends JsonSerializableType
{
    /**
     * @var ?array<int> $gpsrCertificates array of [certificates](#tag/ProductSafetyCertificates) identifiers
     */
    #[JsonProperty('gpsr_certificates'), ArrayType(['integer'])]
    public ?array $gpsrCertificates;

    /**
     * @var ?string $gpsrImporterId [importer](#tag/ProductSafetyImporters) identifier
     */
    #[JsonProperty('gpsr_importer_id')]
    public ?string $gpsrImporterId;

    /**
     * @var ?string $gpsrProducerId [producer](#tag/ProductSafetyProducers) identifier
     */
    #[JsonProperty('gpsr_producer_id')]
    public ?string $gpsrProducerId;

    /**
     * @var ?string $gpsrResponsibleId [responsible person](#tag/ProductSafetyResponsibles) identifier
     */
    #[JsonProperty('gpsr_responsible_id')]
    public ?string $gpsrResponsibleId;

    /**
     * @param array{
     *   gpsrCertificates?: ?array<int>,
     *   gpsrImporterId?: ?string,
     *   gpsrProducerId?: ?string,
     *   gpsrResponsibleId?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->gpsrCertificates = $values['gpsrCertificates'] ?? null;
        $this->gpsrImporterId = $values['gpsrImporterId'] ?? null;
        $this->gpsrProducerId = $values['gpsrProducerId'] ?? null;
        $this->gpsrResponsibleId = $values['gpsrResponsibleId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
