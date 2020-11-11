# DestinyProfileRecordsComponent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**score** | **int** | Your &#39;active&#39; Triumphs score, maintained for backwards compatibility. | [optional] 
**activeScore** | **int** | Your &#39;active&#39; Triumphs score. | [optional] 
**legacyScore** | **int** | Your &#39;legacy&#39; Triumphs score. | [optional] 
**lifetimeScore** | **int** | Your &#39;lifetime&#39; Triumphs score. | [optional] 
**trackedRecordHash** | **int** | If this profile is tracking a record, this is the hash identifier of the record it is tracking. | [optional] 
**records** | [**map[string,\Bungie\Model\Destiny\Components\Records\DestinyRecordComponent]**](DestinyRecordComponent.md) |  | [optional] 
**recordCategoriesRootNodeHash** | **int** | The hash for the root presentation node definition of Triumph categories. | [optional] 
**recordSealsRootNodeHash** | **int** | The hash for the root presentation node definition of Triumph Seals. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


