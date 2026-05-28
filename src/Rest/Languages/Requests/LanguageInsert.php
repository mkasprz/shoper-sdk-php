<?php

namespace Shoper\Sdk\Rest\Languages\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Languages\Types\LanguageInsertActive;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class LanguageInsert extends JsonSerializableType
{
    /**
     * @var ?value-of<LanguageInsertActive> $active is language active
     */
    #[JsonProperty('active')]
    public ?string $active;

    /**
     * @var ?string $currencyId an identifier of [currency](#tag/Currencies) bound as default to this language
     */
    #[JsonProperty('currency_id')]
    public ?string $currencyId;

    /**
     * @var string $locale language code in <code>language_REGION</code> (for example <code>pl_PL</code>) format
     */
    #[JsonProperty('locale')]
    public string $locale;

    /**
     * @var ?string $order language order
     */
    #[JsonProperty('order')]
    public ?string $order;

    /**
     * @param array{
     *   locale: string,
     *   active?: ?value-of<LanguageInsertActive>,
     *   currencyId?: ?string,
     *   order?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->active = $values['active'] ?? null;
        $this->currencyId = $values['currencyId'] ?? null;
        $this->locale = $values['locale'];
        $this->order = $values['order'] ?? null;
    }
}
