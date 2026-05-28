<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class OptionTranslationsValue extends JsonSerializableType
{
    /**
     * @var ?string $langId [language](#tag/Languages) identifier
     */
    #[JsonProperty('lang_id')]
    public ?string $langId;

    /**
     * @var string $name option name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $optionId
     */
    #[JsonProperty('option_id')]
    public ?string $optionId;

    /**
     * @var ?string $transId translation identifier
     */
    #[JsonProperty('trans_id')]
    public ?string $transId;

    /**
     * @param array{
     *   name: string,
     *   langId?: ?string,
     *   optionId?: ?string,
     *   transId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->langId = $values['langId'] ?? null;
        $this->name = $values['name'];
        $this->optionId = $values['optionId'] ?? null;
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
