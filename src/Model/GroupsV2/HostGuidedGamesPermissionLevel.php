<?php
/**
 * HostGuidedGamesPermissionLevel
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
 * HostGuidedGamesPermissionLevel Class Doc Comment
 *
 * @category Class
 * @description Used for setting the guided game permission level override (admins and founders can always host guided games).
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class HostGuidedGamesPermissionLevel
{
    /**
     * Possible values of this enum
     */
    const HOST_GUIDED_GAMES_PERMISSION_LEVEL_NONE = 0;
    const HOST_GUIDED_GAMES_PERMISSION_LEVEL_BEGINNER = 1;
    const HOST_GUIDED_GAMES_PERMISSION_LEVEL_MEMBER = 2;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::HOST_GUIDED_GAMES_PERMISSION_LEVEL_NONE,
            self::HOST_GUIDED_GAMES_PERMISSION_LEVEL_BEGINNER,
            self::HOST_GUIDED_GAMES_PERMISSION_LEVEL_MEMBER,
        ];
    }
}


