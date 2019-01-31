<?php
/**
 * DestinyPresentationNodeType
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
 * OpenAPI spec version: 2.3.4
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
 * DestinyPresentationNodeType Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyPresentationNodeType
{
    /**
     * Possible values of this enum
     */
    const DESTINY_PRESENTATION_NODE_TYPE_DEFAULT = 0;
    const DESTINY_PRESENTATION_NODE_TYPE_CATEGORY = 1;
    const DESTINY_PRESENTATION_NODE_TYPE_COLLECTIBLES = 2;
    const DESTINY_PRESENTATION_NODE_TYPE_RECORDS = 3;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DESTINY_PRESENTATION_NODE_TYPE_DEFAULT,
            self::DESTINY_PRESENTATION_NODE_TYPE_CATEGORY,
            self::DESTINY_PRESENTATION_NODE_TYPE_COLLECTIBLES,
            self::DESTINY_PRESENTATION_NODE_TYPE_RECORDS,
        ];
    }
}


