<?php
/**
 * DestinyActivityDifficultyTier
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
 * DestinyActivityDifficultyTier Class Doc Comment
 *
 * @category Class
 * @description An enumeration representing the potential difficulty levels of an activity. Their names are... more qualitative than quantitative.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyActivityDifficultyTier
{
    /**
     * Possible values of this enum
     */
    const DESTINY_ACTIVITY_DIFFICULTY_TIER_TRIVIAL = 0;
    const DESTINY_ACTIVITY_DIFFICULTY_TIER_EASY = 1;
    const DESTINY_ACTIVITY_DIFFICULTY_TIER_NORMAL = 2;
    const DESTINY_ACTIVITY_DIFFICULTY_TIER_CHALLENGING = 3;
    const DESTINY_ACTIVITY_DIFFICULTY_TIER_HARD = 4;
    const DESTINY_ACTIVITY_DIFFICULTY_TIER_BRAVE = 5;
    const DESTINY_ACTIVITY_DIFFICULTY_TIER_ALMOSTIMPOSSIBLE = 6;
    const DESTINY_ACTIVITY_DIFFICULTY_TIER_IMPOSSIBLE = 7;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DESTINY_ACTIVITY_DIFFICULTY_TIER_TRIVIAL,
            self::DESTINY_ACTIVITY_DIFFICULTY_TIER_EASY,
            self::DESTINY_ACTIVITY_DIFFICULTY_TIER_NORMAL,
            self::DESTINY_ACTIVITY_DIFFICULTY_TIER_CHALLENGING,
            self::DESTINY_ACTIVITY_DIFFICULTY_TIER_HARD,
            self::DESTINY_ACTIVITY_DIFFICULTY_TIER_BRAVE,
            self::DESTINY_ACTIVITY_DIFFICULTY_TIER_ALMOSTIMPOSSIBLE,
            self::DESTINY_ACTIVITY_DIFFICULTY_TIER_IMPOSSIBLE,
        ];
    }
}


