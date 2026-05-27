<?php

namespace Shoper\Sdk\Rest\Types;

enum ErrorResponse401Error: string
{
    case UnauthorizedClient = "unauthorized_client";
    case AuthFailure = "auth_failure";
    case AuthIpNotAllowed = "auth_ip_not_allowed";
    case AuthAdminAccessDenied = "auth_admin_access_denied";
    case AuthWebapiAccessDenied = "auth_webapi_access_denied";
}
