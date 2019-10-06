<?php
/**
 * ForumTopicsSortEnum
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

namespace Bungie\Model\Forum;
use \Bungie\ObjectSerializer;

/**
 * ForumTopicsSortEnum Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ForumTopicsSortEnum
{
    /**
     * Possible values of this enum
     */
    const FORUM_TOPICS_SORT_ENUM_DEFAULT = 0;
    const FORUM_TOPICS_SORT_ENUM_LASTREPLIED = 1;
    const FORUM_TOPICS_SORT_ENUM_MOSTREPLIED = 2;
    const FORUM_TOPICS_SORT_ENUM_POPULARITY = 3;
    const FORUM_TOPICS_SORT_ENUM_CONTROVERSIALITY = 4;
    const FORUM_TOPICS_SORT_ENUM_LIKED = 5;
    const FORUM_TOPICS_SORT_ENUM_HIGHESTRATED = 6;
    const FORUM_TOPICS_SORT_ENUM_MOSTUPVOTED = 7;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FORUM_TOPICS_SORT_ENUM_DEFAULT,
            self::FORUM_TOPICS_SORT_ENUM_LASTREPLIED,
            self::FORUM_TOPICS_SORT_ENUM_MOSTREPLIED,
            self::FORUM_TOPICS_SORT_ENUM_POPULARITY,
            self::FORUM_TOPICS_SORT_ENUM_CONTROVERSIALITY,
            self::FORUM_TOPICS_SORT_ENUM_LIKED,
            self::FORUM_TOPICS_SORT_ENUM_HIGHESTRATED,
            self::FORUM_TOPICS_SORT_ENUM_MOSTUPVOTED,
        ];
    }
}


