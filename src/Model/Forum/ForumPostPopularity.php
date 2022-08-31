<?php
/**
 * ForumPostPopularity
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
 * OpenAPI spec version: 2.16.0
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
 * ForumPostPopularity Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ForumPostPopularity
{
    /**
     * Possible values of this enum
     */
    const FORUM_POST_POPULARITY_EMPTY = 0;
    const FORUM_POST_POPULARITY_DEFAULT = 1;
    const FORUM_POST_POPULARITY_DISCUSSED = 2;
    const FORUM_POST_POPULARITY_COOLSTORY = 3;
    const FORUM_POST_POPULARITY_HEATINGUP = 4;
    const FORUM_POST_POPULARITY_HOT = 5;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FORUM_POST_POPULARITY_EMPTY,
            self::FORUM_POST_POPULARITY_DEFAULT,
            self::FORUM_POST_POPULARITY_DISCUSSED,
            self::FORUM_POST_POPULARITY_COOLSTORY,
            self::FORUM_POST_POPULARITY_HEATINGUP,
            self::FORUM_POST_POPULARITY_HOT,
        ];
    }
}


