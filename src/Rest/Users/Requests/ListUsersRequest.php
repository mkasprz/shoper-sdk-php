<?php

namespace Shoper\Sdk\Rest\Users\Requests;

use Shoper\Sdk\Rest\Core\Json\JsonSerializableType;

class ListUsersRequest extends JsonSerializableType
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
     * @var ?string $filtersFirstname Filter by firstname. Supports operators: eq, like, not_like, in, not_in.
     */
    public ?string $filtersFirstname;

    /**
     * @var ?string $filtersLastname Filter by lastname. Supports operators: eq, like, not_like, in, not_in.
     */
    public ?string $filtersLastname;

    /**
     * @var ?string $filtersEmail Filter by email. Supports operators: eq, like, not_like, in, not_in.
     */
    public ?string $filtersEmail;

    /**
     * @var ?float $filtersDiscount Filter by discount. Supports operators: eq, gt, gte, lt, lte, in, not_in.
     */
    public ?float $filtersDiscount;

    /**
     * @var ?bool $filtersNewsletter Filter by newsletter. Supports operators: eq.
     */
    public ?bool $filtersNewsletter;

    /**
     * @var ?bool $filtersActive Filter by active. Supports operators: eq.
     */
    public ?bool $filtersActive;

    /**
     * @var ?int $filtersLangId Filter by lang_id. Supports operators: eq, gt, gte, lt, lte, in, not_in.
     */
    public ?int $filtersLangId;

    /**
     * @var ?int $filtersGroupId Filter by group_id. Supports operators: eq, gt, gte, lt, lte, in, not_in.
     */
    public ?int $filtersGroupId;

    /**
     * @var ?string $filtersAdditionalFields Filter by additional_fields. Supports operators: in, not_in.
     */
    public ?string $filtersAdditionalFields;

    /**
     * @var ?string $filtersTags Filter by tags. Supports operators: eq.
     */
    public ?string $filtersTags;

    /**
     * @param array{
     *   limit?: ?int,
     *   page?: ?int,
     *   filtersFirstname?: ?string,
     *   filtersLastname?: ?string,
     *   filtersEmail?: ?string,
     *   filtersDiscount?: ?float,
     *   filtersNewsletter?: ?bool,
     *   filtersActive?: ?bool,
     *   filtersLangId?: ?int,
     *   filtersGroupId?: ?int,
     *   filtersAdditionalFields?: ?string,
     *   filtersTags?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->limit = $values['limit'] ?? null;
        $this->page = $values['page'] ?? null;
        $this->filtersFirstname = $values['filtersFirstname'] ?? null;
        $this->filtersLastname = $values['filtersLastname'] ?? null;
        $this->filtersEmail = $values['filtersEmail'] ?? null;
        $this->filtersDiscount = $values['filtersDiscount'] ?? null;
        $this->filtersNewsletter = $values['filtersNewsletter'] ?? null;
        $this->filtersActive = $values['filtersActive'] ?? null;
        $this->filtersLangId = $values['filtersLangId'] ?? null;
        $this->filtersGroupId = $values['filtersGroupId'] ?? null;
        $this->filtersAdditionalFields = $values['filtersAdditionalFields'] ?? null;
        $this->filtersTags = $values['filtersTags'] ?? null;
    }
}
