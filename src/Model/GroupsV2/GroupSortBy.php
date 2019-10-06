<?php
/**
 * GroupSortBy
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

namespace Bungie\Model\GroupsV2;
use \Bungie\ObjectSerializer;

/**
 * GroupSortBy Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GroupSortBy
{
    /**
     * Possible values of this enum
     */
    const GROUP_SORT_BY_NAME = 0;
    const GROUP_SORT_BY_DATE = 1;
    const GROUP_SORT_BY_POPULARITY = 2;
    const GROUP_SORT_BY_ID = 3;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::GROUP_SORT_BY_NAME,
            self::GROUP_SORT_BY_DATE,
            self::GROUP_SORT_BY_POPULARITY,
            self::GROUP_SORT_BY_ID,
        ];
    }
}


