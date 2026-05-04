<?php

namespace Shoper\Sdk\Rest\Metafields\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class MetafieldUpdate extends JsonSerializableType
{
    /**
     * @var ?string $description description of metafied
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?string $key key
     */
    #[JsonProperty('key')]
    public ?string $key;

    /**
     * @var ?string $namespace namespace
     */
    #[JsonProperty('namespace')]
    public ?string $namespace;

    /**
     * @var ?string $metafieldUpdateObject object type - you can use "system" for global storage or any available <a href="/developers/api/object-names">object name</a>
     */
    #[JsonProperty('object')]
    public ?string $metafieldUpdateObject;

    /**
     * Type of data stored using this metafield:
     * <ul>
     *     <li>1 - integer,</li>
     *     <li>2 - float,</li>
     *     <li>3 - string,</li>
     *     <li>4 - blog (binary objects - you won't be able to filter or sort objects using this metafield type)</li>
     * </ul>
     *
     * @var ?int $type
     */
    #[JsonProperty('type')]
    public ?int $type;

    /**
     * @param array{
     *   description?: ?string,
     *   key?: ?string,
     *   namespace?: ?string,
     *   metafieldUpdateObject?: ?string,
     *   type?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->description = $values['description'] ?? null;
        $this->key = $values['key'] ?? null;
        $this->namespace = $values['namespace'] ?? null;
        $this->metafieldUpdateObject = $values['metafieldUpdateObject'] ?? null;
        $this->type = $values['type'] ?? null;
    }
}
