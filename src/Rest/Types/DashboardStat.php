<?php

namespace Shoper\Sdk\Rest\Types;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;
use Shoper\Sdk\Rest\Core\Json\JsonProperty;

/**
 * Returns sales, clients and shop subscribers stats.
 */
class DashboardStat extends JsonSerializableType
{
    /**
     * @var ?DashboardStat30Days $_30Days stats of last 30 days
     */
    #[JsonProperty('30days')]
    public ?DashboardStat30Days $_30Days;

    /**
     * @var ?DashboardStat7Days $_7Days stats of last 7 dats
     */
    #[JsonProperty('7days')]
    public ?DashboardStat7Days $_7Days;

    /**
     * @var ?DashboardStatGeneral $general general shop stats
     */
    #[JsonProperty('general')]
    public ?DashboardStatGeneral $general;

    /**
     * @var ?DashboardStatToday $today current day stats
     */
    #[JsonProperty('today')]
    public ?DashboardStatToday $today;

    /**
     * @param array{
     *   _30Days?: ?DashboardStat30Days,
     *   _7Days?: ?DashboardStat7Days,
     *   general?: ?DashboardStatGeneral,
     *   today?: ?DashboardStatToday,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->_30Days = $values['_30Days'] ?? null;
        $this->_7Days = $values['_7Days'] ?? null;
        $this->general = $values['general'] ?? null;
        $this->today = $values['today'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
