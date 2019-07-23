# Bungie\GroupV2Api

All URIs are relative to *https://www.bungie.net/Platform*

Method | HTTP request | Description
------------- | ------------- | -------------
[**abdicateFoundership**](GroupV2Api.md#abdicateFoundership) | **POST** /GroupV2/{groupId}/Admin/AbdicateFoundership/{membershipType}/{founderIdNew}/ | 
[**addOptionalConversation**](GroupV2Api.md#addOptionalConversation) | **POST** /GroupV2/{groupId}/OptionalConversations/Add/ | 
[**approveAllPending**](GroupV2Api.md#approveAllPending) | **POST** /GroupV2/{groupId}/Members/ApproveAll/ | 
[**approvePending**](GroupV2Api.md#approvePending) | **POST** /GroupV2/{groupId}/Members/Approve/{membershipType}/{membershipId}/ | 
[**approvePendingForList**](GroupV2Api.md#approvePendingForList) | **POST** /GroupV2/{groupId}/Members/ApproveList/ | 
[**banMember**](GroupV2Api.md#banMember) | **POST** /GroupV2/{groupId}/Members/{membershipType}/{membershipId}/Ban/ | 
[**denyAllPending**](GroupV2Api.md#denyAllPending) | **POST** /GroupV2/{groupId}/Members/DenyAll/ | 
[**denyPendingForList**](GroupV2Api.md#denyPendingForList) | **POST** /GroupV2/{groupId}/Members/DenyList/ | 
[**editClanBanner**](GroupV2Api.md#editClanBanner) | **POST** /GroupV2/{groupId}/EditClanBanner/ | 
[**editFounderOptions**](GroupV2Api.md#editFounderOptions) | **POST** /GroupV2/{groupId}/EditFounderOptions/ | 
[**editGroup**](GroupV2Api.md#editGroup) | **POST** /GroupV2/{groupId}/Edit/ | 
[**editGroupMembership**](GroupV2Api.md#editGroupMembership) | **POST** /GroupV2/{groupId}/Members/{membershipType}/{membershipId}/SetMembershipType/{memberType}/ | 
[**editOptionalConversation**](GroupV2Api.md#editOptionalConversation) | **POST** /GroupV2/{groupId}/OptionalConversations/Edit/{conversationId}/ | 
[**getAdminsAndFounderOfGroup**](GroupV2Api.md#getAdminsAndFounderOfGroup) | **GET** /GroupV2/{groupId}/AdminsAndFounder/ | 
[**getAvailableAvatars**](GroupV2Api.md#getAvailableAvatars) | **GET** /GroupV2/GetAvailableAvatars/ | 
[**getAvailableThemes**](GroupV2Api.md#getAvailableThemes) | **GET** /GroupV2/GetAvailableThemes/ | 
[**getBannedMembersOfGroup**](GroupV2Api.md#getBannedMembersOfGroup) | **GET** /GroupV2/{groupId}/Banned/ | 
[**getGroup**](GroupV2Api.md#getGroup) | **GET** /GroupV2/{groupId}/ | 
[**getGroupByName**](GroupV2Api.md#getGroupByName) | **GET** /GroupV2/Name/{groupName}/{groupType}/ | 
[**getGroupByNameV2**](GroupV2Api.md#getGroupByNameV2) | **POST** /GroupV2/NameV2/ | 
[**getGroupOptionalConversations**](GroupV2Api.md#getGroupOptionalConversations) | **GET** /GroupV2/{groupId}/OptionalConversations/ | 
[**getGroupsForMember**](GroupV2Api.md#getGroupsForMember) | **GET** /GroupV2/User/{membershipType}/{membershipId}/{filter}/{groupType}/ | 
[**getInvitedIndividuals**](GroupV2Api.md#getInvitedIndividuals) | **GET** /GroupV2/{groupId}/Members/InvitedIndividuals/ | 
[**getMembersOfGroup**](GroupV2Api.md#getMembersOfGroup) | **GET** /GroupV2/{groupId}/Members/ | 
[**getPendingMemberships**](GroupV2Api.md#getPendingMemberships) | **GET** /GroupV2/{groupId}/Members/Pending/ | 
[**getPotentialGroupsForMember**](GroupV2Api.md#getPotentialGroupsForMember) | **GET** /GroupV2/User/Potential/{membershipType}/{membershipId}/{filter}/{groupType}/ | 
[**getRecommendedGroups**](GroupV2Api.md#getRecommendedGroups) | **POST** /GroupV2/Recommended/{groupType}/{createDateRange}/ | 
[**getUserClanInviteSetting**](GroupV2Api.md#getUserClanInviteSetting) | **GET** /GroupV2/GetUserClanInviteSetting/{mType}/ | 
[**groupSearch**](GroupV2Api.md#groupSearch) | **POST** /GroupV2/Search/ | 
[**individualGroupInvite**](GroupV2Api.md#individualGroupInvite) | **POST** /GroupV2/{groupId}/Members/IndividualInvite/{membershipType}/{membershipId}/ | 
[**individualGroupInviteCancel**](GroupV2Api.md#individualGroupInviteCancel) | **POST** /GroupV2/{groupId}/Members/IndividualInviteCancel/{membershipType}/{membershipId}/ | 
[**kickMember**](GroupV2Api.md#kickMember) | **POST** /GroupV2/{groupId}/Members/{membershipType}/{membershipId}/Kick/ | 
[**recoverGroupForFounder**](GroupV2Api.md#recoverGroupForFounder) | **GET** /GroupV2/Recover/{membershipType}/{membershipId}/{groupType}/ | 
[**unbanMember**](GroupV2Api.md#unbanMember) | **POST** /GroupV2/{groupId}/Members/{membershipType}/{membershipId}/Unban/ | 


# **abdicateFoundership**
> \Bungie\Model\InlineResponse20017 abdicateFoundership($founderIdNew, $groupId, $membershipType)



An administrative method to allow the founder of a group or clan to give up their position to another admin permanently.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$founderIdNew = 56; // int | The new founder for this group. Must already be a group admin.
$groupId = 56; // int | The target group id.
$membershipType = 56; // int | Membership type of the provided founderIdNew.

try {
    $result = $apiInstance->abdicateFoundership($founderIdNew, $groupId, $membershipType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->abdicateFoundership: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **founderIdNew** | **int**| The new founder for this group. Must already be a group admin. |
 **groupId** | **int**| The target group id. |
 **membershipType** | **int**| Membership type of the provided founderIdNew. |

### Return type

[**\Bungie\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addOptionalConversation**
> \Bungie\Model\InlineResponse20012 addOptionalConversation($groupId, $groupOptionalConversationAddRequest)



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
$groupOptionalConversationAddRequest = new GroupOptionalConversationAddRequest(); // \Bungie\Model\GroupsV2\GroupOptionalConversationAddRequest | 

try {
    $result = $apiInstance->addOptionalConversation($groupId, $groupOptionalConversationAddRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->addOptionalConversation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**| Group ID of the group to edit. |
 **groupOptionalConversationAddRequest** | [**\Bungie\Model\GroupsV2\GroupOptionalConversationAddRequest**](../Model/GroupOptionalConversationAddRequest.md)|  |

### Return type

[**\Bungie\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **approveAllPending**
> \Bungie\Model\InlineResponse20027 approveAllPending($groupId, $groupApplicationRequest)



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
$groupApplicationRequest = new GroupApplicationRequest(); // \Bungie\Model\GroupsV2\GroupApplicationRequest | 

try {
    $result = $apiInstance->approveAllPending($groupId, $groupApplicationRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->approveAllPending: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**| ID of the group. |
 **groupApplicationRequest** | [**\Bungie\Model\GroupsV2\GroupApplicationRequest**](../Model/GroupApplicationRequest.md)|  |

### Return type

[**\Bungie\Model\InlineResponse20027**](../Model/InlineResponse20027.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **approvePending**
> \Bungie\Model\InlineResponse20017 approvePending($groupId, $membershipId, $membershipType, $groupApplicationRequest)



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
$membershipType = 56; // int | Membership type of the supplied membership ID.
$groupApplicationRequest = new GroupApplicationRequest(); // \Bungie\Model\GroupsV2\GroupApplicationRequest | 

try {
    $result = $apiInstance->approvePending($groupId, $membershipId, $membershipType, $groupApplicationRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->approvePending: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**| ID of the group. |
 **membershipId** | **int**| The membership id being approved. |
 **membershipType** | **int**| Membership type of the supplied membership ID. |
 **groupApplicationRequest** | [**\Bungie\Model\GroupsV2\GroupApplicationRequest**](../Model/GroupApplicationRequest.md)|  |

### Return type

[**\Bungie\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **approvePendingForList**
> \Bungie\Model\InlineResponse20027 approvePendingForList($groupId, $groupApplicationListRequest)



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
$groupApplicationListRequest = new GroupApplicationListRequest(); // \Bungie\Model\GroupsV2\GroupApplicationListRequest | 

try {
    $result = $apiInstance->approvePendingForList($groupId, $groupApplicationListRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->approvePendingForList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**| ID of the group. |
 **groupApplicationListRequest** | [**\Bungie\Model\GroupsV2\GroupApplicationListRequest**](../Model/GroupApplicationListRequest.md)|  |

### Return type

[**\Bungie\Model\InlineResponse20027**](../Model/InlineResponse20027.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **banMember**
> \Bungie\Model\InlineResponse20022 banMember($groupId, $membershipId, $membershipType, $groupBanRequest)



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
$membershipType = 56; // int | Membership type of the provided membership ID.
$groupBanRequest = new GroupBanRequest(); // \Bungie\Model\GroupsV2\GroupBanRequest | 

try {
    $result = $apiInstance->banMember($groupId, $membershipId, $membershipType, $groupBanRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->banMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**| Group ID that has the member to ban. |
 **membershipId** | **int**| Membership ID of the member to ban from the group. |
 **membershipType** | **int**| Membership type of the provided membership ID. |
 **groupBanRequest** | [**\Bungie\Model\GroupsV2\GroupBanRequest**](../Model/GroupBanRequest.md)|  |

### Return type

[**\Bungie\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **denyAllPending**
> \Bungie\Model\InlineResponse20027 denyAllPending($groupId, $groupApplicationRequest)



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
$groupApplicationRequest = new GroupApplicationRequest(); // \Bungie\Model\GroupsV2\GroupApplicationRequest | 

try {
    $result = $apiInstance->denyAllPending($groupId, $groupApplicationRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->denyAllPending: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**| ID of the group. |
 **groupApplicationRequest** | [**\Bungie\Model\GroupsV2\GroupApplicationRequest**](../Model/GroupApplicationRequest.md)|  |

### Return type

[**\Bungie\Model\InlineResponse20027**](../Model/InlineResponse20027.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **denyPendingForList**
> \Bungie\Model\InlineResponse20027 denyPendingForList($groupId, $groupApplicationListRequest)



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
$groupApplicationListRequest = new GroupApplicationListRequest(); // \Bungie\Model\GroupsV2\GroupApplicationListRequest | 

try {
    $result = $apiInstance->denyPendingForList($groupId, $groupApplicationListRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->denyPendingForList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**| ID of the group. |
 **groupApplicationListRequest** | [**\Bungie\Model\GroupsV2\GroupApplicationListRequest**](../Model/GroupApplicationListRequest.md)|  |

### Return type

[**\Bungie\Model\InlineResponse20027**](../Model/InlineResponse20027.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editClanBanner**
> \Bungie\Model\InlineResponse20022 editClanBanner($groupId, $clanBanner)



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
$clanBanner = new ClanBanner(); // \Bungie\Model\GroupsV2\ClanBanner | 

try {
    $result = $apiInstance->editClanBanner($groupId, $clanBanner);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->editClanBanner: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**| Group ID of the group to edit. |
 **clanBanner** | [**\Bungie\Model\GroupsV2\ClanBanner**](../Model/ClanBanner.md)|  |

### Return type

[**\Bungie\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editFounderOptions**
> \Bungie\Model\InlineResponse20022 editFounderOptions($groupId, $groupOptionsEditAction)



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
$groupOptionsEditAction = new GroupOptionsEditAction(); // \Bungie\Model\GroupsV2\GroupOptionsEditAction | 

try {
    $result = $apiInstance->editFounderOptions($groupId, $groupOptionsEditAction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->editFounderOptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**| Group ID of the group to edit. |
 **groupOptionsEditAction** | [**\Bungie\Model\GroupsV2\GroupOptionsEditAction**](../Model/GroupOptionsEditAction.md)|  |

### Return type

[**\Bungie\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editGroup**
> \Bungie\Model\InlineResponse20022 editGroup($groupId, $groupEditAction)



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
$groupEditAction = new GroupEditAction(); // \Bungie\Model\GroupsV2\GroupEditAction | 

try {
    $result = $apiInstance->editGroup($groupId, $groupEditAction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->editGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**| Group ID of the group to edit. |
 **groupEditAction** | [**\Bungie\Model\GroupsV2\GroupEditAction**](../Model/GroupEditAction.md)|  |

### Return type

[**\Bungie\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editGroupMembership**
> \Bungie\Model\InlineResponse20022 editGroupMembership($groupId, $membershipId, $membershipType, $memberType)



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
$membershipType = 56; // int | Membership type of the provide membership ID.
$memberType = 56; // int | New membertype for the specified member.

try {
    $result = $apiInstance->editGroupMembership($groupId, $membershipId, $membershipType, $memberType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->editGroupMembership: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**| ID of the group to which the member belongs. |
 **membershipId** | **int**| Membership ID to modify. |
 **membershipType** | **int**| Membership type of the provide membership ID. |
 **memberType** | **int**| New membertype for the specified member. |

### Return type

[**\Bungie\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editOptionalConversation**
> \Bungie\Model\InlineResponse20012 editOptionalConversation($conversationId, $groupId, $groupOptionalConversationEditRequest)



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
$groupOptionalConversationEditRequest = new GroupOptionalConversationEditRequest(); // \Bungie\Model\GroupsV2\GroupOptionalConversationEditRequest | 

try {
    $result = $apiInstance->editOptionalConversation($conversationId, $groupId, $groupOptionalConversationEditRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->editOptionalConversation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversationId** | **int**| Conversation Id of the channel being edited. |
 **groupId** | **int**| Group ID of the group to edit. |
 **groupOptionalConversationEditRequest** | [**\Bungie\Model\GroupsV2\GroupOptionalConversationEditRequest**](../Model/GroupOptionalConversationEditRequest.md)|  |

### Return type

[**\Bungie\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAdminsAndFounderOfGroup**
> \Bungie\Model\InlineResponse20023 getAdminsAndFounderOfGroup($currentpage, $groupId)



Get the list of members in a given group who are of admin level or higher.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currentpage = 56; // int | Page number (starting with 1). Each page has a fixed size of 50 items per page.
$groupId = 56; // int | The ID of the group.

try {
    $result = $apiInstance->getAdminsAndFounderOfGroup($currentpage, $groupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->getAdminsAndFounderOfGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currentpage** | **int**| Page number (starting with 1). Each page has a fixed size of 50 items per page. |
 **groupId** | **int**| The ID of the group. |

### Return type

[**\Bungie\Model\InlineResponse20023**](../Model/InlineResponse20023.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAvailableAvatars**
> \Bungie\Model\InlineResponse20015 getAvailableAvatars()



Returns a list of all available group avatars for the signed-in user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAvailableAvatars();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->getAvailableAvatars: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Bungie\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAvailableThemes**
> \Bungie\Model\InlineResponse20016 getAvailableThemes()



Returns a list of all available group themes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAvailableThemes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->getAvailableThemes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Bungie\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBannedMembersOfGroup**
> \Bungie\Model\InlineResponse20025 getBannedMembersOfGroup($currentpage, $groupId)



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
    $result = $apiInstance->getBannedMembersOfGroup($currentpage, $groupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->getBannedMembersOfGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currentpage** | **int**| Page number (starting with 1). Each page has a fixed size of 50 entries. |
 **groupId** | **int**| Group ID whose banned members you are fetching |

### Return type

[**\Bungie\Model\InlineResponse20025**](../Model/InlineResponse20025.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroup**
> \Bungie\Model\InlineResponse20020 getGroup($groupId)



Get information about a specific group of the given ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = 56; // int | Requested group's id.

try {
    $result = $apiInstance->getGroup($groupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->getGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**| Requested group&#39;s id. |

### Return type

[**\Bungie\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupByName**
> \Bungie\Model\InlineResponse20020 getGroupByName($groupName, $groupType)



Get information about a specific group with the given name and type.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupName = 'groupName_example'; // string | Exact name of the group to find.
$groupType = 56; // int | Type of group to find.

try {
    $result = $apiInstance->getGroupByName($groupName, $groupType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->getGroupByName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupName** | **string**| Exact name of the group to find. |
 **groupType** | **int**| Type of group to find. |

### Return type

[**\Bungie\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupByNameV2**
> \Bungie\Model\InlineResponse20020 getGroupByNameV2($groupNameSearchRequest)



Get information about a specific group with the given name and type. The POST version.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupNameSearchRequest = new GroupNameSearchRequest(); // \Bungie\Model\GroupsV2\GroupNameSearchRequest | 

try {
    $result = $apiInstance->getGroupByNameV2($groupNameSearchRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->getGroupByNameV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupNameSearchRequest** | [**\Bungie\Model\GroupsV2\GroupNameSearchRequest**](../Model/GroupNameSearchRequest.md)|  |

### Return type

[**\Bungie\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupOptionalConversations**
> \Bungie\Model\InlineResponse20021 getGroupOptionalConversations($groupId)



Gets a list of available optional conversation channels and their settings.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = 56; // int | Requested group's id.

try {
    $result = $apiInstance->getGroupOptionalConversations($groupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->getGroupOptionalConversations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**| Requested group&#39;s id. |

### Return type

[**\Bungie\Model\InlineResponse20021**](../Model/InlineResponse20021.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupsForMember**
> \Bungie\Model\InlineResponse20028 getGroupsForMember($filter, $groupType, $membershipId, $membershipType)



Get information about the groups that a given member has joined.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 56; // int | Filter apply to list of joined groups.
$groupType = 56; // int | Type of group the supplied member founded.
$membershipId = 56; // int | Membership ID to for which to find founded groups.
$membershipType = 56; // int | Membership type of the supplied membership ID.

try {
    $result = $apiInstance->getGroupsForMember($filter, $groupType, $membershipId, $membershipType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->getGroupsForMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **int**| Filter apply to list of joined groups. |
 **groupType** | **int**| Type of group the supplied member founded. |
 **membershipId** | **int**| Membership ID to for which to find founded groups. |
 **membershipType** | **int**| Membership type of the supplied membership ID. |

### Return type

[**\Bungie\Model\InlineResponse20028**](../Model/InlineResponse20028.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvitedIndividuals**
> \Bungie\Model\InlineResponse20026 getInvitedIndividuals($currentpage, $groupId)



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
    $result = $apiInstance->getInvitedIndividuals($currentpage, $groupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->getInvitedIndividuals: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currentpage** | **int**| Page number (starting with 1). Each page has a fixed size of 50 items per page. |
 **groupId** | **int**| ID of the group. |

### Return type

[**\Bungie\Model\InlineResponse20026**](../Model/InlineResponse20026.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMembersOfGroup**
> \Bungie\Model\InlineResponse20023 getMembersOfGroup($currentpage, $groupId, $memberType, $nameSearch)



Get the list of members in a given group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currentpage = 56; // int | Page number (starting with 1). Each page has a fixed size of 50 items per page.
$groupId = 56; // int | The ID of the group.
$memberType = 56; // int | Filter out other member types. Use None for all members.
$nameSearch = 'nameSearch_example'; // string | The name fragment upon which a search should be executed for members with matching display or unique names.

try {
    $result = $apiInstance->getMembersOfGroup($currentpage, $groupId, $memberType, $nameSearch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->getMembersOfGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currentpage** | **int**| Page number (starting with 1). Each page has a fixed size of 50 items per page. |
 **groupId** | **int**| The ID of the group. |
 **memberType** | **int**| Filter out other member types. Use None for all members. | [optional]
 **nameSearch** | **string**| The name fragment upon which a search should be executed for members with matching display or unique names. | [optional]

### Return type

[**\Bungie\Model\InlineResponse20023**](../Model/InlineResponse20023.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPendingMemberships**
> \Bungie\Model\InlineResponse20026 getPendingMemberships($currentpage, $groupId)



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
    $result = $apiInstance->getPendingMemberships($currentpage, $groupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->getPendingMemberships: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **currentpage** | **int**| Page number (starting with 1). Each page has a fixed size of 50 items per page. |
 **groupId** | **int**| ID of the group. |

### Return type

[**\Bungie\Model\InlineResponse20026**](../Model/InlineResponse20026.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPotentialGroupsForMember**
> \Bungie\Model\InlineResponse20029 getPotentialGroupsForMember($filter, $groupType, $membershipId, $membershipType)



Get information about the groups that a given member has applied to or been invited to.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 56; // int | Filter apply to list of potential joined groups.
$groupType = 56; // int | Type of group the supplied member applied.
$membershipId = 56; // int | Membership ID to for which to find applied groups.
$membershipType = 56; // int | Membership type of the supplied membership ID.

try {
    $result = $apiInstance->getPotentialGroupsForMember($filter, $groupType, $membershipId, $membershipType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->getPotentialGroupsForMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **int**| Filter apply to list of potential joined groups. |
 **groupType** | **int**| Type of group the supplied member applied. |
 **membershipId** | **int**| Membership ID to for which to find applied groups. |
 **membershipType** | **int**| Membership type of the supplied membership ID. |

### Return type

[**\Bungie\Model\InlineResponse20029**](../Model/InlineResponse20029.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRecommendedGroups**
> \Bungie\Model\InlineResponse20018 getRecommendedGroups($createDateRange, $groupType)



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
$createDateRange = 56; // int | Requested range in which to pull recommended groups
$groupType = 56; // int | Type of groups requested

try {
    $result = $apiInstance->getRecommendedGroups($createDateRange, $groupType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->getRecommendedGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createDateRange** | **int**| Requested range in which to pull recommended groups |
 **groupType** | **int**| Type of groups requested |

### Return type

[**\Bungie\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserClanInviteSetting**
> \Bungie\Model\InlineResponse20017 getUserClanInviteSetting($mType)



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
$mType = 56; // int | The Destiny membership type of the account we wish to access settings.

try {
    $result = $apiInstance->getUserClanInviteSetting($mType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->getUserClanInviteSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mType** | **int**| The Destiny membership type of the account we wish to access settings. |

### Return type

[**\Bungie\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **groupSearch**
> \Bungie\Model\InlineResponse20019 groupSearch($groupQuery)



Search for Groups.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupQuery = new GroupQuery(); // \Bungie\Model\GroupsV2\GroupQuery | 

try {
    $result = $apiInstance->groupSearch($groupQuery);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->groupSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupQuery** | [**\Bungie\Model\GroupsV2\GroupQuery**](../Model/GroupQuery.md)|  |

### Return type

[**\Bungie\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **individualGroupInvite**
> \Bungie\Model\InlineResponse20030 individualGroupInvite($groupId, $membershipId, $membershipType, $groupApplicationRequest)



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
$membershipType = 56; // int | MembershipType of the account being invited.
$groupApplicationRequest = new GroupApplicationRequest(); // \Bungie\Model\GroupsV2\GroupApplicationRequest | 

try {
    $result = $apiInstance->individualGroupInvite($groupId, $membershipId, $membershipType, $groupApplicationRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->individualGroupInvite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**| ID of the group you would like to join. |
 **membershipId** | **int**| Membership id of the account being invited. |
 **membershipType** | **int**| MembershipType of the account being invited. |
 **groupApplicationRequest** | [**\Bungie\Model\GroupsV2\GroupApplicationRequest**](../Model/GroupApplicationRequest.md)|  |

### Return type

[**\Bungie\Model\InlineResponse20030**](../Model/InlineResponse20030.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **individualGroupInviteCancel**
> \Bungie\Model\InlineResponse20030 individualGroupInviteCancel($groupId, $membershipId, $membershipType)



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
$membershipType = 56; // int | MembershipType of the account being cancelled.

try {
    $result = $apiInstance->individualGroupInviteCancel($groupId, $membershipId, $membershipType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->individualGroupInviteCancel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**| ID of the group you would like to join. |
 **membershipId** | **int**| Membership id of the account being cancelled. |
 **membershipType** | **int**| MembershipType of the account being cancelled. |

### Return type

[**\Bungie\Model\InlineResponse20030**](../Model/InlineResponse20030.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kickMember**
> \Bungie\Model\InlineResponse20024 kickMember($groupId, $membershipId, $membershipType)



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
$membershipType = 56; // int | Membership type of the provided membership ID.

try {
    $result = $apiInstance->kickMember($groupId, $membershipId, $membershipType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->kickMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**| Group ID to kick the user from. |
 **membershipId** | **int**| Membership ID to kick. |
 **membershipType** | **int**| Membership type of the provided membership ID. |

### Return type

[**\Bungie\Model\InlineResponse20024**](../Model/InlineResponse20024.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recoverGroupForFounder**
> \Bungie\Model\InlineResponse20028 recoverGroupForFounder($groupType, $membershipId, $membershipType)



Allows a founder to manually recover a group they can see in game but not on bungie.net

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\GroupV2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupType = 56; // int | Type of group the supplied member founded.
$membershipId = 56; // int | Membership ID to for which to find founded groups.
$membershipType = 56; // int | Membership type of the supplied membership ID.

try {
    $result = $apiInstance->recoverGroupForFounder($groupType, $membershipId, $membershipType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->recoverGroupForFounder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupType** | **int**| Type of group the supplied member founded. |
 **membershipId** | **int**| Membership ID to for which to find founded groups. |
 **membershipType** | **int**| Membership type of the supplied membership ID. |

### Return type

[**\Bungie\Model\InlineResponse20028**](../Model/InlineResponse20028.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unbanMember**
> \Bungie\Model\InlineResponse20022 unbanMember($groupId, $membershipId, $membershipType)



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
$membershipType = 56; // int | Membership type of the provided membership ID.

try {
    $result = $apiInstance->unbanMember($groupId, $membershipId, $membershipType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupV2Api->unbanMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**|  |
 **membershipId** | **int**| Membership ID of the member to unban from the group |
 **membershipType** | **int**| Membership type of the provided membership ID. |

### Return type

[**\Bungie\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

