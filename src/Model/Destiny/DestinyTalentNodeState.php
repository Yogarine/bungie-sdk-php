<?php
/**
 * DestinyTalentNodeState
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
 * DestinyTalentNodeState Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyTalentNodeState
{
    /**
     * Possible values of this enum
     */
    const DESTINY_TALENT_NODE_STATE_INVALID = 0;
    const DESTINY_TALENT_NODE_STATE_CANUPGRADE = 1;
    const DESTINY_TALENT_NODE_STATE_NOPOINTS = 2;
    const DESTINY_TALENT_NODE_STATE_NOPREREQUISITES = 3;
    const DESTINY_TALENT_NODE_STATE_NOSTEPS = 4;
    const DESTINY_TALENT_NODE_STATE_NOUNLOCK = 5;
    const DESTINY_TALENT_NODE_STATE_NOMATERIAL = 6;
    const DESTINY_TALENT_NODE_STATE_NOGRIDLEVEL = 7;
    const DESTINY_TALENT_NODE_STATE_SWAPPINGLOCKED = 8;
    const DESTINY_TALENT_NODE_STATE_MUSTSWAP = 9;
    const DESTINY_TALENT_NODE_STATE_COMPLETE = 10;
    const DESTINY_TALENT_NODE_STATE_UNKNOWN = 11;
    const DESTINY_TALENT_NODE_STATE_CREATIONONLY = 12;
    const DESTINY_TALENT_NODE_STATE_HIDDEN = 13;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DESTINY_TALENT_NODE_STATE_INVALID,
            self::DESTINY_TALENT_NODE_STATE_CANUPGRADE,
            self::DESTINY_TALENT_NODE_STATE_NOPOINTS,
            self::DESTINY_TALENT_NODE_STATE_NOPREREQUISITES,
            self::DESTINY_TALENT_NODE_STATE_NOSTEPS,
            self::DESTINY_TALENT_NODE_STATE_NOUNLOCK,
            self::DESTINY_TALENT_NODE_STATE_NOMATERIAL,
            self::DESTINY_TALENT_NODE_STATE_NOGRIDLEVEL,
            self::DESTINY_TALENT_NODE_STATE_SWAPPINGLOCKED,
            self::DESTINY_TALENT_NODE_STATE_MUSTSWAP,
            self::DESTINY_TALENT_NODE_STATE_COMPLETE,
            self::DESTINY_TALENT_NODE_STATE_UNKNOWN,
            self::DESTINY_TALENT_NODE_STATE_CREATIONONLY,
            self::DESTINY_TALENT_NODE_STATE_HIDDEN,
        ];
    }
}


