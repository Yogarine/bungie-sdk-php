<?php
/**
 * SocketPlugSources
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

namespace Bungie\Model\Destiny;
use \Bungie\ObjectSerializer;

/**
 * SocketPlugSources Class Doc Comment
 *
 * @category Class
 * @description Indicates how a socket is populated, and where you should look for valid plug data. This is a flags enumeration field, as you may have to look in multiple sources across multiple components for valid plugs.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SocketPlugSources
{
    /**
     * Possible values of this enum
     */
    const SOCKET_PLUG_SOURCES_NONE = 0;
    const SOCKET_PLUG_SOURCES_INVENTORYSOURCED = 1;
    const SOCKET_PLUG_SOURCES_REUSABLEPLUGITEMS = 2;
    const SOCKET_PLUG_SOURCES_PROFILEPLUGSET = 4;
    const SOCKET_PLUG_SOURCES_CHARACTERPLUGSET = 8;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SOCKET_PLUG_SOURCES_NONE,
            self::SOCKET_PLUG_SOURCES_INVENTORYSOURCED,
            self::SOCKET_PLUG_SOURCES_REUSABLEPLUGITEMS,
            self::SOCKET_PLUG_SOURCES_PROFILEPLUGSET,
            self::SOCKET_PLUG_SOURCES_CHARACTERPLUGSET,
        ];
    }
}

