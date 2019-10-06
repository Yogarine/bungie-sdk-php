# FireteamUserInfoCard

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fireteamDisplayName** | **string** |  | [optional] 
**fireteamMembershipType** | **int** |  | [optional] 
**fireteamPlatformProfileUrl** | **string** |  | [optional] 
**fireteamPlatformUniqueIdentifier** | **string** |  | [optional] 
**supplementalDisplayName** | **string** | A platform specific additional display name - ex: psn Real Name, bnet Unique Name, etc. | [optional] 
**iconPath** | **string** | URL the Icon if available. | [optional] 
**crossSaveOverride** | **int** | If there is a cross save override in effect, this value will tell you the type that is overridding this one. | [optional] 
**applicableMembershipTypes** | **int[]** | The list of Membership Types indicating the platforms on which this Membership can be used.   Not in Cross Save &#x3D; its original membership type. Cross Save Primary &#x3D; Any membership types it is overridding, and its original membership type Cross Save Overridden &#x3D; Empty list | [optional] 
**isPublic** | **bool** | If True, this is a public user membership. | [optional] 
**membershipType** | **int** | Type of the membership. Not necessarily the native type. | [optional] 
**membershipId** | **int** | Membership ID as they user is known in the Accounts service | [optional] 
**displayName** | **string** | Display Name the player has chosen for themselves. The display name is optional when the data type is used as input to a platform API. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


