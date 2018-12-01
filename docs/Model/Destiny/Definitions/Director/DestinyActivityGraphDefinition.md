# DestinyActivityGraphDefinition

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**nodes** | [**\Bungie\Model\Destiny\Definitions\Director\DestinyActivityGraphNodeDefinition[]**](DestinyActivityGraphNodeDefinition.md) | These represent the visual \&quot;nodes\&quot; on the map&#39;s view. These are the activities you can click on in the map. | [optional] 
**artElements** | [**\Bungie\Model\Destiny\Definitions\Director\DestinyActivityGraphArtElementDefinition[]**](DestinyActivityGraphArtElementDefinition.md) | Represents one-off/special UI elements that appear on the map. | [optional] 
**connections** | [**\Bungie\Model\Destiny\Definitions\Director\DestinyActivityGraphConnectionDefinition[]**](DestinyActivityGraphConnectionDefinition.md) | Represents connections between graph nodes. However, it lacks context that we&#39;d need to make good use of it. | [optional] 
**displayObjectives** | [**\Bungie\Model\Destiny\Definitions\Director\DestinyActivityGraphDisplayObjectiveDefinition[]**](DestinyActivityGraphDisplayObjectiveDefinition.md) | Objectives can display on maps, and this is supposedly metadata for that. I have not had the time to analyze the details of what is useful within however: we could be missing important data to make this work. Expect this property to be expanded on later if possible. | [optional] 
**displayProgressions** | [**\Bungie\Model\Destiny\Definitions\Director\DestinyActivityGraphDisplayProgressionDefinition[]**](DestinyActivityGraphDisplayProgressionDefinition.md) | Progressions can also display on maps, but similarly to displayObjectives we appear to lack some required information and context right now. We will have to look into it later and add more data if possible. | [optional] 
**linkedGraphs** | [**\Bungie\Model\Destiny\Definitions\Director\DestinyLinkedGraphDefinition[]**](DestinyLinkedGraphDefinition.md) | Represents links between this Activity Graph and other ones. | [optional] 
**hash** | **int** | The unique identifier for this entity. Guaranteed to be unique for the type of entity, but not globally.  When entities refer to each other in Destiny content, it is this hash that they are referring to. | [optional] 
**index** | **int** | The index of the entity as it was found in the investment tables. | [optional] 
**redacted** | **bool** | If this is true, then there is an entity with this identifier/type combination, but BNet is not yet allowed to show it. Sorry! | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


