<?php

namespace Shoper\Sdk\Rest\Orders\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;

class ListOrdersRequest extends JsonSerializableType
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
     * @var ?bool $filtersVatEu Filter by vat_eu. Supports operators: eq.
     */
    public ?bool $filtersVatEu;

    /**
     * @var ?bool $filtersIsCashOnDelivery Filter by is_cash_on_delivery. Supports operators: eq.
     */
    public ?bool $filtersIsCashOnDelivery;

    /**
     * @var ?bool $filtersIsPaid Filter by is_paid. Supports operators: eq.
     */
    public ?bool $filtersIsPaid;

    /**
     * @var ?bool $filtersIsUnderpayment Filter by is_underpayment. Supports operators: eq.
     */
    public ?bool $filtersIsUnderpayment;

    /**
     * @var ?bool $filtersIsOverpayment Filter by is_overpayment. Supports operators: eq.
     */
    public ?bool $filtersIsOverpayment;

    /**
     * @var ?int $filtersTotalProducts Filter by total_products. Supports operators: eq, gt, gte, lt, lte, in, not_in.
     */
    public ?int $filtersTotalProducts;

    /**
     * @var ?int $filtersTotalParcels Filter by total_parcels. Supports operators: eq, gt, gte, lt, lte, in, not_in.
     */
    public ?int $filtersTotalParcels;

    /**
     * @var ?string $filtersAdditionalFields Filter by additional_fields. Supports operators: in, not_in.
     */
    public ?string $filtersAdditionalFields;

    /**
     * @param array{
     *   limit?: ?int,
     *   page?: ?int,
     *   filtersVatEu?: ?bool,
     *   filtersIsCashOnDelivery?: ?bool,
     *   filtersIsPaid?: ?bool,
     *   filtersIsUnderpayment?: ?bool,
     *   filtersIsOverpayment?: ?bool,
     *   filtersTotalProducts?: ?int,
     *   filtersTotalParcels?: ?int,
     *   filtersAdditionalFields?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->limit = $values['limit'] ?? null;
        $this->page = $values['page'] ?? null;
        $this->filtersVatEu = $values['filtersVatEu'] ?? null;
        $this->filtersIsCashOnDelivery = $values['filtersIsCashOnDelivery'] ?? null;
        $this->filtersIsPaid = $values['filtersIsPaid'] ?? null;
        $this->filtersIsUnderpayment = $values['filtersIsUnderpayment'] ?? null;
        $this->filtersIsOverpayment = $values['filtersIsOverpayment'] ?? null;
        $this->filtersTotalProducts = $values['filtersTotalProducts'] ?? null;
        $this->filtersTotalParcels = $values['filtersTotalParcels'] ?? null;
        $this->filtersAdditionalFields = $values['filtersAdditionalFields'] ?? null;
    }
}
