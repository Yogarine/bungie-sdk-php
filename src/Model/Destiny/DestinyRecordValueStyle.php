<?php
/**
 * DestinyRecordValueStyle
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
 * OpenAPI spec version: 2.3.5
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
 * DestinyRecordValueStyle Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyRecordValueStyle
{
    /**
     * Possible values of this enum
     */
    const DESTINY_RECORD_VALUE_STYLE_INTEGER = 0;
    const DESTINY_RECORD_VALUE_STYLE_PERCENTAGE = 1;
    const DESTINY_RECORD_VALUE_STYLE_MILLISECONDS = 2;
    const DESTINY_RECORD_VALUE_STYLE_BOOLEAN = 3;
    const DESTINY_RECORD_VALUE_STYLE_DECIMAL = 4;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DESTINY_RECORD_VALUE_STYLE_INTEGER,
            self::DESTINY_RECORD_VALUE_STYLE_PERCENTAGE,
            self::DESTINY_RECORD_VALUE_STYLE_MILLISECONDS,
            self::DESTINY_RECORD_VALUE_STYLE_BOOLEAN,
            self::DESTINY_RECORD_VALUE_STYLE_DECIMAL,
        ];
    }
}


