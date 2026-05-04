<?php

namespace Shoper\Sdk\Rest\Webhooks\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

class WebhookUpdate extends JsonSerializableType
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
     * @var ?int $format
     */
    #[JsonProperty('format')]
    public ?int $format;

    /**
     * @var ?string $secret a secret used in webhook checksum calculation
     */
    #[JsonProperty('secret')]
    public ?string $secret;

    /**
     * @var ?string $url webhook request entry point
     */
    #[JsonProperty('url')]
    public ?string $url;

    /**
     * @param array{
     *   active?: ?bool,
     *   events?: ?array<string>,
     *   format?: ?int,
     *   secret?: ?string,
     *   url?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->active = $values['active'] ?? null;
        $this->events = $values['events'] ?? null;
        $this->format = $values['format'] ?? null;
        $this->secret = $values['secret'] ?? null;
        $this->url = $values['url'] ?? null;
    }
}
