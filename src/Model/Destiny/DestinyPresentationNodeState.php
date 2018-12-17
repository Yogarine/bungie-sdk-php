<?php
/**
 * DestinyPresentationNodeState
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

namespace Bungie\Model\Destiny;
use \Bungie\ObjectSerializer;

/**
 * DestinyPresentationNodeState Class Doc Comment
 *
 * @category Class
 * @description I know this doesn&#39;t look like a Flags Enumeration right now, but I assure you it is. This is the possible states that a Presentation Node can be in, and it is almost certain that its potential states will increase in the future. So don&#39;t treat it like a straight up enumeration.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyPresentationNodeState
{
    /**
     * Possible values of this enum
     */
    const DESTINY_PRESENTATION_NODE_STATE_NONE = 0;
    const DESTINY_PRESENTATION_NODE_STATE_INVISIBLE = 1;
    const DESTINY_PRESENTATION_NODE_STATE_OBSCURED = 2;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DESTINY_PRESENTATION_NODE_STATE_NONE,
            self::DESTINY_PRESENTATION_NODE_STATE_INVISIBLE,
            self::DESTINY_PRESENTATION_NODE_STATE_OBSCURED,
        ];
    }
}


