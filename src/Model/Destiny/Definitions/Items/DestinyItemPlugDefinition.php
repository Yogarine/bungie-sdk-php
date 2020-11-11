<?php
/**
 * DestinyItemPlugDefinition
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
 * OpenAPI spec version: 2.9.0
 * Contact: support@bungie.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bungie\Model\Destiny\Definitions\Items;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyItemPlugDefinition Class Doc Comment
 *
 * @category Class
 * @description If an item is a Plug, its DestinyInventoryItemDefinition.plug property will be populated with an instance of one of these bad boys.  This gives information about when it can be inserted, what the plug&#39;s category is (and thus whether it is compatible with a socket... see DestinySocketTypeDefinition for information about Plug Categories and socket compatibility), whether it is enabled and other Plug info.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyItemPlugDefinition implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Definitions.Items.DestinyItemPlugDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'insertionRules' => '\Bungie\Model\Destiny\Definitions\Items\DestinyPlugRuleDefinition[]',
        'plugCategoryIdentifier' => 'string',
        'plugCategoryHash' => 'int',
        'onActionRecreateSelf' => 'bool',
        'insertionMaterialRequirementHash' => 'int',
        'previewItemOverrideHash' => 'int',
        'enabledMaterialRequirementHash' => 'int',
        'enabledRules' => '\Bungie\Model\Destiny\Definitions\Items\DestinyPlugRuleDefinition[]',
        'uiPlugLabel' => 'string',
        'plugStyle' => 'int',
        'plugAvailability' => 'int',
        'alternateUiPlugLabel' => 'string',
        'alternatePlugStyle' => 'int',
        'isDummyPlug' => 'bool',
        'parentItemOverride' => '\Bungie\Model\Destiny\Definitions\Items\DestinyParentItemOverride',
        'energyCapacity' => '\Bungie\Model\Destiny\Definitions\Items\DestinyEnergyCapacityEntry',
        'energyCost' => '\Bungie\Model\Destiny\Definitions\Items\DestinyEnergyCostEntry'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'insertionRules' => null,
        'plugCategoryIdentifier' => null,
        'plugCategoryHash' => 'uint32',
        'onActionRecreateSelf' => null,
        'insertionMaterialRequirementHash' => 'uint32',
        'previewItemOverrideHash' => 'uint32',
        'enabledMaterialRequirementHash' => 'uint32',
        'enabledRules' => null,
        'uiPlugLabel' => null,
        'plugStyle' => 'int32',
        'plugAvailability' => 'int32',
        'alternateUiPlugLabel' => null,
        'alternatePlugStyle' => 'int32',
        'isDummyPlug' => null,
        'parentItemOverride' => null,
        'energyCapacity' => null,
        'energyCost' => null
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
        'insertionRules' => 'insertionRules',
        'plugCategoryIdentifier' => 'plugCategoryIdentifier',
        'plugCategoryHash' => 'plugCategoryHash',
        'onActionRecreateSelf' => 'onActionRecreateSelf',
        'insertionMaterialRequirementHash' => 'insertionMaterialRequirementHash',
        'previewItemOverrideHash' => 'previewItemOverrideHash',
        'enabledMaterialRequirementHash' => 'enabledMaterialRequirementHash',
        'enabledRules' => 'enabledRules',
        'uiPlugLabel' => 'uiPlugLabel',
        'plugStyle' => 'plugStyle',
        'plugAvailability' => 'plugAvailability',
        'alternateUiPlugLabel' => 'alternateUiPlugLabel',
        'alternatePlugStyle' => 'alternatePlugStyle',
        'isDummyPlug' => 'isDummyPlug',
        'parentItemOverride' => 'parentItemOverride',
        'energyCapacity' => 'energyCapacity',
        'energyCost' => 'energyCost'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'insertionRules' => 'setInsertionRules',
        'plugCategoryIdentifier' => 'setPlugCategoryIdentifier',
        'plugCategoryHash' => 'setPlugCategoryHash',
        'onActionRecreateSelf' => 'setOnActionRecreateSelf',
        'insertionMaterialRequirementHash' => 'setInsertionMaterialRequirementHash',
        'previewItemOverrideHash' => 'setPreviewItemOverrideHash',
        'enabledMaterialRequirementHash' => 'setEnabledMaterialRequirementHash',
        'enabledRules' => 'setEnabledRules',
        'uiPlugLabel' => 'setUiPlugLabel',
        'plugStyle' => 'setPlugStyle',
        'plugAvailability' => 'setPlugAvailability',
        'alternateUiPlugLabel' => 'setAlternateUiPlugLabel',
        'alternatePlugStyle' => 'setAlternatePlugStyle',
        'isDummyPlug' => 'setIsDummyPlug',
        'parentItemOverride' => 'setParentItemOverride',
        'energyCapacity' => 'setEnergyCapacity',
        'energyCost' => 'setEnergyCost'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'insertionRules' => 'getInsertionRules',
        'plugCategoryIdentifier' => 'getPlugCategoryIdentifier',
        'plugCategoryHash' => 'getPlugCategoryHash',
        'onActionRecreateSelf' => 'getOnActionRecreateSelf',
        'insertionMaterialRequirementHash' => 'getInsertionMaterialRequirementHash',
        'previewItemOverrideHash' => 'getPreviewItemOverrideHash',
        'enabledMaterialRequirementHash' => 'getEnabledMaterialRequirementHash',
        'enabledRules' => 'getEnabledRules',
        'uiPlugLabel' => 'getUiPlugLabel',
        'plugStyle' => 'getPlugStyle',
        'plugAvailability' => 'getPlugAvailability',
        'alternateUiPlugLabel' => 'getAlternateUiPlugLabel',
        'alternatePlugStyle' => 'getAlternatePlugStyle',
        'isDummyPlug' => 'getIsDummyPlug',
        'parentItemOverride' => 'getParentItemOverride',
        'energyCapacity' => 'getEnergyCapacity',
        'energyCost' => 'getEnergyCost'
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
        $this->container['insertionRules'] = isset($data['insertionRules']) ? $data['insertionRules'] : null;
        $this->container['plugCategoryIdentifier'] = isset($data['plugCategoryIdentifier']) ? $data['plugCategoryIdentifier'] : null;
        $this->container['plugCategoryHash'] = isset($data['plugCategoryHash']) ? $data['plugCategoryHash'] : null;
        $this->container['onActionRecreateSelf'] = isset($data['onActionRecreateSelf']) ? $data['onActionRecreateSelf'] : null;
        $this->container['insertionMaterialRequirementHash'] = isset($data['insertionMaterialRequirementHash']) ? $data['insertionMaterialRequirementHash'] : null;
        $this->container['previewItemOverrideHash'] = isset($data['previewItemOverrideHash']) ? $data['previewItemOverrideHash'] : null;
        $this->container['enabledMaterialRequirementHash'] = isset($data['enabledMaterialRequirementHash']) ? $data['enabledMaterialRequirementHash'] : null;
        $this->container['enabledRules'] = isset($data['enabledRules']) ? $data['enabledRules'] : null;
        $this->container['uiPlugLabel'] = isset($data['uiPlugLabel']) ? $data['uiPlugLabel'] : null;
        $this->container['plugStyle'] = isset($data['plugStyle']) ? $data['plugStyle'] : null;
        $this->container['plugAvailability'] = isset($data['plugAvailability']) ? $data['plugAvailability'] : null;
        $this->container['alternateUiPlugLabel'] = isset($data['alternateUiPlugLabel']) ? $data['alternateUiPlugLabel'] : null;
        $this->container['alternatePlugStyle'] = isset($data['alternatePlugStyle']) ? $data['alternatePlugStyle'] : null;
        $this->container['isDummyPlug'] = isset($data['isDummyPlug']) ? $data['isDummyPlug'] : null;
        $this->container['parentItemOverride'] = isset($data['parentItemOverride']) ? $data['parentItemOverride'] : null;
        $this->container['energyCapacity'] = isset($data['energyCapacity']) ? $data['energyCapacity'] : null;
        $this->container['energyCost'] = isset($data['energyCost']) ? $data['energyCost'] : null;
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
     * Gets insertionRules
     *
     * @return \Bungie\Model\Destiny\Definitions\Items\DestinyPlugRuleDefinition[]|null
     */
    public function getInsertionRules()
    {
        return $this->container['insertionRules'];
    }

    /**
     * Sets insertionRules
     *
     * @param \Bungie\Model\Destiny\Definitions\Items\DestinyPlugRuleDefinition[]|null $insertionRules The rules around when this plug can be inserted into a socket, aside from the socket's individual restrictions.  The live data DestinyItemPlugComponent.insertFailIndexes will be an index into this array, so you can pull out the failure strings appropriate for the user.
     *
     * @return $this
     */
    public function setInsertionRules($insertionRules)
    {
        $this->container['insertionRules'] = $insertionRules;

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
     * @param string|null $plugCategoryIdentifier The string identifier for the plug's category. Use the socket's DestinySocketTypeDefinition.plugWhitelist to determine whether this plug can be inserted into the socket.
     *
     * @return $this
     */
    public function setPlugCategoryIdentifier($plugCategoryIdentifier)
    {
        $this->container['plugCategoryIdentifier'] = $plugCategoryIdentifier;

        return $this;
    }

    /**
     * Gets plugCategoryHash
     *
     * @return int|null
     */
    public function getPlugCategoryHash()
    {
        return $this->container['plugCategoryHash'];
    }

    /**
     * Sets plugCategoryHash
     *
     * @param int|null $plugCategoryHash The hash for the plugCategoryIdentifier. You can use this instead if you wish: I put both in the definition for debugging purposes.
     *
     * @return $this
     */
    public function setPlugCategoryHash($plugCategoryHash)
    {
        $this->container['plugCategoryHash'] = $plugCategoryHash;

        return $this;
    }

    /**
     * Gets onActionRecreateSelf
     *
     * @return bool|null
     */
    public function getOnActionRecreateSelf()
    {
        return $this->container['onActionRecreateSelf'];
    }

    /**
     * Sets onActionRecreateSelf
     *
     * @param bool|null $onActionRecreateSelf If you successfully socket the item, this will determine whether or not you get \"refunded\" on the plug.
     *
     * @return $this
     */
    public function setOnActionRecreateSelf($onActionRecreateSelf)
    {
        $this->container['onActionRecreateSelf'] = $onActionRecreateSelf;

        return $this;
    }

    /**
     * Gets insertionMaterialRequirementHash
     *
     * @return int|null
     */
    public function getInsertionMaterialRequirementHash()
    {
        return $this->container['insertionMaterialRequirementHash'];
    }

    /**
     * Sets insertionMaterialRequirementHash
     *
     * @param int|null $insertionMaterialRequirementHash If inserting this plug requires materials, this is the hash identifier for looking up the DestinyMaterialRequirementSetDefinition for those requirements.
     *
     * @return $this
     */
    public function setInsertionMaterialRequirementHash($insertionMaterialRequirementHash)
    {
        $this->container['insertionMaterialRequirementHash'] = $insertionMaterialRequirementHash;

        return $this;
    }

    /**
     * Gets previewItemOverrideHash
     *
     * @return int|null
     */
    public function getPreviewItemOverrideHash()
    {
        return $this->container['previewItemOverrideHash'];
    }

    /**
     * Sets previewItemOverrideHash
     *
     * @param int|null $previewItemOverrideHash In the game, if you're inspecting a plug item directly, this will be the item shown with the plug attached. Look up the DestinyInventoryItemDefinition for this hash for the item.
     *
     * @return $this
     */
    public function setPreviewItemOverrideHash($previewItemOverrideHash)
    {
        $this->container['previewItemOverrideHash'] = $previewItemOverrideHash;

        return $this;
    }

    /**
     * Gets enabledMaterialRequirementHash
     *
     * @return int|null
     */
    public function getEnabledMaterialRequirementHash()
    {
        return $this->container['enabledMaterialRequirementHash'];
    }

    /**
     * Sets enabledMaterialRequirementHash
     *
     * @param int|null $enabledMaterialRequirementHash It's not enough for the plug to be inserted. It has to be enabled as well. For it to be enabled, it may require materials. This is the hash identifier for the DestinyMaterialRequirementSetDefinition for those requirements, if there is one.
     *
     * @return $this
     */
    public function setEnabledMaterialRequirementHash($enabledMaterialRequirementHash)
    {
        $this->container['enabledMaterialRequirementHash'] = $enabledMaterialRequirementHash;

        return $this;
    }

    /**
     * Gets enabledRules
     *
     * @return \Bungie\Model\Destiny\Definitions\Items\DestinyPlugRuleDefinition[]|null
     */
    public function getEnabledRules()
    {
        return $this->container['enabledRules'];
    }

    /**
     * Sets enabledRules
     *
     * @param \Bungie\Model\Destiny\Definitions\Items\DestinyPlugRuleDefinition[]|null $enabledRules The rules around whether the plug, once inserted, is enabled and providing its benefits.  The live data DestinyItemPlugComponent.enableFailIndexes will be an index into this array, so you can pull out the failure strings appropriate for the user.
     *
     * @return $this
     */
    public function setEnabledRules($enabledRules)
    {
        $this->container['enabledRules'] = $enabledRules;

        return $this;
    }

    /**
     * Gets uiPlugLabel
     *
     * @return string|null
     */
    public function getUiPlugLabel()
    {
        return $this->container['uiPlugLabel'];
    }

    /**
     * Sets uiPlugLabel
     *
     * @param string|null $uiPlugLabel Plugs can have arbitrary, UI-defined identifiers that the UI designers use to determine the style applied to plugs. Unfortunately, we have neither a definitive list of these labels nor advance warning of when new labels might be applied or how that relates to how they get rendered. If you want to, you can refer to known labels to change your own styles: but know that new ones can be created arbitrarily, and we have no way of associating the labels with any specific UI style guidance... you'll have to piece that together on your end. Or do what we do, and just show plugs more generically, without specialized styles.
     *
     * @return $this
     */
    public function setUiPlugLabel($uiPlugLabel)
    {
        $this->container['uiPlugLabel'] = $uiPlugLabel;

        return $this;
    }

    /**
     * Gets plugStyle
     *
     * @return int|null
     */
    public function getPlugStyle()
    {
        return $this->container['plugStyle'];
    }

    /**
     * Sets plugStyle
     *
     * @param int|null $plugStyle plugStyle
     *
     * @return $this
     */
    public function setPlugStyle($plugStyle)
    {
        $this->container['plugStyle'] = $plugStyle;

        return $this;
    }

    /**
     * Gets plugAvailability
     *
     * @return int|null
     */
    public function getPlugAvailability()
    {
        return $this->container['plugAvailability'];
    }

    /**
     * Sets plugAvailability
     *
     * @param int|null $plugAvailability Indicates the rules about when this plug can be used. See the PlugAvailabilityMode enumeration for more information!
     *
     * @return $this
     */
    public function setPlugAvailability($plugAvailability)
    {
        $this->container['plugAvailability'] = $plugAvailability;

        return $this;
    }

    /**
     * Gets alternateUiPlugLabel
     *
     * @return string|null
     */
    public function getAlternateUiPlugLabel()
    {
        return $this->container['alternateUiPlugLabel'];
    }

    /**
     * Sets alternateUiPlugLabel
     *
     * @param string|null $alternateUiPlugLabel If the plug meets certain state requirements, it may have an alternative label applied to it. This is the alternative label that will be applied in such a situation.
     *
     * @return $this
     */
    public function setAlternateUiPlugLabel($alternateUiPlugLabel)
    {
        $this->container['alternateUiPlugLabel'] = $alternateUiPlugLabel;

        return $this;
    }

    /**
     * Gets alternatePlugStyle
     *
     * @return int|null
     */
    public function getAlternatePlugStyle()
    {
        return $this->container['alternatePlugStyle'];
    }

    /**
     * Sets alternatePlugStyle
     *
     * @param int|null $alternatePlugStyle The alternate plug of the plug: only applies when the item is in states that only the server can know about and control, unfortunately. See AlternateUiPlugLabel for the related label info.
     *
     * @return $this
     */
    public function setAlternatePlugStyle($alternatePlugStyle)
    {
        $this->container['alternatePlugStyle'] = $alternatePlugStyle;

        return $this;
    }

    /**
     * Gets isDummyPlug
     *
     * @return bool|null
     */
    public function getIsDummyPlug()
    {
        return $this->container['isDummyPlug'];
    }

    /**
     * Sets isDummyPlug
     *
     * @param bool|null $isDummyPlug If TRUE, this plug is used for UI display purposes only, and doesn't have any interesting effects of its own.
     *
     * @return $this
     */
    public function setIsDummyPlug($isDummyPlug)
    {
        $this->container['isDummyPlug'] = $isDummyPlug;

        return $this;
    }

    /**
     * Gets parentItemOverride
     *
     * @return \Bungie\Model\Destiny\Definitions\Items\DestinyParentItemOverride|null
     */
    public function getParentItemOverride()
    {
        return $this->container['parentItemOverride'];
    }

    /**
     * Sets parentItemOverride
     *
     * @param \Bungie\Model\Destiny\Definitions\Items\DestinyParentItemOverride|null $parentItemOverride Do you ever get the feeling that a system has become so overburdened by edge cases that it probably should have become some other system entirely? So do I!  In totally unrelated news, Plugs can now override properties of their parent items. This is some of the relevant definition data for those overrides.  If this is populated, it will have the override data to be applied when this plug is applied to an item.
     *
     * @return $this
     */
    public function setParentItemOverride($parentItemOverride)
    {
        $this->container['parentItemOverride'] = $parentItemOverride;

        return $this;
    }

    /**
     * Gets energyCapacity
     *
     * @return \Bungie\Model\Destiny\Definitions\Items\DestinyEnergyCapacityEntry|null
     */
    public function getEnergyCapacity()
    {
        return $this->container['energyCapacity'];
    }

    /**
     * Sets energyCapacity
     *
     * @param \Bungie\Model\Destiny\Definitions\Items\DestinyEnergyCapacityEntry|null $energyCapacity IF not null, this plug provides Energy capacity to the item in which it is socketed. In Armor 2.0 for example, is implemented in a similar way to Masterworks, where visually it's a single area of the UI being clicked on to \"Upgrade\" to higher energy levels, but it's actually socketing new plugs.
     *
     * @return $this
     */
    public function setEnergyCapacity($energyCapacity)
    {
        $this->container['energyCapacity'] = $energyCapacity;

        return $this;
    }

    /**
     * Gets energyCost
     *
     * @return \Bungie\Model\Destiny\Definitions\Items\DestinyEnergyCostEntry|null
     */
    public function getEnergyCost()
    {
        return $this->container['energyCost'];
    }

    /**
     * Sets energyCost
     *
     * @param \Bungie\Model\Destiny\Definitions\Items\DestinyEnergyCostEntry|null $energyCost IF not null, this plug has an energy cost. This contains the details of that cost.
     *
     * @return $this
     */
    public function setEnergyCost($energyCost)
    {
        $this->container['energyCost'] = $energyCost;

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


