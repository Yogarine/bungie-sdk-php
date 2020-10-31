<?php
/**
 * DestinyProgressionDefinition
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
 * OpenAPI spec version: 2.8.2
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
 * DestinyProgressionDefinition Class Doc Comment
 *
 * @category Class
 * @description A \&quot;Progression\&quot; in Destiny is best explained by an example.  A Character&#39;s \&quot;Level\&quot; is a progression: it has Experience that can be earned, levels that can be gained, and is evaluated and displayed at various points in the game. A Character&#39;s \&quot;Faction Reputation\&quot; is also a progression for much the same reason.  Progression is used by a variety of systems, and the definition of a Progression will generally only be useful if combining with live data (such as a character&#39;s DestinyCharacterProgressionComponent.progressions property, which holds that character&#39;s live Progression states).  Fundamentally, a Progression measures your \&quot;Level\&quot; by evaluating the thresholds in its Steps (one step per level, except for the last step which can be repeated indefinitely for \&quot;Levels\&quot; that have no ceiling) against the total earned \&quot;progression points\&quot;/experience. (for simplicity purposes, we will henceforth refer to earned progression points as experience, though it need not be a mechanic that in any way resembles Experience in a traditional sense).  Earned experience is calculated in a variety of ways, determined by the Progression&#39;s scope. These go from looking up a stored value to performing exceedingly obtuse calculations. This is why we provide live data in DestinyCharacterProgressionComponent.progressions, so you don&#39;t have to worry about those.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyProgressionDefinition implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.DestinyProgressionDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'displayProperties' => '\Bungie\Model\Destiny\Definitions\DestinyProgressionDisplayPropertiesDefinition',
        'scope' => 'int',
        'repeatLastStep' => 'bool',
        'source' => 'string',
        'steps' => '\Bungie\Model\Destiny\Definitions\DestinyProgressionStepDefinition[]',
        'visible' => 'bool',
        'factionHash' => 'int',
        'color' => '\Bungie\Model\Destiny\Misc\DestinyColor',
        'rankIcon' => 'string',
        'rewardItems' => '\Bungie\Model\Destiny\Definitions\DestinyProgressionRewardItemQuantity[]',
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
        'scope' => 'int32',
        'repeatLastStep' => null,
        'source' => null,
        'steps' => null,
        'visible' => null,
        'factionHash' => 'uint32',
        'color' => null,
        'rankIcon' => null,
        'rewardItems' => null,
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
        'scope' => 'scope',
        'repeatLastStep' => 'repeatLastStep',
        'source' => 'source',
        'steps' => 'steps',
        'visible' => 'visible',
        'factionHash' => 'factionHash',
        'color' => 'color',
        'rankIcon' => 'rankIcon',
        'rewardItems' => 'rewardItems',
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
        'scope' => 'setScope',
        'repeatLastStep' => 'setRepeatLastStep',
        'source' => 'setSource',
        'steps' => 'setSteps',
        'visible' => 'setVisible',
        'factionHash' => 'setFactionHash',
        'color' => 'setColor',
        'rankIcon' => 'setRankIcon',
        'rewardItems' => 'setRewardItems',
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
        'scope' => 'getScope',
        'repeatLastStep' => 'getRepeatLastStep',
        'source' => 'getSource',
        'steps' => 'getSteps',
        'visible' => 'getVisible',
        'factionHash' => 'getFactionHash',
        'color' => 'getColor',
        'rankIcon' => 'getRankIcon',
        'rewardItems' => 'getRewardItems',
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
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['repeatLastStep'] = isset($data['repeatLastStep']) ? $data['repeatLastStep'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['steps'] = isset($data['steps']) ? $data['steps'] : null;
        $this->container['visible'] = isset($data['visible']) ? $data['visible'] : null;
        $this->container['factionHash'] = isset($data['factionHash']) ? $data['factionHash'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['rankIcon'] = isset($data['rankIcon']) ? $data['rankIcon'] : null;
        $this->container['rewardItems'] = isset($data['rewardItems']) ? $data['rewardItems'] : null;
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
     * @return \Bungie\Model\Destiny\Definitions\DestinyProgressionDisplayPropertiesDefinition|null
     */
    public function getDisplayProperties()
    {
        return $this->container['displayProperties'];
    }

    /**
     * Sets displayProperties
     *
     * @param \Bungie\Model\Destiny\Definitions\DestinyProgressionDisplayPropertiesDefinition|null $displayProperties displayProperties
     *
     * @return $this
     */
    public function setDisplayProperties($displayProperties)
    {
        $this->container['displayProperties'] = $displayProperties;

        return $this;
    }

    /**
     * Gets scope
     *
     * @return int|null
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope
     *
     * @param int|null $scope The \"Scope\" of the progression indicates the source of the progression's live data.  See the DestinyProgressionScope enum for more info: but essentially, a Progression can either be backed by a stored value, or it can be a calculated derivative of other values.
     *
     * @return $this
     */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;

        return $this;
    }

    /**
     * Gets repeatLastStep
     *
     * @return bool|null
     */
    public function getRepeatLastStep()
    {
        return $this->container['repeatLastStep'];
    }

    /**
     * Sets repeatLastStep
     *
     * @param bool|null $repeatLastStep If this is True, then the progression doesn't have a maximum level.
     *
     * @return $this
     */
    public function setRepeatLastStep($repeatLastStep)
    {
        $this->container['repeatLastStep'] = $repeatLastStep;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string|null $source If there's a description of how to earn this progression in the local config, this will be that localized description.
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets steps
     *
     * @return \Bungie\Model\Destiny\Definitions\DestinyProgressionStepDefinition[]|null
     */
    public function getSteps()
    {
        return $this->container['steps'];
    }

    /**
     * Sets steps
     *
     * @param \Bungie\Model\Destiny\Definitions\DestinyProgressionStepDefinition[]|null $steps Progressions are divided into Steps, which roughly equate to \"Levels\" in the traditional sense of a Progression. Notably, the last step can be repeated indefinitely if repeatLastStep is true, meaning that the calculation for your level is not as simple as comparing your current progress to the max progress of the steps.   These and more calculations are done for you if you grab live character progression data, such as in the DestinyCharacterProgressionComponent.
     *
     * @return $this
     */
    public function setSteps($steps)
    {
        $this->container['steps'] = $steps;

        return $this;
    }

    /**
     * Gets visible
     *
     * @return bool|null
     */
    public function getVisible()
    {
        return $this->container['visible'];
    }

    /**
     * Sets visible
     *
     * @param bool|null $visible If true, the Progression is something worth showing to users.  If false, BNet isn't going to show it. But that doesn't mean you can't. We're all friends here.
     *
     * @return $this
     */
    public function setVisible($visible)
    {
        $this->container['visible'] = $visible;

        return $this;
    }

    /**
     * Gets factionHash
     *
     * @return int|null
     */
    public function getFactionHash()
    {
        return $this->container['factionHash'];
    }

    /**
     * Sets factionHash
     *
     * @param int|null $factionHash If the value exists, this is the hash identifier for the Faction that owns this Progression.  This is purely for convenience, if you're looking at a progression and want to know if and who it's related to in terms of Faction Reputation.
     *
     * @return $this
     */
    public function setFactionHash($factionHash)
    {
        $this->container['factionHash'] = $factionHash;

        return $this;
    }

    /**
     * Gets color
     *
     * @return \Bungie\Model\Destiny\Misc\DestinyColor|null
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param \Bungie\Model\Destiny\Misc\DestinyColor|null $color The #RGB string value for the color related to this progression, if there is one.
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets rankIcon
     *
     * @return string|null
     */
    public function getRankIcon()
    {
        return $this->container['rankIcon'];
    }

    /**
     * Sets rankIcon
     *
     * @param string|null $rankIcon For progressions that have it, this is the rank icon we use in the Companion, displayed above the progressions' rank value.
     *
     * @return $this
     */
    public function setRankIcon($rankIcon)
    {
        $this->container['rankIcon'] = $rankIcon;

        return $this;
    }

    /**
     * Gets rewardItems
     *
     * @return \Bungie\Model\Destiny\Definitions\DestinyProgressionRewardItemQuantity[]|null
     */
    public function getRewardItems()
    {
        return $this->container['rewardItems'];
    }

    /**
     * Sets rewardItems
     *
     * @param \Bungie\Model\Destiny\Definitions\DestinyProgressionRewardItemQuantity[]|null $rewardItems rewardItems
     *
     * @return $this
     */
    public function setRewardItems($rewardItems)
    {
        $this->container['rewardItems'] = $rewardItems;

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


