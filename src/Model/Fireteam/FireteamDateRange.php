<?php
/**
 * FireteamDateRange
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

namespace Bungie\Model\Fireteam;
use \Bungie\ObjectSerializer;

/**
 * FireteamDateRange Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FireteamDateRange
{
    /**
     * Possible values of this enum
     */
    const FIRETEAM_DATE_RANGE_ALL = 0;
    const FIRETEAM_DATE_RANGE_NOW = 1;
    const FIRETEAM_DATE_RANGE_TWENTYFOURHOURS = 2;
    const FIRETEAM_DATE_RANGE_FORTYEIGHTHOURS = 3;
    const FIRETEAM_DATE_RANGE_THISWEEK = 4;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FIRETEAM_DATE_RANGE_ALL,
            self::FIRETEAM_DATE_RANGE_NOW,
            self::FIRETEAM_DATE_RANGE_TWENTYFOURHOURS,
            self::FIRETEAM_DATE_RANGE_FORTYEIGHTHOURS,
            self::FIRETEAM_DATE_RANGE_THISWEEK,
        ];
    }
}


