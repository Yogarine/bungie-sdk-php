<?php
/**
 * DestinySocketArrayType
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
 * OpenAPI spec version: 2.16.0
 * Contact: support@bungie.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bungie\Model\Destiny\Requests\Actions;
use \Bungie\ObjectSerializer;

/**
 * DestinySocketArrayType Class Doc Comment
 *
 * @category Class
 * @description If you look in the DestinyInventoryItemDefinition&#39;s \&quot;sockets\&quot; property, you&#39;ll see that there are two types of sockets: intrinsic, and \&quot;socketEntry.\&quot;  Unfortunately, because Intrinsic sockets are a whole separate array, it is no longer sufficient to know the index into that array to know which socket we&#39;re talking about. You have to know whether it&#39;s in the default \&quot;socketEntries\&quot; or if it&#39;s in the \&quot;intrinsic\&quot; list.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinySocketArrayType
{
    /**
     * Possible values of this enum
     */
    const DESTINY_SOCKET_ARRAY_TYPE_DEFAULT = 0;
    const DESTINY_SOCKET_ARRAY_TYPE_INTRINSIC = 1;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DESTINY_SOCKET_ARRAY_TYPE_DEFAULT,
            self::DESTINY_SOCKET_ARRAY_TYPE_INTRINSIC,
        ];
    }
}


