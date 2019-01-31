# DestinyLocationReleaseDefinition

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**displayProperties** | [**\Bungie\Model\Destiny\Definitions\Common\DestinyDisplayPropertiesDefinition**](DestinyDisplayPropertiesDefinition.md) | Sadly, these don&#39;t appear to be populated anymore (ever?) | [optional] 
**smallTransparentIcon** | **string** |  | [optional] 
**mapIcon** | **string** |  | [optional] 
**largeTransparentIcon** | **string** |  | [optional] 
**spawnPoint** | **int** | If we had map information, this spawnPoint would be interesting. But sadly, we don&#39;t have that info. | [optional] 
**destinationHash** | **int** | The Destination being pointed to by this location. | [optional] 
**activityHash** | **int** | The Activity being pointed to by this location. | [optional] 
**activityGraphHash** | **int** | The Activity Graph being pointed to by this location. | [optional] 
**activityGraphNodeHash** | **int** | The Activity Graph Node being pointed to by this location. (Remember that Activity Graph Node hashes are only unique within an Activity Graph: so use the combination to find the node being spoken of) | [optional] 
**activityBubbleName** | **int** | The Activity Bubble within the Destination. Look this up in the DestinyDestinationDefinition&#39;s bubbles and bubbleSettings properties. | [optional] 
**activityPathBundle** | **int** | If we had map information, this would tell us something cool about the path this location wants you to take. I wish we had map information. | [optional] 
**activityPathDestination** | **int** | If we had map information, this would tell us about path information related to destination on the map. Sad. Maybe you can do something cool with it. Go to town man. | [optional] 
**navPointType** | **int** | The type of Nav Point that this represents. See the enumeration for more info. | [optional] 
**worldPosition** | **int[]** | Looks like it should be the position on the map, but sadly it does not look populated... yet? | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


