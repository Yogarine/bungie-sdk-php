# DestinyItemPlugDefinition

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**insertionRules** | [**\Bungie\Model\Destiny\Definitions\Items\DestinyPlugRuleDefinition[]**](DestinyPlugRuleDefinition.md) | The rules around when this plug can be inserted into a socket, aside from the socket&#39;s individual restrictions.  The live data DestinyItemPlugComponent.insertFailIndexes will be an index into this array, so you can pull out the failure strings appropriate for the user. | [optional] 
**plugCategoryIdentifier** | **string** | The string identifier for the plug&#39;s category. Use the socket&#39;s DestinySocketTypeDefinition.plugWhitelist to determine whether this plug can be inserted into the socket. | [optional] 
**plugCategoryHash** | **int** | The hash for the plugCategoryIdentifier. You can use this instead if you wish: I put both in the definition for debugging purposes. | [optional] 
**onActionRecreateSelf** | **bool** | If you successfully socket the item, this will determine whether or not you get \&quot;refunded\&quot; on the plug. | [optional] 
**insertionMaterialRequirementHash** | **int** | If inserting this plug requires materials, this is the hash identifier for looking up the DestinyMaterialRequirementSetDefinition for those requirements. | [optional] 
**previewItemOverrideHash** | **int** | In the game, if you&#39;re inspecting a plug item directly, this will be the item shown with the plug attached. Look up the DestinyInventoryItemDefinition for this hash for the item. | [optional] 
**enabledMaterialRequirementHash** | **int** | It&#39;s not enough for the plug to be inserted. It has to be enabled as well. For it to be enabled, it may require materials. This is the hash identifier for the DestinyMaterialRequirementSetDefinition for those requirements, if there is one. | [optional] 
**enabledRules** | [**\Bungie\Model\Destiny\Definitions\Items\DestinyPlugRuleDefinition[]**](DestinyPlugRuleDefinition.md) | The rules around whether the plug, once inserted, is enabled and providing its benefits.  The live data DestinyItemPlugComponent.enableFailIndexes will be an index into this array, so you can pull out the failure strings appropriate for the user. | [optional] 
**uiPlugLabel** | **string** | Plugs can have arbitrary, UI-defined identifiers that the UI designers use to determine the style applied to plugs. Unfortunately, we have neither a definitive list of these labels nor advance warning of when new labels might be applied or how that relates to how they get rendered. If you want to, you can refer to known labels to change your own styles: but know that new ones can be created arbitrarily, and we have no way of associating the labels with any specific UI style guidance... you&#39;ll have to piece that together on your end. Or do what we do, and just show plugs more generically, without specialized styles. | [optional] 
**plugStyle** | **int** |  | [optional] 
**plugAvailability** | **int** | Indicates the rules about when this plug can be used. See the PlugAvailabilityMode enumeration for more information! | [optional] 
**alternateUiPlugLabel** | **string** | If the plug meets certain state requirements, it may have an alternative label applied to it. This is the alternative label that will be applied in such a situation. | [optional] 
**alternatePlugStyle** | **int** | The alternate plug of the plug: only applies when the item is in states that only the server can know about and control, unfortunately. See AlternateUiPlugLabel for the related label info. | [optional] 
**isDummyPlug** | **bool** | If TRUE, this plug is used for UI display purposes only, and doesn&#39;t have any interesting effects of its own. | [optional] 
**parentItemOverride** | [**\Bungie\Model\Destiny\Definitions\Items\DestinyParentItemOverride**](DestinyParentItemOverride.md) | Do you ever get the feeling that a system has become so overburdened by edge cases that it probably should have become some other system entirely? So do I!  In totally unrelated news, Plugs can now override properties of their parent items. This is some of the relevant definition data for those overrides.  If this is populated, it will have the override data to be applied when this plug is applied to an item. | [optional] 
**energyCapacity** | [**\Bungie\Model\Destiny\Definitions\Items\DestinyEnergyCapacityEntry**](DestinyEnergyCapacityEntry.md) | IF not null, this plug provides Energy capacity to the item in which it is socketed. In Armor 2.0 for example, is implemented in a similar way to Masterworks, where visually it&#39;s a single area of the UI being clicked on to \&quot;Upgrade\&quot; to higher energy levels, but it&#39;s actually socketing new plugs. | [optional] 
**energyCost** | [**\Bungie\Model\Destiny\Definitions\Items\DestinyEnergyCostEntry**](DestinyEnergyCostEntry.md) | IF not null, this plug has an energy cost. This contains the details of that cost. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


