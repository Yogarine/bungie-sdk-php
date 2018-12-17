<?php
/**
 * Capabilities
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

namespace Bungie\Model\GroupsV2;
use \Bungie\ObjectSerializer;

/**
 * Capabilities Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Capabilities
{
    /**
     * Possible values of this enum
     */
    const CAPABILITIES_NONE = 0;
    const CAPABILITIES_LEADERBOARDS = 1;
    const CAPABILITIES_CALLSIGN = 2;
    const CAPABILITIES_OPTIONALCONVERSATIONS = 4;
    const CAPABILITIES_CLANBANNER = 8;
    const CAPABILITIES_D2INVESTMENTDATA = 16;
    const CAPABILITIES_TAGS = 32;
    const CAPABILITIES_ALLIANCES = 64;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CAPABILITIES_NONE,
            self::CAPABILITIES_LEADERBOARDS,
            self::CAPABILITIES_CALLSIGN,
            self::CAPABILITIES_OPTIONALCONVERSATIONS,
            self::CAPABILITIES_CLANBANNER,
            self::CAPABILITIES_D2INVESTMENTDATA,
            self::CAPABILITIES_TAGS,
            self::CAPABILITIES_ALLIANCES,
        ];
    }
}


