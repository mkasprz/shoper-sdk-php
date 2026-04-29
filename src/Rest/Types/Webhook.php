<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

/**
 * Resource provides shop <a href="/developers/webhooks/introduction">Webhooks</a> management.
 */
class Webhook extends JsonSerializableType
{
    /**
     * @var ?bool $active is webhook active?
     */
    #[JsonProperty('active')]
    public ?bool $active;

    /**
     * @var ?array<string> $events an array with <a href="">events</a> the webhook is bound
     */
    #[JsonProperty('events'), ArrayType(['string'])]
    public ?array $events;

    /**
     * data encapsulation:
     * <ul>
     *     <li>0 - JSON,</li>
     *     <li>1 - XML</li>
     *
     * @var int $format
     */
    #[JsonProperty('format')]
    public int $format;

    /**
     * @var ?string $secret a secret used in webhook checksum calculation
     */
    #[JsonProperty('secret')]
    public ?string $secret;

    /**
     * @var string $url webhook request entry point
     */
    #[JsonProperty('url')]
    public string $url;

    /**
     * @var ?int $webhookId webhook identifier
     */
    #[JsonProperty('webhook_id')]
    public ?int $webhookId;

    /**
     * @param array{
     *   format: int,
     *   url: string,
     *   active?: ?bool,
     *   events?: ?array<string>,
     *   secret?: ?string,
     *   webhookId?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->active = $values['active'] ?? null;
        $this->events = $values['events'] ?? null;
        $this->format = $values['format'];
        $this->secret = $values['secret'] ?? null;
        $this->url = $values['url'];
        $this->webhookId = $values['webhookId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
