<?php
/**
 * DestinyProfileResponse
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
 * OpenAPI spec version: 2.3.6
 * Contact: support@bungie.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Bungie\Model\Destiny\Responses;

use \ArrayAccess;
use \Bungie\ObjectSerializer;

/**
 * DestinyProfileResponse Class Doc Comment
 *
 * @category Class
 * @description The response for GetDestinyProfile, with components for character and item-level data.
 * @package  Bungie
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class DestinyProfileResponse implements \Bungie\Model\ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Destiny.Responses.DestinyProfileResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'vendorReceipts' => '\Bungie\Model\SingleComponentResponseOfDestinyVendorReceiptsComponent',
        'profileInventory' => '\Bungie\Model\SingleComponentResponseOfDestinyInventoryComponent',
        'profileCurrencies' => '\Bungie\Model\SingleComponentResponseOfDestinyInventoryComponent',
        'profile' => '\Bungie\Model\SingleComponentResponseOfDestinyProfileComponent',
        'platformSilver' => '\Bungie\Model\SingleComponentResponseOfDestinyPlatformSilverComponent',
        'profileKiosks' => '\Bungie\Model\SingleComponentResponseOfDestinyKiosksComponent',
        'profilePlugSets' => '\Bungie\Model\SingleComponentResponseOfDestinyPlugSetsComponent',
        'profileProgression' => '\Bungie\Model\SingleComponentResponseOfDestinyProfileProgressionComponent',
        'profilePresentationNodes' => '\Bungie\Model\SingleComponentResponseOfDestinyPresentationNodesComponent',
        'profileRecords' => '\Bungie\Model\SingleComponentResponseOfDestinyProfileRecordsComponent',
        'profileCollectibles' => '\Bungie\Model\SingleComponentResponseOfDestinyProfileCollectiblesComponent',
        'characters' => '\Bungie\Model\DictionaryComponentResponseOfint64AndDestinyCharacterComponent',
        'characterInventories' => '\Bungie\Model\DictionaryComponentResponseOfint64AndDestinyInventoryComponent',
        'characterProgressions' => '\Bungie\Model\DictionaryComponentResponseOfint64AndDestinyCharacterProgressionComponent',
        'characterRenderData' => '\Bungie\Model\DictionaryComponentResponseOfint64AndDestinyCharacterRenderComponent',
        'characterActivities' => '\Bungie\Model\DictionaryComponentResponseOfint64AndDestinyCharacterActivitiesComponent',
        'characterEquipment' => '\Bungie\Model\DictionaryComponentResponseOfint64AndDestinyInventoryComponent',
        'characterKiosks' => '\Bungie\Model\DictionaryComponentResponseOfint64AndDestinyKiosksComponent',
        'characterPlugSets' => '\Bungie\Model\DictionaryComponentResponseOfint64AndDestinyPlugSetsComponent',
        'characterUninstancedItemComponents' => 'map[string,\Bungie\Model\DestinyBaseItemComponentSetOfuint32]',
        'characterPresentationNodes' => '\Bungie\Model\DictionaryComponentResponseOfint64AndDestinyPresentationNodesComponent',
        'characterRecords' => '\Bungie\Model\DictionaryComponentResponseOfint64AndDestinyCharacterRecordsComponent',
        'characterCollectibles' => '\Bungie\Model\DictionaryComponentResponseOfint64AndDestinyCollectiblesComponent',
        'itemComponents' => '\Bungie\Model\DestinyItemComponentSetOfint64',
        'characterCurrencyLookups' => '\Bungie\Model\DictionaryComponentResponseOfint64AndDestinyCurrenciesComponent'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'vendorReceipts' => null,
        'profileInventory' => null,
        'profileCurrencies' => null,
        'profile' => null,
        'platformSilver' => null,
        'profileKiosks' => null,
        'profilePlugSets' => null,
        'profileProgression' => null,
        'profilePresentationNodes' => null,
        'profileRecords' => null,
        'profileCollectibles' => null,
        'characters' => null,
        'characterInventories' => null,
        'characterProgressions' => null,
        'characterRenderData' => null,
        'characterActivities' => null,
        'characterEquipment' => null,
        'characterKiosks' => null,
        'characterPlugSets' => null,
        'characterUninstancedItemComponents' => null,
        'characterPresentationNodes' => null,
        'characterRecords' => null,
        'characterCollectibles' => null,
        'itemComponents' => null,
        'characterCurrencyLookups' => null
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
        'vendorReceipts' => 'vendorReceipts',
        'profileInventory' => 'profileInventory',
        'profileCurrencies' => 'profileCurrencies',
        'profile' => 'profile',
        'platformSilver' => 'platformSilver',
        'profileKiosks' => 'profileKiosks',
        'profilePlugSets' => 'profilePlugSets',
        'profileProgression' => 'profileProgression',
        'profilePresentationNodes' => 'profilePresentationNodes',
        'profileRecords' => 'profileRecords',
        'profileCollectibles' => 'profileCollectibles',
        'characters' => 'characters',
        'characterInventories' => 'characterInventories',
        'characterProgressions' => 'characterProgressions',
        'characterRenderData' => 'characterRenderData',
        'characterActivities' => 'characterActivities',
        'characterEquipment' => 'characterEquipment',
        'characterKiosks' => 'characterKiosks',
        'characterPlugSets' => 'characterPlugSets',
        'characterUninstancedItemComponents' => 'characterUninstancedItemComponents',
        'characterPresentationNodes' => 'characterPresentationNodes',
        'characterRecords' => 'characterRecords',
        'characterCollectibles' => 'characterCollectibles',
        'itemComponents' => 'itemComponents',
        'characterCurrencyLookups' => 'characterCurrencyLookups'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'vendorReceipts' => 'setVendorReceipts',
        'profileInventory' => 'setProfileInventory',
        'profileCurrencies' => 'setProfileCurrencies',
        'profile' => 'setProfile',
        'platformSilver' => 'setPlatformSilver',
        'profileKiosks' => 'setProfileKiosks',
        'profilePlugSets' => 'setProfilePlugSets',
        'profileProgression' => 'setProfileProgression',
        'profilePresentationNodes' => 'setProfilePresentationNodes',
        'profileRecords' => 'setProfileRecords',
        'profileCollectibles' => 'setProfileCollectibles',
        'characters' => 'setCharacters',
        'characterInventories' => 'setCharacterInventories',
        'characterProgressions' => 'setCharacterProgressions',
        'characterRenderData' => 'setCharacterRenderData',
        'characterActivities' => 'setCharacterActivities',
        'characterEquipment' => 'setCharacterEquipment',
        'characterKiosks' => 'setCharacterKiosks',
        'characterPlugSets' => 'setCharacterPlugSets',
        'characterUninstancedItemComponents' => 'setCharacterUninstancedItemComponents',
        'characterPresentationNodes' => 'setCharacterPresentationNodes',
        'characterRecords' => 'setCharacterRecords',
        'characterCollectibles' => 'setCharacterCollectibles',
        'itemComponents' => 'setItemComponents',
        'characterCurrencyLookups' => 'setCharacterCurrencyLookups'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'vendorReceipts' => 'getVendorReceipts',
        'profileInventory' => 'getProfileInventory',
        'profileCurrencies' => 'getProfileCurrencies',
        'profile' => 'getProfile',
        'platformSilver' => 'getPlatformSilver',
        'profileKiosks' => 'getProfileKiosks',
        'profilePlugSets' => 'getProfilePlugSets',
        'profileProgression' => 'getProfileProgression',
        'profilePresentationNodes' => 'getProfilePresentationNodes',
        'profileRecords' => 'getProfileRecords',
        'profileCollectibles' => 'getProfileCollectibles',
        'characters' => 'getCharacters',
        'characterInventories' => 'getCharacterInventories',
        'characterProgressions' => 'getCharacterProgressions',
        'characterRenderData' => 'getCharacterRenderData',
        'characterActivities' => 'getCharacterActivities',
        'characterEquipment' => 'getCharacterEquipment',
        'characterKiosks' => 'getCharacterKiosks',
        'characterPlugSets' => 'getCharacterPlugSets',
        'characterUninstancedItemComponents' => 'getCharacterUninstancedItemComponents',
        'characterPresentationNodes' => 'getCharacterPresentationNodes',
        'characterRecords' => 'getCharacterRecords',
        'characterCollectibles' => 'getCharacterCollectibles',
        'itemComponents' => 'getItemComponents',
        'characterCurrencyLookups' => 'getCharacterCurrencyLookups'
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
        $this->container['vendorReceipts'] = isset($data['vendorReceipts']) ? $data['vendorReceipts'] : null;
        $this->container['profileInventory'] = isset($data['profileInventory']) ? $data['profileInventory'] : null;
        $this->container['profileCurrencies'] = isset($data['profileCurrencies']) ? $data['profileCurrencies'] : null;
        $this->container['profile'] = isset($data['profile']) ? $data['profile'] : null;
        $this->container['platformSilver'] = isset($data['platformSilver']) ? $data['platformSilver'] : null;
        $this->container['profileKiosks'] = isset($data['profileKiosks']) ? $data['profileKiosks'] : null;
        $this->container['profilePlugSets'] = isset($data['profilePlugSets']) ? $data['profilePlugSets'] : null;
        $this->container['profileProgression'] = isset($data['profileProgression']) ? $data['profileProgression'] : null;
        $this->container['profilePresentationNodes'] = isset($data['profilePresentationNodes']) ? $data['profilePresentationNodes'] : null;
        $this->container['profileRecords'] = isset($data['profileRecords']) ? $data['profileRecords'] : null;
        $this->container['profileCollectibles'] = isset($data['profileCollectibles']) ? $data['profileCollectibles'] : null;
        $this->container['characters'] = isset($data['characters']) ? $data['characters'] : null;
        $this->container['characterInventories'] = isset($data['characterInventories']) ? $data['characterInventories'] : null;
        $this->container['characterProgressions'] = isset($data['characterProgressions']) ? $data['characterProgressions'] : null;
        $this->container['characterRenderData'] = isset($data['characterRenderData']) ? $data['characterRenderData'] : null;
        $this->container['characterActivities'] = isset($data['characterActivities']) ? $data['characterActivities'] : null;
        $this->container['characterEquipment'] = isset($data['characterEquipment']) ? $data['characterEquipment'] : null;
        $this->container['characterKiosks'] = isset($data['characterKiosks']) ? $data['characterKiosks'] : null;
        $this->container['characterPlugSets'] = isset($data['characterPlugSets']) ? $data['characterPlugSets'] : null;
        $this->container['characterUninstancedItemComponents'] = isset($data['characterUninstancedItemComponents']) ? $data['characterUninstancedItemComponents'] : null;
        $this->container['characterPresentationNodes'] = isset($data['characterPresentationNodes']) ? $data['characterPresentationNodes'] : null;
        $this->container['characterRecords'] = isset($data['characterRecords']) ? $data['characterRecords'] : null;
        $this->container['characterCollectibles'] = isset($data['characterCollectibles']) ? $data['characterCollectibles'] : null;
        $this->container['itemComponents'] = isset($data['itemComponents']) ? $data['itemComponents'] : null;
        $this->container['characterCurrencyLookups'] = isset($data['characterCurrencyLookups']) ? $data['characterCurrencyLookups'] : null;
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
     * Gets vendorReceipts
     *
     * @return \Bungie\Model\SingleComponentResponseOfDestinyVendorReceiptsComponent|null
     */
    public function getVendorReceipts()
    {
        return $this->container['vendorReceipts'];
    }

    /**
     * Sets vendorReceipts
     *
     * @param \Bungie\Model\SingleComponentResponseOfDestinyVendorReceiptsComponent|null $vendorReceipts Recent, refundable purchases you have made from vendors. When will you use it? Couldn't say...  COMPONENT TYPE: VendorReceipts
     *
     * @return $this
     */
    public function setVendorReceipts($vendorReceipts)
    {
        $this->container['vendorReceipts'] = $vendorReceipts;

        return $this;
    }

    /**
     * Gets profileInventory
     *
     * @return \Bungie\Model\SingleComponentResponseOfDestinyInventoryComponent|null
     */
    public function getProfileInventory()
    {
        return $this->container['profileInventory'];
    }

    /**
     * Sets profileInventory
     *
     * @param \Bungie\Model\SingleComponentResponseOfDestinyInventoryComponent|null $profileInventory The profile-level inventory of the Destiny Profile.  COMPONENT TYPE: ProfileInventories
     *
     * @return $this
     */
    public function setProfileInventory($profileInventory)
    {
        $this->container['profileInventory'] = $profileInventory;

        return $this;
    }

    /**
     * Gets profileCurrencies
     *
     * @return \Bungie\Model\SingleComponentResponseOfDestinyInventoryComponent|null
     */
    public function getProfileCurrencies()
    {
        return $this->container['profileCurrencies'];
    }

    /**
     * Sets profileCurrencies
     *
     * @param \Bungie\Model\SingleComponentResponseOfDestinyInventoryComponent|null $profileCurrencies The profile-level currencies owned by the Destiny Profile.  COMPONENT TYPE: ProfileCurrencies
     *
     * @return $this
     */
    public function setProfileCurrencies($profileCurrencies)
    {
        $this->container['profileCurrencies'] = $profileCurrencies;

        return $this;
    }

    /**
     * Gets profile
     *
     * @return \Bungie\Model\SingleComponentResponseOfDestinyProfileComponent|null
     */
    public function getProfile()
    {
        return $this->container['profile'];
    }

    /**
     * Sets profile
     *
     * @param \Bungie\Model\SingleComponentResponseOfDestinyProfileComponent|null $profile The basic information about the Destiny Profile (formerly \"Account\").  COMPONENT TYPE: Profiles
     *
     * @return $this
     */
    public function setProfile($profile)
    {
        $this->container['profile'] = $profile;

        return $this;
    }

    /**
     * Gets platformSilver
     *
     * @return \Bungie\Model\SingleComponentResponseOfDestinyPlatformSilverComponent|null
     */
    public function getPlatformSilver()
    {
        return $this->container['platformSilver'];
    }

    /**
     * Sets platformSilver
     *
     * @param \Bungie\Model\SingleComponentResponseOfDestinyPlatformSilverComponent|null $platformSilver Silver quantities for any platform on which this Profile plays destiny.   COMPONENT TYPE: PlatformSilver
     *
     * @return $this
     */
    public function setPlatformSilver($platformSilver)
    {
        $this->container['platformSilver'] = $platformSilver;

        return $this;
    }

    /**
     * Gets profileKiosks
     *
     * @return \Bungie\Model\SingleComponentResponseOfDestinyKiosksComponent|null
     */
    public function getProfileKiosks()
    {
        return $this->container['profileKiosks'];
    }

    /**
     * Sets profileKiosks
     *
     * @param \Bungie\Model\SingleComponentResponseOfDestinyKiosksComponent|null $profileKiosks Items available from Kiosks that are available Profile-wide (i.e. across all characters)  This component returns information about what Kiosk items are available to you on a *Profile* level. It is theoretically possible for Kiosks to have items gated by specific Character as well. If you ever have those, you will find them on the characterKiosks property.  COMPONENT TYPE: Kiosks
     *
     * @return $this
     */
    public function setProfileKiosks($profileKiosks)
    {
        $this->container['profileKiosks'] = $profileKiosks;

        return $this;
    }

    /**
     * Gets profilePlugSets
     *
     * @return \Bungie\Model\SingleComponentResponseOfDestinyPlugSetsComponent|null
     */
    public function getProfilePlugSets()
    {
        return $this->container['profilePlugSets'];
    }

    /**
     * Sets profilePlugSets
     *
     * @param \Bungie\Model\SingleComponentResponseOfDestinyPlugSetsComponent|null $profilePlugSets When sockets refer to reusable Plug Sets (see DestinyPlugSetDefinition for more info), this is the set of plugs and their states that are profile-scoped.  This comes back with ItemSockets, as it is needed for a complete picture of the sockets on requested items.  COMPONENT TYPE: ItemSockets
     *
     * @return $this
     */
    public function setProfilePlugSets($profilePlugSets)
    {
        $this->container['profilePlugSets'] = $profilePlugSets;

        return $this;
    }

    /**
     * Gets profileProgression
     *
     * @return \Bungie\Model\SingleComponentResponseOfDestinyProfileProgressionComponent|null
     */
    public function getProfileProgression()
    {
        return $this->container['profileProgression'];
    }

    /**
     * Sets profileProgression
     *
     * @param \Bungie\Model\SingleComponentResponseOfDestinyProfileProgressionComponent|null $profileProgression When we have progression information - such as Checklists - that may apply profile-wide, it will be returned here rather than in the per-character progression data.  COMPONENT TYPE: ProfileProgression
     *
     * @return $this
     */
    public function setProfileProgression($profileProgression)
    {
        $this->container['profileProgression'] = $profileProgression;

        return $this;
    }

    /**
     * Gets profilePresentationNodes
     *
     * @return \Bungie\Model\SingleComponentResponseOfDestinyPresentationNodesComponent|null
     */
    public function getProfilePresentationNodes()
    {
        return $this->container['profilePresentationNodes'];
    }

    /**
     * Sets profilePresentationNodes
     *
     * @param \Bungie\Model\SingleComponentResponseOfDestinyPresentationNodesComponent|null $profilePresentationNodes COMPONENT TYPE: PresentationNodes
     *
     * @return $this
     */
    public function setProfilePresentationNodes($profilePresentationNodes)
    {
        $this->container['profilePresentationNodes'] = $profilePresentationNodes;

        return $this;
    }

    /**
     * Gets profileRecords
     *
     * @return \Bungie\Model\SingleComponentResponseOfDestinyProfileRecordsComponent|null
     */
    public function getProfileRecords()
    {
        return $this->container['profileRecords'];
    }

    /**
     * Sets profileRecords
     *
     * @param \Bungie\Model\SingleComponentResponseOfDestinyProfileRecordsComponent|null $profileRecords COMPONENT TYPE: Records
     *
     * @return $this
     */
    public function setProfileRecords($profileRecords)
    {
        $this->container['profileRecords'] = $profileRecords;

        return $this;
    }

    /**
     * Gets profileCollectibles
     *
     * @return \Bungie\Model\SingleComponentResponseOfDestinyProfileCollectiblesComponent|null
     */
    public function getProfileCollectibles()
    {
        return $this->container['profileCollectibles'];
    }

    /**
     * Sets profileCollectibles
     *
     * @param \Bungie\Model\SingleComponentResponseOfDestinyProfileCollectiblesComponent|null $profileCollectibles COMPONENT TYPE: Collectibles
     *
     * @return $this
     */
    public function setProfileCollectibles($profileCollectibles)
    {
        $this->container['profileCollectibles'] = $profileCollectibles;

        return $this;
    }

    /**
     * Gets characters
     *
     * @return \Bungie\Model\DictionaryComponentResponseOfint64AndDestinyCharacterComponent|null
     */
    public function getCharacters()
    {
        return $this->container['characters'];
    }

    /**
     * Sets characters
     *
     * @param \Bungie\Model\DictionaryComponentResponseOfint64AndDestinyCharacterComponent|null $characters Basic information about each character, keyed by the CharacterId.  COMPONENT TYPE: Characters
     *
     * @return $this
     */
    public function setCharacters($characters)
    {
        $this->container['characters'] = $characters;

        return $this;
    }

    /**
     * Gets characterInventories
     *
     * @return \Bungie\Model\DictionaryComponentResponseOfint64AndDestinyInventoryComponent|null
     */
    public function getCharacterInventories()
    {
        return $this->container['characterInventories'];
    }

    /**
     * Sets characterInventories
     *
     * @param \Bungie\Model\DictionaryComponentResponseOfint64AndDestinyInventoryComponent|null $characterInventories The character-level non-equipped inventory items, keyed by the Character's Id.  COMPONENT TYPE: CharacterInventories
     *
     * @return $this
     */
    public function setCharacterInventories($characterInventories)
    {
        $this->container['characterInventories'] = $characterInventories;

        return $this;
    }

    /**
     * Gets characterProgressions
     *
     * @return \Bungie\Model\DictionaryComponentResponseOfint64AndDestinyCharacterProgressionComponent|null
     */
    public function getCharacterProgressions()
    {
        return $this->container['characterProgressions'];
    }

    /**
     * Sets characterProgressions
     *
     * @param \Bungie\Model\DictionaryComponentResponseOfint64AndDestinyCharacterProgressionComponent|null $characterProgressions Character-level progression data, keyed by the Character's Id.  COMPONENT TYPE: CharacterProgressions
     *
     * @return $this
     */
    public function setCharacterProgressions($characterProgressions)
    {
        $this->container['characterProgressions'] = $characterProgressions;

        return $this;
    }

    /**
     * Gets characterRenderData
     *
     * @return \Bungie\Model\DictionaryComponentResponseOfint64AndDestinyCharacterRenderComponent|null
     */
    public function getCharacterRenderData()
    {
        return $this->container['characterRenderData'];
    }

    /**
     * Sets characterRenderData
     *
     * @param \Bungie\Model\DictionaryComponentResponseOfint64AndDestinyCharacterRenderComponent|null $characterRenderData Character rendering data - a minimal set of info needed to render a character in 3D - keyed by the Character's Id.  COMPONENT TYPE: CharacterRenderData
     *
     * @return $this
     */
    public function setCharacterRenderData($characterRenderData)
    {
        $this->container['characterRenderData'] = $characterRenderData;

        return $this;
    }

    /**
     * Gets characterActivities
     *
     * @return \Bungie\Model\DictionaryComponentResponseOfint64AndDestinyCharacterActivitiesComponent|null
     */
    public function getCharacterActivities()
    {
        return $this->container['characterActivities'];
    }

    /**
     * Sets characterActivities
     *
     * @param \Bungie\Model\DictionaryComponentResponseOfint64AndDestinyCharacterActivitiesComponent|null $characterActivities Character activity data - the activities available to this character and its status, keyed by the Character's Id.  COMPONENT TYPE: CharacterActivities
     *
     * @return $this
     */
    public function setCharacterActivities($characterActivities)
    {
        $this->container['characterActivities'] = $characterActivities;

        return $this;
    }

    /**
     * Gets characterEquipment
     *
     * @return \Bungie\Model\DictionaryComponentResponseOfint64AndDestinyInventoryComponent|null
     */
    public function getCharacterEquipment()
    {
        return $this->container['characterEquipment'];
    }

    /**
     * Sets characterEquipment
     *
     * @param \Bungie\Model\DictionaryComponentResponseOfint64AndDestinyInventoryComponent|null $characterEquipment The character's equipped items, keyed by the Character's Id.  COMPONENT TYPE: CharacterEquipment
     *
     * @return $this
     */
    public function setCharacterEquipment($characterEquipment)
    {
        $this->container['characterEquipment'] = $characterEquipment;

        return $this;
    }

    /**
     * Gets characterKiosks
     *
     * @return \Bungie\Model\DictionaryComponentResponseOfint64AndDestinyKiosksComponent|null
     */
    public function getCharacterKiosks()
    {
        return $this->container['characterKiosks'];
    }

    /**
     * Sets characterKiosks
     *
     * @param \Bungie\Model\DictionaryComponentResponseOfint64AndDestinyKiosksComponent|null $characterKiosks Items available from Kiosks that are available to a specific character as opposed to the account as a whole. It must be combined with data from the profileKiosks property to get a full picture of the character's available items to check out of a kiosk.  This component returns information about what Kiosk items are available to you on a *Character* level. Usually, kiosk items will be earned for the entire Profile (all characters) at once. To find those, look in the profileKiosks property.  COMPONENT TYPE: Kiosks
     *
     * @return $this
     */
    public function setCharacterKiosks($characterKiosks)
    {
        $this->container['characterKiosks'] = $characterKiosks;

        return $this;
    }

    /**
     * Gets characterPlugSets
     *
     * @return \Bungie\Model\DictionaryComponentResponseOfint64AndDestinyPlugSetsComponent|null
     */
    public function getCharacterPlugSets()
    {
        return $this->container['characterPlugSets'];
    }

    /**
     * Sets characterPlugSets
     *
     * @param \Bungie\Model\DictionaryComponentResponseOfint64AndDestinyPlugSetsComponent|null $characterPlugSets When sockets refer to reusable Plug Sets (see DestinyPlugSetDefinition for more info), this is the set of plugs and their states, per character, that are character-scoped.  This comes back with ItemSockets, as it is needed for a complete picture of the sockets on requested items.  COMPONENT TYPE: ItemSockets
     *
     * @return $this
     */
    public function setCharacterPlugSets($characterPlugSets)
    {
        $this->container['characterPlugSets'] = $characterPlugSets;

        return $this;
    }

    /**
     * Gets characterUninstancedItemComponents
     *
     * @return map[string,\Bungie\Model\DestinyBaseItemComponentSetOfuint32]|null
     */
    public function getCharacterUninstancedItemComponents()
    {
        return $this->container['characterUninstancedItemComponents'];
    }

    /**
     * Sets characterUninstancedItemComponents
     *
     * @param map[string,\Bungie\Model\DestinyBaseItemComponentSetOfuint32]|null $characterUninstancedItemComponents Do you ever get the feeling that a system was designed *too* flexibly? That it can be used in so many different ways that you end up being unable to provide an easy to use abstraction for the mess that's happening under the surface?  Let's talk about character-specific data that might be related to items without instances. These two statements are totally unrelated, I promise.  At some point during D2, it was decided that items - such as Bounties - could be given to characters and *not* have instance data, but that *could* display and even use relevant state information on your account and character.  Up to now, any item that had meaningful dependencies on character or account state had to be instanced, and thus \"itemComponents\" was all that you needed: it was keyed by item's instance IDs and provided the stateful information you needed inside.  Unfortunately, we don't live in such a magical world anymore. This is information held on a per-character basis about non-instanced items that the characters have in their inventory - or that reference character-specific state information even if it's in Account-level inventory - and the values related to that item's state in relation to the given character.  To give a concrete example, look at a Moments of Triumph bounty. They exist in a character's inventory, and show/care about a character's progression toward completing the bounty. But the bounty itself is a non-instanced item, like a mod or a currency. This returns that data for the characters who have the bounty in their inventory.  I'm not crying, you're crying Okay we're both crying but it's going to be okay I promise Actually I shouldn't promise that, I don't know if it's going to be okay
     *
     * @return $this
     */
    public function setCharacterUninstancedItemComponents($characterUninstancedItemComponents)
    {
        $this->container['characterUninstancedItemComponents'] = $characterUninstancedItemComponents;

        return $this;
    }

    /**
     * Gets characterPresentationNodes
     *
     * @return \Bungie\Model\DictionaryComponentResponseOfint64AndDestinyPresentationNodesComponent|null
     */
    public function getCharacterPresentationNodes()
    {
        return $this->container['characterPresentationNodes'];
    }

    /**
     * Sets characterPresentationNodes
     *
     * @param \Bungie\Model\DictionaryComponentResponseOfint64AndDestinyPresentationNodesComponent|null $characterPresentationNodes COMPONENT TYPE: PresentationNodes
     *
     * @return $this
     */
    public function setCharacterPresentationNodes($characterPresentationNodes)
    {
        $this->container['characterPresentationNodes'] = $characterPresentationNodes;

        return $this;
    }

    /**
     * Gets characterRecords
     *
     * @return \Bungie\Model\DictionaryComponentResponseOfint64AndDestinyCharacterRecordsComponent|null
     */
    public function getCharacterRecords()
    {
        return $this->container['characterRecords'];
    }

    /**
     * Sets characterRecords
     *
     * @param \Bungie\Model\DictionaryComponentResponseOfint64AndDestinyCharacterRecordsComponent|null $characterRecords COMPONENT TYPE: Records
     *
     * @return $this
     */
    public function setCharacterRecords($characterRecords)
    {
        $this->container['characterRecords'] = $characterRecords;

        return $this;
    }

    /**
     * Gets characterCollectibles
     *
     * @return \Bungie\Model\DictionaryComponentResponseOfint64AndDestinyCollectiblesComponent|null
     */
    public function getCharacterCollectibles()
    {
        return $this->container['characterCollectibles'];
    }

    /**
     * Sets characterCollectibles
     *
     * @param \Bungie\Model\DictionaryComponentResponseOfint64AndDestinyCollectiblesComponent|null $characterCollectibles COMPONENT TYPE: Collectibles
     *
     * @return $this
     */
    public function setCharacterCollectibles($characterCollectibles)
    {
        $this->container['characterCollectibles'] = $characterCollectibles;

        return $this;
    }

    /**
     * Gets itemComponents
     *
     * @return \Bungie\Model\DestinyItemComponentSetOfint64|null
     */
    public function getItemComponents()
    {
        return $this->container['itemComponents'];
    }

    /**
     * Sets itemComponents
     *
     * @param \Bungie\Model\DestinyItemComponentSetOfint64|null $itemComponents Information about instanced items across all returned characters, keyed by the item's instance ID.  COMPONENT TYPE: [See inside the DestinyItemComponentSet contract for component types.]
     *
     * @return $this
     */
    public function setItemComponents($itemComponents)
    {
        $this->container['itemComponents'] = $itemComponents;

        return $this;
    }

    /**
     * Gets characterCurrencyLookups
     *
     * @return \Bungie\Model\DictionaryComponentResponseOfint64AndDestinyCurrenciesComponent|null
     */
    public function getCharacterCurrencyLookups()
    {
        return $this->container['characterCurrencyLookups'];
    }

    /**
     * Sets characterCurrencyLookups
     *
     * @param \Bungie\Model\DictionaryComponentResponseOfint64AndDestinyCurrenciesComponent|null $characterCurrencyLookups A \"lookup\" convenience component that can be used to quickly check if the character has access to items that can be used for purchasing.  COMPONENT TYPE: CurrencyLookups
     *
     * @return $this
     */
    public function setCharacterCurrencyLookups($characterCurrencyLookups)
    {
        $this->container['characterCurrencyLookups'] = $characterCurrencyLookups;

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


