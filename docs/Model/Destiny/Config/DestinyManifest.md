# DestinyManifest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**version** | **string** |  | [optional] 
**mobileAssetContentPath** | **string** |  | [optional] 
**mobileGearAssetDataBases** | [**\Bungie\Model\Destiny\Config\GearAssetDataBaseDefinition[]**](GearAssetDataBaseDefinition.md) |  | [optional] 
**mobileWorldContentPaths** | **map[string,string]** |  | [optional] 
**jsonWorldContentPaths** | **map[string,string]** |  | [optional] 
**mobileClanBannerDatabasePath** | **string** |  | [optional] 
**mobileGearCDN** | **map[string,string]** |  | [optional] 
**iconImagePyramidInfo** | [**\Bungie\Model\Destiny\Config\ImagePyramidEntry[]**](ImagePyramidEntry.md) | Information about the \&quot;Image Pyramid\&quot; for Destiny icons. Where possible, we create smaller versions of Destiny icons. These are found as subfolders under the location of the \&quot;original/full size\&quot; Destiny images, with the same file name and extension as the original image itself. (this lets us avoid sending largely redundant path info with every entity, at the expense of the smaller versions of the image being less discoverable) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


