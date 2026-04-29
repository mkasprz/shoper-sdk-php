<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class GaugeTranslationsValue extends JsonSerializableType
{
    /**
     * @var ?string $gaugeId
     */
    #[JsonProperty('gauge_id')]
    public ?string $gaugeId;

    /**
     * @var ?int $langId [language](#tag/Languages) identifier
     */
    #[JsonProperty('lang_id')]
    public ?int $langId;

    /**
     * @var ?string $name gauge name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?int $transId translation identifier
     */
    #[JsonProperty('trans_id')]
    public ?int $transId;

    /**
     * @param array{
     *   gaugeId?: ?string,
     *   langId?: ?int,
     *   name?: ?string,
     *   transId?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->gaugeId = $values['gaugeId'] ?? null;
        $this->langId = $values['langId'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->transId = $values['transId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
