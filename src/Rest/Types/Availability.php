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
     * @var ?int $availabilityId availability identifier
     */
    #[JsonProperty('availability_id')]
    public ?int $availabilityId;

    /**
     * @var ?bool $canBuy can the product with this availability be bought?
     */
    #[JsonProperty('can_buy')]
    public ?bool $canBuy;

    /**
     * @var ?int $from a minimal amount required for availability to be enabled
     */
    #[JsonProperty('from')]
    public ?int $from;

    /**
     * @var ?bool $notifier notify user on status change by e-mail
     */
    #[JsonProperty('notifier')]
    public ?bool $notifier;

    /**
     * @var ?string $photo availability icon file name
     */
    #[JsonProperty('photo')]
    public ?string $photo;

    /**
     * @var ?bool $ranges if enabled, availability is determined by availabilities; disabled - manually
     */
    #[JsonProperty('ranges')]
    public ?bool $ranges;

    /**
     * @var ?array<string, AvailabilityTranslationsValue> $translations an associative array with object translations
     */
    #[JsonProperty('translations'), ArrayType(['string' => AvailabilityTranslationsValue::class])]
    public ?array $translations;

    /**
     * @param array{
     *   availabilityId?: ?int,
     *   canBuy?: ?bool,
     *   from?: ?int,
     *   notifier?: ?bool,
     *   photo?: ?string,
     *   ranges?: ?bool,
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
