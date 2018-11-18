# Bungie\GroupV2Api

All URIs are relative to *https://www.bungie.net/Platform*

Method | HTTP request | Description
------------- | ------------- | -------------
[**groupV2AbdicateFoundership**](GroupV2Api.md#groupV2AbdicateFoundership) | **POST** /GroupV2/{groupId}/Admin/AbdicateFoundership/{membershipType}/{founderIdNew}/ | 
[**groupV2AddOptionalConversation**](GroupV2Api.md#groupV2AddOptionalConversation) | **POST** /GroupV2/{groupId}/OptionalConversations/Add/ | 
[**groupV2ApproveAllPending**](GroupV2Api.md#groupV2ApproveAllPending) | **POST** /GroupV2/{groupId}/Members/ApproveAll/ | 
[**groupV2ApprovePending**](GroupV2Api.md#groupV2ApprovePending) | **POST** /GroupV2/{groupId}/Members/Approve/{membershipType}/{membershipId}/ | 
[**groupV2ApprovePendingForList**](GroupV2Api.md#groupV2ApprovePendingForList) | **POST** /GroupV2/{groupId}/Members/ApproveList/ | 
[**groupV2BanMember**](GroupV2Api.md#groupV2BanMember) | **POST** /GroupV2/{groupId}/Members/{membershipType}/{membershipId}/Ban/ | 
[**groupV2CreateGroup**](GroupV2Api.md#groupV2CreateGroup) | **POST** /GroupV2/Create/ | 
[**groupV2DenyAllPending**](GroupV2Api.md#groupV2DenyAllPending) | **POST** /GroupV2/{groupId}/Members/DenyAll/ | 
[**groupV2DenyPendingForList**](GroupV2Api.md#groupV2DenyPendingForList) | **POST** /GroupV2/{groupId}/Members/DenyList/ | 
[**groupV2EditClanBanner**](GroupV2Api.md#groupV2EditClanBanner) | **POST** /GroupV2/{groupId}/EditClanBanner/ | 
[**groupV2EditFounderOptions**](GroupV2Api.md#groupV2EditFounderOptions) | **POST** /GroupV2/{groupId}/EditFounderOptions/ | 
[**groupV2EditGroup**](GroupV2Api.md#groupV2EditGroup) | **POST** /GroupV2/{groupId}/Edit/ | 
[**groupV2EditGroupMembership**](GroupV2Api.md#groupV2EditGroupMembership) | **POST** /GroupV2/{groupId}/Members/{membershipType}/{membershipId}/SetMembershipType/{memberType}/ | 
[**groupV2EditOptionalConversation**](GroupV2Api.md#groupV2EditOptionalConversation) | **POST** /GroupV2/{groupId}/OptionalConversations/Edit/{conversationId}/ | 
[**groupV2GetAdminsAndFounderOfGroup**](GroupV2Api.md#groupV2GetAdminsAndFounderOfGroup) | **GET** /GroupV2/{groupId}/AdminsAndFounder/ | 
[**groupV2GetAvailableAvatars**](GroupV2Api.md#groupV2GetAvailableAvatars) | **GET** /GroupV2/GetAvailableAvatars/ | 
[**groupV2GetAvailableThemes**](GroupV2Api.md#groupV2GetAvailableThemes) | **GET** /GroupV2/GetAvailableThemes/ | 
[**groupV2GetBannedMembersOfGroup**](GroupV2Api.md#groupV2GetBannedMembersOfGroup) | **GET** /GroupV2/{groupId}/Banned/ | 
[**groupV2GetGroup**](GroupV2Api.md#groupV2GetGroup) | **GET** /GroupV2/{groupId}/ | 
[**groupV2GetGroupByName**](GroupV2Api.md#groupV2GetGroupByName) | **GET** /GroupV2/Name/{groupName}/{groupType}/ | 
[**groupV2GetGroupOptionalConversations**](GroupV2Api.md#groupV2GetGroupOptionalConversations) | **GET** /GroupV2/{groupId}/OptionalConversations/ | 
[**groupV2GetGroupsForMember**](GroupV2Api.md#groupV2GetGroupsForMember) | **GET** /GroupV2/User/{membershipType}/{membershipId}/{filter}/{groupType}/ | 
[**groupV2GetInvitedIndividuals**](GroupV2Api.md#groupV2GetInvitedIndividuals) | **GET** /GroupV2/{groupId}/Members/InvitedIndividuals/ | 
[**groupV2GetMembersOfGroup**](GroupV2Api.md#groupV2GetMembersOfGroup) | **GET** /GroupV2/{groupId}/Members/ | 
[**groupV2GetPendingMemberships**](GroupV2Api.md#groupV2GetPendingMemberships) | **GET** /GroupV2/{groupId}/Members/Pending/ | 
[**groupV2GetPotentialGroupsForMember**](GroupV2Api.md#groupV2GetPotentialGroupsForMember) | **GET** /GroupV2/User/Potential/{membershipType}/{membershipId}/{filter}/{groupType}/ | 
[**groupV2GetRecommendedGroups**](GroupV2Api.md#groupV2GetRecommendedGroups) | **POST** /GroupV2/Recommended/{groupType}/{createDateRange}/ | 
[**groupV2GetUserClanInviteSetting**](GroupV2Api.md#groupV2GetUserClanInviteSetting) | **GET** /GroupV2/GetUserClanInviteSetting/{mType}/ | 
[**groupV2GroupSearch**](GroupV2Api.md#groupV2GroupSearch) | **POST** /GroupV2/Search/ | 
[**groupV2IndividualGroupInvite**](GroupV2Api.md#groupV2IndividualGroupInvite) | **POST** /GroupV2/{groupId}/Members/IndividualInvite/{membershipType}/{membershipId}/ | 
[**groupV2IndividualGroupInviteCancel**](GroupV2Api.md#groupV2IndividualGroupInviteCancel) | **POST** /GroupV2/{groupId}/Members/IndividualInviteCancel/{membershipType}/{membershipId}/ | 
[**groupV2KickMember**](GroupV2Api.md#groupV2KickMember) | **POST** /GroupV2/{groupId}/Members/{membershipType}/{membershipId}/Kick/ | 
[**groupV2RequestGroupMembership**](GroupV2Api.md#groupV2RequestGroupMembership) | **POST** /GroupV2/{groupId}/Members/Apply/{membershipType}/ | 
[**groupV2RescindGroupMembership**](GroupV2Api.md#groupV2RescindGroupMembership) | **POST** /GroupV2/{groupId}/Members/Rescind/{membershipType}/ | 
[**groupV2SetUserClanInviteSetting**](GroupV2Api.md#groupV2SetUserClanInviteSetting) | **POST** /GroupV2/SetUserClanInviteSetting/{mType}/{allowInvites}/ | 
[**groupV2UnbanMember**](GroupV2Api.md#groupV2UnbanMember) | **POST** /GroupV2/{groupId}/Members/{membershipType}/{membershipId}/Unban/ | 


# **groupV2AbdicateFoundership**
> \Bungie\Model\InlineResponse20018 groupV2AbdicateFoundership($founderIdNew, $groupId, $membershipType)



An administrative method to allow the founder of a group or clan to give up their position to another admin permanently.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$founderIdNew = 56; // int | The new founder for this group. Must already be a group admin.
$groupId = 56; // int | The target group id.
$membershipType = new \Bungie\Model\\Bungie\Model\BungieMembershipType(); // \Bungie\Model\BungieMembershipType | Membership type of the provided founderIdNew.

try {
    $result = $apiInstance->groupV2AbdicateFoundership($founderIdNew, $groupId, $membershipType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2AbdicateFoundership: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **founderIdNew** | **int**| The new founder for this group. Must already be a group admin. |
 **groupId** | **int**| The target group id. |
 **membershipType** | [**\Bungie\Model\BungieMembershipType**](../Model/.md)| Membership type of the provided founderIdNew. |

### Return type

[**\Bungie\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupV2AddOptionalConversation**
> \Bungie\Model\InlineResponse20011 groupV2AddOptionalConversation($groupId, $groupsV2GroupOptionalConversationAddRequest)



Add a new optional conversation/chat channel. Requires admin permissions to the group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');
// Configure OAuth2 access token for authorization: oauth2
$config = Bungie\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Bungie\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = 56; // int | Group ID of the group to edit.
$groupsV2GroupOptionalConversationAddRequest = new \Bungie\Model\GroupsV2GroupOptionalConversationAddRequest(); // \Bungie\Model\GroupsV2GroupOptionalConversationAddRequest | 

try {
    $result = $apiInstance->groupV2AddOptionalConversation($groupId, $groupsV2GroupOptionalConversationAddRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2AddOptionalConversation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**| Group ID of the group to edit. |
 **groupsV2GroupOptionalConversationAddRequest** | [**\Bungie\Model\GroupsV2GroupOptionalConversationAddRequest**](../Model/GroupsV2GroupOptionalConversationAddRequest.md)|  |

### Return type

[**\Bungie\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupV2ApproveAllPending**
> \Bungie\Model\InlineResponse20030 groupV2ApproveAllPending($groupId, $groupsV2GroupApplicationRequest)



Approve all of the pending users for the given group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');
// Configure OAuth2 access token for authorization: oauth2
$config = Bungie\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Bungie\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = 56; // int | ID of the group.
$groupsV2GroupApplicationRequest = new \Bungie\Model\GroupsV2GroupApplicationRequest(); // \Bungie\Model\GroupsV2GroupApplicationRequest | 

try {
    $result = $apiInstance->groupV2ApproveAllPending($groupId, $groupsV2GroupApplicationRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2ApproveAllPending: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**| ID of the group. |
 **groupsV2GroupApplicationRequest** | [**\Bungie\Model\GroupsV2GroupApplicationRequest**](../Model/GroupsV2GroupApplicationRequest.md)|  |

### Return type

[**\Bungie\Model\InlineResponse20030**](../Model/InlineResponse20030.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupV2ApprovePending**
> \Bungie\Model\InlineResponse20018 groupV2ApprovePending($groupId, $membershipId, $membershipType, $groupsV2GroupApplicationRequest)



Approve the given membershipId to join the group/clan as long as they have applied.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');
// Configure OAuth2 access token for authorization: oauth2
$config = Bungie\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Bungie\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = 56; // int | ID of the group.
$membershipId = 56; // int | The membership id being approved.
$membershipType = new \Bungie\Model\\Bungie\Model\BungieMembershipType(); // \Bungie\Model\BungieMembershipType | Membership type of the supplied membership ID.
$groupsV2GroupApplicationRequest = new \Bungie\Model\GroupsV2GroupApplicationRequest(); // \Bungie\Model\GroupsV2GroupApplicationRequest | 

try {
    $result = $apiInstance->groupV2ApprovePending($groupId, $membershipId, $membershipType, $groupsV2GroupApplicationRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2ApprovePending: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**| ID of the group. |
 **membershipId** | **int**| The membership id being approved. |
 **membershipType** | [**\Bungie\Model\BungieMembershipType**](../Model/.md)| Membership type of the supplied membership ID. |
 **groupsV2GroupApplicationRequest** | [**\Bungie\Model\GroupsV2GroupApplicationRequest**](../Model/GroupsV2GroupApplicationRequest.md)|  |

### Return type

[**\Bungie\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupV2ApprovePendingForList**
> \Bungie\Model\InlineResponse20030 groupV2ApprovePendingForList($groupId, $groupsV2GroupApplicationListRequest)



Approve all of the pending users for the given group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');
// Configure OAuth2 access token for authorization: oauth2
$config = Bungie\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Bungie\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = 56; // int | ID of the group.
$groupsV2GroupApplicationListRequest = new \Bungie\Model\GroupsV2GroupApplicationListRequest(); // \Bungie\Model\GroupsV2GroupApplicationListRequest | 

try {
    $result = $apiInstance->groupV2ApprovePendingForList($groupId, $groupsV2GroupApplicationListRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2ApprovePendingForList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**| ID of the group. |
 **groupsV2GroupApplicationListRequest** | [**\Bungie\Model\GroupsV2GroupApplicationListRequest**](../Model/GroupsV2GroupApplicationListRequest.md)|  |

### Return type

[**\Bungie\Model\InlineResponse20030**](../Model/InlineResponse20030.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupV2BanMember**
> \Bungie\Model\InlineResponse20019 groupV2BanMember($groupId, $membershipId, $membershipType, $groupsV2GroupBanRequest)



Bans the requested member from the requested group for the specified period of time.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');
// Configure OAuth2 access token for authorization: oauth2
$config = Bungie\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Bungie\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = 56; // int | Group ID that has the member to ban.
$membershipId = 56; // int | Membership ID of the member to ban from the group.
$membershipType = new \Bungie\Model\\Bungie\Model\BungieMembershipType(); // \Bungie\Model\BungieMembershipType | Membership type of the provided membership ID.
$groupsV2GroupBanRequest = new \Bungie\Model\GroupsV2GroupBanRequest(); // \Bungie\Model\GroupsV2GroupBanRequest | 

try {
    $result = $apiInstance->groupV2BanMember($groupId, $membershipId, $membershipType, $groupsV2GroupBanRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2BanMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**| Group ID that has the member to ban. |
 **membershipId** | **int**| Membership ID of the member to ban from the group. |
 **membershipType** | [**\Bungie\Model\BungieMembershipType**](../Model/.md)| Membership type of the provided membership ID. |
 **groupsV2GroupBanRequest** | [**\Bungie\Model\GroupsV2GroupBanRequest**](../Model/GroupsV2GroupBanRequest.md)|  |

### Return type

[**\Bungie\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupV2CreateGroup**
> \Bungie\Model\InlineResponse20024 groupV2CreateGroup($groupsV2GroupAction)



Create a new group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');
// Configure OAuth2 access token for authorization: oauth2
$config = Bungie\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Bungie\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupsV2GroupAction = new \Bungie\Model\GroupsV2GroupAction(); // \Bungie\Model\GroupsV2GroupAction | 

try {
    $result = $apiInstance->groupV2CreateGroup($groupsV2GroupAction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2CreateGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupsV2GroupAction** | [**\Bungie\Model\GroupsV2GroupAction**](../Model/GroupsV2GroupAction.md)|  |

### Return type

[**\Bungie\Model\InlineResponse20024**](../Model/InlineResponse20024.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupV2DenyAllPending**
> \Bungie\Model\InlineResponse20030 groupV2DenyAllPending($groupId, $groupsV2GroupApplicationRequest)



Deny all of the pending users for the given group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');
// Configure OAuth2 access token for authorization: oauth2
$config = Bungie\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Bungie\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = 56; // int | ID of the group.
$groupsV2GroupApplicationRequest = new \Bungie\Model\GroupsV2GroupApplicationRequest(); // \Bungie\Model\GroupsV2GroupApplicationRequest | 

try {
    $result = $apiInstance->groupV2DenyAllPending($groupId, $groupsV2GroupApplicationRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2DenyAllPending: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**| ID of the group. |
 **groupsV2GroupApplicationRequest** | [**\Bungie\Model\GroupsV2GroupApplicationRequest**](../Model/GroupsV2GroupApplicationRequest.md)|  |

### Return type

[**\Bungie\Model\InlineResponse20030**](../Model/InlineResponse20030.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupV2DenyPendingForList**
> \Bungie\Model\InlineResponse20030 groupV2DenyPendingForList($groupId, $groupsV2GroupApplicationListRequest)



Deny all of the pending users for the given group that match the passed-in .

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');
// Configure OAuth2 access token for authorization: oauth2
$config = Bungie\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Bungie\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = 56; // int | ID of the group.
$groupsV2GroupApplicationListRequest = new \Bungie\Model\GroupsV2GroupApplicationListRequest(); // \Bungie\Model\GroupsV2GroupApplicationListRequest | 

try {
    $result = $apiInstance->groupV2DenyPendingForList($groupId, $groupsV2GroupApplicationListRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2DenyPendingForList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**| ID of the group. |
 **groupsV2GroupApplicationListRequest** | [**\Bungie\Model\GroupsV2GroupApplicationListRequest**](../Model/GroupsV2GroupApplicationListRequest.md)|  |

### Return type

[**\Bungie\Model\InlineResponse20030**](../Model/InlineResponse20030.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupV2EditClanBanner**
> \Bungie\Model\InlineResponse20019 groupV2EditClanBanner($groupId, $groupsV2ClanBanner)



Edit an existing group's clan banner. You must have suitable permissions in the group to perform this operation. All fields are required.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');
// Configure OAuth2 access token for authorization: oauth2
$config = Bungie\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Bungie\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = 56; // int | Group ID of the group to edit.
$groupsV2ClanBanner = new \Bungie\Model\GroupsV2ClanBanner(); // \Bungie\Model\GroupsV2ClanBanner | 

try {
    $result = $apiInstance->groupV2EditClanBanner($groupId, $groupsV2ClanBanner);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2EditClanBanner: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**| Group ID of the group to edit. |
 **groupsV2ClanBanner** | [**\Bungie\Model\GroupsV2ClanBanner**](../Model/GroupsV2ClanBanner.md)|  |

### Return type

[**\Bungie\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupV2EditFounderOptions**
> \Bungie\Model\InlineResponse20019 groupV2EditFounderOptions($groupId, $groupsV2GroupOptionsEditAction)



Edit group options only available to a founder. You must have suitable permissions in the group to perform this operation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');
// Configure OAuth2 access token for authorization: oauth2
$config = Bungie\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Bungie\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = 56; // int | Group ID of the group to edit.
$groupsV2GroupOptionsEditAction = new \Bungie\Model\GroupsV2GroupOptionsEditAction(); // \Bungie\Model\GroupsV2GroupOptionsEditAction | 

try {
    $result = $apiInstance->groupV2EditFounderOptions($groupId, $groupsV2GroupOptionsEditAction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2EditFounderOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**| Group ID of the group to edit. |
 **groupsV2GroupOptionsEditAction** | [**\Bungie\Model\GroupsV2GroupOptionsEditAction**](../Model/GroupsV2GroupOptionsEditAction.md)|  |

### Return type

[**\Bungie\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupV2EditGroup**
> \Bungie\Model\InlineResponse20019 groupV2EditGroup($groupId, $groupsV2GroupEditAction)



Edit an existing group. You must have suitable permissions in the group to perform this operation. This latest revision will only edit the fields you pass in - pass null for properties you want to leave unaltered.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');
// Configure OAuth2 access token for authorization: oauth2
$config = Bungie\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Bungie\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = 56; // int | Group ID of the group to edit.
$groupsV2GroupEditAction = new \Bungie\Model\GroupsV2GroupEditAction(); // \Bungie\Model\GroupsV2GroupEditAction | 

try {
    $result = $apiInstance->groupV2EditGroup($groupId, $groupsV2GroupEditAction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2EditGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**| Group ID of the group to edit. |
 **groupsV2GroupEditAction** | [**\Bungie\Model\GroupsV2GroupEditAction**](../Model/GroupsV2GroupEditAction.md)|  |

### Return type

[**\Bungie\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupV2EditGroupMembership**
> \Bungie\Model\InlineResponse20019 groupV2EditGroupMembership($groupId, $membershipId, $membershipType, $memberType)



Edit the membership type of a given member. You must have suitable permissions in the group to perform this operation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');
// Configure OAuth2 access token for authorization: oauth2
$config = Bungie\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Bungie\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = 56; // int | ID of the group to which the member belongs.
$membershipId = 56; // int | Membership ID to modify.
$membershipType = new \Bungie\Model\\Bungie\Model\BungieMembershipType(); // \Bungie\Model\BungieMembershipType | Membership type of the provide membership ID.
$memberType = new \Bungie\Model\\Bungie\Model\GroupsV2RuntimeGroupMemberType(); // \Bungie\Model\GroupsV2RuntimeGroupMemberType | New membertype for the specified member.

try {
    $result = $apiInstance->groupV2EditGroupMembership($groupId, $membershipId, $membershipType, $memberType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2EditGroupMembership: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**| ID of the group to which the member belongs. |
 **membershipId** | **int**| Membership ID to modify. |
 **membershipType** | [**\Bungie\Model\BungieMembershipType**](../Model/.md)| Membership type of the provide membership ID. |
 **memberType** | [**\Bungie\Model\GroupsV2RuntimeGroupMemberType**](../Model/.md)| New membertype for the specified member. |

### Return type

[**\Bungie\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupV2EditOptionalConversation**
> \Bungie\Model\InlineResponse20011 groupV2EditOptionalConversation($conversationId, $groupId, $groupsV2GroupOptionalConversationEditRequest)



Edit the settings of an optional conversation/chat channel. Requires admin permissions to the group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');
// Configure OAuth2 access token for authorization: oauth2
$config = Bungie\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Bungie\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversationId = 56; // int | Conversation Id of the channel being edited.
$groupId = 56; // int | Group ID of the group to edit.
$groupsV2GroupOptionalConversationEditRequest = new \Bungie\Model\GroupsV2GroupOptionalConversationEditRequest(); // \Bungie\Model\GroupsV2GroupOptionalConversationEditRequest | 

try {
    $result = $apiInstance->groupV2EditOptionalConversation($conversationId, $groupId, $groupsV2GroupOptionalConversationEditRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2EditOptionalConversation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **int**| Conversation Id of the channel being edited. |
 **groupId** | **int**| Group ID of the group to edit. |
 **groupsV2GroupOptionalConversationEditRequest** | [**\Bungie\Model\GroupsV2GroupOptionalConversationEditRequest**](../Model/GroupsV2GroupOptionalConversationEditRequest.md)|  |

### Return type

[**\Bungie\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupV2GetAdminsAndFounderOfGroup**
> \Bungie\Model\InlineResponse20025 groupV2GetAdminsAndFounderOfGroup($currentpage, $groupId)



Get the list of members in a given group who are of admin level or higher.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$currentpage = 56; // int | Page number (starting with 1). Each page has a fixed size of 50 items per page.
$groupId = 56; // int | The ID of the group.

try {
    $result = $apiInstance->groupV2GetAdminsAndFounderOfGroup($currentpage, $groupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2GetAdminsAndFounderOfGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currentpage** | **int**| Page number (starting with 1). Each page has a fixed size of 50 items per page. |
 **groupId** | **int**| The ID of the group. |

### Return type

[**\Bungie\Model\InlineResponse20025**](../Model/InlineResponse20025.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupV2GetAvailableAvatars**
> \Bungie\Model\InlineResponse20016 groupV2GetAvailableAvatars()



Returns a list of all available group avatars for the signed-in user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->groupV2GetAvailableAvatars();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2GetAvailableAvatars: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Bungie\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupV2GetAvailableThemes**
> \Bungie\Model\InlineResponse20017 groupV2GetAvailableThemes()



Returns a list of all available group themes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->groupV2GetAvailableThemes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2GetAvailableThemes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Bungie\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupV2GetBannedMembersOfGroup**
> \Bungie\Model\InlineResponse20027 groupV2GetBannedMembersOfGroup($currentpage, $groupId)



Get the list of banned members in a given group. Only accessible to group Admins and above. Not applicable to all groups. Check group features.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');
// Configure OAuth2 access token for authorization: oauth2
$config = Bungie\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Bungie\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currentpage = 56; // int | Page number (starting with 1). Each page has a fixed size of 50 entries.
$groupId = 56; // int | Group ID whose banned members you are fetching

try {
    $result = $apiInstance->groupV2GetBannedMembersOfGroup($currentpage, $groupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2GetBannedMembersOfGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currentpage** | **int**| Page number (starting with 1). Each page has a fixed size of 50 entries. |
 **groupId** | **int**| Group ID whose banned members you are fetching |

### Return type

[**\Bungie\Model\InlineResponse20027**](../Model/InlineResponse20027.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupV2GetGroup**
> \Bungie\Model\InlineResponse20022 groupV2GetGroup($groupId)



Get information about a specific group of the given ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$groupId = 56; // int | Requested group's id.

try {
    $result = $apiInstance->groupV2GetGroup($groupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2GetGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**| Requested group&#39;s id. |

### Return type

[**\Bungie\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupV2GetGroupByName**
> \Bungie\Model\InlineResponse20022 groupV2GetGroupByName($groupName, $groupType)



Get information about a specific group with the given name and type.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$groupName = 'groupName_example'; // string | Exact name of the group to find.
$groupType = new \Bungie\Model\\Bungie\Model\GroupsV2GroupType(); // \Bungie\Model\GroupsV2GroupType | Type of group to find.

try {
    $result = $apiInstance->groupV2GetGroupByName($groupName, $groupType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2GetGroupByName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupName** | **string**| Exact name of the group to find. |
 **groupType** | [**\Bungie\Model\GroupsV2GroupType**](../Model/.md)| Type of group to find. |

### Return type

[**\Bungie\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupV2GetGroupOptionalConversations**
> \Bungie\Model\InlineResponse20023 groupV2GetGroupOptionalConversations($groupId)



Gets a list of available optional conversation channels and their settings.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$groupId = 56; // int | Requested group's id.

try {
    $result = $apiInstance->groupV2GetGroupOptionalConversations($groupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2GetGroupOptionalConversations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**| Requested group&#39;s id. |

### Return type

[**\Bungie\Model\InlineResponse20023**](../Model/InlineResponse20023.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupV2GetGroupsForMember**
> \Bungie\Model\InlineResponse20031 groupV2GetGroupsForMember($filter, $groupType, $membershipId, $membershipType)



Get information about the groups that a given member has joined.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = new \Bungie\Model\\Bungie\Model\GroupsV2GroupsForMemberFilter(); // \Bungie\Model\GroupsV2GroupsForMemberFilter | Filter apply to list of joined groups.
$groupType = new \Bungie\Model\\Bungie\Model\GroupsV2GroupType(); // \Bungie\Model\GroupsV2GroupType | Type of group the supplied member founded.
$membershipId = 56; // int | Membership ID to for which to find founded groups.
$membershipType = new \Bungie\Model\\Bungie\Model\BungieMembershipType(); // \Bungie\Model\BungieMembershipType | Membership type of the supplied membership ID.

try {
    $result = $apiInstance->groupV2GetGroupsForMember($filter, $groupType, $membershipId, $membershipType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2GetGroupsForMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | [**\Bungie\Model\GroupsV2GroupsForMemberFilter**](../Model/.md)| Filter apply to list of joined groups. |
 **groupType** | [**\Bungie\Model\GroupsV2GroupType**](../Model/.md)| Type of group the supplied member founded. |
 **membershipId** | **int**| Membership ID to for which to find founded groups. |
 **membershipType** | [**\Bungie\Model\BungieMembershipType**](../Model/.md)| Membership type of the supplied membership ID. |

### Return type

[**\Bungie\Model\InlineResponse20031**](../Model/InlineResponse20031.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupV2GetInvitedIndividuals**
> \Bungie\Model\InlineResponse20029 groupV2GetInvitedIndividuals($currentpage, $groupId)



Get the list of users who have been invited into the group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');
// Configure OAuth2 access token for authorization: oauth2
$config = Bungie\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Bungie\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currentpage = 56; // int | Page number (starting with 1). Each page has a fixed size of 50 items per page.
$groupId = 56; // int | ID of the group.

try {
    $result = $apiInstance->groupV2GetInvitedIndividuals($currentpage, $groupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2GetInvitedIndividuals: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currentpage** | **int**| Page number (starting with 1). Each page has a fixed size of 50 items per page. |
 **groupId** | **int**| ID of the group. |

### Return type

[**\Bungie\Model\InlineResponse20029**](../Model/InlineResponse20029.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupV2GetMembersOfGroup**
> \Bungie\Model\InlineResponse20025 groupV2GetMembersOfGroup($currentpage, $groupId, $memberType, $nameSearch)



Get the list of members in a given group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$currentpage = 56; // int | Page number (starting with 1). Each page has a fixed size of 50 items per page.
$groupId = 56; // int | The ID of the group.
$memberType = new \Bungie\Model\\Bungie\Model\GroupsV2RuntimeGroupMemberType(); // \Bungie\Model\GroupsV2RuntimeGroupMemberType | Filter out other member types. Use None for all members.
$nameSearch = 'nameSearch_example'; // string | The name fragment upon which a search should be executed for members with matching display or unique names.

try {
    $result = $apiInstance->groupV2GetMembersOfGroup($currentpage, $groupId, $memberType, $nameSearch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2GetMembersOfGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currentpage** | **int**| Page number (starting with 1). Each page has a fixed size of 50 items per page. |
 **groupId** | **int**| The ID of the group. |
 **memberType** | [**\Bungie\Model\GroupsV2RuntimeGroupMemberType**](../Model/.md)| Filter out other member types. Use None for all members. | [optional]
 **nameSearch** | **string**| The name fragment upon which a search should be executed for members with matching display or unique names. | [optional]

### Return type

[**\Bungie\Model\InlineResponse20025**](../Model/InlineResponse20025.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupV2GetPendingMemberships**
> \Bungie\Model\InlineResponse20029 groupV2GetPendingMemberships($currentpage, $groupId)



Get the list of users who are awaiting a decision on their application to join a given group. Modified to include application info.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');
// Configure OAuth2 access token for authorization: oauth2
$config = Bungie\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Bungie\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currentpage = 56; // int | Page number (starting with 1). Each page has a fixed size of 50 items per page.
$groupId = 56; // int | ID of the group.

try {
    $result = $apiInstance->groupV2GetPendingMemberships($currentpage, $groupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2GetPendingMemberships: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currentpage** | **int**| Page number (starting with 1). Each page has a fixed size of 50 items per page. |
 **groupId** | **int**| ID of the group. |

### Return type

[**\Bungie\Model\InlineResponse20029**](../Model/InlineResponse20029.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupV2GetPotentialGroupsForMember**
> \Bungie\Model\InlineResponse20032 groupV2GetPotentialGroupsForMember($filter, $groupType, $membershipId, $membershipType)



Get information about the groups that a given member has applied to or been invited to.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = new \Bungie\Model\\Bungie\Model\GroupsV2GroupPotentialMemberStatus(); // \Bungie\Model\GroupsV2GroupPotentialMemberStatus | Filter apply to list of potential joined groups.
$groupType = new \Bungie\Model\\Bungie\Model\GroupsV2GroupType(); // \Bungie\Model\GroupsV2GroupType | Type of group the supplied member applied.
$membershipId = 56; // int | Membership ID to for which to find applied groups.
$membershipType = new \Bungie\Model\\Bungie\Model\BungieMembershipType(); // \Bungie\Model\BungieMembershipType | Membership type of the supplied membership ID.

try {
    $result = $apiInstance->groupV2GetPotentialGroupsForMember($filter, $groupType, $membershipId, $membershipType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2GetPotentialGroupsForMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | [**\Bungie\Model\GroupsV2GroupPotentialMemberStatus**](../Model/.md)| Filter apply to list of potential joined groups. |
 **groupType** | [**\Bungie\Model\GroupsV2GroupType**](../Model/.md)| Type of group the supplied member applied. |
 **membershipId** | **int**| Membership ID to for which to find applied groups. |
 **membershipType** | [**\Bungie\Model\BungieMembershipType**](../Model/.md)| Membership type of the supplied membership ID. |

### Return type

[**\Bungie\Model\InlineResponse20032**](../Model/InlineResponse20032.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupV2GetRecommendedGroups**
> \Bungie\Model\InlineResponse20020 groupV2GetRecommendedGroups($createDateRange, $groupType)



Gets groups recommended for you based on the groups to whom those you follow belong.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');
// Configure OAuth2 access token for authorization: oauth2
$config = Bungie\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Bungie\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createDateRange = new \Bungie\Model\\Bungie\Model\GroupsV2GroupDateRange(); // \Bungie\Model\GroupsV2GroupDateRange | Requested range in which to pull recommended groups
$groupType = new \Bungie\Model\\Bungie\Model\GroupsV2GroupType(); // \Bungie\Model\GroupsV2GroupType | Type of groups requested

try {
    $result = $apiInstance->groupV2GetRecommendedGroups($createDateRange, $groupType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2GetRecommendedGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createDateRange** | [**\Bungie\Model\GroupsV2GroupDateRange**](../Model/.md)| Requested range in which to pull recommended groups |
 **groupType** | [**\Bungie\Model\GroupsV2GroupType**](../Model/.md)| Type of groups requested |

### Return type

[**\Bungie\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupV2GetUserClanInviteSetting**
> \Bungie\Model\InlineResponse20018 groupV2GetUserClanInviteSetting($mType)



Gets the state of the user's clan invite preferences for a particular membership type - true if they wish to be invited to clans, false otherwise.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');
// Configure OAuth2 access token for authorization: oauth2
$config = Bungie\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Bungie\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mType = new \Bungie\Model\\Bungie\Model\BungieMembershipType(); // \Bungie\Model\BungieMembershipType | The Destiny membership type of the account we wish to access settings.

try {
    $result = $apiInstance->groupV2GetUserClanInviteSetting($mType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2GetUserClanInviteSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mType** | [**\Bungie\Model\BungieMembershipType**](../Model/.md)| The Destiny membership type of the account we wish to access settings. |

### Return type

[**\Bungie\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupV2GroupSearch**
> \Bungie\Model\InlineResponse20021 groupV2GroupSearch($groupsV2GroupQuery)



Search for Groups.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$groupsV2GroupQuery = new \Bungie\Model\GroupsV2GroupQuery(); // \Bungie\Model\GroupsV2GroupQuery | 

try {
    $result = $apiInstance->groupV2GroupSearch($groupsV2GroupQuery);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2GroupSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupsV2GroupQuery** | [**\Bungie\Model\GroupsV2GroupQuery**](../Model/GroupsV2GroupQuery.md)|  |

### Return type

[**\Bungie\Model\InlineResponse20021**](../Model/InlineResponse20021.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupV2IndividualGroupInvite**
> \Bungie\Model\InlineResponse20028 groupV2IndividualGroupInvite($groupId, $membershipId, $membershipType, $groupsV2GroupApplicationRequest)



Invite a user to join this group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');
// Configure OAuth2 access token for authorization: oauth2
$config = Bungie\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Bungie\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = 56; // int | ID of the group you would like to join.
$membershipId = 56; // int | Membership id of the account being invited.
$membershipType = new \Bungie\Model\\Bungie\Model\BungieMembershipType(); // \Bungie\Model\BungieMembershipType | MembershipType of the account being invited.
$groupsV2GroupApplicationRequest = new \Bungie\Model\GroupsV2GroupApplicationRequest(); // \Bungie\Model\GroupsV2GroupApplicationRequest | 

try {
    $result = $apiInstance->groupV2IndividualGroupInvite($groupId, $membershipId, $membershipType, $groupsV2GroupApplicationRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2IndividualGroupInvite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**| ID of the group you would like to join. |
 **membershipId** | **int**| Membership id of the account being invited. |
 **membershipType** | [**\Bungie\Model\BungieMembershipType**](../Model/.md)| MembershipType of the account being invited. |
 **groupsV2GroupApplicationRequest** | [**\Bungie\Model\GroupsV2GroupApplicationRequest**](../Model/GroupsV2GroupApplicationRequest.md)|  |

### Return type

[**\Bungie\Model\InlineResponse20028**](../Model/InlineResponse20028.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupV2IndividualGroupInviteCancel**
> \Bungie\Model\InlineResponse20028 groupV2IndividualGroupInviteCancel($groupId, $membershipId, $membershipType)



Cancels a pending invitation to join a group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');
// Configure OAuth2 access token for authorization: oauth2
$config = Bungie\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Bungie\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = 56; // int | ID of the group you would like to join.
$membershipId = 56; // int | Membership id of the account being cancelled.
$membershipType = new \Bungie\Model\\Bungie\Model\BungieMembershipType(); // \Bungie\Model\BungieMembershipType | MembershipType of the account being cancelled.

try {
    $result = $apiInstance->groupV2IndividualGroupInviteCancel($groupId, $membershipId, $membershipType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2IndividualGroupInviteCancel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**| ID of the group you would like to join. |
 **membershipId** | **int**| Membership id of the account being cancelled. |
 **membershipType** | [**\Bungie\Model\BungieMembershipType**](../Model/.md)| MembershipType of the account being cancelled. |

### Return type

[**\Bungie\Model\InlineResponse20028**](../Model/InlineResponse20028.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupV2KickMember**
> \Bungie\Model\InlineResponse20026 groupV2KickMember($groupId, $membershipId, $membershipType)



Kick a member from the given group, forcing them to reapply if they wish to re-join the group. You must have suitable permissions in the group to perform this operation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');
// Configure OAuth2 access token for authorization: oauth2
$config = Bungie\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Bungie\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = 56; // int | Group ID to kick the user from.
$membershipId = 56; // int | Membership ID to kick.
$membershipType = new \Bungie\Model\\Bungie\Model\BungieMembershipType(); // \Bungie\Model\BungieMembershipType | Membership type of the provided membership ID.

try {
    $result = $apiInstance->groupV2KickMember($groupId, $membershipId, $membershipType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2KickMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**| Group ID to kick the user from. |
 **membershipId** | **int**| Membership ID to kick. |
 **membershipType** | [**\Bungie\Model\BungieMembershipType**](../Model/.md)| Membership type of the provided membership ID. |

### Return type

[**\Bungie\Model\InlineResponse20026**](../Model/InlineResponse20026.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupV2RequestGroupMembership**
> \Bungie\Model\InlineResponse20028 groupV2RequestGroupMembership($groupId, $membershipType, $groupsV2GroupApplicationRequest)



Request permission to join the given group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');
// Configure OAuth2 access token for authorization: oauth2
$config = Bungie\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Bungie\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = 56; // int | ID of the group you would like to join.
$membershipType = new \Bungie\Model\\Bungie\Model\BungieMembershipType(); // \Bungie\Model\BungieMembershipType | MembershipType of the account to use when joining.
$groupsV2GroupApplicationRequest = new \Bungie\Model\GroupsV2GroupApplicationRequest(); // \Bungie\Model\GroupsV2GroupApplicationRequest | 

try {
    $result = $apiInstance->groupV2RequestGroupMembership($groupId, $membershipType, $groupsV2GroupApplicationRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2RequestGroupMembership: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**| ID of the group you would like to join. |
 **membershipType** | [**\Bungie\Model\BungieMembershipType**](../Model/.md)| MembershipType of the account to use when joining. |
 **groupsV2GroupApplicationRequest** | [**\Bungie\Model\GroupsV2GroupApplicationRequest**](../Model/GroupsV2GroupApplicationRequest.md)|  |

### Return type

[**\Bungie\Model\InlineResponse20028**](../Model/InlineResponse20028.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupV2RescindGroupMembership**
> \Bungie\Model\InlineResponse20026 groupV2RescindGroupMembership($groupId, $membershipType)



Rescind your application to join the given group or leave the group if you are already a member..

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');
// Configure OAuth2 access token for authorization: oauth2
$config = Bungie\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Bungie\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = 56; // int | ID of the group.
$membershipType = new \Bungie\Model\\Bungie\Model\BungieMembershipType(); // \Bungie\Model\BungieMembershipType | MembershipType of the account to leave.

try {
    $result = $apiInstance->groupV2RescindGroupMembership($groupId, $membershipType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2RescindGroupMembership: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**| ID of the group. |
 **membershipType** | [**\Bungie\Model\BungieMembershipType**](../Model/.md)| MembershipType of the account to leave. |

### Return type

[**\Bungie\Model\InlineResponse20026**](../Model/InlineResponse20026.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupV2SetUserClanInviteSetting**
> \Bungie\Model\InlineResponse20019 groupV2SetUserClanInviteSetting($allowInvites, $mType)



Sets the state of the user's clan invite preferences - true if they wish to be invited to clans, false otherwise.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');
// Configure OAuth2 access token for authorization: oauth2
$config = Bungie\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Bungie\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$allowInvites = True; // bool | True to allow invites of this user to clans, false otherwise.
$mType = new \Bungie\Model\\Bungie\Model\BungieMembershipType(); // \Bungie\Model\BungieMembershipType | The Destiny membership type of linked account we are manipulating.

try {
    $result = $apiInstance->groupV2SetUserClanInviteSetting($allowInvites, $mType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2SetUserClanInviteSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **allowInvites** | **bool**| True to allow invites of this user to clans, false otherwise. |
 **mType** | [**\Bungie\Model\BungieMembershipType**](../Model/.md)| The Destiny membership type of linked account we are manipulating. |

### Return type

[**\Bungie\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupV2UnbanMember**
> \Bungie\Model\InlineResponse20019 groupV2UnbanMember($groupId, $membershipId, $membershipType)



Unbans the requested member, allowing them to re-apply for membership.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');
// Configure OAuth2 access token for authorization: oauth2
$config = Bungie\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Bungie\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = 56; // int | 
$membershipId = 56; // int | Membership ID of the member to unban from the group
$membershipType = new \Bungie\Model\\Bungie\Model\BungieMembershipType(); // \Bungie\Model\BungieMembershipType | Membership type of the provided membership ID.

try {
    $result = $apiInstance->groupV2UnbanMember($groupId, $membershipId, $membershipType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupV2UnbanMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**|  |
 **membershipId** | **int**| Membership ID of the member to unban from the group |
 **membershipType** | [**\Bungie\Model\BungieMembershipType**](../Model/.md)| Membership type of the provided membership ID. |

### Return type

[**\Bungie\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

