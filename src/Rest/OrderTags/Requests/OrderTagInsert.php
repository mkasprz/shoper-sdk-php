<?php

namespace Shoper\Sdk\Rest\OrderTags\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class OrderTagInsert extends JsonSerializableType
{
    /**
     * @var int $langId identifier of the language
     */
    #[JsonProperty('lang_id')]
    public int $langId;

    /**
     * @var string $name order tag name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @param array{
     *   langId: int,
     *   name: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->langId = $values['langId'];
        $this->name = $values['name'];
    }
}
