<?php
/**
 * ForumPostCategoryEnums
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

namespace Bungie\Model\Forums;
use \Bungie\ObjectSerializer;

/**
 * ForumPostCategoryEnums Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ForumPostCategoryEnums
{
    /**
     * Possible values of this enum
     */
    const FORUM_POST_CATEGORY_ENUMS_NONE = 0;
    const FORUM_POST_CATEGORY_ENUMS_TEXTONLY = 1;
    const FORUM_POST_CATEGORY_ENUMS_MEDIA = 2;
    const FORUM_POST_CATEGORY_ENUMS_LINK = 4;
    const FORUM_POST_CATEGORY_ENUMS_POLL = 8;
    const FORUM_POST_CATEGORY_ENUMS_QUESTION = 16;
    const FORUM_POST_CATEGORY_ENUMS_ANSWERED = 32;
    const FORUM_POST_CATEGORY_ENUMS_ANNOUNCEMENT = 64;
    const FORUM_POST_CATEGORY_ENUMS_CONTENTCOMMENT = 128;
    const FORUM_POST_CATEGORY_ENUMS_BUNGIEOFFICIAL = 256;
    const FORUM_POST_CATEGORY_ENUMS_NINJAOFFICIAL = 512;
    const FORUM_POST_CATEGORY_ENUMS_RECRUITMENT = 1024;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FORUM_POST_CATEGORY_ENUMS_NONE,
            self::FORUM_POST_CATEGORY_ENUMS_TEXTONLY,
            self::FORUM_POST_CATEGORY_ENUMS_MEDIA,
            self::FORUM_POST_CATEGORY_ENUMS_LINK,
            self::FORUM_POST_CATEGORY_ENUMS_POLL,
            self::FORUM_POST_CATEGORY_ENUMS_QUESTION,
            self::FORUM_POST_CATEGORY_ENUMS_ANSWERED,
            self::FORUM_POST_CATEGORY_ENUMS_ANNOUNCEMENT,
            self::FORUM_POST_CATEGORY_ENUMS_CONTENTCOMMENT,
            self::FORUM_POST_CATEGORY_ENUMS_BUNGIEOFFICIAL,
            self::FORUM_POST_CATEGORY_ENUMS_NINJAOFFICIAL,
            self::FORUM_POST_CATEGORY_ENUMS_RECRUITMENT,
        ];
    }
}

