<?php
/**
 * UnitType
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
 * UnitType Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class UnitType
{
    /**
     * Possible values of this enum
     */
    const UNIT_TYPE_NONE = 0;
    const UNIT_TYPE_COUNT = 1;
    const UNIT_TYPE_PERGAME = 2;
    const UNIT_TYPE_SECONDS = 3;
    const UNIT_TYPE_POINTS = 4;
    const UNIT_TYPE_TEAM = 5;
    const UNIT_TYPE_DISTANCE = 6;
    const UNIT_TYPE_PERCENT = 7;
    const UNIT_TYPE_RATIO = 8;
    const UNIT_TYPE_BOOLEAN = 9;
    const UNIT_TYPE_WEAPONTYPE = 10;
    const UNIT_TYPE_STANDING = 11;
    const UNIT_TYPE_MILLISECONDS = 12;
    const UNIT_TYPE_COMPLETIONREASON = 13;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNIT_TYPE_NONE,
            self::UNIT_TYPE_COUNT,
            self::UNIT_TYPE_PERGAME,
            self::UNIT_TYPE_SECONDS,
            self::UNIT_TYPE_POINTS,
            self::UNIT_TYPE_TEAM,
            self::UNIT_TYPE_DISTANCE,
            self::UNIT_TYPE_PERCENT,
            self::UNIT_TYPE_RATIO,
            self::UNIT_TYPE_BOOLEAN,
            self::UNIT_TYPE_WEAPONTYPE,
            self::UNIT_TYPE_STANDING,
            self::UNIT_TYPE_MILLISECONDS,
            self::UNIT_TYPE_COMPLETIONREASON,
        ];
    }
}


