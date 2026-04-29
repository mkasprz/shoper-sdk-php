<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

/**
 * A file bound to the product
 */
class ProductFile extends JsonSerializableType
{
    /**
     * @var ?bool $active is file enabled?
     */
    #[JsonProperty('active')]
    public ?bool $active;

    /**
     * @var ?string $addDate product addition date in <a href="https://www.iso.org/iso-8601-date-and-time-format.html">ISO 8601</a> (for example <code>2024-01-15 12:34:56</code>) format
     */
    #[JsonProperty('add_date')]
    public ?string $addDate;

    /**
     * @var ?string $description file description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?int $fileId file identifier
     */
    #[JsonProperty('file_id')]
    public ?int $fileId;

    /**
     * @var string $fileName unique (within system scope) filename
     */
    #[JsonProperty('file_name')]
    public string $fileName;

    /**
     * @var ?int $fileSize file size in bytes
     */
    #[JsonProperty('file_size')]
    public ?int $fileSize;

    /**
     * @var ?string $name filename
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?int $order file order
     */
    #[JsonProperty('order')]
    public ?int $order;

    /**
     * @var int $translationId [product](#tag/Products) translation identifier
     */
    #[JsonProperty('translation_id')]
    public int $translationId;

    /**
     * file type (default set to 0):
     * <ul>
     *     <li>0 - regular file</li>
     *     <li>1 - file containing product safety information</li>
     * </ul>
     *
     * @var ?int $type
     */
    #[JsonProperty('type')]
    public ?int $type;

    /**
     * @param array{
     *   fileName: string,
     *   translationId: int,
     *   active?: ?bool,
     *   addDate?: ?string,
     *   description?: ?string,
     *   fileId?: ?int,
     *   fileSize?: ?int,
     *   name?: ?string,
     *   order?: ?int,
     *   type?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->active = $values['active'] ?? null;
        $this->addDate = $values['addDate'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->fileId = $values['fileId'] ?? null;
        $this->fileName = $values['fileName'];
        $this->fileSize = $values['fileSize'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->order = $values['order'] ?? null;
        $this->translationId = $values['translationId'];
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
