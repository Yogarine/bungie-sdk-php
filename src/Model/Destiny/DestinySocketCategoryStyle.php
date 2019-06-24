<?php
/**
 * DestinySocketCategoryStyle
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
 * DestinySocketCategoryStyle Class Doc Comment
 *
 * @category Class
 * @description Represents the possible and known UI styles used by the game for rendering Socket Categories.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinySocketCategoryStyle
{
    /**
     * Possible values of this enum
     */
    const DESTINY_SOCKET_CATEGORY_STYLE_UNKNOWN = 0;
    const DESTINY_SOCKET_CATEGORY_STYLE_REUSABLE = 1;
    const DESTINY_SOCKET_CATEGORY_STYLE_CONSUMABLE = 2;
    const DESTINY_SOCKET_CATEGORY_STYLE_UNLOCKABLE = 3;
    const DESTINY_SOCKET_CATEGORY_STYLE_INTRINSIC = 4;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DESTINY_SOCKET_CATEGORY_STYLE_UNKNOWN,
            self::DESTINY_SOCKET_CATEGORY_STYLE_REUSABLE,
            self::DESTINY_SOCKET_CATEGORY_STYLE_CONSUMABLE,
            self::DESTINY_SOCKET_CATEGORY_STYLE_UNLOCKABLE,
            self::DESTINY_SOCKET_CATEGORY_STYLE_INTRINSIC,
        ];
    }
}


