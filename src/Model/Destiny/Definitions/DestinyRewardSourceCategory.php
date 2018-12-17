<?php
/**
 * DestinyRewardSourceCategory
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

namespace Bungie\Model\Destiny\Definitions;
use \Bungie\ObjectSerializer;

/**
 * DestinyRewardSourceCategory Class Doc Comment
 *
 * @category Class
 * @description BNet&#39;s custom categorization of reward sources. We took a look at the existing ways that items could be spawned, and tried to make high-level categorizations of them. This needs to be re-evaluated for Destiny 2.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyRewardSourceCategory
{
    /**
     * Possible values of this enum
     */
    const DESTINY_REWARD_SOURCE_CATEGORY_NONE = 0;
    const DESTINY_REWARD_SOURCE_CATEGORY_ACTIVITY = 1;
    const DESTINY_REWARD_SOURCE_CATEGORY_VENDOR = 2;
    const DESTINY_REWARD_SOURCE_CATEGORY_AGGREGATE = 3;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DESTINY_REWARD_SOURCE_CATEGORY_NONE,
            self::DESTINY_REWARD_SOURCE_CATEGORY_ACTIVITY,
            self::DESTINY_REWARD_SOURCE_CATEGORY_VENDOR,
            self::DESTINY_REWARD_SOURCE_CATEGORY_AGGREGATE,
        ];
    }
}


