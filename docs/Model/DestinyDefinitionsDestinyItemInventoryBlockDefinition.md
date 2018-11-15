# DestinyDefinitionsDestinyItemInventoryBlockDefinition

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**stackUniqueLabel** | **string** | If this string is populated, you can&#39;t have more than one stack with this label in a given inventory. Note that this is different from the equipping block&#39;s unique label, which is used for equipping uniqueness. | [optional] 
**maxStackSize** | **int** | The maximum quantity of this item that can exist in a stack. | [optional] 
**bucketTypeHash** | **int** | The hash identifier for the DestinyInventoryBucketDefinition to which this item belongs. I should have named this \&quot;bucketHash\&quot;, but too many things refer to it now. Sigh. | [optional] 
**recoveryBucketTypeHash** | **int** | If the item is picked up by the lost loot queue, this is the hash identifier for the DestinyInventoryBucketDefinition into which it will be placed. Again, I should have named this recoveryBucketHash instead. | [optional] 
**tierTypeHash** | **int** | The hash identifier for the Tier Type of the item, use to look up its DestinyItemTierTypeDefinition if you need to show localized data for the item&#39;s tier. | [optional] 
**isInstanceItem** | **bool** | If TRUE, this item is instanced. Otherwise, it is a generic item that merely has a quantity in a stack (like Glimmer). | [optional] 
**tierTypeName** | **string** | The localized name of the tier type, which is a useful shortcut so you don&#39;t have to look up the definition every time. However, it&#39;s mostly a holdover from days before we had a DestinyItemTierTypeDefinition to refer to. | [optional] 
**tierType** | **object** | The enumeration matching the tier type of the item to known values, again for convenience sake. | [optional] 
**expirationTooltip** | **string** | The tooltip message to show, if any, when the item expires. | [optional] 
**expiredInActivityMessage** | **string** | If the item expires while playing in an activity, we show a different message. | [optional] 
**expiredInOrbitMessage** | **string** | If the item expires in orbit, we show a... more different message. (\&quot;Consummate V&#39;s, consummate!\&quot;) | [optional] 
**suppressExpirationWhenObjectivesComplete** | **bool** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


