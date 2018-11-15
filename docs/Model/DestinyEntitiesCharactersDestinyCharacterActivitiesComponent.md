# DestinyEntitiesCharactersDestinyCharacterActivitiesComponent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**dateActivityStarted** | [**\DateTime**](\DateTime.md) | The last date that the user started playing an activity. | [optional] 
**availableActivities** | [**\Bungie\Model\DestinyDestinyActivity[]**](DestinyDestinyActivity.md) | The list of activities that the user can play. | [optional] 
**currentActivityHash** | **int** | If the user is in an activity, this will be the hash of the Activity being played. Note that you must combine this info with currentActivityModeHash to get a real picture of what the user is doing right now. For instance, PVP \&quot;Activities\&quot; are just maps: it&#39;s the ActivityMode that determines what type of PVP game they&#39;re playing. | [optional] 
**currentActivityModeHash** | **int** | If the user is in an activity, this will be the hash of the activity mode being played. Combine with currentActivityHash to give a person a full picture of what they&#39;re doing right now. | [optional] 
**currentActivityModeType** | **int** | And the current activity&#39;s most specific mode type, if it can be found. | [optional] 
**currentActivityModeHashes** | **int[]** | If the user is in an activity, this will be the hashes of the DestinyActivityModeDefinition being played. Combine with currentActivityHash to give a person a full picture of what they&#39;re doing right now. | [optional] 
**currentActivityModeTypes** | [**\Bungie\Model\DestinyHistoricalStatsDefinitionsDestinyActivityModeType[]**](DestinyHistoricalStatsDefinitionsDestinyActivityModeType.md) | All Activity Modes that apply to the current activity being played, in enum form. | [optional] 
**currentPlaylistActivityHash** | **int** | If the user is in a playlist, this is the hash identifier for the playlist that they chose. | [optional] 
**lastCompletedStoryHash** | **int** | This will have the activity hash of the last completed story/campaign mission, in case you care about that. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


