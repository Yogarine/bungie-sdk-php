# DestinyTalentExclusiveGroup

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**groupHash** | **int** | The identifier for this exclusive group. Only guaranteed unique within the talent grid, not globally. | [optional] 
**loreHash** | **int** | If this group has an associated piece of lore to show next to it, this will be the identifier for that DestinyLoreDefinition. | [optional] 
**nodeHashes** | **int[]** | A quick reference of the talent nodes that are part of this group, by their Talent Node hashes. (See DestinyTalentNodeDefinition.nodeHash) | [optional] 
**opposingGroupHashes** | **int[]** | A quick reference of Groups whose nodes will be deactivated if any node in this group is activated. | [optional] 
**opposingNodeHashes** | **int[]** | A quick reference of Nodes that will be deactivated if any node in this group is activated, by their Talent Node hashes. (See DestinyTalentNodeDefinition.nodeHash) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


