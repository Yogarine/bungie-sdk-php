<?php
/**
 * ForumTopicsQuickDateEnum
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

namespace Bungie\Model\Forum;
use \Bungie\ObjectSerializer;

/**
 * ForumTopicsQuickDateEnum Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ForumTopicsQuickDateEnum
{
    /**
     * Possible values of this enum
     */
    const FORUM_TOPICS_QUICK_DATE_ENUM_ALL = 0;
    const FORUM_TOPICS_QUICK_DATE_ENUM_LASTYEAR = 1;
    const FORUM_TOPICS_QUICK_DATE_ENUM_LASTMONTH = 2;
    const FORUM_TOPICS_QUICK_DATE_ENUM_LASTWEEK = 3;
    const FORUM_TOPICS_QUICK_DATE_ENUM_LASTDAY = 4;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FORUM_TOPICS_QUICK_DATE_ENUM_ALL,
            self::FORUM_TOPICS_QUICK_DATE_ENUM_LASTYEAR,
            self::FORUM_TOPICS_QUICK_DATE_ENUM_LASTMONTH,
            self::FORUM_TOPICS_QUICK_DATE_ENUM_LASTWEEK,
            self::FORUM_TOPICS_QUICK_DATE_ENUM_LASTDAY,
        ];
    }
}


