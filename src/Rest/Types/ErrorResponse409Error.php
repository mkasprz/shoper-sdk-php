<?php

namespace Shoper\Sdk\Rest\Types;

enum ErrorResponse409Error: string
{
    case ServerError = "server_error";
    case TemporarilyUnavailable = "temporarily_unavailable";
}
