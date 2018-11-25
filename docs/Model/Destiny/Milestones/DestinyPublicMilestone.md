# DestinyPublicMilestone

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**milestoneHash** | **int** | The hash identifier for the milestone. Use it to look up the DestinyMilestoneDefinition for static data about the Milestone. | [optional] 
**availableQuests** | [**\Bungie\Model\\Bungie\Model\Destiny\Milestones\DestinyPublicMilestoneQuest[]**](DestinyPublicMilestoneQuest.md) | A milestone not need have even a single quest, but if there are active quests they will be returned here. | [optional] 
**activities** | [**\Bungie\Model\\Bungie\Model\Destiny\Milestones\DestinyPublicMilestoneChallengeActivity[]**](DestinyPublicMilestoneChallengeActivity.md) |  | [optional] 
**vendorHashes** | **\Bungie\Model\int[]** | Sometimes milestones - or activities active in milestones - will have relevant vendors. These are the vendors that are currently relevant.  Deprecated, already, for the sake of the new \&quot;vendors\&quot; property that has more data. What was I thinking. | [optional] 
**vendors** | [**\Bungie\Model\\Bungie\Model\Destiny\Milestones\DestinyPublicMilestoneVendor[]**](DestinyPublicMilestoneVendor.md) | This is why we can&#39;t have nice things. This is the ordered list of vendors to be shown that relate to this milestone, potentially along with other interesting data. | [optional] 
**startDate** | **\DateTime** | If known, this is the date when the Milestone started/became active. | [optional] 
**endDate** | **\DateTime** | If known, this is the date when the Milestone will expire/recycle/end. | [optional] 
**order** | **int** | Used for ordering milestones in a display to match how we order them in BNet. May pull from static data, or possibly in the future from dynamic information. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


