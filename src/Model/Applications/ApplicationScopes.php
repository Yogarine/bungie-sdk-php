<?php
/**
 * ApplicationScopes
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

namespace Bungie\Model\Applications;
use \Bungie\ObjectSerializer;

/**
 * ApplicationScopes Class Doc Comment
 *
 * @category Class
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ApplicationScopes
{
    /**
     * Possible values of this enum
     */
    const APPLICATION_SCOPES_READBASICUSERPROFILE = 1;
    const APPLICATION_SCOPES_READGROUPS = 2;
    const APPLICATION_SCOPES_WRITEGROUPS = 4;
    const APPLICATION_SCOPES_ADMINGROUPS = 8;
    const APPLICATION_SCOPES_BNETWRITE = 16;
    const APPLICATION_SCOPES_MOVEEQUIPDESTINYITEMS = 32;
    const APPLICATION_SCOPES_READDESTINYINVENTORYANDVAULT = 64;
    const APPLICATION_SCOPES_READUSERDATA = 128;
    const APPLICATION_SCOPES_EDITUSERDATA = 256;
    const APPLICATION_SCOPES_READDESTINYVENDORSANDADVISORS = 512;
    const APPLICATION_SCOPES_READANDAPPLYTOKENS = 1024;
    const APPLICATION_SCOPES_ADVANCEDWRITEACTIONS = 2048;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::APPLICATION_SCOPES_READBASICUSERPROFILE,
            self::APPLICATION_SCOPES_READGROUPS,
            self::APPLICATION_SCOPES_WRITEGROUPS,
            self::APPLICATION_SCOPES_ADMINGROUPS,
            self::APPLICATION_SCOPES_BNETWRITE,
            self::APPLICATION_SCOPES_MOVEEQUIPDESTINYITEMS,
            self::APPLICATION_SCOPES_READDESTINYINVENTORYANDVAULT,
            self::APPLICATION_SCOPES_READUSERDATA,
            self::APPLICATION_SCOPES_EDITUSERDATA,
            self::APPLICATION_SCOPES_READDESTINYVENDORSANDADVISORS,
            self::APPLICATION_SCOPES_READANDAPPLYTOKENS,
            self::APPLICATION_SCOPES_ADVANCEDWRITEACTIONS,
        ];
    }
}


