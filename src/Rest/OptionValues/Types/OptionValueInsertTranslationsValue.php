<?php

namespace Shoper\Sdk\Rest\OptionValues\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class OptionValueInsertTranslationsValue extends JsonSerializableType
{
    /**
     * @var ?int $langId [language](#tag/Languages) identifier
     */
    #[JsonProperty('lang_id')]
    public ?int $langId;

    /**
     * @var ?string $ovalueId
     */
    #[JsonProperty('ovalue_id')]
    public ?string $ovalueId;

    /**
     * @var ?int $transId translation identifier
     */
    #[JsonProperty('trans_id')]
    public ?int $transId;

    /**
     * @var string $value value title
     */
    #[JsonProperty('value')]
    public string $value;

    /**
     * @param array{
     *   value: string,
     *   langId?: ?int,
     *   ovalueId?: ?string,
     *   transId?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->langId = $values['langId'] ?? null;
        $this->ovalueId = $values['ovalueId'] ?? null;
        $this->transId = $values['transId'] ?? null;
        $this->value = $values['value'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
