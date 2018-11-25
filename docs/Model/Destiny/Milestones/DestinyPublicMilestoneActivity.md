# DestinyPublicMilestoneActivity

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**activityHash** | **int** | The hash identifier of the activity that&#39;s been chosen to be considered the canonical \&quot;conceptual\&quot; activity definition. This may have many variants, defined herein. | [optional] 
**modifierHashes** | **\Bungie\Model\int[]** | The activity may have 0-to-many modifiers: if it does, this will contain the hashes to the DestinyActivityModifierDefinition that defines the modifier being applied. | [optional] 
**variants** | [**\Bungie\Model\\Bungie\Model\Destiny\Milestones\DestinyPublicMilestoneActivityVariant[]**](DestinyPublicMilestoneActivityVariant.md) | Every relevant variation of this conceptual activity, including the conceptual activity itself, have variants defined here. | [optional] 
**activityModeHash** | **int** | The hash identifier of the most specific Activity Mode under which this activity is played. This is useful for situations where the activity in question is - for instance - a PVP map, but it&#39;s not clear what mode the PVP map is being played under. If it&#39;s a playlist, this will be less specific: but hopefully useful in some way. | [optional] 
**activityModeType** | **int** | The enumeration equivalent of the most specific Activity Mode under which this activity is played. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


