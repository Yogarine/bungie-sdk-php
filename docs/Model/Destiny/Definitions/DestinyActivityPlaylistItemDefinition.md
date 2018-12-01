# DestinyActivityPlaylistItemDefinition

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**activityHash** | **int** | The hash identifier of the Activity that can be played. Use it to look up the DestinyActivityDefinition. | [optional] 
**directActivityModeHash** | **int** | If this playlist entry had an activity mode directly defined on it, this will be the hash of that mode. | [optional] 
**directActivityModeType** | **int** | If the playlist entry had an activity mode directly defined on it, this will be the enum value of that mode. | [optional] 
**activityModeHashes** | **int[]** | The hash identifiers for Activity Modes relevant to this entry. | [optional] 
**activityModeTypes** | [**\Bungie\Model\Destiny\HistoricalStats\Definitions\DestinyActivityModeType[]**](DestinyActivityModeType.md) | The activity modes - if any - in enum form. Because we can&#39;t seem to escape the enums. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


