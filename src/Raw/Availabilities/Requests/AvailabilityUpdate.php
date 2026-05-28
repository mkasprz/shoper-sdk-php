<?php

namespace Shoper\Sdk\Rest\Availabilities\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Availabilities\Types\AvailabilityUpdateCanBuy;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Availabilities\Types\AvailabilityUpdateNotifier;
use Shoper\Sdk\Rest\Availabilities\Types\AvailabilityUpdateRanges;
use Shoper\Sdk\Rest\Availabilities\Types\AvailabilityUpdateTranslationsValue;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

class AvailabilityUpdate extends JsonSerializableType
{
    /**
     * @var ?value-of<AvailabilityUpdateCanBuy> $canBuy can the product with this availability be bought?
     */
    #[JsonProperty('can_buy')]
    public ?string $canBuy;

    /**
     * @var ?string $from a minimal amount required for availability to be enabled
     */
    #[JsonProperty('from')]
    public ?string $from;

    /**
     * @var ?value-of<AvailabilityUpdateNotifier> $notifier notify user on status change by e-mail
     */
    #[JsonProperty('notifier')]
    public ?string $notifier;

    /**
     * @var ?string $photo availability icon file name
     */
    #[JsonProperty('photo')]
    public ?string $photo;

    /**
     * @var ?value-of<AvailabilityUpdateRanges> $ranges if enabled, availability is determined by availabilities; disabled - manually
     */
    #[JsonProperty('ranges')]
    public ?string $ranges;

    /**
     * @var ?array<string, AvailabilityUpdateTranslationsValue> $translations an associative array with object translations
     */
    #[JsonProperty('translations'), ArrayType(['string' => AvailabilityUpdateTranslationsValue::class])]
    public ?array $translations;

    /**
     * @param array{
     *   canBuy?: ?value-of<AvailabilityUpdateCanBuy>,
     *   from?: ?string,
     *   notifier?: ?value-of<AvailabilityUpdateNotifier>,
     *   photo?: ?string,
     *   ranges?: ?value-of<AvailabilityUpdateRanges>,
     *   translations?: ?array<string, AvailabilityUpdateTranslationsValue>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->canBuy = $values['canBuy'] ?? null;
        $this->from = $values['from'] ?? null;
        $this->notifier = $values['notifier'] ?? null;
        $this->photo = $values['photo'] ?? null;
        $this->ranges = $values['ranges'] ?? null;
        $this->translations = $values['translations'] ?? null;
    }
}
