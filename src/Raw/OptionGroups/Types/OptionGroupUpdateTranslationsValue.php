<?php

namespace Shoper\Sdk\Rest\OptionGroups\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class OptionGroupUpdateTranslationsValue extends JsonSerializableType
{
    /**
     * @var ?string $groupId
     */
    #[JsonProperty('group_id')]
    public ?string $groupId;

    /**
     * @var ?int $langId [language](#tag/Languages) identifier
     */
    #[JsonProperty('lang_id')]
    public ?int $langId;

    /**
     * @var string $name name of options group
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?int $transId translation identifier
     */
    #[JsonProperty('trans_id')]
    public ?int $transId;

    /**
     * @param array{
     *   name: string,
     *   groupId?: ?string,
     *   langId?: ?int,
     *   transId?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->groupId = $values['groupId'] ?? null;
        $this->langId = $values['langId'] ?? null;
        $this->name = $values['name'];
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
