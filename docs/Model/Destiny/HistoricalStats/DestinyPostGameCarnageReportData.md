# DestinyPostGameCarnageReportData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**period** | **\DateTime** | Date and time for the activity. | [optional] 
**startingPhaseIndex** | **int** | If this activity has \&quot;phases\&quot;, this is the phase at which the activity was started. This value is only valid for activities before the Beyond Light expansion shipped. Subsequent activities will not have a valid value here. | [optional] 
**activityWasStartedFromBeginning** | **bool** | True if the activity was started from the beginning, if that information is available and the activity was played post Witch Queen release. | [optional] 
**activityDetails** | [**\Bungie\Model\Destiny\HistoricalStats\DestinyHistoricalStatsActivity**](DestinyHistoricalStatsActivity.md) | Details about the activity. | [optional] 
**entries** | [**\Bungie\Model\Destiny\HistoricalStats\DestinyPostGameCarnageReportEntry[]**](DestinyPostGameCarnageReportEntry.md) | Collection of players and their data for this activity. | [optional] 
**teams** | [**\Bungie\Model\Destiny\HistoricalStats\DestinyPostGameCarnageReportTeamEntry[]**](DestinyPostGameCarnageReportTeamEntry.md) | Collection of stats for the player in this activity. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


