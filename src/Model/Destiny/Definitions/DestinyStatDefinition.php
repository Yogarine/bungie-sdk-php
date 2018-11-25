<?php
/**
 * DestinyStatDefinition
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

namespace Bungie\Model\Destiny\Definitions;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyStatDefinition Class Doc Comment
 *
 * @category Class
 * @description This represents a stat that&#39;s applied to a character or an item (such as a weapon, piece of armor, or a vehicle).  An example of a stat might be Attack Power on a weapon.  Stats go through a complex set of transformations before they end up being shown to the user as a number or a progress bar, and those transformations are fundamentally intertwined with the concept of a \&quot;Stat Group\&quot; (DestinyStatGroupDefinition). Items have both Stats and a reference to a Stat Group, and it is the Stat Group that takes the raw stat information and gives it both rendering metadata (such as whether to show it as a number or a progress bar) and the final transformation data (interpolation tables to turn the raw investment stat into a display stat). Please see DestinyStatGroupDefinition for more information on that transformational process.  Stats are segregated from Stat Groups because different items and types of items can refer to the same stat, but have different \&quot;scales\&quot; for the stat while still having the same underlying value. For example, both a Shotgun and an Auto Rifle may have a \&quot;raw\&quot; impact stat of 50, but the Auto Rifle&#39;s Stat Group will scale that 50 down so that, when it is displayed, it is a smaller value relative to the shotgun. (this is a totally made up example, don&#39;t assume shotguns have naturally higher impact than auto rifles because of this)  A final caveat is that some stats, even after this \&quot;final\&quot; transformation, go through yet another set of transformations directly in the game as a result of dynamic, stateful scripts that get run. BNet has no access to these scripts, nor any way to know which scripts get executed. As a result, the stats for an item that you see in-game - particularly for stats that are often impacted by Perks, like Magazine Size - can change dramatically from what we return on Bungie.Net. This is a known issue with no fix coming down the pipeline. Take these stats with a grain of salt.  Stats actually go through four transformations, for those interested:  1) \&quot;Sandbox\&quot; stat, the \&quot;most raw\&quot; form. These are pretty much useless without transformations applied, and thus are not currently returned in the API. If you really want these, we can provide them. Maybe someone could do something cool with it?  2) \&quot;Investment\&quot; stat (the stat&#39;s value after DestinyStatDefinition&#39;s interpolation tables and aggregation logic is applied to the \&quot;Sandbox\&quot; stat value)  3) \&quot;Display\&quot; stat (the stat&#39;s base UI-visible value after DestinyStatGroupDefinition&#39;s interpolation tables are applied to the Investment Stat value. For most stats, this is what is displayed.)  4) Underlying in-game stat (the stat&#39;s actual value according to the game, after the game runs dynamic scripts based on the game and character&#39;s state. This is the final transformation that BNet does not have access to. For most stats, this is not actually displayed to the user, with the exception of Magazine Size which is then piped back to the UI for display in-game, but not to BNet.)
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyStatDefinition implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.DestinyStatDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'displayProperties' => '\Bungie\Model\Destiny\Definitions\Common\DestinyDisplayPropertiesDefinition',
        'aggregationType' => '\Bungie\Model\Destiny\DestinyStatAggregationType',
        'hasComputedBlock' => 'bool',
        'statCategory' => '\Bungie\Model\Destiny\DestinyStatCategory',
        'hash' => 'int',
        'index' => 'int',
        'redacted' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'displayProperties' => null,
        'aggregationType' => null,
        'hasComputedBlock' => null,
        'statCategory' => null,
        'hash' => 'uint32',
        'index' => 'int32',
        'redacted' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'displayProperties' => 'displayProperties',
        'aggregationType' => 'aggregationType',
        'hasComputedBlock' => 'hasComputedBlock',
        'statCategory' => 'statCategory',
        'hash' => 'hash',
        'index' => 'index',
        'redacted' => 'redacted'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'displayProperties' => 'setDisplayProperties',
        'aggregationType' => 'setAggregationType',
        'hasComputedBlock' => 'setHasComputedBlock',
        'statCategory' => 'setStatCategory',
        'hash' => 'setHash',
        'index' => 'setIndex',
        'redacted' => 'setRedacted'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'displayProperties' => 'getDisplayProperties',
        'aggregationType' => 'getAggregationType',
        'hasComputedBlock' => 'getHasComputedBlock',
        'statCategory' => 'getStatCategory',
        'hash' => 'getHash',
        'index' => 'getIndex',
        'redacted' => 'getRedacted'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['displayProperties'] = isset($data['displayProperties']) ? $data['displayProperties'] : null;
        $this->container['aggregationType'] = isset($data['aggregationType']) ? $data['aggregationType'] : null;
        $this->container['hasComputedBlock'] = isset($data['hasComputedBlock']) ? $data['hasComputedBlock'] : null;
        $this->container['statCategory'] = isset($data['statCategory']) ? $data['statCategory'] : null;
        $this->container['hash'] = isset($data['hash']) ? $data['hash'] : null;
        $this->container['index'] = isset($data['index']) ? $data['index'] : null;
        $this->container['redacted'] = isset($data['redacted']) ? $data['redacted'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets displayProperties
     *
     * @return \Bungie\Model\Destiny\Definitions\Common\DestinyDisplayPropertiesDefinition|null
     */
    public function getDisplayProperties()
    {
        return $this->container['displayProperties'];
    }

    /**
     * Sets displayProperties
     *
     * @param \Bungie\Model\Destiny\Definitions\Common\DestinyDisplayPropertiesDefinition|null $displayProperties displayProperties
     *
     * @return $this
     */
    public function setDisplayProperties($displayProperties)
    {
        $this->container['displayProperties'] = $displayProperties;

        return $this;
    }

    /**
     * Gets aggregationType
     *
     * @return \Bungie\Model\Destiny\DestinyStatAggregationType|null
     */
    public function getAggregationType()
    {
        return $this->container['aggregationType'];
    }

    /**
     * Sets aggregationType
     *
     * @param \Bungie\Model\Destiny\DestinyStatAggregationType|null $aggregationType Stats can exist on a character or an item, and they may potentially be aggregated in different ways. The DestinyStatAggregationType enum value indicates the way that this stat is being aggregated.
     *
     * @return $this
     */
    public function setAggregationType($aggregationType)
    {
        $this->container['aggregationType'] = $aggregationType;

        return $this;
    }

    /**
     * Gets hasComputedBlock
     *
     * @return bool|null
     */
    public function getHasComputedBlock()
    {
        return $this->container['hasComputedBlock'];
    }

    /**
     * Sets hasComputedBlock
     *
     * @param bool|null $hasComputedBlock True if the stat is computed rather than being delivered as a raw value on items.  For instance, the Light stat in Destiny 1 was a computed stat.
     *
     * @return $this
     */
    public function setHasComputedBlock($hasComputedBlock)
    {
        $this->container['hasComputedBlock'] = $hasComputedBlock;

        return $this;
    }

    /**
     * Gets statCategory
     *
     * @return \Bungie\Model\Destiny\DestinyStatCategory|null
     */
    public function getStatCategory()
    {
        return $this->container['statCategory'];
    }

    /**
     * Sets statCategory
     *
     * @param \Bungie\Model\Destiny\DestinyStatCategory|null $statCategory The category of the stat, according to the game.
     *
     * @return $this
     */
    public function setStatCategory($statCategory)
    {
        $this->container['statCategory'] = $statCategory;

        return $this;
    }

    /**
     * Gets hash
     *
     * @return int|null
     */
    public function getHash()
    {
        return $this->container['hash'];
    }

    /**
     * Sets hash
     *
     * @param int|null $hash The unique identifier for this entity. Guaranteed to be unique for the type of entity, but not globally.  When entities refer to each other in Destiny content, it is this hash that they are referring to.
     *
     * @return $this
     */
    public function setHash($hash)
    {
        $this->container['hash'] = $hash;

        return $this;
    }

    /**
     * Gets index
     *
     * @return int|null
     */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
     * Sets index
     *
     * @param int|null $index The index of the entity as it was found in the investment tables.
     *
     * @return $this
     */
    public function setIndex($index)
    {
        $this->container['index'] = $index;

        return $this;
    }

    /**
     * Gets redacted
     *
     * @return bool|null
     */
    public function getRedacted()
    {
        return $this->container['redacted'];
    }

    /**
     * Sets redacted
     *
     * @param bool|null $redacted If this is true, then there is an entity with this identifier/type combination, but BNet is not yet allowed to show it. Sorry!
     *
     * @return $this
     */
    public function setRedacted($redacted)
    {
        $this->container['redacted'] = $redacted;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


