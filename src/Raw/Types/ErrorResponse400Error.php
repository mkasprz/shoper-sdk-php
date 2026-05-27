<?php

namespace Shoper\Sdk\Rest\Types;

enum ErrorResponse400Error: string
{
    case InvalidGrant = "invalid_grant";
    case InvalidRequest = "invalid_request";
    case InvalidScope = "invalid_scope";
    case RedirectUriMismatch = "redirect_uri_mismatch";
    case AuctionOrderAlreadyConnected = "auction_order_already_connected";
    case ObjectReadonly = "object_readonly";
    case CannotDeleteInternalObject = "cannot_delete_internal_object";
    case OrderCombined = "order_combined";
    case ParcelCannotModify = "parcel_cannot_modify";
    case ParcelAlreadySent = "parcel_already_sent";
    case ProductNoSpecialOffer = "product_no_special_offer";
    case ShippingCannotBeActivated = "shipping_cannot_be_activated";
    case ShippingCannotBeDeactivated = "shipping_cannot_be_deactivated";
    case ShippingCannotBeDefault = "shipping_cannot_be_default";
    case ShippingCannotBeDeleted = "shipping_cannot_be_deleted";
    case OptionCannotModifyRequire = "option_cannot_modify_require";
    case OptionCannotModifyType = "option_cannot_modify_type";
    case OptionChildrenNotSupported = "option_children_not_supported";
}
