<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

/**
 * Represents currencies defined in shop
 */
class Currency extends JsonSerializableType
{
    /**
     * @var ?value-of<CurrencyActive> $active is currency active
     */
    #[JsonProperty('active')]
    public ?string $active;

    /**
     * @var ?string $currencyId currency identifier
     */
    #[JsonProperty('currency_id')]
    public ?string $currencyId;

    /**
     * @var ?value-of<CurrencyDefault> $default is currency default
     */
    #[JsonProperty('default')]
    public ?string $default;

    /**
     * @var ?string $name currency codename according to the <a href="http://www.iso.org/iso/home/standards/currency_codes.htm">ISO_4217</a>
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $order currency order
     */
    #[JsonProperty('order')]
    public ?string $order;

    /**
     * @var ?string $rate currency exchange rate to the default currency; default rate is 1
     */
    #[JsonProperty('rate')]
    public ?string $rate;

    /**
     * @var ?string $rateDate date of sync with NBP in <a href="http://www.iso.org/iso/home/standards/iso8601.htm">ISO_8601</a>
     */
    #[JsonProperty('rate_date')]
    public ?string $rateDate;

    /**
     * @var ?string $rateSync currency rate after sync with NBP
     */
    #[JsonProperty('rate_sync')]
    public ?string $rateSync;

    /**
     * @param array{
     *   active?: ?value-of<CurrencyActive>,
     *   currencyId?: ?string,
     *   default?: ?value-of<CurrencyDefault>,
     *   name?: ?string,
     *   order?: ?string,
     *   rate?: ?string,
     *   rateDate?: ?string,
     *   rateSync?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->active = $values['active'] ?? null;
        $this->currencyId = $values['currencyId'] ?? null;
        $this->default = $values['default'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->order = $values['order'] ?? null;
        $this->rate = $values['rate'] ?? null;
        $this->rateDate = $values['rateDate'] ?? null;
        $this->rateSync = $values['rateSync'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
