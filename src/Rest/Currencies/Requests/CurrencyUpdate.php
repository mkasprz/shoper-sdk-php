<?php

namespace Shoper\Sdk\Rest\Currencies\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Currencies\Types\CurrencyUpdateActive;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Currencies\Types\CurrencyUpdateDefault;

class CurrencyUpdate extends JsonSerializableType
{
    /**
     * @var ?value-of<CurrencyUpdateActive> $active is currency active
     */
    #[JsonProperty('active')]
    public ?string $active;

    /**
     * @var ?value-of<CurrencyUpdateDefault> $default is currency default
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
     * @param array{
     *   active?: ?value-of<CurrencyUpdateActive>,
     *   default?: ?value-of<CurrencyUpdateDefault>,
     *   name?: ?string,
     *   order?: ?string,
     *   rate?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->active = $values['active'] ?? null;
        $this->default = $values['default'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->order = $values['order'] ?? null;
        $this->rate = $values['rate'] ?? null;
    }
}
