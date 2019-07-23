<?php
/**
 * DestinyAmmunitionType
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
 * OpenAPI spec version: 2.3.6
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
 * DestinyAmmunitionType Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyAmmunitionType
{
    /**
     * Possible values of this enum
     */
    const DESTINY_AMMUNITION_TYPE_NONE = 0;
    const DESTINY_AMMUNITION_TYPE_PRIMARY = 1;
    const DESTINY_AMMUNITION_TYPE_SPECIAL = 2;
    const DESTINY_AMMUNITION_TYPE_HEAVY = 3;
    const DESTINY_AMMUNITION_TYPE_UNKNOWN = 4;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DESTINY_AMMUNITION_TYPE_NONE,
            self::DESTINY_AMMUNITION_TYPE_PRIMARY,
            self::DESTINY_AMMUNITION_TYPE_SPECIAL,
            self::DESTINY_AMMUNITION_TYPE_HEAVY,
            self::DESTINY_AMMUNITION_TYPE_UNKNOWN,
        ];
    }
}


