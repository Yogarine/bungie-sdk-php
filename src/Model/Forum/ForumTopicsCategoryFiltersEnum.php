<?php
/**
 * ForumTopicsCategoryFiltersEnum
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

namespace Bungie\Model\Forum;
use \Bungie\ObjectSerializer;

/**
 * ForumTopicsCategoryFiltersEnum Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ForumTopicsCategoryFiltersEnum
{
    /**
     * Possible values of this enum
     */
    const FORUM_TOPICS_CATEGORY_FILTERS_ENUM_NONE = 0;
    const FORUM_TOPICS_CATEGORY_FILTERS_ENUM_LINKS = 1;
    const FORUM_TOPICS_CATEGORY_FILTERS_ENUM_QUESTIONS = 2;
    const FORUM_TOPICS_CATEGORY_FILTERS_ENUM_ANSWEREDQUESTIONS = 4;
    const FORUM_TOPICS_CATEGORY_FILTERS_ENUM_MEDIA = 8;
    const FORUM_TOPICS_CATEGORY_FILTERS_ENUM_TEXTONLY = 16;
    const FORUM_TOPICS_CATEGORY_FILTERS_ENUM_ANNOUNCEMENT = 32;
    const FORUM_TOPICS_CATEGORY_FILTERS_ENUM_BUNGIEOFFICIAL = 64;
    const FORUM_TOPICS_CATEGORY_FILTERS_ENUM_POLLS = 128;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FORUM_TOPICS_CATEGORY_FILTERS_ENUM_NONE,
            self::FORUM_TOPICS_CATEGORY_FILTERS_ENUM_LINKS,
            self::FORUM_TOPICS_CATEGORY_FILTERS_ENUM_QUESTIONS,
            self::FORUM_TOPICS_CATEGORY_FILTERS_ENUM_ANSWEREDQUESTIONS,
            self::FORUM_TOPICS_CATEGORY_FILTERS_ENUM_MEDIA,
            self::FORUM_TOPICS_CATEGORY_FILTERS_ENUM_TEXTONLY,
            self::FORUM_TOPICS_CATEGORY_FILTERS_ENUM_ANNOUNCEMENT,
            self::FORUM_TOPICS_CATEGORY_FILTERS_ENUM_BUNGIEOFFICIAL,
            self::FORUM_TOPICS_CATEGORY_FILTERS_ENUM_POLLS,
        ];
    }
}


