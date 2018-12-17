<?php
/**
 * OAuthApplicationType
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
 * OpenAPI spec version: 2.3.3
 * Contact: support@bungie.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bungie\Model\Applications;
use \Bungie\ObjectSerializer;

/**
 * OAuthApplicationType Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OAuthApplicationType
{
    /**
     * Possible values of this enum
     */
    const OAUTH_APPLICATION_TYPE_NONE = 0;
    const OAUTH_APPLICATION_TYPE_CONFIDENTIAL = 1;
    const OAUTH_APPLICATION_TYPE_PUBLIC = 2;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::OAUTH_APPLICATION_TYPE_NONE,
            self::OAUTH_APPLICATION_TYPE_CONFIDENTIAL,
            self::OAUTH_APPLICATION_TYPE_PUBLIC,
        ];
    }
}


