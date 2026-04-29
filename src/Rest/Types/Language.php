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
     * @var ?bool $active is language active
     */
    #[JsonProperty('active')]
    public ?bool $active;

    /**
     * @var ?int $currencyId an identifier of [currency](#tag/Currencies) bound as default to this language
     */
    #[JsonProperty('currency_id')]
    public ?int $currencyId;

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
     * @var ?int $order language order
     */
    #[JsonProperty('order')]
    public ?int $order;

    /**
     * @param array{
     *   active?: ?bool,
     *   currencyId?: ?int,
     *   langId?: ?string,
     *   locale?: ?string,
     *   order?: ?int,
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
