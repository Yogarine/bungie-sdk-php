<?php
/**
 * DestinyVendorInteractionRewardSelection
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
 * DestinyVendorInteractionRewardSelection Class Doc Comment
 *
 * @category Class
 * @description When a Vendor Interaction provides rewards, they&#39;ll either let you choose one or let you have all of them. This determines which it will be.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyVendorInteractionRewardSelection
{
    /**
     * Possible values of this enum
     */
    const DESTINY_VENDOR_INTERACTION_REWARD_SELECTION_NONE = 0;
    const DESTINY_VENDOR_INTERACTION_REWARD_SELECTION_ONE = 1;
    const DESTINY_VENDOR_INTERACTION_REWARD_SELECTION_ALL = 2;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DESTINY_VENDOR_INTERACTION_REWARD_SELECTION_NONE,
            self::DESTINY_VENDOR_INTERACTION_REWARD_SELECTION_ONE,
            self::DESTINY_VENDOR_INTERACTION_REWARD_SELECTION_ALL,
        ];
    }
}


