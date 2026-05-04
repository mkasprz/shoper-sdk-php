<?php

namespace Shoper\Sdk\Rest\Types;

enum ErrorResponse403Error: string
{
    case AccessDenied = "access_denied";
    case InsufficientScope = "insufficient_scope";
}
