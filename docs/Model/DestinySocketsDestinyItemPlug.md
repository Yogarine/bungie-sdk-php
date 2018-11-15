# DestinySocketsDestinyItemPlug

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**plugItemHash** | **int** | The hash identifier of the DestinyInventoryItemDefinition that represents this plug. | [optional] 
**plugObjectives** | [**\Bungie\Model\DestinyQuestsDestinyObjectiveProgress[]**](DestinyQuestsDestinyObjectiveProgress.md) | Sometimes, Plugs may have objectives: these are often used for flavor and display purposes, but they can be used for any arbitrary purpose (both fortunately and unfortunately). Recently (with Season 2) they were expanded in use to be used as the \&quot;gating\&quot; for whether the plug can be inserted at all. For instance, a Plug might be tracking the number of PVP kills you have made. It will use the parent item&#39;s data about that tracking status to determine what to show, and will generally show it using the DestinyObjectiveDefinition&#39;s progressDescription property. Refer to the plug&#39;s itemHash and objective property for more information if you would like to display even more data. | [optional] 
**canInsert** | **bool** | If true, this plug has met all of its insertion requirements. Big if true. | [optional] 
**enabled** | **bool** | If true, this plug will provide its benefits while inserted. | [optional] 
**insertFailIndexes** | **int[]** | If the plug cannot be inserted for some reason, this will have the indexes into the plug item definition&#39;s plug.insertionRules property, so you can show the reasons why it can&#39;t be inserted.  This list will be empty if the plug can be inserted. | [optional] 
**enableFailIndexes** | **int[]** | If a plug is not enabled, this will be populated with indexes into the plug item definition&#39;s plug.enabledRules property, so that you can show the reasons why it is not enabled.  This list will be empty if the plug is enabled. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


