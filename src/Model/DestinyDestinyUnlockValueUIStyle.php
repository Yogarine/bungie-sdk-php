<?php
/**
 * DestinyDestinyUnlockValueUIStyle
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
 * OpenAPI spec version: 2.3.2
 * Contact: support@bungie.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bungie\Model;
use \Bungie\ObjectSerializer;

/**
 * DestinyDestinyUnlockValueUIStyle Class Doc Comment
 *
 * @category Class
 * @description If you&#39;re showing an unlock value in the UI, this is the format in which it should be shown. You&#39;ll have to build your own algorithms on the client side to determine how best to render these options.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyDestinyUnlockValueUIStyle
{
    /**
     * Possible values of this enum
     */
    const AUTOMATIC = 0;
    const FRACTION = 1;
    const CHECKBOX = 2;
    const PERCENTAGE = 3;
    const DATETIME = 4;
    const FRACTIONFLOAT = 5;
    const INTEGER = 6;
    const TIMEDURATION = 7;
    const HIDDEN = 8;
    const MULTIPLIER = 9;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AUTOMATIC,
            self::FRACTION,
            self::CHECKBOX,
            self::PERCENTAGE,
            self::DATETIME,
            self::FRACTIONFLOAT,
            self::INTEGER,
            self::TIMEDURATION,
            self::HIDDEN,
            self::MULTIPLIER,
        ];
    }
}

