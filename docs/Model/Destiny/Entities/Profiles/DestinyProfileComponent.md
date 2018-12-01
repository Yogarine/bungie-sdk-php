# DestinyProfileComponent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**userInfo** | [**\Bungie\Model\User\UserInfoCard**](UserInfoCard.md) | If you need to render the Profile (their platform name, icon, etc...) somewhere, this property contains that information. | [optional] 
**dateLastPlayed** | **\DateTime** | The last time the user played with any character on this Profile. | [optional] 
**versionsOwned** | [**\Bungie\Model\Destiny\DestinyGameVersions**](DestinyGameVersions.md) | If you want to know what expansions they own, this will contain that data. | [optional] 
**characterIds** | **int[]** | A list of the character IDs, for further querying on your part. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


