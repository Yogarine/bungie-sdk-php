<?php
/**
 * DestinyStatsCategoryType
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

namespace Bungie\Model\Destiny\HistoricalStats\Definitions;
use \Bungie\ObjectSerializer;

/**
 * DestinyStatsCategoryType Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyStatsCategoryType
{
    /**
     * Possible values of this enum
     */
    const DESTINY_STATS_CATEGORY_TYPE_NONE = 0;
    const DESTINY_STATS_CATEGORY_TYPE_KILLS = 1;
    const DESTINY_STATS_CATEGORY_TYPE_ASSISTS = 2;
    const DESTINY_STATS_CATEGORY_TYPE_DEATHS = 3;
    const DESTINY_STATS_CATEGORY_TYPE_CRITICALS = 4;
    const DESTINY_STATS_CATEGORY_TYPE_KDA = 5;
    const DESTINY_STATS_CATEGORY_TYPE_KD = 6;
    const DESTINY_STATS_CATEGORY_TYPE_SCORE = 7;
    const DESTINY_STATS_CATEGORY_TYPE_ENTERED = 8;
    const DESTINY_STATS_CATEGORY_TYPE_TIMEPLAYED = 9;
    const DESTINY_STATS_CATEGORY_TYPE_MEDALWINS = 10;
    const DESTINY_STATS_CATEGORY_TYPE_MEDALGAME = 11;
    const DESTINY_STATS_CATEGORY_TYPE_MEDALSPECIALKILLS = 12;
    const DESTINY_STATS_CATEGORY_TYPE_MEDALSPREES = 13;
    const DESTINY_STATS_CATEGORY_TYPE_MEDALMULTIKILLS = 14;
    const DESTINY_STATS_CATEGORY_TYPE_MEDALABILITIES = 15;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DESTINY_STATS_CATEGORY_TYPE_NONE,
            self::DESTINY_STATS_CATEGORY_TYPE_KILLS,
            self::DESTINY_STATS_CATEGORY_TYPE_ASSISTS,
            self::DESTINY_STATS_CATEGORY_TYPE_DEATHS,
            self::DESTINY_STATS_CATEGORY_TYPE_CRITICALS,
            self::DESTINY_STATS_CATEGORY_TYPE_KDA,
            self::DESTINY_STATS_CATEGORY_TYPE_KD,
            self::DESTINY_STATS_CATEGORY_TYPE_SCORE,
            self::DESTINY_STATS_CATEGORY_TYPE_ENTERED,
            self::DESTINY_STATS_CATEGORY_TYPE_TIMEPLAYED,
            self::DESTINY_STATS_CATEGORY_TYPE_MEDALWINS,
            self::DESTINY_STATS_CATEGORY_TYPE_MEDALGAME,
            self::DESTINY_STATS_CATEGORY_TYPE_MEDALSPECIALKILLS,
            self::DESTINY_STATS_CATEGORY_TYPE_MEDALSPREES,
            self::DESTINY_STATS_CATEGORY_TYPE_MEDALMULTIKILLS,
            self::DESTINY_STATS_CATEGORY_TYPE_MEDALABILITIES,
        ];
    }
}


