<?php
/**
 * PlugUiStyles
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
 * PlugUiStyles Class Doc Comment
 *
 * @category Class
 * @description If the plug has a specific custom style, this enumeration will represent that style/those styles.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PlugUiStyles
{
    /**
     * Possible values of this enum
     */
    const PLUG_UI_STYLES_NONE = 0;
    const PLUG_UI_STYLES_MASTERWORK = 1;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PLUG_UI_STYLES_NONE,
            self::PLUG_UI_STYLES_MASTERWORK,
        ];
    }
}

