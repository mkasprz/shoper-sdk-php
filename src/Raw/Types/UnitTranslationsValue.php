<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class UnitTranslationsValue extends JsonSerializableType
{
    /**
     * @var ?string $langId [language](#tag/Languages) identifier
     */
    #[JsonProperty('lang_id')]
    public ?string $langId;

    /**
     * @var string $name unit name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $transId translation identifier
     */
    #[JsonProperty('trans_id')]
    public ?string $transId;

    /**
     * @var ?string $unitId
     */
    #[JsonProperty('unit_id')]
    public ?string $unitId;

    /**
     * @param array{
     *   name: string,
     *   langId?: ?string,
     *   transId?: ?string,
     *   unitId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->langId = $values['langId'] ?? null;
        $this->name = $values['name'];
        $this->transId = $values['transId'] ?? null;
        $this->unitId = $values['unitId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
