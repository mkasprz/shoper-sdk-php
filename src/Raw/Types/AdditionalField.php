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
     * @var ?value-of<AdditionalFieldActive> $active is field active
     */
    #[JsonProperty('active')]
    public ?string $active;

    /**
     * @var ?value-of<AdditionalFieldChecked> $checked is field checked (<code>checkbox</code> field only)
     */
    #[JsonProperty('checked')]
    public ?string $checked;

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
     * @var string $locate
     */
    #[JsonProperty('locate')]
    public string $locate;

    /**
     * @var ?string $order factor used in display order calculation
     */
    #[JsonProperty('order')]
    public ?string $order;

    /**
     * @var ?value-of<AdditionalFieldReq> $req is field required
     */
    #[JsonProperty('req')]
    public ?string $req;

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
     * @var string $type
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @param array{
     *   locate: string,
     *   translations: array<string, AdditionalFieldTranslationsValue>,
     *   type: string,
     *   active?: ?value-of<AdditionalFieldActive>,
     *   checked?: ?value-of<AdditionalFieldChecked>,
     *   order?: ?string,
     *   req?: ?value-of<AdditionalFieldReq>,
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
