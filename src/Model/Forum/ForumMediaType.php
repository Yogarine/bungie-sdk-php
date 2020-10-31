<?php
/**
 * ForumMediaType
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
 * OpenAPI spec version: 2.8.2
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
 * ForumMediaType Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ForumMediaType
{
    /**
     * Possible values of this enum
     */
    const FORUM_MEDIA_TYPE_NONE = 0;
    const FORUM_MEDIA_TYPE_IMAGE = 1;
    const FORUM_MEDIA_TYPE_VIDEO = 2;
    const FORUM_MEDIA_TYPE_YOUTUBE = 3;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FORUM_MEDIA_TYPE_NONE,
            self::FORUM_MEDIA_TYPE_IMAGE,
            self::FORUM_MEDIA_TYPE_VIDEO,
            self::FORUM_MEDIA_TYPE_YOUTUBE,
        ];
    }
}


