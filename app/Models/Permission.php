<?php

namespace App\Models;

use Spatie\Permission\Models\Permission as SpatiePermission;

class Permission extends SpatiePermission
{
    const CAN_VIEW_ADMIN = 1;
    const CAN_CREATE_ADMIN = 2;
    const CAN_EDIT_ADMIN = 3;
    const CAN_DELETE_ADMIN = 4;
    const HAS_ALL_ADMIN_ACCESS = 5;
    const CAN_VIEW_MANAGER = 6;
    const CAN_CREATE_MANAGER = 7;
    const CAN_EDIT_MANAGER = 8;
    const CAN_DELETE_MANAGER = 9;
    const HAS_ALL_MANAGERS_ACCESS = 10;
    const CAN_VIEW_AGENT = 11;
    const CAN_CREATE_AGENT = 12;
    const CAN_EDIT_AGENT = 13;
    const CAN_DELETE_AGENT = 14;
    const HAS_ALL_AGENT_ACCESS = 15;
    const CAN_VIEW_USER = 16;
    const CAN_CREATE_USER = 17;
    const CAN_EDIT_USER = 18;
    const CAN_DELETE_USER = 19;
    const HAS_ALL_USERS_ACCESS = 20;
    const CAN_VIEW_BUSINESS_MANAGER_USER = 21;
    const CAN_CREATE_BUSINESS_MANAGER_USER = 22;
    const CAN_EDIT_BUSINESS_MANAGER_USER = 23;
    const CAN_DELETE_BUSINESS_MANAGER_USER = 24;
    const HAS_ALL_BUSINESS_MANAGER_USERS_ACCESS = 25;

    /**
     *
     * remaining ids are dedicated for user roles (60 - 500)
     */

    const CAN_VIEW_PRODUCT = 501;
    const CAN_CREATE_PRODUCT = 502;
    const CAN_EDIT_PRODUCT = 503;
    const CAN_DELETE_PRODUCT = 504;
    const HAS_ALL_PRODUCTS_ACCESS = 505;

    const CAN_VIEW_LOCATION = 506;
    const CAN_CREATE_LOCATION = 507;
    const CAN_EDIT_LOCATION = 508;
    const CAN_DELETE_LOCATION = 509;
    const HAS_ALL_LOCATIONS_ACCESS = 510;

    const CAN_VIEW_ORDER = 511;
    const CAN_CREATE_ORDER = 512;
    const CAN_EDIT_ORDER = 513;
    const CAN_DELETE_ORDER = 514;
    const HAS_ALL_ORDERS_ACCESS = 515;

    const CAN_VIEW_FILE = 521;
    const CAN_UPLOAD_FILE = 522;
    const CAN_EDIT_FILE = 523;
    const CAN_DELETE_FILE = 524;
    const HAS_ALL_FILES_ACCESS = 525;
}
