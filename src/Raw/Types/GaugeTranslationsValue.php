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
     * @var ?string $langId [language](#tag/Languages) identifier
     */
    #[JsonProperty('lang_id')]
    public ?string $langId;

    /**
     * @var ?string $name gauge name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $translationId translation identifier
     */
    #[JsonProperty('translation_id')]
    public ?string $translationId;

    /**
     * @param array{
     *   gaugeId?: ?string,
     *   langId?: ?string,
     *   name?: ?string,
     *   translationId?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->gaugeId = $values['gaugeId'] ?? null;
        $this->langId = $values['langId'] ?? null;
        $this->name = $values['name'] ?? null;
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
