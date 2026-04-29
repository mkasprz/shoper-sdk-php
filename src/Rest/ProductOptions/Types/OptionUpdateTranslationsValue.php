<?php

namespace Shoper\Sdk\Rest\ProductOptions\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class OptionUpdateTranslationsValue extends JsonSerializableType
{
    /**
     * @var ?int $langId [language](#tag/Languages) identifier
     */
    #[JsonProperty('lang_id')]
    public ?int $langId;

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
     * @var ?int $transId translation identifier
     */
    #[JsonProperty('trans_id')]
    public ?int $transId;

    /**
     * @param array{
     *   name: string,
     *   langId?: ?int,
     *   optionId?: ?string,
     *   transId?: ?int,
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
