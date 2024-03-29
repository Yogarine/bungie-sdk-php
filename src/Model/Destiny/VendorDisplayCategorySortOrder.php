<?php
/**
 * VendorDisplayCategorySortOrder
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
 * VendorDisplayCategorySortOrder Class Doc Comment
 *
 * @category Class
 * @description Display categories can have custom sort orders. These are the possible options.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class VendorDisplayCategorySortOrder
{
    /**
     * Possible values of this enum
     */
    const VENDOR_DISPLAY_CATEGORY_SORT_ORDER_DEFAULT = 0;
    const VENDOR_DISPLAY_CATEGORY_SORT_ORDER_SORTBYTIER = 1;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::VENDOR_DISPLAY_CATEGORY_SORT_ORDER_DEFAULT,
            self::VENDOR_DISPLAY_CATEGORY_SORT_ORDER_SORTBYTIER,
        ];
    }
}


