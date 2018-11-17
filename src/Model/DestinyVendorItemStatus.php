<?php
/**
 * DestinyVendorItemStatus
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
 * OpenAPI spec version: 2.3.2
 * Contact: support@bungie.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bungie\Model;
use \Bungie\ObjectSerializer;

/**
 * DestinyVendorItemStatus Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyVendorItemStatus
{
    /**
     * Possible values of this enum
     */
    const SUCCESS = 0;
    const NOINVENTORYSPACE = 1;
    const NOFUNDS = 2;
    const NOPROGRESSION = 4;
    const NOUNLOCK = 8;
    const NOQUANTITY = 16;
    const OUTSIDEPURCHASEWINDOW = 32;
    const NOTAVAILABLE = 64;
    const UNIQUENESSVIOLATION = 128;
    const UNKNOWNERROR = 256;
    const ALREADYSELLING = 512;
    const UNSELLABLE = 1024;
    const SELLINGINHIBITED = 2048;
    const ALREADYOWNED = 4096;
    const DISPLAYONLY = 8192;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SUCCESS,
            self::NOINVENTORYSPACE,
            self::NOFUNDS,
            self::NOPROGRESSION,
            self::NOUNLOCK,
            self::NOQUANTITY,
            self::OUTSIDEPURCHASEWINDOW,
            self::NOTAVAILABLE,
            self::UNIQUENESSVIOLATION,
            self::UNKNOWNERROR,
            self::ALREADYSELLING,
            self::UNSELLABLE,
            self::SELLINGINHIBITED,
            self::ALREADYOWNED,
            self::DISPLAYONLY,
        ];
    }
}

