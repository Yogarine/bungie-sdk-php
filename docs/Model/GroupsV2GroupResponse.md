# GroupsV2GroupResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**detail** | [**\Bungie\Model\GroupsV2GroupV2**](GroupsV2GroupV2.md) |  | [optional] 
**founder** | [**\Bungie\Model\GroupsV2GroupMember**](GroupsV2GroupMember.md) |  | [optional] 
**alliedIds** | **int[]** |  | [optional] 
**parentGroup** | [**\Bungie\Model\GroupsV2GroupV2**](GroupsV2GroupV2.md) |  | [optional] 
**allianceStatus** | [**\Bungie\Model\GroupsV2GroupAllianceStatus**](GroupsV2GroupAllianceStatus.md) |  | [optional] 
**groupJoinInviteCount** | **int** |  | [optional] 
**currentUserMemberMap** | [**map[string,\Bungie\Model\GroupsV2GroupMember]**](GroupsV2GroupMember.md) | This property will be populated if the authenticated user is a member of the group. Note that because of account linking, a user can sometimes be part of a clan more than once. As such, this returns the highest member type available. | [optional] 
**currentUserPotentialMemberMap** | [**map[string,\Bungie\Model\GroupsV2GroupPotentialMember]**](GroupsV2GroupPotentialMember.md) | This property will be populated if the authenticated user is an applicant or has an outstanding invitation to join. Note that because of account linking, a user can sometimes be part of a clan more than once. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

