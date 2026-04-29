<?php

namespace Shoper\Sdk\Rest\ProductFiles\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class ProductFileInsert extends JsonSerializableType
{
    /**
     * @var ?bool $active is file enabled?
     */
    #[JsonProperty('active')]
    public ?bool $active;

    /**
     * @var string $content base64-encoded file contents
     */
    #[JsonProperty('content')]
    public string $content;

    /**
     * @var ?string $description file description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var string $fileName unique (within system scope) filename
     */
    #[JsonProperty('file_name')]
    public string $fileName;

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
     *   content: string,
     *   fileName: string,
     *   translationId: int,
     *   active?: ?bool,
     *   description?: ?string,
     *   type?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->active = $values['active'] ?? null;
        $this->content = $values['content'];
        $this->description = $values['description'] ?? null;
        $this->fileName = $values['fileName'];
        $this->translationId = $values['translationId'];
        $this->type = $values['type'] ?? null;
    }
}
