# DestinyProgressionRewardItemQuantity

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**rewardedAtProgressionLevel** | **int** |  | [optional] 
**acquisitionBehavior** | **int** |  | [optional] 
**uiDisplayStyle** | **string** |  | [optional] 
**claimUnlockDisplayStrings** | **string[]** |  | [optional] 
**itemHash** | **int** | The hash identifier for the item in question. Use it to look up the item&#39;s DestinyInventoryItemDefinition. | [optional] 
**itemInstanceId** | **int** | If this quantity is referring to a specific instance of an item, this will have the item&#39;s instance ID. Normally, this will be null. | [optional] 
**quantity** | **int** | The amount of the item needed/available depending on the context of where DestinyItemQuantity is being used. | [optional] 
**hasConditionalVisibility** | **bool** | Indicates that this item quantity may be conditionally shown or hidden, based on various sources of state. For example: server flags, account state, or character progress. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


