<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;
use Shoper\Sdk\Rest\Core\Types\ArrayType;

/**
 * Fields that could be added into a few places within shop.
 */
class AdditionalField extends JsonSerializableType
{
    /**
     * @var ?bool $active is field active
     */
    #[JsonProperty('active')]
    public ?bool $active;

    /**
     * @var ?bool $checked is field checked (<code>checkbox</code> field only)
     */
    #[JsonProperty('checked')]
    public ?bool $checked;

    /**
     * specifies where locate this field. Bitmask of following values:
     * <ul>
     *     <li>1 - user context</li>
     *     <li>2 - user account context</li>
     *     <li>4 - user registration form</li>
     *     <li>8 - order form</li>
     *     <li>16 - order by anonymous user requested account registration</li>
     *     <li>32 - order by anonymous user</li>
     *     <li>64 - order by logged user on</li>
     *     <li>128 - contact form</li>
     * </ul>
     *
     * @var int $locate
     */
    #[JsonProperty('locate')]
    public int $locate;

    /**
     * @var ?int $order factor used in display order calculation
     */
    #[JsonProperty('order')]
    public ?int $order;

    /**
     * @var ?bool $req is field required
     */
    #[JsonProperty('req')]
    public ?bool $req;

    /**
     * @var array<string, AdditionalFieldTranslationsValue> $translations translations data
     */
    #[JsonProperty('translations'), ArrayType(['string' => AdditionalFieldTranslationsValue::class])]
    public array $translations;

    /**
     * field type:
     * <ul>
     *     <li>1 - text</li>
     *     <li>2 - checkbox</li>
     *     <li>3 - select</li>
     *     <li>4 - file</li>
     *     <li data-since="5.7.8">5 - hidden</li>
     *     <li>6 - description</li>
     * </ul>
     *
     * @var int $type
     */
    #[JsonProperty('type')]
    public int $type;

    /**
     * @param array{
     *   locate: int,
     *   translations: array<string, AdditionalFieldTranslationsValue>,
     *   type: int,
     *   active?: ?bool,
     *   checked?: ?bool,
     *   order?: ?int,
     *   req?: ?bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->active = $values['active'] ?? null;
        $this->checked = $values['checked'] ?? null;
        $this->locate = $values['locate'];
        $this->order = $values['order'] ?? null;
        $this->req = $values['req'] ?? null;
        $this->translations = $values['translations'];
        $this->type = $values['type'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
