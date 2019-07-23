# DestinyProfileComponent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**userInfo** | [**\Bungie\Model\User\UserInfoCard**](UserInfoCard.md) | If you need to render the Profile (their platform name, icon, etc...) somewhere, this property contains that information. | [optional] 
**dateLastPlayed** | **\DateTime** | The last time the user played with any character on this Profile. | [optional] 
**versionsOwned** | **int** | If you want to know what expansions they own, this will contain that data.   IMPORTANT: This field may not return the data you&#39;re interested in for Cross-Saved users. It returns the last ownership data we saw for this account - which is to say, what they&#39;ve purchased on the platform on which they last played, which now could be a different platform.   If you don&#39;t care about per-platform ownership and only care about whatever platform it seems they are playing on most recently, then this should be \&quot;good enough.\&quot; Otherwise, this should be considered deprecated. We do not have a good alternative to provide at this time with platform specific ownership data for DLC. | [optional] 
**characterIds** | **int[]** | A list of the character IDs, for further querying on your part. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


