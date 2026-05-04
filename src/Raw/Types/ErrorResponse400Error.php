<?php

namespace Shoper\Sdk\Rest\Types;

enum ErrorResponse400Error: string
{
    case InvalidGrant = "invalid_grant";
    case InvalidRequest = "invalid_request";
    case InvalidScope = "invalid_scope";
    case RedirectUriMismatch = "redirect_uri_mismatch";
    case AuctionOrderAlreadyConnected = "auction_order_already_connected";
}
