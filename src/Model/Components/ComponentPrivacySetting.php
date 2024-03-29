<?php
/**
 * ComponentPrivacySetting
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

namespace Bungie\Model\Components;
use \Bungie\ObjectSerializer;

/**
 * ComponentPrivacySetting Class Doc Comment
 *
 * @category Class
 * @description A set of flags for reason(s) why the component populated in the way that it did. Inspect the individual flags for the reasons.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ComponentPrivacySetting
{
    /**
     * Possible values of this enum
     */
    const COMPONENT_PRIVACY_SETTING_NONE = 0;
    const COMPONENT_PRIVACY_SETTING_PUBLIC = 1;
    const COMPONENT_PRIVACY_SETTING_PRIVATE = 2;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::COMPONENT_PRIVACY_SETTING_NONE,
            self::COMPONENT_PRIVACY_SETTING_PUBLIC,
            self::COMPONENT_PRIVACY_SETTING_PRIVATE,
        ];
    }
}


