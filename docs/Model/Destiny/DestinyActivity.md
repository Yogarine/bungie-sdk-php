# DestinyActivity

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**activityHash** | **int** | The hash identifier of the Activity. Use this to look up the DestinyActivityDefinition of the activity. | [optional] 
**isNew** | **bool** | If true, then the activity should have a \&quot;new\&quot; indicator in the Director UI. | [optional] 
**canLead** | **bool** | If true, the user is allowed to lead a Fireteam into this activity. | [optional] 
**canJoin** | **bool** | If true, the user is allowed to join with another Fireteam in this activity. | [optional] 
**isCompleted** | **bool** | If true, we both have the ability to know that the user has completed this activity and they have completed it. Unfortunately, we can&#39;t necessarily know this for all activities. As such, this should probably only be used if you already know in advance which specific activities you wish to check. | [optional] 
**isVisible** | **bool** | If true, the user should be able to see this activity. | [optional] 
**displayLevel** | **int** | The difficulty level of the activity, if applicable. | [optional] 
**recommendedLight** | **int** | The recommended light level for the activity, if applicable. | [optional] 
**difficultyTier** | [**\Bungie\Model\Destiny\DestinyActivityDifficultyTier**](DestinyActivityDifficultyTier.md) | A DestinyActivityDifficultyTier enum value indicating the difficulty of the activity. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


