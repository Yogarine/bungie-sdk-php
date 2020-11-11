<?php
/**
 * DamageType
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
 * OpenAPI spec version: 2.9.0
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
 * DamageType Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DamageType
{
    /**
     * Possible values of this enum
     */
    const DAMAGE_TYPE_NONE = 0;
    const DAMAGE_TYPE_KINETIC = 1;
    const DAMAGE_TYPE_ARC = 2;
    const DAMAGE_TYPE_THERMAL = 3;
    const DAMAGE_TYPE_VOID = 4;
    const DAMAGE_TYPE_RAID = 5;
    const DAMAGE_TYPE_STASIS = 6;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DAMAGE_TYPE_NONE,
            self::DAMAGE_TYPE_KINETIC,
            self::DAMAGE_TYPE_ARC,
            self::DAMAGE_TYPE_THERMAL,
            self::DAMAGE_TYPE_VOID,
            self::DAMAGE_TYPE_RAID,
            self::DAMAGE_TYPE_STASIS,
        ];
    }
}


