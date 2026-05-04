<?php

namespace Shoper\Sdk\Rest\NewsTags\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class NewsTagInsert extends JsonSerializableType
{
    /**
     * @var int $langId ID language
     */
    #[JsonProperty('lang_id')]
    public int $langId;

    /**
     * @var string $name news tag name
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
