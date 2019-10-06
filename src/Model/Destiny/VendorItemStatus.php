<?php
/**
 * VendorItemStatus
 *
 * PHP version 5
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Bungie.Net API
 *
 * These endpoints constitute the functionality exposed by Bungie.net, both for more traditional website functionality and for connectivity to Bungie video games and their related functionality.
 *
 * OpenAPI spec version: 2.4.0
 * Contact: support@bungie.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bungie\Model\Destiny;
use \Bungie\ObjectSerializer;

/**
 * VendorItemStatus Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class VendorItemStatus
{
    /**
     * Possible values of this enum
     */
    const VENDOR_ITEM_STATUS_SUCCESS = 0;
    const VENDOR_ITEM_STATUS_NOINVENTORYSPACE = 1;
    const VENDOR_ITEM_STATUS_NOFUNDS = 2;
    const VENDOR_ITEM_STATUS_NOPROGRESSION = 4;
    const VENDOR_ITEM_STATUS_NOUNLOCK = 8;
    const VENDOR_ITEM_STATUS_NOQUANTITY = 16;
    const VENDOR_ITEM_STATUS_OUTSIDEPURCHASEWINDOW = 32;
    const VENDOR_ITEM_STATUS_NOTAVAILABLE = 64;
    const VENDOR_ITEM_STATUS_UNIQUENESSVIOLATION = 128;
    const VENDOR_ITEM_STATUS_UNKNOWNERROR = 256;
    const VENDOR_ITEM_STATUS_ALREADYSELLING = 512;
    const VENDOR_ITEM_STATUS_UNSELLABLE = 1024;
    const VENDOR_ITEM_STATUS_SELLINGINHIBITED = 2048;
    const VENDOR_ITEM_STATUS_ALREADYOWNED = 4096;
    const VENDOR_ITEM_STATUS_DISPLAYONLY = 8192;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::VENDOR_ITEM_STATUS_SUCCESS,
            self::VENDOR_ITEM_STATUS_NOINVENTORYSPACE,
            self::VENDOR_ITEM_STATUS_NOFUNDS,
            self::VENDOR_ITEM_STATUS_NOPROGRESSION,
            self::VENDOR_ITEM_STATUS_NOUNLOCK,
            self::VENDOR_ITEM_STATUS_NOQUANTITY,
            self::VENDOR_ITEM_STATUS_OUTSIDEPURCHASEWINDOW,
            self::VENDOR_ITEM_STATUS_NOTAVAILABLE,
            self::VENDOR_ITEM_STATUS_UNIQUENESSVIOLATION,
            self::VENDOR_ITEM_STATUS_UNKNOWNERROR,
            self::VENDOR_ITEM_STATUS_ALREADYSELLING,
            self::VENDOR_ITEM_STATUS_UNSELLABLE,
            self::VENDOR_ITEM_STATUS_SELLINGINHIBITED,
            self::VENDOR_ITEM_STATUS_ALREADYOWNED,
            self::VENDOR_ITEM_STATUS_DISPLAYONLY,
        ];
    }
}


