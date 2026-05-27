<?php

namespace Shoper\Sdk\Rest\Types;

enum ErrorResponse501Error: string
{
    case UnsupportedGrantType = "unsupported_grant_type";
    case ServerError = "server_error";
}
