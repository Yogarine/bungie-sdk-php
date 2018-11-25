# DestinyPublicMilestoneChallengeActivity

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**activityHash** | **int** |  | [optional] 
**challengeObjectiveHashes** | **\Bungie\Model\int[]** |  | [optional] 
**modifierHashes** | **\Bungie\Model\int[]** | If the activity has modifiers, this will be the list of modifiers that all variants have in common. Perform lookups against DestinyActivityModifierDefinition which defines the modifier being applied to get at the modifier data.  Note that, in the DestiyActivityDefinition, you will see many more modifiers than this being referred to: those are all *possible* modifiers for the activity, not the active ones. Use only the active ones to match what&#39;s really live. | [optional] 
**loadoutRequirementIndex** | **int** | If returned, this is the index into the DestinyActivityDefinition&#39;s \&quot;loadouts\&quot; property, indicating the currently active loadout requirements. | [optional] 
**phaseHashes** | **\Bungie\Model\int[]** | The ordered list of phases for this activity, if any. Note that we have no human readable info for phases, nor any entities to relate them to: relating these hashes to something human readable is up to you unfortunately. | [optional] 
**booleanActivityOptions** | **\Bungie\Model\map[string,bool]** | The set of activity options for this activity, keyed by an identifier that&#39;s unique for this activity (not guaranteed to be unique between or across all activities, though should be unique for every *variant* of a given *conceptual* activity: for instance, the original D2 Raid has many variant DestinyActivityDefinitions. While other activities could potentially have the same option hashes, for any given D2 base Raid variant the hash will be unique).  As a concrete example of this data, the hashes you get for Raids will correspond to the currently active \&quot;Challenge Mode\&quot;.  We have no human readable information for this data, so it&#39;s up to you if you want to associate it with such info to show it. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


