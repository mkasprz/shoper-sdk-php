<?php

namespace Shoper\Sdk\Rest\OrderProducts\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;

class ListOrderProductsRequest extends JsonSerializableType
{
    /**
     * @var ?int $limit
     */
    public ?int $limit;

    /**
     * @var ?int $page
     */
    public ?int $page;

    /**
     * @var ?string $filtersDeliveryTimeHours Filter by delivery_time_hours. Supports operators: eq.
     */
    public ?string $filtersDeliveryTimeHours;

    /**
     * @param array{
     *   limit?: ?int,
     *   page?: ?int,
     *   filtersDeliveryTimeHours?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->limit = $values['limit'] ?? null;
        $this->page = $values['page'] ?? null;
        $this->filtersDeliveryTimeHours = $values['filtersDeliveryTimeHours'] ?? null;
    }
}
