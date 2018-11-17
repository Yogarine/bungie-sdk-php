# DestinyDefinitionsRecordsDestinyRecordDefinition

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**displayProperties** | [**\Bungie\Model\DestinyDefinitionsCommonDestinyDisplayPropertiesDefinition**](DestinyDefinitionsCommonDestinyDisplayPropertiesDefinition.md) |  | [optional] 
**scope** | [**DestinyDestinyScope**](DestinyDestinyScope.md) | Indicates whether this Record&#39;s state is determined on a per-character or on an account-wide basis. | [optional] 
**presentationInfo** | [**\Bungie\Model\DestinyDefinitionsPresentationDestinyPresentationChildBlock**](DestinyDefinitionsPresentationDestinyPresentationChildBlock.md) |  | [optional] 
**loreHash** | **int** |  | [optional] 
**objectiveHashes** | **int[]** |  | [optional] 
**recordValueStyle** | [**\Bungie\Model\DestinyDestinyRecordValueStyle**](DestinyDestinyRecordValueStyle.md) |  | [optional] 
**titleInfo** | [**\Bungie\Model\DestinyDefinitionsRecordsDestinyRecordTitleBlock**](DestinyDefinitionsRecordsDestinyRecordTitleBlock.md) |  | [optional] 
**completionInfo** | [**\Bungie\Model\DestinyDefinitionsRecordsDestinyRecordCompletionBlock**](DestinyDefinitionsRecordsDestinyRecordCompletionBlock.md) |  | [optional] 
**stateInfo** | [**\Bungie\Model\DestinyDefinitionsRecordsSchemaRecordStateBlock**](DestinyDefinitionsRecordsSchemaRecordStateBlock.md) |  | [optional] 
**requirements** | [**\Bungie\Model\DestinyDefinitionsPresentationDestinyPresentationNodeRequirementsBlock**](DestinyDefinitionsPresentationDestinyPresentationNodeRequirementsBlock.md) |  | [optional] 
**hash** | **int** | The unique identifier for this entity. Guaranteed to be unique for the type of entity, but not globally.  When entities refer to each other in Destiny content, it is this hash that they are referring to. | [optional] 
**index** | **int** | The index of the entity as it was found in the investment tables. | [optional] 
**redacted** | **bool** | If this is true, then there is an entity with this identifier/type combination, but BNet is not yet allowed to show it. Sorry! | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


