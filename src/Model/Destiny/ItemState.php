<?php
/**
 * ItemState
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
 * OpenAPI spec version: 2.8.2
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
 * ItemState Class Doc Comment
 *
 * @category Class
 * @description A flags enumeration/bitmask where each bit represents a different possible state that the item can be in that may effect how the item is displayed to the user and what actions can be performed against it.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ItemState
{
    /**
     * Possible values of this enum
     */
    const ITEM_STATE_NONE = 0;
    const ITEM_STATE_LOCKED = 1;
    const ITEM_STATE_TRACKED = 2;
    const ITEM_STATE_MASTERWORK = 4;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ITEM_STATE_NONE,
            self::ITEM_STATE_LOCKED,
            self::ITEM_STATE_TRACKED,
            self::ITEM_STATE_MASTERWORK,
        ];
    }
}


