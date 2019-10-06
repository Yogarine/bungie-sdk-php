<?php
/**
 * FireteamPlatformInviteResult
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

namespace Bungie\Model\Fireteam;
use \Bungie\ObjectSerializer;

/**
 * FireteamPlatformInviteResult Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FireteamPlatformInviteResult
{
    /**
     * Possible values of this enum
     */
    const FIRETEAM_PLATFORM_INVITE_RESULT_NONE = 0;
    const FIRETEAM_PLATFORM_INVITE_RESULT_SUCCESS = 1;
    const FIRETEAM_PLATFORM_INVITE_RESULT_ALREADYINFIRETEAM = 2;
    const FIRETEAM_PLATFORM_INVITE_RESULT_THROTTLED = 3;
    const FIRETEAM_PLATFORM_INVITE_RESULT_SERVICEERROR = 4;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FIRETEAM_PLATFORM_INVITE_RESULT_NONE,
            self::FIRETEAM_PLATFORM_INVITE_RESULT_SUCCESS,
            self::FIRETEAM_PLATFORM_INVITE_RESULT_ALREADYINFIRETEAM,
            self::FIRETEAM_PLATFORM_INVITE_RESULT_THROTTLED,
            self::FIRETEAM_PLATFORM_INVITE_RESULT_SERVICEERROR,
        ];
    }
}


