<?php

namespace Shoper\Sdk\Rest\Types;

enum ErrorResponse503Error: string
{
    case TemporarilyUnavailable = "temporarily_unavailable";
}
