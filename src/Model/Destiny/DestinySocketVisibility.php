<?php
/**
 * DestinySocketVisibility
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
 * DestinySocketVisibility Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinySocketVisibility
{
    /**
     * Possible values of this enum
     */
    const DESTINY_SOCKET_VISIBILITY_VISIBLE = 0;
    const DESTINY_SOCKET_VISIBILITY_HIDDEN = 1;
    const DESTINY_SOCKET_VISIBILITY_HIDDENWHENEMPTY = 2;
    const DESTINY_SOCKET_VISIBILITY_HIDDENIFNOPLUGSAVAILABLE = 3;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DESTINY_SOCKET_VISIBILITY_VISIBLE,
            self::DESTINY_SOCKET_VISIBILITY_HIDDEN,
            self::DESTINY_SOCKET_VISIBILITY_HIDDENWHENEMPTY,
            self::DESTINY_SOCKET_VISIBILITY_HIDDENIFNOPLUGSAVAILABLE,
        ];
    }
}


