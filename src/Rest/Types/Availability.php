<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

/**
 * Product availability info
 */
class Availability extends JsonSerializableType
{
    /**
     * @var ?string $availabilityId availability identifier
     */
    #[JsonProperty('availability_id')]
    public ?string $availabilityId;

    /**
     * @var ?value-of<AvailabilityCanBuy> $canBuy can the product with this availability be bought?
     */
    #[JsonProperty('can_buy')]
    public ?string $canBuy;

    /**
     * @var ?string $from a minimal amount required for availability to be enabled
     */
    #[JsonProperty('from')]
    public ?string $from;

    /**
     * @var ?value-of<AvailabilityNotifier> $notifier notify user on status change by e-mail
     */
    #[JsonProperty('notifier')]
    public ?string $notifier;

    /**
     * @var ?string $photo availability icon file name
     */
    #[JsonProperty('photo')]
    public ?string $photo;

    /**
     * @var ?value-of<AvailabilityRanges> $ranges if enabled, availability is determined by availabilities; disabled - manually
     */
    #[JsonProperty('ranges')]
    public ?string $ranges;

    /**
     * @var ?array<string, AvailabilityTranslationsValue> $translations an associative array with object translations
     */
    #[JsonProperty('translations'), ArrayType(['string' => AvailabilityTranslationsValue::class])]
    public ?array $translations;

    /**
     * @param array{
     *   availabilityId?: ?string,
     *   canBuy?: ?value-of<AvailabilityCanBuy>,
     *   from?: ?string,
     *   notifier?: ?value-of<AvailabilityNotifier>,
     *   photo?: ?string,
     *   ranges?: ?value-of<AvailabilityRanges>,
     *   translations?: ?array<string, AvailabilityTranslationsValue>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->availabilityId = $values['availabilityId'] ?? null;
        $this->canBuy = $values['canBuy'] ?? null;
        $this->from = $values['from'] ?? null;
        $this->notifier = $values['notifier'] ?? null;
        $this->photo = $values['photo'] ?? null;
        $this->ranges = $values['ranges'] ?? null;
        $this->translations = $values['translations'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
