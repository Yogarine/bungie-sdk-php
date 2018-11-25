<?php
/**
 * VendorInteractionType
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
 * VendorInteractionType Class Doc Comment
 *
 * @category Class
 * @description An enumeration of the known UI interactions for Vendors.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class VendorInteractionType
{
    /**
     * Possible values of this enum
     */
    const VENDOR_INTERACTION_TYPE_UNKNOWN = 0;
    const VENDOR_INTERACTION_TYPE_QUESTCOMPLETE = 1;
    const VENDOR_INTERACTION_TYPE_QUESTCONTINUE = 2;
    const VENDOR_INTERACTION_TYPE_REPUTATIONPREVIEW = 3;
    const VENDOR_INTERACTION_TYPE_RANKUPREWARD = 4;
    const VENDOR_INTERACTION_TYPE_TOKENTURNIN = 5;
    const VENDOR_INTERACTION_TYPE_QUESTACCEPT = 6;
    const VENDOR_INTERACTION_TYPE_PROGRESSTAB = 7;
    const VENDOR_INTERACTION_TYPE_END = 8;
    const VENDOR_INTERACTION_TYPE_START = 9;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::VENDOR_INTERACTION_TYPE_UNKNOWN,
            self::VENDOR_INTERACTION_TYPE_QUESTCOMPLETE,
            self::VENDOR_INTERACTION_TYPE_QUESTCONTINUE,
            self::VENDOR_INTERACTION_TYPE_REPUTATIONPREVIEW,
            self::VENDOR_INTERACTION_TYPE_RANKUPREWARD,
            self::VENDOR_INTERACTION_TYPE_TOKENTURNIN,
            self::VENDOR_INTERACTION_TYPE_QUESTACCEPT,
            self::VENDOR_INTERACTION_TYPE_PROGRESSTAB,
            self::VENDOR_INTERACTION_TYPE_END,
            self::VENDOR_INTERACTION_TYPE_START,
        ];
    }
}


