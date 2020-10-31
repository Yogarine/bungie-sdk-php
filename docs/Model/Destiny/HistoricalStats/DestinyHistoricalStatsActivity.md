# DestinyHistoricalStatsActivity

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**referenceId** | **int** | The unique hash identifier of the DestinyActivityDefinition that was played. If I had this to do over, it&#39;d be named activityHash. Too late now. | [optional] 
**directorActivityHash** | **int** | The unique hash identifier of the DestinyActivityDefinition that was played. | [optional] 
**instanceId** | **int** | The unique identifier for this *specific* match that was played.  This value can be used to get additional data about this activity such as who else was playing via the GetPostGameCarnageReport endpoint. | [optional] 
**mode** | **int** | Indicates the most specific game mode of the activity that we could find. | [optional] 
**modes** | **int[]** | The list of all Activity Modes to which this activity applies, including aggregates. This will let you see, for example, whether the activity was both Clash and part of the Trials of the Nine event. | [optional] 
**isPrivate** | **bool** | Whether or not the match was a private match. | [optional] 
**membershipType** | **int** | The Membership Type indicating the platform on which this match was played. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


