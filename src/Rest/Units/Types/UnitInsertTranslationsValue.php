<?php

namespace Shoper\Sdk\Rest\Units\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class UnitInsertTranslationsValue extends JsonSerializableType
{
    /**
     * @var ?int $langId [language](#tag/Languages) identifier
     */
    #[JsonProperty('lang_id')]
    public ?int $langId;

    /**
     * @var string $name unit name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?int $transId translation identifier
     */
    #[JsonProperty('trans_id')]
    public ?int $transId;

    /**
     * @var ?string $unitId
     */
    #[JsonProperty('unit_id')]
    public ?string $unitId;

    /**
     * @param array{
     *   name: string,
     *   langId?: ?int,
     *   transId?: ?int,
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
