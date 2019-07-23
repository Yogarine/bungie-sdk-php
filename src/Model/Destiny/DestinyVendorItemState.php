<?php
/**
 * DestinyVendorItemState
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
 * OpenAPI spec version: 2.3.6
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
 * DestinyVendorItemState Class Doc Comment
 *
 * @category Class
 * @description The possible states of Destiny Profile Records. IMPORTANT: Any given item can theoretically have many of these states simultaneously: as a result, this was altered to be a flags enumeration/bitmask for v3.2.0.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyVendorItemState
{
    /**
     * Possible values of this enum
     */
    const DESTINY_VENDOR_ITEM_STATE_NONE = 0;
    const DESTINY_VENDOR_ITEM_STATE_INCOMPLETE = 1;
    const DESTINY_VENDOR_ITEM_STATE_REWARDAVAILABLE = 2;
    const DESTINY_VENDOR_ITEM_STATE_COMPLETE = 4;
    const DESTINY_VENDOR_ITEM_STATE_NEW = 8;
    const DESTINY_VENDOR_ITEM_STATE_FEATURED = 16;
    const DESTINY_VENDOR_ITEM_STATE_ENDING = 32;
    const DESTINY_VENDOR_ITEM_STATE_ONSALE = 64;
    const DESTINY_VENDOR_ITEM_STATE_OWNED = 128;
    const DESTINY_VENDOR_ITEM_STATE_WIDEVIEW = 256;
    const DESTINY_VENDOR_ITEM_STATE_NEXUSATTENTION = 512;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DESTINY_VENDOR_ITEM_STATE_NONE,
            self::DESTINY_VENDOR_ITEM_STATE_INCOMPLETE,
            self::DESTINY_VENDOR_ITEM_STATE_REWARDAVAILABLE,
            self::DESTINY_VENDOR_ITEM_STATE_COMPLETE,
            self::DESTINY_VENDOR_ITEM_STATE_NEW,
            self::DESTINY_VENDOR_ITEM_STATE_FEATURED,
            self::DESTINY_VENDOR_ITEM_STATE_ENDING,
            self::DESTINY_VENDOR_ITEM_STATE_ONSALE,
            self::DESTINY_VENDOR_ITEM_STATE_OWNED,
            self::DESTINY_VENDOR_ITEM_STATE_WIDEVIEW,
            self::DESTINY_VENDOR_ITEM_STATE_NEXUSATTENTION,
        ];
    }
}


