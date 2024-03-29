<?php
/**
 * TierType
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

namespace Bungie\Model\Destiny;
use \Bungie\ObjectSerializer;

/**
 * TierType Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TierType
{
    /**
     * Possible values of this enum
     */
    const TIER_TYPE_UNKNOWN = 0;
    const TIER_TYPE_CURRENCY = 1;
    const TIER_TYPE_BASIC = 2;
    const TIER_TYPE_COMMON = 3;
    const TIER_TYPE_RARE = 4;
    const TIER_TYPE_SUPERIOR = 5;
    const TIER_TYPE_EXOTIC = 6;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::TIER_TYPE_UNKNOWN,
            self::TIER_TYPE_CURRENCY,
            self::TIER_TYPE_BASIC,
            self::TIER_TYPE_COMMON,
            self::TIER_TYPE_RARE,
            self::TIER_TYPE_SUPERIOR,
            self::TIER_TYPE_EXOTIC,
        ];
    }
}


