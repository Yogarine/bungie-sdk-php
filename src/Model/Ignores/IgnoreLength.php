<?php
/**
 * IgnoreLength
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

namespace Bungie\Model\Ignores;
use \Bungie\ObjectSerializer;

/**
 * IgnoreLength Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class IgnoreLength
{
    /**
     * Possible values of this enum
     */
    const IGNORE_LENGTH_NONE = 0;
    const IGNORE_LENGTH_WEEK = 1;
    const IGNORE_LENGTH_TWOWEEKS = 2;
    const IGNORE_LENGTH_THREEWEEKS = 3;
    const IGNORE_LENGTH_MONTH = 4;
    const IGNORE_LENGTH_THREEMONTHS = 5;
    const IGNORE_LENGTH_SIXMONTHS = 6;
    const IGNORE_LENGTH_YEAR = 7;
    const IGNORE_LENGTH_FOREVER = 8;
    const IGNORE_LENGTH_THREEMINUTES = 9;
    const IGNORE_LENGTH_HOUR = 10;
    const IGNORE_LENGTH_THIRTYDAYS = 11;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::IGNORE_LENGTH_NONE,
            self::IGNORE_LENGTH_WEEK,
            self::IGNORE_LENGTH_TWOWEEKS,
            self::IGNORE_LENGTH_THREEWEEKS,
            self::IGNORE_LENGTH_MONTH,
            self::IGNORE_LENGTH_THREEMONTHS,
            self::IGNORE_LENGTH_SIXMONTHS,
            self::IGNORE_LENGTH_YEAR,
            self::IGNORE_LENGTH_FOREVER,
            self::IGNORE_LENGTH_THREEMINUTES,
            self::IGNORE_LENGTH_HOUR,
            self::IGNORE_LENGTH_THIRTYDAYS,
        ];
    }
}


