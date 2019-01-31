<?php
/**
 * DestinyItemType
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
 * OpenAPI spec version: 2.3.4
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
 * DestinyItemType Class Doc Comment
 *
 * @category Class
 * @description An enumeration that indicates the high-level \&quot;type\&quot; of the item, attempting to iron out the context specific differences for specific instances of an entity. For instance, though a weapon may be of various weapon \&quot;Types\&quot;, in DestinyItemType they are all classified as \&quot;Weapon\&quot;. This allows for better filtering on a higher level of abstraction for the concept of types.   This enum is provided for historical compatibility with Destiny 1, but an ideal alternative is to use DestinyItemCategoryDefinitions and the DestinyItemDefinition.itemCategories property instead. Item Categories allow for arbitrary hierarchies of specificity, and for items to belong to multiple categories across multiple hierarchies simultaneously. For this enum, we pick a single type as a \&quot;best guess\&quot; fit.   NOTE: This is not all of the item types available, and some of these are holdovers from Destiny 1 that may or may not still exist.   I keep updating these because they&#39;re so damn convenient. I guess I shouldn&#39;t fight it.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyItemType
{
    /**
     * Possible values of this enum
     */
    const DESTINY_ITEM_TYPE_NONE = 0;
    const DESTINY_ITEM_TYPE_CURRENCY = 1;
    const DESTINY_ITEM_TYPE_ARMOR = 2;
    const DESTINY_ITEM_TYPE_WEAPON = 3;
    const DESTINY_ITEM_TYPE_MESSAGE = 7;
    const DESTINY_ITEM_TYPE_ENGRAM = 8;
    const DESTINY_ITEM_TYPE_CONSUMABLE = 9;
    const DESTINY_ITEM_TYPE_EXCHANGEMATERIAL = 10;
    const DESTINY_ITEM_TYPE_MISSIONREWARD = 11;
    const DESTINY_ITEM_TYPE_QUESTSTEP = 12;
    const DESTINY_ITEM_TYPE_QUESTSTEPCOMPLETE = 13;
    const DESTINY_ITEM_TYPE_EMBLEM = 14;
    const DESTINY_ITEM_TYPE_QUEST = 15;
    const DESTINY_ITEM_TYPE_SUBCLASS = 16;
    const DESTINY_ITEM_TYPE_CLANBANNER = 17;
    const DESTINY_ITEM_TYPE_AURA = 18;
    const DESTINY_ITEM_TYPE_MOD = 19;
    const DESTINY_ITEM_TYPE_DUMMY = 20;
    const DESTINY_ITEM_TYPE_SHIP = 21;
    const DESTINY_ITEM_TYPE_VEHICLE = 22;
    const DESTINY_ITEM_TYPE_EMOTE = 23;
    const DESTINY_ITEM_TYPE_GHOST = 24;
    const DESTINY_ITEM_TYPE_PACKAGE = 25;
    const DESTINY_ITEM_TYPE_BOUNTY = 26;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DESTINY_ITEM_TYPE_NONE,
            self::DESTINY_ITEM_TYPE_CURRENCY,
            self::DESTINY_ITEM_TYPE_ARMOR,
            self::DESTINY_ITEM_TYPE_WEAPON,
            self::DESTINY_ITEM_TYPE_MESSAGE,
            self::DESTINY_ITEM_TYPE_ENGRAM,
            self::DESTINY_ITEM_TYPE_CONSUMABLE,
            self::DESTINY_ITEM_TYPE_EXCHANGEMATERIAL,
            self::DESTINY_ITEM_TYPE_MISSIONREWARD,
            self::DESTINY_ITEM_TYPE_QUESTSTEP,
            self::DESTINY_ITEM_TYPE_QUESTSTEPCOMPLETE,
            self::DESTINY_ITEM_TYPE_EMBLEM,
            self::DESTINY_ITEM_TYPE_QUEST,
            self::DESTINY_ITEM_TYPE_SUBCLASS,
            self::DESTINY_ITEM_TYPE_CLANBANNER,
            self::DESTINY_ITEM_TYPE_AURA,
            self::DESTINY_ITEM_TYPE_MOD,
            self::DESTINY_ITEM_TYPE_DUMMY,
            self::DESTINY_ITEM_TYPE_SHIP,
            self::DESTINY_ITEM_TYPE_VEHICLE,
            self::DESTINY_ITEM_TYPE_EMOTE,
            self::DESTINY_ITEM_TYPE_GHOST,
            self::DESTINY_ITEM_TYPE_PACKAGE,
            self::DESTINY_ITEM_TYPE_BOUNTY,
        ];
    }
}


