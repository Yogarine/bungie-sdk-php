<?php
/**
 * DestinyGatingScope
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
 * DestinyGatingScope Class Doc Comment
 *
 * @category Class
 * @description This enumeration represents the most restrictive type of gating that is being performed by an entity. This is useful as a shortcut to avoid a lot of lookups when determining whether the gating on an Entity applies to everyone equally, or to their specific Profile or Character states.  None &#x3D; There is no gating on this item.  Global &#x3D; The gating on this item is based entirely on global game state. It will be gated the same for everyone.  Clan &#x3D; The gating on this item is at the Clan level. For instance, if you&#39;re gated by Clan level this will be the case.  Profile &#x3D; The gating includes Profile-specific checks, but not on the Profile&#39;s characters. An example of this might be when you acquire an Emblem: the Emblem will be available in your Kiosk for all characters in your Profile from that point onward.  Character &#x3D; The gating includes Character-specific checks, including character level restrictions. An example of this might be an item that you can&#39;t purchase from a Vendor until you reach a specific Character Level.  Item &#x3D; The gating includes item-specific checks. For BNet, this generally implies that we&#39;ll show this data only on a character level or deeper.  AssumedWorstCase &#x3D; The unlocks and checks being used for this calculation are of an unknown type and are used for unknown purposes. For instance, if some great person decided that an unlock value should be globally scoped, but then the game changes it using character-specific data in a way that BNet doesn&#39;t know about. Because of the open-ended potential for this to occur, many unlock checks for \&quot;globally\&quot; scoped unlock data may be assumed as the worst case unless it has been specifically whitelisted as otherwise. That sucks, but them&#39;s the breaks.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyGatingScope
{
    /**
     * Possible values of this enum
     */
    const DESTINY_GATING_SCOPE_NONE = 0;
    const DESTINY_GATING_SCOPE_GLOBAL = 1;
    const DESTINY_GATING_SCOPE_CLAN = 2;
    const DESTINY_GATING_SCOPE_PROFILE = 3;
    const DESTINY_GATING_SCOPE_CHARACTER = 4;
    const DESTINY_GATING_SCOPE_ITEM = 5;
    const DESTINY_GATING_SCOPE_ASSUMEDWORSTCASE = 6;
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DESTINY_GATING_SCOPE_NONE,
            self::DESTINY_GATING_SCOPE_GLOBAL,
            self::DESTINY_GATING_SCOPE_CLAN,
            self::DESTINY_GATING_SCOPE_PROFILE,
            self::DESTINY_GATING_SCOPE_CHARACTER,
            self::DESTINY_GATING_SCOPE_ITEM,
            self::DESTINY_GATING_SCOPE_ASSUMEDWORSTCASE,
        ];
    }
}


