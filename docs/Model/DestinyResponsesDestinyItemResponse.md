# DestinyResponsesDestinyItemResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**characterId** | **int** | If the item is on a character, this will return the ID of the character that is holding the item. | [optional] 
**item** | **object** | Common data for the item relevant to its non-instanced properties.  COMPONENT TYPE: ItemCommonData | [optional] 
**instance** | **object** | Basic instance data for the item.  COMPONENT TYPE: ItemInstances | [optional] 
**objectives** | **object** | Information specifically about the item&#39;s objectives.  COMPONENT TYPE: ItemObjectives | [optional] 
**perks** | **object** | Information specifically about the perks currently active on the item.  COMPONENT TYPE: ItemPerks | [optional] 
**renderData** | **object** | Information about how to render the item in 3D.  COMPONENT TYPE: ItemRenderData | [optional] 
**stats** | **object** | Information about the computed stats of the item: power, defense, etc...  COMPONENT TYPE: ItemStats | [optional] 
**talentGrid** | **object** | Information about the talent grid attached to the item. Talent nodes can provide a variety of benefits and abilities, and in Destiny 2 are used almost exclusively for the character&#39;s \&quot;Builds\&quot;.  COMPONENT TYPE: ItemTalentGrids | [optional] 
**sockets** | **object** | Information about the sockets of the item: which are currently active, what potential sockets you could have and the stats/abilities/perks you can gain from them.  COMPONENT TYPE: ItemSockets | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


