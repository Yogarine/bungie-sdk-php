# DestinyMaterialRequirement

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**itemHash** | **int** | The hash identifier of the material required. Use it to look up the material&#39;s DestinyInventoryItemDefinition. | [optional] 
**deleteOnAction** | **bool** | If True, the material will be removed from the character&#39;s inventory when the action is performed. | [optional] 
**count** | **int** | The amount of the material required. | [optional] 
**countIsConstant** | **bool** | If true, the material requirement count value is constant. Since The Witch Queen expansion, some material requirement counts can be dynamic and will need to be returned with an API call. | [optional] 
**omitFromRequirements** | **bool** | If True, this requirement is \&quot;silent\&quot;: don&#39;t bother showing it in a material requirements display. I mean, I&#39;m not your mom: I&#39;m not going to tell you you *can&#39;t* show it. But we won&#39;t show it in our UI. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


