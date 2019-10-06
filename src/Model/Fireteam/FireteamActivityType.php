<?php
/**
 * FireteamActivityType
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

namespace Bungie\Model\Fireteam;
use \Bungie\ObjectSerializer;

/**
 * FireteamActivityType Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FireteamActivityType
{
    /**
     * Possible values of this enum
     */
    const FIRETEAM_ACTIVITY_TYPE_ALL = 0;
    const FIRETEAM_ACTIVITY_TYPE_RAID = 1;
    const FIRETEAM_ACTIVITY_TYPE_CRUCIBLE = 2;
    const FIRETEAM_ACTIVITY_TYPE_TRIALS = 3;
    const FIRETEAM_ACTIVITY_TYPE_NIGHTFALL = 4;
    const FIRETEAM_ACTIVITY_TYPE_ANYTHING = 5;
    const FIRETEAM_ACTIVITY_TYPE_GAMBIT = 6;
    const FIRETEAM_ACTIVITY_TYPE_BLINDWELL = 7;
    const FIRETEAM_ACTIVITY_TYPE_ESCALATIONPROTOCOL = 8;
    const FIRETEAM_ACTIVITY_TYPE_FORGE = 9;
    const FIRETEAM_ACTIVITY_TYPE_RECKONING = 10;
    const FIRETEAM_ACTIVITY_TYPE_MENAGERIE = 11;
    const FIRETEAM_ACTIVITY_TYPE_NIGHTMAREHUNTS = 12;
    const FIRETEAM_ACTIVITY_TYPE_VEXOFFENSIVE = 13;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FIRETEAM_ACTIVITY_TYPE_ALL,
            self::FIRETEAM_ACTIVITY_TYPE_RAID,
            self::FIRETEAM_ACTIVITY_TYPE_CRUCIBLE,
            self::FIRETEAM_ACTIVITY_TYPE_TRIALS,
            self::FIRETEAM_ACTIVITY_TYPE_NIGHTFALL,
            self::FIRETEAM_ACTIVITY_TYPE_ANYTHING,
            self::FIRETEAM_ACTIVITY_TYPE_GAMBIT,
            self::FIRETEAM_ACTIVITY_TYPE_BLINDWELL,
            self::FIRETEAM_ACTIVITY_TYPE_ESCALATIONPROTOCOL,
            self::FIRETEAM_ACTIVITY_TYPE_FORGE,
            self::FIRETEAM_ACTIVITY_TYPE_RECKONING,
            self::FIRETEAM_ACTIVITY_TYPE_MENAGERIE,
            self::FIRETEAM_ACTIVITY_TYPE_NIGHTMAREHUNTS,
            self::FIRETEAM_ACTIVITY_TYPE_VEXOFFENSIVE,
        ];
    }
}


