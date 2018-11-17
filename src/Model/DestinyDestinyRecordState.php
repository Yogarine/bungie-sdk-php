<?php
/**
 * DestinyDestinyRecordState
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
 * DestinyDestinyRecordState Class Doc Comment
 *
 * @category Class
 * @description A Flags enumeration where each bit represents a possible state that a Record/Triumph can be in.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyDestinyRecordState
{
    /**
     * Possible values of this enum
     */
    const NONE = 0;
    const RECORDREDEEMED = 1;
    const REWARDUNAVAILABLE = 2;
    const OBJECTIVENOTCOMPLETED = 4;
    const OBSCURED = 8;
    const INVISIBLE = 16;
    const ENTITLEMENTUNOWNED = 32;
    const CANEQUIPTITLE = 64;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::RECORDREDEEMED,
            self::REWARDUNAVAILABLE,
            self::OBJECTIVENOTCOMPLETED,
            self::OBSCURED,
            self::INVISIBLE,
            self::ENTITLEMENTUNOWNED,
            self::CANEQUIPTITLE,
        ];
    }
}


