<?php

namespace Shoper\Sdk\Rest\Currencies\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Currencies\Types\CurrencyInsertActive;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Currencies\Types\CurrencyInsertDefault;

class CurrencyInsert extends JsonSerializableType
{
    /**
     * @var ?value-of<CurrencyInsertActive> $active is currency active
     */
    #[JsonProperty('active')]
    public ?string $active;

    /**
     * @var ?value-of<CurrencyInsertDefault> $default is currency default
     */
    #[JsonProperty('default')]
    public ?string $default;

    /**
     * @var string $name currency codename according to the <a href="http://www.iso.org/iso/home/standards/currency_codes.htm">ISO_4217</a>
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $order currency order
     */
    #[JsonProperty('order')]
    public ?string $order;

    /**
     * @var string $rate currency exchange rate to the default currency; default rate is 1
     */
    #[JsonProperty('rate')]
    public string $rate;

    /**
     * @param array{
     *   name: string,
     *   rate: string,
     *   active?: ?value-of<CurrencyInsertActive>,
     *   default?: ?value-of<CurrencyInsertDefault>,
     *   order?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->active = $values['active'] ?? null;
        $this->default = $values['default'] ?? null;
        $this->name = $values['name'];
        $this->order = $values['order'] ?? null;
        $this->rate = $values['rate'];
    }
}
