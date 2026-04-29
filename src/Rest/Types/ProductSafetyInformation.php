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
     * @var ?int $gpsrImporterId [importer](#tag/ProductSafetyImporters) identifier
     */
    #[JsonProperty('gpsr_importer_id')]
    public ?int $gpsrImporterId;

    /**
     * @var ?int $gpsrProducerId [producer](#tag/ProductSafetyProducers) identifier
     */
    #[JsonProperty('gpsr_producer_id')]
    public ?int $gpsrProducerId;

    /**
     * @var ?int $gpsrResponsibleId [responsible person](#tag/ProductSafetyResponsibles) identifier
     */
    #[JsonProperty('gpsr_responsible_id')]
    public ?int $gpsrResponsibleId;

    /**
     * @param array{
     *   gpsrCertificates?: ?array<int>,
     *   gpsrImporterId?: ?int,
     *   gpsrProducerId?: ?int,
     *   gpsrResponsibleId?: ?int,
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
