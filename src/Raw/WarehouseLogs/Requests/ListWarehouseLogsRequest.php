<?php

namespace Shoper\Sdk\Rest\WarehouseLogs\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;

class ListWarehouseLogsRequest extends JsonSerializableType
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
     * @var ?int $filtersAdminId Filter by admin_id. Supports operators: eq, gt, gte, lt, lte, in, not_in.
     */
    public ?int $filtersAdminId;

    /**
     * @var ?int $filtersApplicationId Filter by application_id. Supports operators: eq, gt, gte, lt, lte, in, not_in.
     */
    public ?int $filtersApplicationId;

    /**
     * @var ?int $filtersOrderId Filter by order_id. Supports operators: eq, gt, gte, lt, lte, in, not_in.
     */
    public ?int $filtersOrderId;

    /**
     * @param array{
     *   limit?: ?int,
     *   page?: ?int,
     *   filtersAdminId?: ?int,
     *   filtersApplicationId?: ?int,
     *   filtersOrderId?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->limit = $values['limit'] ?? null;
        $this->page = $values['page'] ?? null;
        $this->filtersAdminId = $values['filtersAdminId'] ?? null;
        $this->filtersApplicationId = $values['filtersApplicationId'] ?? null;
        $this->filtersOrderId = $values['filtersOrderId'] ?? null;
    }
}
