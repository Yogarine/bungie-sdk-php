<?php
/**
 * SpecialItemType
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
 * OpenAPI spec version: 2.16.0
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
 * SpecialItemType Class Doc Comment
 *
 * @category Class
 * @description As you run into items that need to be classified for Milestone purposes in ways that we cannot infer via direct data, add a new classification here and use a string constant to represent it in the local item config file.  NOTE: This is not all of the item types available, and some of these are holdovers from Destiny 1 that may or may not still exist.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SpecialItemType
{
    /**
     * Possible values of this enum
     */
    const SPECIAL_ITEM_TYPE_NONE = 0;
    const SPECIAL_ITEM_TYPE_SPECIALCURRENCY = 1;
    const SPECIAL_ITEM_TYPE_ARMOR = 8;
    const SPECIAL_ITEM_TYPE_WEAPON = 9;
    const SPECIAL_ITEM_TYPE_ENGRAM = 23;
    const SPECIAL_ITEM_TYPE_CONSUMABLE = 24;
    const SPECIAL_ITEM_TYPE_EXCHANGEMATERIAL = 25;
    const SPECIAL_ITEM_TYPE_MISSIONREWARD = 27;
    const SPECIAL_ITEM_TYPE_CURRENCY = 29;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SPECIAL_ITEM_TYPE_NONE,
            self::SPECIAL_ITEM_TYPE_SPECIALCURRENCY,
            self::SPECIAL_ITEM_TYPE_ARMOR,
            self::SPECIAL_ITEM_TYPE_WEAPON,
            self::SPECIAL_ITEM_TYPE_ENGRAM,
            self::SPECIAL_ITEM_TYPE_CONSUMABLE,
            self::SPECIAL_ITEM_TYPE_EXCHANGEMATERIAL,
            self::SPECIAL_ITEM_TYPE_MISSIONREWARD,
            self::SPECIAL_ITEM_TYPE_CURRENCY,
        ];
    }
}


