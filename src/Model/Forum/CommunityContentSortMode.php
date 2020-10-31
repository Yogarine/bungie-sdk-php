<?php
/**
 * CommunityContentSortMode
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
 * CommunityContentSortMode Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CommunityContentSortMode
{
    /**
     * Possible values of this enum
     */
    const COMMUNITY_CONTENT_SORT_MODE_TRENDING = 0;
    const COMMUNITY_CONTENT_SORT_MODE_LATEST = 1;
    const COMMUNITY_CONTENT_SORT_MODE_HIGHESTRATED = 2;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::COMMUNITY_CONTENT_SORT_MODE_TRENDING,
            self::COMMUNITY_CONTENT_SORT_MODE_LATEST,
            self::COMMUNITY_CONTENT_SORT_MODE_HIGHESTRATED,
        ];
    }
}


