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
     * @var ?bool $active is currency active
     */
    #[JsonProperty('active')]
    public ?bool $active;

    /**
     * @var ?int $currencyId currency identifier
     */
    #[JsonProperty('currency_id')]
    public ?int $currencyId;

    /**
     * @var ?bool $default is currency default
     */
    #[JsonProperty('default')]
    public ?bool $default;

    /**
     * @var ?string $name currency codename according to the <a href="http://www.iso.org/iso/home/standards/currency_codes.htm">ISO_4217</a>
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?int $order currency order
     */
    #[JsonProperty('order')]
    public ?int $order;

    /**
     * @var ?float $rate currency exchange rate to the default currency; default rate is 1
     */
    #[JsonProperty('rate')]
    public ?float $rate;

    /**
     * @var ?string $rateDate date of sync with NBP in <a href="http://www.iso.org/iso/home/standards/iso8601.htm">ISO_8601</a>
     */
    #[JsonProperty('rate_date')]
    public ?string $rateDate;

    /**
     * @var ?float $rateSync currency rate after sync with NBP
     */
    #[JsonProperty('rate_sync')]
    public ?float $rateSync;

    /**
     * @param array{
     *   active?: ?bool,
     *   currencyId?: ?int,
     *   default?: ?bool,
     *   name?: ?string,
     *   order?: ?int,
     *   rate?: ?float,
     *   rateDate?: ?string,
     *   rateSync?: ?float,
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
