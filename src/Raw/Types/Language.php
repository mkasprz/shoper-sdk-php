<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

/**
 * Language localization (locale).
 */
class Language extends JsonSerializableType
{
    /**
     * @var ?value-of<LanguageActive> $active is language active
     */
    #[JsonProperty('active')]
    public ?string $active;

    /**
     * @var ?string $currencyId an identifier of [currency](#tag/Currencies) bound as default to this language
     */
    #[JsonProperty('currency_id')]
    public ?string $currencyId;

    /**
     * @var ?string $langId
     */
    #[JsonProperty('lang_id')]
    public ?string $langId;

    /**
     * @var ?string $locale language code in <code>language_REGION</code> (for example <code>pl_PL</code>) format
     */
    #[JsonProperty('locale')]
    public ?string $locale;

    /**
     * @var ?string $order language order
     */
    #[JsonProperty('order')]
    public ?string $order;

    /**
     * @param array{
     *   active?: ?value-of<LanguageActive>,
     *   currencyId?: ?string,
     *   langId?: ?string,
     *   locale?: ?string,
     *   order?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->active = $values['active'] ?? null;
        $this->currencyId = $values['currencyId'] ?? null;
        $this->langId = $values['langId'] ?? null;
        $this->locale = $values['locale'] ?? null;
        $this->order = $values['order'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
