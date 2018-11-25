<?php
/**
 * DestinyStatAggregationType
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
 * DestinyStatAggregationType Class Doc Comment
 *
 * @category Class
 * @description When a Stat (DestinyStatDefinition) is aggregated, this is the rules used for determining the level and formula used for aggregation.  * CharacterAverage &#x3D; apply a weighted average using the related DestinyStatGroupDefinition on the DestinyInventoryItemDefinition across the character&#39;s equipped items. See both of those definitions for details. * Character &#x3D; don&#39;t aggregate: the stat should be located and used directly on the character. * Item &#x3D; don&#39;t aggregate: the stat should be located and used directly on the item.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyStatAggregationType
{
    /**
     * Possible values of this enum
     */
    const DESTINY_STAT_AGGREGATION_TYPE_CHARACTERAVERAGE = 0;
    const DESTINY_STAT_AGGREGATION_TYPE_CHARACTER = 1;
    const DESTINY_STAT_AGGREGATION_TYPE_ITEM = 2;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DESTINY_STAT_AGGREGATION_TYPE_CHARACTERAVERAGE,
            self::DESTINY_STAT_AGGREGATION_TYPE_CHARACTER,
            self::DESTINY_STAT_AGGREGATION_TYPE_ITEM,
        ];
    }
}

