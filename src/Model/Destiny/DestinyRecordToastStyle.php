<?php
/**
 * DestinyRecordToastStyle
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
 * DestinyRecordToastStyle Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyRecordToastStyle
{
    /**
     * Possible values of this enum
     */
    const DESTINY_RECORD_TOAST_STYLE_NONE = 0;
    const DESTINY_RECORD_TOAST_STYLE_RECORD = 1;
    const DESTINY_RECORD_TOAST_STYLE_LORE = 2;
    const DESTINY_RECORD_TOAST_STYLE_BADGE = 3;
    const DESTINY_RECORD_TOAST_STYLE_METARECORD = 4;
    const DESTINY_RECORD_TOAST_STYLE_MEDALCOMPLETE = 5;
    const DESTINY_RECORD_TOAST_STYLE_SEASONCHALLENGECOMPLETE = 6;
    const DESTINY_RECORD_TOAST_STYLE_GILDEDTITLECOMPLETE = 7;
    const DESTINY_RECORD_TOAST_STYLE_CRAFTINGRECIPEUNLOCKED = 8;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DESTINY_RECORD_TOAST_STYLE_NONE,
            self::DESTINY_RECORD_TOAST_STYLE_RECORD,
            self::DESTINY_RECORD_TOAST_STYLE_LORE,
            self::DESTINY_RECORD_TOAST_STYLE_BADGE,
            self::DESTINY_RECORD_TOAST_STYLE_METARECORD,
            self::DESTINY_RECORD_TOAST_STYLE_MEDALCOMPLETE,
            self::DESTINY_RECORD_TOAST_STYLE_SEASONCHALLENGECOMPLETE,
            self::DESTINY_RECORD_TOAST_STYLE_GILDEDTITLECOMPLETE,
            self::DESTINY_RECORD_TOAST_STYLE_CRAFTINGRECIPEUNLOCKED,
        ];
    }
}


