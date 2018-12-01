# GroupFeatures

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**maximumMembers** | **int** |  | [optional] 
**maximumMembershipsOfGroupType** | **int** | Maximum number of groups of this type a typical membership may join. For example, a user may join about 50 General groups with their Bungie.net account. They may join one clan per Destiny membership. | [optional] 
**capabilities** | [**\Bungie\Model\GroupsV2\Capabilities**](Capabilities.md) |  | [optional] 
**membershipTypes** | [**\Bungie\Model\BungieMembershipType[]**](BungieMembershipType.md) |  | [optional] 
**invitePermissionOverride** | **bool** | Minimum Member Level allowed to invite new members to group  Always Allowed: Founder, Acting Founder  True means admins have this power, false means they don&#39;t  Default is false for clans, true for groups. | [optional] 
**updateCulturePermissionOverride** | **bool** | Minimum Member Level allowed to update group culture  Always Allowed: Founder, Acting Founder  True means admins have this power, false means they don&#39;t  Default is false for clans, true for groups. | [optional] 
**hostGuidedGamePermissionOverride** | [**\Bungie\Model\GroupsV2\HostGuidedGamesPermissionLevel**](HostGuidedGamesPermissionLevel.md) | Minimum Member Level allowed to host guided games  Always Allowed: Founder, Acting Founder, Admin  Allowed Overrides: None, Member, Beginner  Default is Member for clans, None for groups, although this means nothing for groups. | [optional] 
**updateBannerPermissionOverride** | **bool** | Minimum Member Level allowed to update banner  Always Allowed: Founder, Acting Founder  True means admins have this power, false means they don&#39;t  Default is false for clans, true for groups. | [optional] 
**joinLevel** | [**\Bungie\Model\GroupsV2\RuntimeGroupMemberType**](RuntimeGroupMemberType.md) | Level to join a member at when accepting an invite, application, or joining an open clan  Default is Beginner. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


