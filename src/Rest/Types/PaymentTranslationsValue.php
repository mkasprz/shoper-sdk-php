<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class PaymentTranslationsValue extends JsonSerializableType
{
    /**
     * @var ?value-of<PaymentTranslationsValueActive> $active is the payment method active?
     */
    #[JsonProperty('active')]
    public ?string $active;

    /**
     * @var ?string $description payment description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?string $langId [language](#tag/Languages) identifier
     */
    #[JsonProperty('lang_id')]
    public ?string $langId;

    /**
     * @var ?string $notify message contents shown upon payment completion
     */
    #[JsonProperty('notify')]
    public ?string $notify;

    /**
     * @var ?string $notifyMail an e-mail contents sent after payment is done
     */
    #[JsonProperty('notify_mail')]
    public ?string $notifyMail;

    /**
     * @var ?string $title payment name
     */
    #[JsonProperty('title')]
    public ?string $title;

    /**
     * @var ?string $transId translation identifier
     */
    #[JsonProperty('trans_id')]
    public ?string $transId;

    /**
     * @param array{
     *   active?: ?value-of<PaymentTranslationsValueActive>,
     *   description?: ?string,
     *   langId?: ?string,
     *   notify?: ?string,
     *   notifyMail?: ?string,
     *   title?: ?string,
     *   transId?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->active = $values['active'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->langId = $values['langId'] ?? null;
        $this->notify = $values['notify'] ?? null;
        $this->notifyMail = $values['notifyMail'] ?? null;
        $this->title = $values['title'] ?? null;
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
