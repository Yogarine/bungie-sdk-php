# GroupResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**detail** | [**\Bungie\Model\GroupsV2\GroupV2**](GroupV2.md) |  | [optional] 
**founder** | [**\Bungie\Model\GroupsV2\GroupMember**](GroupMember.md) |  | [optional] 
**alliedIds** | **int[]** |  | [optional] 
**parentGroup** | [**\Bungie\Model\GroupsV2\GroupV2**](GroupV2.md) |  | [optional] 
**allianceStatus** | **int** |  | [optional] 
**groupJoinInviteCount** | **int** |  | [optional] 
**currentUserMembershipsInactiveForDestiny** | **bool** | A convenience property that indicates if every membership you (the current user) have that is a part of this group are part of an account that is considered inactive - for example, overridden accounts in Cross Save. | [optional] 
**currentUserMemberMap** | [**map[string,\Bungie\Model\GroupsV2\GroupMember]**](GroupMember.md) | This property will be populated if the authenticated user is a member of the group. Note that because of account linking, a user can sometimes be part of a clan more than once. As such, this returns the highest member type available. | [optional] 
**currentUserPotentialMemberMap** | [**map[string,\Bungie\Model\GroupsV2\GroupPotentialMember]**](GroupPotentialMember.md) | This property will be populated if the authenticated user is an applicant or has an outstanding invitation to join. Note that because of account linking, a user can sometimes be part of a clan more than once. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


