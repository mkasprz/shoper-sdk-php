<?php

namespace Shoper\Sdk\Rest\Progresses\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

class ProgressInsert extends JsonSerializableType
{
    /**
     * @var ?int $denominator quantity of objects to process
     */
    #[JsonProperty('denominator')]
    public ?int $denominator;

    /**
     * @var int $eta estimated time to finish in seconds
     */
    #[JsonProperty('eta')]
    public int $eta;

    /**
     * @var string $name progress name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?int $nominator quantity of processed objects
     */
    #[JsonProperty('nominator')]
    public ?int $nominator;

    /**
     * @var ?string $start processing start date in <a href="https://www.iso.org/iso-8601-date-and-time-format.html">ISO 8601</a> (for example <code>2024-01-15 12:34:56</code>) format
     */
    #[JsonProperty('start')]
    public ?string $start;

    /**
     * Progress status:
     * <ul>
     *     <li>0 - pending,</li>
     *     <li>1 - in progress,</li>
     *     <li>2 - finished,</li>
     *     <li>3 - aborted,</li>
     *     <li>4 - failed</li>
     *     <li>5 - closed (finished and closed),</li>
     *     <li>6 - aborted and closed,</li>
     *     <li>7 - failed and closed,</li>
     * </ul>
     *
     * @var ?int $status
     */
    #[JsonProperty('status')]
    public ?int $status;

    /**
     * @param array{
     *   eta: int,
     *   name: string,
     *   denominator?: ?int,
     *   nominator?: ?int,
     *   start?: ?string,
     *   status?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->denominator = $values['denominator'] ?? null;
        $this->eta = $values['eta'];
        $this->name = $values['name'];
        $this->nominator = $values['nominator'] ?? null;
        $this->start = $values['start'] ?? null;
        $this->status = $values['status'] ?? null;
    }
}
