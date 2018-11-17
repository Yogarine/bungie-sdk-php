<?php
/**
 * DestinyDestinyActivityNavPointType
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
 * DestinyDestinyActivityNavPointType Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyDestinyActivityNavPointType
{
    /**
     * Possible values of this enum
     */
    const INACTIVE = 0;
    const PRIMARYOBJECTIVE = 1;
    const SECONDARYOBJECTIVE = 2;
    const TRAVELOBJECTIVE = 3;
    const PUBLICEVENTOBJECTIVE = 4;
    const AMMOCACHE = 5;
    const POINTTYPEFLAG = 6;
    const CAPTUREPOINT = 7;
    const DEFENSIVEENCOUNTER = 8;
    const GHOSTINTERACTION = 9;
    const KILLAI = 10;
    const QUESTITEM = 11;
    const PATROLMISSION = 12;
    const INCOMING = 13;
    const ARENAOBJECTIVE = 14;
    const AUTOMATIONHINT = 15;
    const TRACKEDQUEST = 16;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INACTIVE,
            self::PRIMARYOBJECTIVE,
            self::SECONDARYOBJECTIVE,
            self::TRAVELOBJECTIVE,
            self::PUBLICEVENTOBJECTIVE,
            self::AMMOCACHE,
            self::POINTTYPEFLAG,
            self::CAPTUREPOINT,
            self::DEFENSIVEENCOUNTER,
            self::GHOSTINTERACTION,
            self::KILLAI,
            self::QUESTITEM,
            self::PATROLMISSION,
            self::INCOMING,
            self::ARENAOBJECTIVE,
            self::AUTOMATIONHINT,
            self::TRACKEDQUEST,
        ];
    }
}


