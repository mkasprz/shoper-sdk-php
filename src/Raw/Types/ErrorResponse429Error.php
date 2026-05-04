<?php

namespace Shoper\Sdk\Rest\Types;

enum ErrorResponse429Error: string
{
    case TemporarilyUnavailable = "temporarily_unavailable";
}
