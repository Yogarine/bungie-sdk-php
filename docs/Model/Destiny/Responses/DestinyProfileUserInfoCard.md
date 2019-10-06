# DestinyProfileUserInfoCard

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**dateLastPlayed** | **\DateTime** |  | [optional] 
**isOverridden** | **bool** | If this profile is being overridden/obscured by Cross Save, this will be set to true. We will still return the profile for display purposes where users need to know the info: it is up to any given area of the app/site to determine if this profile should still be shown. | [optional] 
**isCrossSavePrimary** | **bool** | If true, this account is hooked up as the \&quot;Primary\&quot; cross save account for one or more platforms. | [optional] 
**platformSilver** | [**\Bungie\Model\Destiny\Components\Inventory\DestinyPlatformSilverComponent**](DestinyPlatformSilverComponent.md) | This is the silver available on this Profile across any platforms on which they have purchased silver.   This is only available if you are requesting yourself. | [optional] 
**unpairedGameVersions** | **int** | If this profile is not in a cross save pairing, this will return the game versions that we believe this profile has access to.   For the time being, we will not return this information for any membership that is in a cross save pairing. The gist is that, once the pairing occurs, we do not currently have a consistent way to get that information for the profile&#39;s original Platform, and thus gameVersions would be too inconsistent (based on the last platform they happened to play on) for the info to be useful.   If we ever can get this data, this field will be deprecated and replaced with data on the DestinyLinkedProfileResponse itself, with game versions per linked Platform. But since we can&#39;t get that, we have this as a stop-gap measure for getting the data in the only situation that we currently need it. | [optional] 
**supplementalDisplayName** | **string** | A platform specific additional display name - ex: psn Real Name, bnet Unique Name, etc. | [optional] 
**iconPath** | **string** | URL the Icon if available. | [optional] 
**crossSaveOverride** | **int** | If there is a cross save override in effect, this value will tell you the type that is overridding this one. | [optional] 
**applicableMembershipTypes** | **int[]** | The list of Membership Types indicating the platforms on which this Membership can be used.   Not in Cross Save &#x3D; its original membership type. Cross Save Primary &#x3D; Any membership types it is overridding, and its original membership type Cross Save Overridden &#x3D; Empty list | [optional] 
**isPublic** | **bool** | If True, this is a public user membership. | [optional] 
**membershipType** | **int** | Type of the membership. Not necessarily the native type. | [optional] 
**membershipId** | **int** | Membership ID as they user is known in the Accounts service | [optional] 
**displayName** | **string** | Display Name the player has chosen for themselves. The display name is optional when the data type is used as input to a platform API. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


