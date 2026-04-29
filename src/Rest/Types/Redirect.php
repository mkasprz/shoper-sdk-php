<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

/**
 * Redirects
 */
class Redirect extends JsonSerializableType
{
    /**
     * @var ?int $langId [language](#tag/Languages) language identifier
     */
    #[JsonProperty('lang_id')]
    public ?int $langId;

    /**
     * @var ?int $objectId related object identifier
     */
    #[JsonProperty('object_id')]
    public ?int $objectId;

    /**
     * @var ?int $redirectId redirect identifier
     */
    #[JsonProperty('redirect_id')]
    public ?int $redirectId;

    /**
     * @var ?string $route relative redirect URL
     */
    #[JsonProperty('route')]
    public ?string $route;

    /**
     * @var ?string $target if type equal 0 this row is required
     */
    #[JsonProperty('target')]
    public ?string $target;

    /**
     * one of following:
     * <ul>
     *     <li>0 - own,</li>
     *     <li>1 - product,</li>
     *     <li>2 - category product,</li>
     *     <li>3 - producer</li>
     *     <li>4 - infopage</li>
     *     <li>5 - news</li>
     *     <li>6 - category news</li>
     * </ul>
     *
     * @var ?int $type
     */
    #[JsonProperty('type')]
    public ?int $type;

    /**
     * @param array{
     *   langId?: ?int,
     *   objectId?: ?int,
     *   redirectId?: ?int,
     *   route?: ?string,
     *   target?: ?string,
     *   type?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->langId = $values['langId'] ?? null;
        $this->objectId = $values['objectId'] ?? null;
        $this->redirectId = $values['redirectId'] ?? null;
        $this->route = $values['route'] ?? null;
        $this->target = $values['target'] ?? null;
        $this->type = $values['type'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
