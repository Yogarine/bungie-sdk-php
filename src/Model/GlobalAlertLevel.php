<?php
/**
 * GlobalAlertLevel
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

namespace Bungie\Model;
use \Bungie\ObjectSerializer;

/**
 * GlobalAlertLevel Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GlobalAlertLevel
{
    /**
     * Possible values of this enum
     */
    const GLOBAL_ALERT_LEVEL_UNKNOWN = 0;
    const GLOBAL_ALERT_LEVEL_BLUE = 1;
    const GLOBAL_ALERT_LEVEL_YELLOW = 2;
    const GLOBAL_ALERT_LEVEL_RED = 3;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::GLOBAL_ALERT_LEVEL_UNKNOWN,
            self::GLOBAL_ALERT_LEVEL_BLUE,
            self::GLOBAL_ALERT_LEVEL_YELLOW,
            self::GLOBAL_ALERT_LEVEL_RED,
        ];
    }
}


