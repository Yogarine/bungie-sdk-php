# DestinyArtifactDefinition

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**displayProperties** | [**\Bungie\Model\Destiny\Definitions\Common\DestinyDisplayPropertiesDefinition**](DestinyDisplayPropertiesDefinition.md) | Any basic display info we know about the Artifact. Currently sourced from a related inventory item, but the source of this data is subject to change. | [optional] 
**translationBlock** | [**\Bungie\Model\Destiny\Definitions\DestinyItemTranslationBlockDefinition**](DestinyItemTranslationBlockDefinition.md) | Any Geometry/3D info we know about the Artifact. Currently sourced from a related inventory item&#39;s gearset information, but the source of this data is subject to change. | [optional] 
**tiers** | [**\Bungie\Model\Destiny\Definitions\Artifacts\DestinyArtifactTierDefinition[]**](DestinyArtifactTierDefinition.md) | Any Tier/Rank data related to this artifact, listed in display order.  Currently sourced from a Vendor, but this source is subject to change. | [optional] 
**hash** | **int** | The unique identifier for this entity. Guaranteed to be unique for the type of entity, but not globally.  When entities refer to each other in Destiny content, it is this hash that they are referring to. | [optional] 
**index** | **int** | The index of the entity as it was found in the investment tables. | [optional] 
**redacted** | **bool** | If this is true, then there is an entity with this identifier/type combination, but BNet is not yet allowed to show it. Sorry! | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


