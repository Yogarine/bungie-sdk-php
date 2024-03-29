<?php
/**
 * DestinyStatsGroupType
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
 * OpenAPI spec version: 2.17.0
 * Contact: support@bungie.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bungie\Model\Destiny\HistoricalStats\Definitions;
use \Bungie\ObjectSerializer;

/**
 * DestinyStatsGroupType Class Doc Comment
 *
 * @category Class
 * @description If the enum value is &gt; 100, it is a \&quot;special\&quot; group that cannot be queried for directly (special cases apply to when they are returned, and are not relevant in general cases)
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyStatsGroupType
{
    /**
     * Possible values of this enum
     */
    const DESTINY_STATS_GROUP_TYPE_NONE = 0;
    const DESTINY_STATS_GROUP_TYPE_GENERAL = 1;
    const DESTINY_STATS_GROUP_TYPE_WEAPONS = 2;
    const DESTINY_STATS_GROUP_TYPE_MEDALS = 3;
    const DESTINY_STATS_GROUP_TYPE_RESERVEDGROUPS = 100;
    const DESTINY_STATS_GROUP_TYPE_LEADERBOARD = 101;
    const DESTINY_STATS_GROUP_TYPE_ACTIVITY = 102;
    const DESTINY_STATS_GROUP_TYPE_UNIQUEWEAPON = 103;
    const DESTINY_STATS_GROUP_TYPE_INTERNAL = 104;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DESTINY_STATS_GROUP_TYPE_NONE,
            self::DESTINY_STATS_GROUP_TYPE_GENERAL,
            self::DESTINY_STATS_GROUP_TYPE_WEAPONS,
            self::DESTINY_STATS_GROUP_TYPE_MEDALS,
            self::DESTINY_STATS_GROUP_TYPE_RESERVEDGROUPS,
            self::DESTINY_STATS_GROUP_TYPE_LEADERBOARD,
            self::DESTINY_STATS_GROUP_TYPE_ACTIVITY,
            self::DESTINY_STATS_GROUP_TYPE_UNIQUEWEAPON,
            self::DESTINY_STATS_GROUP_TYPE_INTERNAL,
        ];
    }
}


