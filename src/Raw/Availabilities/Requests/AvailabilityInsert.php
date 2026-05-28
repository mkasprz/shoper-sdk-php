<?php

namespace Shoper\Sdk\Rest\Availabilities\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Availabilities\Types\AvailabilityInsertCanBuy;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Availabilities\Types\AvailabilityInsertNotifier;
use Shoper\Sdk\Rest\Availabilities\Types\AvailabilityInsertRanges;
use Shoper\Sdk\Rest\Availabilities\Types\AvailabilityInsertTranslationsValue;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

class AvailabilityInsert extends JsonSerializableType
{
    /**
     * @var ?value-of<AvailabilityInsertCanBuy> $canBuy can the product with this availability be bought?
     */
    #[JsonProperty('can_buy')]
    public ?string $canBuy;

    /**
     * @var ?string $from a minimal amount required for availability to be enabled
     */
    #[JsonProperty('from')]
    public ?string $from;

    /**
     * @var ?value-of<AvailabilityInsertNotifier> $notifier notify user on status change by e-mail
     */
    #[JsonProperty('notifier')]
    public ?string $notifier;

    /**
     * @var ?string $photo availability icon file name
     */
    #[JsonProperty('photo')]
    public ?string $photo;

    /**
     * @var ?value-of<AvailabilityInsertRanges> $ranges if enabled, availability is determined by availabilities; disabled - manually
     */
    #[JsonProperty('ranges')]
    public ?string $ranges;

    /**
     * @var ?array<string, AvailabilityInsertTranslationsValue> $translations an associative array with object translations
     */
    #[JsonProperty('translations'), ArrayType(['string' => AvailabilityInsertTranslationsValue::class])]
    public ?array $translations;

    /**
     * @param array{
     *   canBuy?: ?value-of<AvailabilityInsertCanBuy>,
     *   from?: ?string,
     *   notifier?: ?value-of<AvailabilityInsertNotifier>,
     *   photo?: ?string,
     *   ranges?: ?value-of<AvailabilityInsertRanges>,
     *   translations?: ?array<string, AvailabilityInsertTranslationsValue>,
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
