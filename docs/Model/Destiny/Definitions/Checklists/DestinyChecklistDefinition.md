# DestinyChecklistDefinition

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**displayProperties** | [**\Bungie\Model\Destiny\Definitions\Common\DestinyDisplayPropertiesDefinition**](DestinyDisplayPropertiesDefinition.md) |  | [optional] 
**viewActionString** | **string** | A localized string prompting you to view the checklist. | [optional] 
**scope** | [**\Bungie\Model\Destiny\DestinyScope**](DestinyScope.md) | Indicates whether you will find this checklist on the Profile or Character components. | [optional] 
**entries** | [**\Bungie\Model\Destiny\Definitions\Checklists\DestinyChecklistEntryDefinition[]**](DestinyChecklistEntryDefinition.md) | The individual checklist items. Gotta catch &#39;em all. | [optional] 
**hash** | **int** | The unique identifier for this entity. Guaranteed to be unique for the type of entity, but not globally.  When entities refer to each other in Destiny content, it is this hash that they are referring to. | [optional] 
**index** | **int** | The index of the entity as it was found in the investment tables. | [optional] 
**redacted** | **bool** | If this is true, then there is an entity with this identifier/type combination, but BNet is not yet allowed to show it. Sorry! | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


