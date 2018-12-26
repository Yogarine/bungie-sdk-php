<?php
/**
 * ForumFlagsEnum
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
 * ForumFlagsEnum Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ForumFlagsEnum
{
    /**
     * Possible values of this enum
     */
    const FORUM_FLAGS_ENUM_NONE = 0;
    const FORUM_FLAGS_ENUM_BUNGIESTAFFPOST = 1;
    const FORUM_FLAGS_ENUM_FORUMNINJAPOST = 2;
    const FORUM_FLAGS_ENUM_FORUMMENTORPOST = 4;
    const FORUM_FLAGS_ENUM_TOPICBUNGIESTAFFPOSTED = 8;
    const FORUM_FLAGS_ENUM_TOPICBUNGIEVOLUNTEERPOSTED = 16;
    const FORUM_FLAGS_ENUM_QUESTIONANSWEREDBYBUNGIE = 32;
    const FORUM_FLAGS_ENUM_QUESTIONANSWEREDBYNINJA = 64;
    const FORUM_FLAGS_ENUM_COMMUNITYCONTENT = 128;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FORUM_FLAGS_ENUM_NONE,
            self::FORUM_FLAGS_ENUM_BUNGIESTAFFPOST,
            self::FORUM_FLAGS_ENUM_FORUMNINJAPOST,
            self::FORUM_FLAGS_ENUM_FORUMMENTORPOST,
            self::FORUM_FLAGS_ENUM_TOPICBUNGIESTAFFPOSTED,
            self::FORUM_FLAGS_ENUM_TOPICBUNGIEVOLUNTEERPOSTED,
            self::FORUM_FLAGS_ENUM_QUESTIONANSWEREDBYBUNGIE,
            self::FORUM_FLAGS_ENUM_QUESTIONANSWEREDBYNINJA,
            self::FORUM_FLAGS_ENUM_COMMUNITYCONTENT,
        ];
    }
}

