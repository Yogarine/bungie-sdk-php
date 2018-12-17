<?php
/**
 * ActivityGraphNodeHighlightType
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
 * ActivityGraphNodeHighlightType Class Doc Comment
 *
 * @category Class
 * @description The various known UI styles in which an item can be highlighted. It&#39;ll be up to you to determine what you want to show based on this highlighting, BNet doesn&#39;t have any assets that correspond to these states. And yeah, RiseOfIron and Comet have their own special highlight states. Don&#39;t ask me, I can&#39;t imagine they&#39;re still used.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ActivityGraphNodeHighlightType
{
    /**
     * Possible values of this enum
     */
    const ACTIVITY_GRAPH_NODE_HIGHLIGHT_TYPE_NONE = 0;
    const ACTIVITY_GRAPH_NODE_HIGHLIGHT_TYPE_NORMAL = 1;
    const ACTIVITY_GRAPH_NODE_HIGHLIGHT_TYPE_HYPER = 2;
    const ACTIVITY_GRAPH_NODE_HIGHLIGHT_TYPE_COMET = 3;
    const ACTIVITY_GRAPH_NODE_HIGHLIGHT_TYPE_RISEOFIRON = 4;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ACTIVITY_GRAPH_NODE_HIGHLIGHT_TYPE_NONE,
            self::ACTIVITY_GRAPH_NODE_HIGHLIGHT_TYPE_NORMAL,
            self::ACTIVITY_GRAPH_NODE_HIGHLIGHT_TYPE_HYPER,
            self::ACTIVITY_GRAPH_NODE_HIGHLIGHT_TYPE_COMET,
            self::ACTIVITY_GRAPH_NODE_HIGHLIGHT_TYPE_RISEOFIRON,
        ];
    }
}


