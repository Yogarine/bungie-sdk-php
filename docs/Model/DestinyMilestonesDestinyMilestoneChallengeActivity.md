# DestinyMilestonesDestinyMilestoneChallengeActivity

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**activityHash** | **int** |  | [optional] 
**challenges** | [**\Bungie\Model\DestinyChallengesDestinyChallengeStatus[]**](DestinyChallengesDestinyChallengeStatus.md) |  | [optional] 
**modifierHashes** | **int[]** | If the activity has modifiers, this will be the list of modifiers that all variants have in common. Perform lookups against DestinyActivityModifierDefinition which defines the modifier being applied to get at the modifier data.  Note that, in the DestiyActivityDefinition, you will see many more modifiers than this being referred to: those are all *possible* modifiers for the activity, not the active ones. Use only the active ones to match what&#39;s really live. | [optional] 
**loadoutRequirementIndex** | **int** | If returned, this is the index into the DestinyActivityDefinition&#39;s \&quot;loadouts\&quot; property, indicating the currently active loadout requirements. | [optional] 
**phases** | [**\Bungie\Model\DestinyMilestonesDestinyMilestoneActivityPhase[]**](DestinyMilestonesDestinyMilestoneActivityPhase.md) | If the Activity has discrete \&quot;phases\&quot; that we can track, that info will be here. Otherwise, this value will be NULL. Note that this is a list and not a dictionary: the order implies the ascending order of phases or progression in this activity. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


