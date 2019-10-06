# DestinyItemInstanceComponent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**damageType** | **int** | If the item has a damage type, this is the item&#39;s current damage type. | [optional] 
**damageTypeHash** | **int** | The current damage type&#39;s hash, so you can look up localized info and icons for it. | [optional] 
**primaryStat** | [**\Bungie\Model\Destiny\DestinyStat**](DestinyStat.md) | The item stat that we consider to be \&quot;primary\&quot; for the item. For instance, this would be \&quot;Attack\&quot; for Weapons or \&quot;Defense\&quot; for armor. | [optional] 
**itemLevel** | **int** | The Item&#39;s \&quot;Level\&quot; has the most significant bearing on its stats, such as Light and Power. | [optional] 
**quality** | **int** | The \&quot;Quality\&quot; of the item has a lesser - but still impactful - bearing on stats like Light and Power. | [optional] 
**isEquipped** | **bool** | Is the item currently equipped on the given character? | [optional] 
**canEquip** | **bool** | If this is an equippable item, you can check it here. There are permanent as well as transitory reasons why an item might not be able to be equipped: check cannotEquipReason for details. | [optional] 
**equipRequiredLevel** | **int** | If the item cannot be equipped until you reach a certain level, that level will be reflected here. | [optional] 
**unlockHashesRequiredToEquip** | **int[]** | Sometimes, there are limitations to equipping that are represented by character-level flags called \&quot;unlocks\&quot;.  This is a list of flags that they need in order to equip the item that the character has not met. Use these to look up the descriptions to show in your UI by looking up the relevant DestinyUnlockDefinitions for the hashes. | [optional] 
**cannotEquipReason** | **int** | If you cannot equip the item, this is a flags enum that enumerates all of the reasons why you couldn&#39;t equip the item. You may need to refine your UI further by using unlockHashesRequiredToEquip and equipRequiredLevel. | [optional] 
**breakerType** | **int** | If populated, this item has a breaker type corresponding to the given value. See DestinyBreakerTypeDefinition for more details. | [optional] 
**breakerTypeHash** | **int** | If populated, this is the hash identifier for the item&#39;s breaker type. See DestinyBreakerTypeDefinition for more details. | [optional] 
**energy** | [**\Bungie\Model\Destiny\Entities\Items\DestinyItemInstanceEnergy**](DestinyItemInstanceEnergy.md) | IF populated, this item supports Energy mechanics (i.e. Armor 2.0), and these are the current details of its energy type and available capacity to spend energy points. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


