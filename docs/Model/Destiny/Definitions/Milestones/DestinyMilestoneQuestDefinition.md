# DestinyMilestoneQuestDefinition

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**questItemHash** | **int** | The item representing this Milestone quest. Use this hash to look up the DestinyInventoryItemDefinition for the quest to find its steps and human readable data. | [optional] 
**displayProperties** | [**\Bungie\Model\Destiny\Definitions\Common\DestinyDisplayPropertiesDefinition**](DestinyDisplayPropertiesDefinition.md) | The individual quests may have different definitions from the overall milestone: if there&#39;s a specific active quest, use these displayProperties instead of that of the overall DestinyMilestoneDefinition. | [optional] 
**overrideImage** | **string** | If populated, this image can be shown instead of the generic milestone&#39;s image when this quest is live, or it can be used to show a background image for the quest itself that differs from that of the Activity or the Milestone. | [optional] 
**questRewards** | [**\Bungie\Model\Destiny\Definitions\Milestones\DestinyMilestoneQuestRewardsDefinition**](DestinyMilestoneQuestRewardsDefinition.md) | The rewards you will get for completing this quest, as best as we could extract them from our data. Sometimes, it&#39;ll be a decent amount of data. Sometimes, it&#39;s going to be sucky. Sorry. | [optional] 
**activities** | [**map[string,\Bungie\Model\Destiny\Definitions\Milestones\DestinyMilestoneActivityDefinition]**](DestinyMilestoneActivityDefinition.md) | The full set of all possible \&quot;conceptual activities\&quot; that are related to this Milestone. Tiers or alternative modes of play within these conceptual activities will be defined as sub-entities. Keyed by the Conceptual Activity Hash. Use the key to look up DestinyActivityDefinition. | [optional] 
**destinationHash** | **int** | Sometimes, a Milestone&#39;s quest is related to an entire Destination rather than a specific activity. In that situation, this will be the hash of that Destination. Hotspots are currently the only Milestones that expose this data, but that does not preclude this data from being returned for other Milestones in the future. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


