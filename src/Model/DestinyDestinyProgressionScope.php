<?php
/**
 * DestinyDestinyProgressionScope
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
 * DestinyDestinyProgressionScope Class Doc Comment
 *
 * @category Class
 * @description There are many Progressions in Destiny (think Character Level, or Reputation). These are the various \&quot;Scopes\&quot; of Progressions, which affect many things: * Where/if they are stored * How they are calculated * Where they can be used in other game logic
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyDestinyProgressionScope
{
    /**
     * Possible values of this enum
     */
    const ACCOUNT = 0;
    const CHARACTER = 1;
    const CLAN = 2;
    const ITEM = 3;
    const IMPLICITFROMEQUIPMENT = 4;
    const MAPPED = 5;
    const MAPPEDAGGREGATE = 6;
    const MAPPEDSTAT = 7;
    const MAPPEDUNLOCKVALUE = 8;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ACCOUNT,
            self::CHARACTER,
            self::CLAN,
            self::ITEM,
            self::IMPLICITFROMEQUIPMENT,
            self::MAPPED,
            self::MAPPEDAGGREGATE,
            self::MAPPEDSTAT,
            self::MAPPEDUNLOCKVALUE,
        ];
    }
}

