<?php
/**
 * DestinyGameVersions
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
 * OpenAPI spec version: 2.3.5
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
 * DestinyGameVersions Class Doc Comment
 *
 * @category Class
 * @description A flags enumeration/bitmask indicating the versions of the game that a given user has purchased.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyGameVersions
{
    /**
     * Possible values of this enum
     */
    const DESTINY_GAME_VERSIONS_NONE = 0;
    const DESTINY_GAME_VERSIONS_DESTINY2 = 1;
    const DESTINY_GAME_VERSIONS_DLC1 = 2;
    const DESTINY_GAME_VERSIONS_DLC2 = 4;
    const DESTINY_GAME_VERSIONS_FORSAKEN = 8;
    const DESTINY_GAME_VERSIONS_YEARTWOANNUALPASS = 16;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DESTINY_GAME_VERSIONS_NONE,
            self::DESTINY_GAME_VERSIONS_DESTINY2,
            self::DESTINY_GAME_VERSIONS_DLC1,
            self::DESTINY_GAME_VERSIONS_DLC2,
            self::DESTINY_GAME_VERSIONS_FORSAKEN,
            self::DESTINY_GAME_VERSIONS_YEARTWOANNUALPASS,
        ];
    }
}


