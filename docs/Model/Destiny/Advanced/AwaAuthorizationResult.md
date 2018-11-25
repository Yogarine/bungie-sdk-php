# AwaAuthorizationResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**userSelection** | [**\Bungie\Model\Destiny\Advanced\AwaUserSelection**](AwaUserSelection.md) | Indication of how the user responded to the request. If the value is \&quot;Approved\&quot; the actionToken will contain the token that can be presented when performing the advanced write action. | [optional] 
**responseReason** | [**\Bungie\Model\Destiny\Advanced\AwaResponseReason**](AwaResponseReason.md) |  | [optional] 
**developerNote** | **string** | Message to the app developer to help understand the response. | [optional] 
**actionToken** | **string** | Credential used to prove the user authorized an advanced write action. | [optional] 
**maximumNumberOfUses** | **int** | This token may be used to perform the requested action this number of times, at a maximum. If this value is 0, then there is no limit. | [optional] 
**validUntil** | **\DateTime** | Time, UTC, when token expires. | [optional] 
**type** | [**\Bungie\Model\Destiny\Advanced\AwaType**](AwaType.md) | Advanced Write Action Type from the permission request. | [optional] 
**membershipType** | [**\Bungie\Model\BungieMembershipType**](BungieMembershipType.md) | MembershipType from the permission request. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


