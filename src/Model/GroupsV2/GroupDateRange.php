<?php
/**
 * GroupDateRange
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
 * OpenAPI spec version: 2.3.3
 * Contact: support@bungie.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bungie\Model\GroupsV2;
use \Bungie\ObjectSerializer;

/**
 * GroupDateRange Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GroupDateRange
{
    /**
     * Possible values of this enum
     */
    const GROUP_DATE_RANGE_ALL = 0;
    const GROUP_DATE_RANGE_PASTDAY = 1;
    const GROUP_DATE_RANGE_PASTWEEK = 2;
    const GROUP_DATE_RANGE_PASTMONTH = 3;
    const GROUP_DATE_RANGE_PASTYEAR = 4;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::GROUP_DATE_RANGE_ALL,
            self::GROUP_DATE_RANGE_PASTDAY,
            self::GROUP_DATE_RANGE_PASTWEEK,
            self::GROUP_DATE_RANGE_PASTMONTH,
            self::GROUP_DATE_RANGE_PASTYEAR,
        ];
    }
}


