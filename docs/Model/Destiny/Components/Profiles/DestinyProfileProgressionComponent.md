# DestinyProfileProgressionComponent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**checklists** | [**map[string,map[string,bool]]**](map.md) | The set of checklists that can be examined on a profile-wide basis, keyed by the hash identifier of the Checklist (DestinyChecklistDefinition)  For each checklist returned, its value is itself a Dictionary keyed by the checklist&#39;s hash identifier with the value being a boolean indicating if it&#39;s been discovered yet. | [optional] 
**seasonalArtifact** | [**\Bungie\Model\Destiny\Artifacts\DestinyArtifactProfileScoped**](DestinyArtifactProfileScoped.md) | Data related to your progress on the current season&#39;s artifact that is the same across characters. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


