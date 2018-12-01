# DestinyCharacterProgressionComponent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**progressions** | [**map[string,\Bungie\Model\Destiny\DestinyProgression]**](DestinyProgression.md) | A Dictionary of all known progressions for the Character, keyed by the Progression&#39;s hash.  Not all progressions have user-facing data, but those who do will have that data contained in the DestinyProgressionDefinition. | [optional] 
**factions** | [**map[string,\Bungie\Model\Destiny\Progression\DestinyFactionProgression]**](DestinyFactionProgression.md) | A dictionary of all known Factions, keyed by the Faction&#39;s hash. It contains data about this character&#39;s status with the faction. | [optional] 
**milestones** | [**map[string,\Bungie\Model\Destiny\Milestones\DestinyMilestone]**](DestinyMilestone.md) | Milestones are related to the simple progressions shown in the game, but return additional and hopefully helpful information for users about the specifics of the Milestone&#39;s status. | [optional] 
**quests** | [**\Bungie\Model\Destiny\Quests\DestinyQuestStatus[]**](DestinyQuestStatus.md) | If the user has any active quests, the quests&#39; statuses will be returned here.  Note that quests have been largely supplanted by Milestones, but that doesn&#39;t mean that they won&#39;t make a comeback independent of milestones at some point. | [optional] 
**uninstancedItemObjectives** | [**map[string,\Bungie\Model\Destiny\Quests\DestinyObjectiveProgress[]]**](array.md) | Sometimes, you have items in your inventory that don&#39;t have instances, but still have Objective information. This provides you that objective information for uninstanced items.   This dictionary is keyed by the item&#39;s hash: which you can use to look up the name and description for the overall task(s) implied by the objective. The value is the list of objectives for this item, and their statuses. | [optional] 
**checklists** | [**map[string,map[string,bool]]**](map.md) | The set of checklists that can be examined for this specific character, keyed by the hash identifier of the Checklist (DestinyChecklistDefinition)  For each checklist returned, its value is itself a Dictionary keyed by the checklist&#39;s hash identifier with the value being a boolean indicating if it&#39;s been discovered yet. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


