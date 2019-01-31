# DestinyCollectibleDefinition

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**displayProperties** | [**\Bungie\Model\Destiny\Definitions\Common\DestinyDisplayPropertiesDefinition**](DestinyDisplayPropertiesDefinition.md) |  | [optional] 
**scope** | **int** | Indicates whether this Collectible&#39;s state is determined on a per-character or on an account-wide basis. | [optional] 
**sourceString** | **string** | A human readable string for a hint about how to acquire the item. | [optional] 
**sourceHash** | **int** | This is a hash identifier we are building on the BNet side in an attempt to let people group collectibles by similar sources.  I can&#39;t promise that it&#39;s going to be 100% accurate, but if the designers were consistent in assigning the same source strings to items with the same sources, it *ought to* be. No promises though.  This hash also doesn&#39;t relate to an actual definition, just to note: we&#39;ve got nothing useful other than the source string for this data. | [optional] 
**itemHash** | **int** |  | [optional] 
**acquisitionInfo** | [**\Bungie\Model\Destiny\Definitions\Collectibles\DestinyCollectibleAcquisitionBlock**](DestinyCollectibleAcquisitionBlock.md) |  | [optional] 
**stateInfo** | [**\Bungie\Model\Destiny\Definitions\Collectibles\DestinyCollectibleStateBlock**](DestinyCollectibleStateBlock.md) |  | [optional] 
**presentationInfo** | [**\Bungie\Model\Destiny\Definitions\Presentation\DestinyPresentationChildBlock**](DestinyPresentationChildBlock.md) |  | [optional] 
**hash** | **int** | The unique identifier for this entity. Guaranteed to be unique for the type of entity, but not globally.  When entities refer to each other in Destiny content, it is this hash that they are referring to. | [optional] 
**index** | **int** | The index of the entity as it was found in the investment tables. | [optional] 
**redacted** | **bool** | If this is true, then there is an entity with this identifier/type combination, but BNet is not yet allowed to show it. Sorry! | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


