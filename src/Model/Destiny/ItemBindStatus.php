<?php
/**
 * ItemBindStatus
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
 * OpenAPI spec version: 2.4.0
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
 * ItemBindStatus Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ItemBindStatus
{
    /**
     * Possible values of this enum
     */
    const ITEM_BIND_STATUS_NOTBOUND = 0;
    const ITEM_BIND_STATUS_BOUNDTOCHARACTER = 1;
    const ITEM_BIND_STATUS_BOUNDTOACCOUNT = 2;
    const ITEM_BIND_STATUS_BOUNDTOGUILD = 3;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ITEM_BIND_STATUS_NOTBOUND,
            self::ITEM_BIND_STATUS_BOUNDTOCHARACTER,
            self::ITEM_BIND_STATUS_BOUNDTOACCOUNT,
            self::ITEM_BIND_STATUS_BOUNDTOGUILD,
        ];
    }
}


