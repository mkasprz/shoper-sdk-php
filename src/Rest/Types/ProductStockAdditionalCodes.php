<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

/**
 * additional codes
 */
class ProductStockAdditionalCodes extends JsonSerializableType
{
    /**
     * @var ?int $bloz12 BLOZ12 code (if enabled in shop configuration files)
     */
    #[JsonProperty('bloz12')]
    public ?int $bloz12;

    /**
     * @var ?int $bloz7 BLOZ7 code (if enabled in shop configuration files)
     */
    #[JsonProperty('bloz7')]
    public ?int $bloz7;

    /**
     * @var ?int $code39 Code 39 code (if enabled in shop configuration files)
     */
    #[JsonProperty('code39')]
    public ?int $code39;

    /**
     * GTU code (if enabled in shop configuration files)
     * values: '', 'none', 'GTU_01', 'GTU_02', ... , 'GTU_13'
     *
     * @var ?string $gtu
     */
    #[JsonProperty('gtu')]
    public ?string $gtu;

    /**
     * @var ?string $isbn ISBN code (if enabled in shop configuration files)
     */
    #[JsonProperty('isbn')]
    public ?string $isbn;

    /**
     * @var ?string $kgo KGO code (if enabled in shop configuration files)
     */
    #[JsonProperty('kgo')]
    public ?string $kgo;

    /**
     * @var ?string $producer vendor code (if enabled in shop configuration files)
     */
    #[JsonProperty('producer')]
    public ?string $producer;

    /**
     * @var ?string $warehouse warehouse code (if enabled in shop configuration files)
     */
    #[JsonProperty('warehouse')]
    public ?string $warehouse;

    /**
     * @param array{
     *   bloz12?: ?int,
     *   bloz7?: ?int,
     *   code39?: ?int,
     *   gtu?: ?string,
     *   isbn?: ?string,
     *   kgo?: ?string,
     *   producer?: ?string,
     *   warehouse?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->bloz12 = $values['bloz12'] ?? null;
        $this->bloz7 = $values['bloz7'] ?? null;
        $this->code39 = $values['code39'] ?? null;
        $this->gtu = $values['gtu'] ?? null;
        $this->isbn = $values['isbn'] ?? null;
        $this->kgo = $values['kgo'] ?? null;
        $this->producer = $values['producer'] ?? null;
        $this->warehouse = $values['warehouse'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
