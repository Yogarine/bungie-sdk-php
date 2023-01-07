<?php
/**
 * PresenceOnlineStateFlags
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

namespace Bungie\Model\Social\Friends;
use \Bungie\ObjectSerializer;

/**
 * PresenceOnlineStateFlags Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PresenceOnlineStateFlags
{
    /**
     * Possible values of this enum
     */
    const PRESENCE_ONLINE_STATE_FLAGS_NONE = 0;
    const PRESENCE_ONLINE_STATE_FLAGS_DESTINY1 = 1;
    const PRESENCE_ONLINE_STATE_FLAGS_DESTINY2 = 2;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PRESENCE_ONLINE_STATE_FLAGS_NONE,
            self::PRESENCE_ONLINE_STATE_FLAGS_DESTINY1,
            self::PRESENCE_ONLINE_STATE_FLAGS_DESTINY2,
        ];
    }
}


