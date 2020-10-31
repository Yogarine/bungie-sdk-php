# DestinyRecordDefinition

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**displayProperties** | [**\Bungie\Model\Destiny\Definitions\Common\DestinyDisplayPropertiesDefinition**](DestinyDisplayPropertiesDefinition.md) |  | [optional] 
**scope** | **int** | Indicates whether this Record&#39;s state is determined on a per-character or on an account-wide basis. | [optional] 
**presentationInfo** | [**\Bungie\Model\Destiny\Definitions\Presentation\DestinyPresentationChildBlock**](DestinyPresentationChildBlock.md) |  | [optional] 
**loreHash** | **int** |  | [optional] 
**objectiveHashes** | **int[]** |  | [optional] 
**recordValueStyle** | **int** |  | [optional] 
**titleInfo** | [**\Bungie\Model\Destiny\Definitions\Records\DestinyRecordTitleBlock**](DestinyRecordTitleBlock.md) |  | [optional] 
**completionInfo** | [**\Bungie\Model\Destiny\Definitions\Records\DestinyRecordCompletionBlock**](DestinyRecordCompletionBlock.md) |  | [optional] 
**stateInfo** | [**\Bungie\Model\Destiny\Definitions\Records\SchemaRecordStateBlock**](SchemaRecordStateBlock.md) |  | [optional] 
**requirements** | [**\Bungie\Model\Destiny\Definitions\Presentation\DestinyPresentationNodeRequirementsBlock**](DestinyPresentationNodeRequirementsBlock.md) |  | [optional] 
**expirationInfo** | [**\Bungie\Model\Destiny\Definitions\Records\DestinyRecordExpirationBlock**](DestinyRecordExpirationBlock.md) |  | [optional] 
**intervalInfo** | [**\Bungie\Model\Destiny\Definitions\Records\DestinyRecordIntervalBlock**](DestinyRecordIntervalBlock.md) | Some records have multiple &#39;interval&#39; objectives, and the record may be claimed at each completed interval | [optional] 
**rewardItems** | [**\Bungie\Model\Destiny\DestinyItemQuantity[]**](DestinyItemQuantity.md) | If there is any publicly available information about rewards earned for achieving this record, this is the list of those items.   However, note that some records intentionally have \&quot;hidden\&quot; rewards. These will not be returned in this list. | [optional] 
**presentationNodeType** | **int** |  | [optional] 
**traitIds** | **string[]** |  | [optional] 
**traitHashes** | **int[]** |  | [optional] 
**parentNodeHashes** | **int[]** | A quick reference to presentation nodes that have this node as a child. Presentation nodes can be parented under multiple parents. | [optional] 
**hash** | **int** | The unique identifier for this entity. Guaranteed to be unique for the type of entity, but not globally.  When entities refer to each other in Destiny content, it is this hash that they are referring to. | [optional] 
**index** | **int** | The index of the entity as it was found in the investment tables. | [optional] 
**redacted** | **bool** | If this is true, then there is an entity with this identifier/type combination, but BNet is not yet allowed to show it. Sorry! | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


