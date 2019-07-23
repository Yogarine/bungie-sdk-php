<?php
/**
 * DestinyActivityNavPointType
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
 * DestinyActivityNavPointType Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyActivityNavPointType
{
    /**
     * Possible values of this enum
     */
    const DESTINY_ACTIVITY_NAV_POINT_TYPE_INACTIVE = 0;
    const DESTINY_ACTIVITY_NAV_POINT_TYPE_PRIMARYOBJECTIVE = 1;
    const DESTINY_ACTIVITY_NAV_POINT_TYPE_SECONDARYOBJECTIVE = 2;
    const DESTINY_ACTIVITY_NAV_POINT_TYPE_TRAVELOBJECTIVE = 3;
    const DESTINY_ACTIVITY_NAV_POINT_TYPE_PUBLICEVENTOBJECTIVE = 4;
    const DESTINY_ACTIVITY_NAV_POINT_TYPE_AMMOCACHE = 5;
    const DESTINY_ACTIVITY_NAV_POINT_TYPE_POINTTYPEFLAG = 6;
    const DESTINY_ACTIVITY_NAV_POINT_TYPE_CAPTUREPOINT = 7;
    const DESTINY_ACTIVITY_NAV_POINT_TYPE_DEFENSIVEENCOUNTER = 8;
    const DESTINY_ACTIVITY_NAV_POINT_TYPE_GHOSTINTERACTION = 9;
    const DESTINY_ACTIVITY_NAV_POINT_TYPE_KILLAI = 10;
    const DESTINY_ACTIVITY_NAV_POINT_TYPE_QUESTITEM = 11;
    const DESTINY_ACTIVITY_NAV_POINT_TYPE_PATROLMISSION = 12;
    const DESTINY_ACTIVITY_NAV_POINT_TYPE_INCOMING = 13;
    const DESTINY_ACTIVITY_NAV_POINT_TYPE_ARENAOBJECTIVE = 14;
    const DESTINY_ACTIVITY_NAV_POINT_TYPE_AUTOMATIONHINT = 15;
    const DESTINY_ACTIVITY_NAV_POINT_TYPE_TRACKEDQUEST = 16;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DESTINY_ACTIVITY_NAV_POINT_TYPE_INACTIVE,
            self::DESTINY_ACTIVITY_NAV_POINT_TYPE_PRIMARYOBJECTIVE,
            self::DESTINY_ACTIVITY_NAV_POINT_TYPE_SECONDARYOBJECTIVE,
            self::DESTINY_ACTIVITY_NAV_POINT_TYPE_TRAVELOBJECTIVE,
            self::DESTINY_ACTIVITY_NAV_POINT_TYPE_PUBLICEVENTOBJECTIVE,
            self::DESTINY_ACTIVITY_NAV_POINT_TYPE_AMMOCACHE,
            self::DESTINY_ACTIVITY_NAV_POINT_TYPE_POINTTYPEFLAG,
            self::DESTINY_ACTIVITY_NAV_POINT_TYPE_CAPTUREPOINT,
            self::DESTINY_ACTIVITY_NAV_POINT_TYPE_DEFENSIVEENCOUNTER,
            self::DESTINY_ACTIVITY_NAV_POINT_TYPE_GHOSTINTERACTION,
            self::DESTINY_ACTIVITY_NAV_POINT_TYPE_KILLAI,
            self::DESTINY_ACTIVITY_NAV_POINT_TYPE_QUESTITEM,
            self::DESTINY_ACTIVITY_NAV_POINT_TYPE_PATROLMISSION,
            self::DESTINY_ACTIVITY_NAV_POINT_TYPE_INCOMING,
            self::DESTINY_ACTIVITY_NAV_POINT_TYPE_ARENAOBJECTIVE,
            self::DESTINY_ACTIVITY_NAV_POINT_TYPE_AUTOMATIONHINT,
            self::DESTINY_ACTIVITY_NAV_POINT_TYPE_TRACKEDQUEST,
        ];
    }
}


