<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class AvailabilityTranslationsValue extends JsonSerializableType
{
    /**
     * @var ?string $availabilityId
     */
    #[JsonProperty('availability_id')]
    public ?string $availabilityId;

    /**
     * @var ?int $langId [language](#tag/Languages) identifier
     */
    #[JsonProperty('lang_id')]
    public ?int $langId;

    /**
     * @var ?string $name availability name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?int $translationId translation identifier
     */
    #[JsonProperty('translation_id')]
    public ?int $translationId;

    /**
     * @param array{
     *   availabilityId?: ?string,
     *   langId?: ?int,
     *   name?: ?string,
     *   translationId?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->availabilityId = $values['availabilityId'] ?? null;
        $this->langId = $values['langId'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->translationId = $values['translationId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
