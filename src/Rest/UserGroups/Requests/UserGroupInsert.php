<?php

namespace Shoper\Sdk\Rest\UserGroups\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class UserGroupInsert extends JsonSerializableType
{
    /**
     * @var ?bool $autoAdd should users be automatically added to this group?
     */
    #[JsonProperty('auto_add')]
    public ?bool $autoAdd;

    /**
     * @var ?float $discount discount for group (percent)
     */
    #[JsonProperty('discount')]
    public ?float $discount;

    /**
     * @var string $name name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?int $priceLevel pricing level (1-3)
     */
    #[JsonProperty('price_level')]
    public ?int $priceLevel;

    /**
     * @param array{
     *   name: string,
     *   autoAdd?: ?bool,
     *   discount?: ?float,
     *   priceLevel?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->autoAdd = $values['autoAdd'] ?? null;
        $this->discount = $values['discount'] ?? null;
        $this->name = $values['name'];
        $this->priceLevel = $values['priceLevel'] ?? null;
    }
}
