<?php
/**
 * ItemPerkVisibility
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
 * ItemPerkVisibility Class Doc Comment
 *
 * @category Class
 * @description Indicates how a perk should be shown, or if it should be, in the game UI. Maybe useful for those of you trying to filter out internal-use-only perks (or for those of you trying to figure out what they do!)
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ItemPerkVisibility
{
    /**
     * Possible values of this enum
     */
    const ITEM_PERK_VISIBILITY_VISIBLE = 0;
    const ITEM_PERK_VISIBILITY_DISABLED = 1;
    const ITEM_PERK_VISIBILITY_HIDDEN = 2;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ITEM_PERK_VISIBILITY_VISIBLE,
            self::ITEM_PERK_VISIBILITY_DISABLED,
            self::ITEM_PERK_VISIBILITY_HIDDEN,
        ];
    }
}


