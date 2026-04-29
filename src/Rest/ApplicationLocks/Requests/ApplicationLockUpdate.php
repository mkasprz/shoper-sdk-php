<?php

namespace Shoper\Sdk\Rest\ApplicationLocks\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class ApplicationLockUpdate extends JsonSerializableType
{
    /**
     * @var ?string $message lock reason
     */
    #[JsonProperty('message')]
    public ?string $message;

    /**
     * @param array{
     *   message?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->message = $values['message'] ?? null;
    }
}
