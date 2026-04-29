<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class StatusTranslationsValue extends JsonSerializableType
{
    /**
     * @var ?int $langId [language](#tag/Languages) identifier
     */
    #[JsonProperty('lang_id')]
    public ?int $langId;

    /**
     * @var ?string $message e-mail contents in TXT format
     */
    #[JsonProperty('message')]
    public ?string $message;

    /**
     * @var ?string $messageHtml e-mail contents in HTML format
     */
    #[JsonProperty('message_html')]
    public ?string $messageHtml;

    /**
     * @var ?string $name status name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $statusId
     */
    #[JsonProperty('status_id')]
    public ?string $statusId;

    /**
     * @var ?int $transId translation identifier
     */
    #[JsonProperty('trans_id')]
    public ?int $transId;

    /**
     * @param array{
     *   langId?: ?int,
     *   message?: ?string,
     *   messageHtml?: ?string,
     *   name?: ?string,
     *   statusId?: ?string,
     *   transId?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->langId = $values['langId'] ?? null;
        $this->message = $values['message'] ?? null;
        $this->messageHtml = $values['messageHtml'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->statusId = $values['statusId'] ?? null;
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
