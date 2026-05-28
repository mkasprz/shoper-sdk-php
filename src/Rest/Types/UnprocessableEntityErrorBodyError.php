<?php

namespace Shoper\Sdk\Rest\Types;

enum UnprocessableEntityErrorBodyError: string
{
    case DenominationGroupForbiddenForRegularProduct = "denomination_group_forbidden_for_regular_product";
}
