<?php
/**
 * DestinyItemCategoryDefinition
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
 * DestinyItemCategoryDefinition Class Doc Comment
 *
 * @category Class
 * @description In an attempt to categorize items by type, usage, and other interesting properties, we created DestinyItemCategoryDefinition: information about types that is assembled using a set of heuristics that examine the properties of an item such as what inventory bucket it&#39;s in, its item type name, and whether it has or is missing certain blocks of data.  This heuristic is imperfect, however. If you find an item miscategorized, let us know on the Bungie API forums!  We then populate all of the categories that we think an item belongs to in its DestinyInventoryItemDefinition.itemCategoryHashes property. You can use that to provide your own custom item filtering, sorting, aggregating... go nuts on it! And let us know if you see more categories that you wish would be added!
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyItemCategoryDefinition implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.DestinyItemCategoryDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'displayProperties' => '\Bungie\Model\Destiny\Definitions\Common\DestinyDisplayPropertiesDefinition',
        'visible' => 'bool',
        'deprecated' => 'bool',
        'shortTitle' => 'string',
        'itemTypeRegex' => 'string',
        'plugCategoryIdentifier' => 'string',
        'itemTypeRegexNot' => 'string',
        'originBucketIdentifier' => 'string',
        'grantDestinyItemType' => '\Bungie\Model\Destiny\DestinyItemType',
        'grantDestinySubType' => '\Bungie\Model\Destiny\DestinyItemSubType',
        'grantDestinyClass' => '\Bungie\Model\Destiny\DestinyClass',
        'groupedCategoryHashes' => '\Bungie\Model\int[]',
        'parentCategoryHashes' => '\Bungie\Model\int[]',
        'groupCategoryOnly' => 'bool',
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
        'visible' => null,
        'deprecated' => null,
        'shortTitle' => null,
        'itemTypeRegex' => null,
        'plugCategoryIdentifier' => null,
        'itemTypeRegexNot' => null,
        'originBucketIdentifier' => null,
        'grantDestinyItemType' => null,
        'grantDestinySubType' => null,
        'grantDestinyClass' => null,
        'groupedCategoryHashes' => 'uint32',
        'parentCategoryHashes' => 'uint32',
        'groupCategoryOnly' => null,
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
        'visible' => 'visible',
        'deprecated' => 'deprecated',
        'shortTitle' => 'shortTitle',
        'itemTypeRegex' => 'itemTypeRegex',
        'plugCategoryIdentifier' => 'plugCategoryIdentifier',
        'itemTypeRegexNot' => 'itemTypeRegexNot',
        'originBucketIdentifier' => 'originBucketIdentifier',
        'grantDestinyItemType' => 'grantDestinyItemType',
        'grantDestinySubType' => 'grantDestinySubType',
        'grantDestinyClass' => 'grantDestinyClass',
        'groupedCategoryHashes' => 'groupedCategoryHashes',
        'parentCategoryHashes' => 'parentCategoryHashes',
        'groupCategoryOnly' => 'groupCategoryOnly',
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
        'visible' => 'setVisible',
        'deprecated' => 'setDeprecated',
        'shortTitle' => 'setShortTitle',
        'itemTypeRegex' => 'setItemTypeRegex',
        'plugCategoryIdentifier' => 'setPlugCategoryIdentifier',
        'itemTypeRegexNot' => 'setItemTypeRegexNot',
        'originBucketIdentifier' => 'setOriginBucketIdentifier',
        'grantDestinyItemType' => 'setGrantDestinyItemType',
        'grantDestinySubType' => 'setGrantDestinySubType',
        'grantDestinyClass' => 'setGrantDestinyClass',
        'groupedCategoryHashes' => 'setGroupedCategoryHashes',
        'parentCategoryHashes' => 'setParentCategoryHashes',
        'groupCategoryOnly' => 'setGroupCategoryOnly',
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
        'visible' => 'getVisible',
        'deprecated' => 'getDeprecated',
        'shortTitle' => 'getShortTitle',
        'itemTypeRegex' => 'getItemTypeRegex',
        'plugCategoryIdentifier' => 'getPlugCategoryIdentifier',
        'itemTypeRegexNot' => 'getItemTypeRegexNot',
        'originBucketIdentifier' => 'getOriginBucketIdentifier',
        'grantDestinyItemType' => 'getGrantDestinyItemType',
        'grantDestinySubType' => 'getGrantDestinySubType',
        'grantDestinyClass' => 'getGrantDestinyClass',
        'groupedCategoryHashes' => 'getGroupedCategoryHashes',
        'parentCategoryHashes' => 'getParentCategoryHashes',
        'groupCategoryOnly' => 'getGroupCategoryOnly',
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
        $this->container['visible'] = isset($data['visible']) ? $data['visible'] : null;
        $this->container['deprecated'] = isset($data['deprecated']) ? $data['deprecated'] : null;
        $this->container['shortTitle'] = isset($data['shortTitle']) ? $data['shortTitle'] : null;
        $this->container['itemTypeRegex'] = isset($data['itemTypeRegex']) ? $data['itemTypeRegex'] : null;
        $this->container['plugCategoryIdentifier'] = isset($data['plugCategoryIdentifier']) ? $data['plugCategoryIdentifier'] : null;
        $this->container['itemTypeRegexNot'] = isset($data['itemTypeRegexNot']) ? $data['itemTypeRegexNot'] : null;
        $this->container['originBucketIdentifier'] = isset($data['originBucketIdentifier']) ? $data['originBucketIdentifier'] : null;
        $this->container['grantDestinyItemType'] = isset($data['grantDestinyItemType']) ? $data['grantDestinyItemType'] : null;
        $this->container['grantDestinySubType'] = isset($data['grantDestinySubType']) ? $data['grantDestinySubType'] : null;
        $this->container['grantDestinyClass'] = isset($data['grantDestinyClass']) ? $data['grantDestinyClass'] : null;
        $this->container['groupedCategoryHashes'] = isset($data['groupedCategoryHashes']) ? $data['groupedCategoryHashes'] : null;
        $this->container['parentCategoryHashes'] = isset($data['parentCategoryHashes']) ? $data['parentCategoryHashes'] : null;
        $this->container['groupCategoryOnly'] = isset($data['groupCategoryOnly']) ? $data['groupCategoryOnly'] : null;
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
     * @param bool|null $visible If True, this category should be visible in UI. Sometimes we make categories that we don't think are interesting externally. It's up to you if you want to skip on showing them.
     *
     * @return $this
     */
    public function setVisible($visible)
    {
        $this->container['visible'] = $visible;

        return $this;
    }

    /**
     * Gets deprecated
     *
     * @return bool|null
     */
    public function getDeprecated()
    {
        return $this->container['deprecated'];
    }

    /**
     * Sets deprecated
     *
     * @param bool|null $deprecated If True, this category has been deprecated: it may have no items left, or there may be only legacy items that remain in it which are no longer relevant to the game.
     *
     * @return $this
     */
    public function setDeprecated($deprecated)
    {
        $this->container['deprecated'] = $deprecated;

        return $this;
    }

    /**
     * Gets shortTitle
     *
     * @return string|null
     */
    public function getShortTitle()
    {
        return $this->container['shortTitle'];
    }

    /**
     * Sets shortTitle
     *
     * @param string|null $shortTitle A shortened version of the title. The reason why we have this is because the Armory in German had titles that were too long to display in our UI, so these were localized abbreviated versions of those categories. The property still exists today, even though the Armory doesn't exist for D2... yet.
     *
     * @return $this
     */
    public function setShortTitle($shortTitle)
    {
        $this->container['shortTitle'] = $shortTitle;

        return $this;
    }

    /**
     * Gets itemTypeRegex
     *
     * @return string|null
     */
    public function getItemTypeRegex()
    {
        return $this->container['itemTypeRegex'];
    }

    /**
     * Sets itemTypeRegex
     *
     * @param string|null $itemTypeRegex The janky regular expression we used against the item type to try and discern whether the item belongs to this category.
     *
     * @return $this
     */
    public function setItemTypeRegex($itemTypeRegex)
    {
        $this->container['itemTypeRegex'] = $itemTypeRegex;

        return $this;
    }

    /**
     * Gets plugCategoryIdentifier
     *
     * @return string|null
     */
    public function getPlugCategoryIdentifier()
    {
        return $this->container['plugCategoryIdentifier'];
    }

    /**
     * Sets plugCategoryIdentifier
     *
     * @param string|null $plugCategoryIdentifier If the item is a plug, this is the identifier we expect to find associated with it if it is in this category.
     *
     * @return $this
     */
    public function setPlugCategoryIdentifier($plugCategoryIdentifier)
    {
        $this->container['plugCategoryIdentifier'] = $plugCategoryIdentifier;

        return $this;
    }

    /**
     * Gets itemTypeRegexNot
     *
     * @return string|null
     */
    public function getItemTypeRegexNot()
    {
        return $this->container['itemTypeRegexNot'];
    }

    /**
     * Sets itemTypeRegexNot
     *
     * @param string|null $itemTypeRegexNot If the item type matches this janky regex, it does *not* belong to this category.
     *
     * @return $this
     */
    public function setItemTypeRegexNot($itemTypeRegexNot)
    {
        $this->container['itemTypeRegexNot'] = $itemTypeRegexNot;

        return $this;
    }

    /**
     * Gets originBucketIdentifier
     *
     * @return string|null
     */
    public function getOriginBucketIdentifier()
    {
        return $this->container['originBucketIdentifier'];
    }

    /**
     * Sets originBucketIdentifier
     *
     * @param string|null $originBucketIdentifier If the item belongs to this bucket, it does belong to this category.
     *
     * @return $this
     */
    public function setOriginBucketIdentifier($originBucketIdentifier)
    {
        $this->container['originBucketIdentifier'] = $originBucketIdentifier;

        return $this;
    }

    /**
     * Gets grantDestinyItemType
     *
     * @return \Bungie\Model\Destiny\DestinyItemType|null
     */
    public function getGrantDestinyItemType()
    {
        return $this->container['grantDestinyItemType'];
    }

    /**
     * Sets grantDestinyItemType
     *
     * @param \Bungie\Model\Destiny\DestinyItemType|null $grantDestinyItemType If an item belongs to this category, it will also receive this item type. This is now how DestinyItemType is populated for items: it used to be an even jankier process, but that's a story that requires more alcohol.
     *
     * @return $this
     */
    public function setGrantDestinyItemType($grantDestinyItemType)
    {
        $this->container['grantDestinyItemType'] = $grantDestinyItemType;

        return $this;
    }

    /**
     * Gets grantDestinySubType
     *
     * @return \Bungie\Model\Destiny\DestinyItemSubType|null
     */
    public function getGrantDestinySubType()
    {
        return $this->container['grantDestinySubType'];
    }

    /**
     * Sets grantDestinySubType
     *
     * @param \Bungie\Model\Destiny\DestinyItemSubType|null $grantDestinySubType If an item belongs to this category, it will also receive this subtype enum value.  I know what you're thinking - what if it belongs to multiple categories that provide sub-types?  The last one processed wins, as is the case with all of these \"grant\" enums. Now you can see one reason why we moved away from these enums... but they're so convenient when they work, aren't they?
     *
     * @return $this
     */
    public function setGrantDestinySubType($grantDestinySubType)
    {
        $this->container['grantDestinySubType'] = $grantDestinySubType;

        return $this;
    }

    /**
     * Gets grantDestinyClass
     *
     * @return \Bungie\Model\Destiny\DestinyClass|null
     */
    public function getGrantDestinyClass()
    {
        return $this->container['grantDestinyClass'];
    }

    /**
     * Sets grantDestinyClass
     *
     * @param \Bungie\Model\Destiny\DestinyClass|null $grantDestinyClass If an item belongs to this category, it will also get this class restriction enum value.  See the other \"grant\"-prefixed properties on this definition for my color commentary.
     *
     * @return $this
     */
    public function setGrantDestinyClass($grantDestinyClass)
    {
        $this->container['grantDestinyClass'] = $grantDestinyClass;

        return $this;
    }

    /**
     * Gets groupedCategoryHashes
     *
     * @return \Bungie\Model\int[]|null
     */
    public function getGroupedCategoryHashes()
    {
        return $this->container['groupedCategoryHashes'];
    }

    /**
     * Sets groupedCategoryHashes
     *
     * @param \Bungie\Model\int[]|null $groupedCategoryHashes If this category is a \"parent\" category of other categories, those children will have their hashes listed in rendering order here, and can be looked up using these hashes against DestinyItemCategoryDefinition.  In this way, you can build up a visual hierarchy of item categories. That's what we did, and you can do it too. I believe in you. Yes, you, Carl.  (I hope someone named Carl reads this someday)
     *
     * @return $this
     */
    public function setGroupedCategoryHashes($groupedCategoryHashes)
    {
        $this->container['groupedCategoryHashes'] = $groupedCategoryHashes;

        return $this;
    }

    /**
     * Gets parentCategoryHashes
     *
     * @return \Bungie\Model\int[]|null
     */
    public function getParentCategoryHashes()
    {
        return $this->container['parentCategoryHashes'];
    }

    /**
     * Sets parentCategoryHashes
     *
     * @param \Bungie\Model\int[]|null $parentCategoryHashes All item category hashes of \"parent\" categories: categories that contain this as a child through the hierarchy of groupedCategoryHashes. It's a bit redundant, but having this child-centric list speeds up some calculations.
     *
     * @return $this
     */
    public function setParentCategoryHashes($parentCategoryHashes)
    {
        $this->container['parentCategoryHashes'] = $parentCategoryHashes;

        return $this;
    }

    /**
     * Gets groupCategoryOnly
     *
     * @return bool|null
     */
    public function getGroupCategoryOnly()
    {
        return $this->container['groupCategoryOnly'];
    }

    /**
     * Sets groupCategoryOnly
     *
     * @param bool|null $groupCategoryOnly If true, this category is only used for grouping, and should not be evaluated with its own checks. Rather, the item only has this category if it has one of its child categories.
     *
     * @return $this
     */
    public function setGroupCategoryOnly($groupCategoryOnly)
    {
        $this->container['groupCategoryOnly'] = $groupCategoryOnly;

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


