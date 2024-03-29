<?php
/**
 * DestinyVendorItemRefundPolicy
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
 * OpenAPI spec version: 2.17.0
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
 * DestinyVendorItemRefundPolicy Class Doc Comment
 *
 * @category Class
 * @description The action that happens when the user attempts to refund an item.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyVendorItemRefundPolicy
{
    /**
     * Possible values of this enum
     */
    const DESTINY_VENDOR_ITEM_REFUND_POLICY_NOTREFUNDABLE = 0;
    const DESTINY_VENDOR_ITEM_REFUND_POLICY_DELETESITEM = 1;
    const DESTINY_VENDOR_ITEM_REFUND_POLICY_REVOKESLICENSE = 2;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DESTINY_VENDOR_ITEM_REFUND_POLICY_NOTREFUNDABLE,
            self::DESTINY_VENDOR_ITEM_REFUND_POLICY_DELETESITEM,
            self::DESTINY_VENDOR_ITEM_REFUND_POLICY_REVOKESLICENSE,
        ];
    }
}


