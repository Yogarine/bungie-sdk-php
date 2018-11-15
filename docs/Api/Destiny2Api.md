# Bungie\Destiny2Api

All URIs are relative to *https://www.bungie.net/Platform*

Method | HTTP request | Description
------------- | ------------- | -------------
[**destiny2AwaGetActionToken**](Destiny2Api.md#destiny2AwaGetActionToken) | **GET** /Destiny2/Awa/GetActionToken/{correlationId}/ | 
[**destiny2AwaInitializeRequest**](Destiny2Api.md#destiny2AwaInitializeRequest) | **POST** /Destiny2/Awa/Initialize/ | 
[**destiny2AwaProvideAuthorizationResult**](Destiny2Api.md#destiny2AwaProvideAuthorizationResult) | **POST** /Destiny2/Awa/AwaProvideAuthorizationResult/ | 
[**destiny2EquipItem**](Destiny2Api.md#destiny2EquipItem) | **POST** /Destiny2/Actions/Items/EquipItem/ | 
[**destiny2EquipItems**](Destiny2Api.md#destiny2EquipItems) | **POST** /Destiny2/Actions/Items/EquipItems/ | 
[**destiny2GetActivityHistory**](Destiny2Api.md#destiny2GetActivityHistory) | **GET** /Destiny2/{membershipType}/Account/{destinyMembershipId}/Character/{characterId}/Stats/Activities/ | 
[**destiny2GetCharacter**](Destiny2Api.md#destiny2GetCharacter) | **GET** /Destiny2/{membershipType}/Profile/{destinyMembershipId}/Character/{characterId}/ | 
[**destiny2GetClanAggregateStats**](Destiny2Api.md#destiny2GetClanAggregateStats) | **GET** /Destiny2/Stats/AggregateClanStats/{groupId}/ | 
[**destiny2GetClanLeaderboards**](Destiny2Api.md#destiny2GetClanLeaderboards) | **GET** /Destiny2/Stats/Leaderboards/Clans/{groupId}/ | 
[**destiny2GetClanWeeklyRewardState**](Destiny2Api.md#destiny2GetClanWeeklyRewardState) | **GET** /Destiny2/Clan/{groupId}/WeeklyRewardState/ | 
[**destiny2GetCollectibleNodeDetails**](Destiny2Api.md#destiny2GetCollectibleNodeDetails) | **GET** /Destiny2/{membershipType}/Profile/{destinyMembershipId}/Character/{characterId}/Collectibles/{collectiblePresentationNodeHash}/ | 
[**destiny2GetDestinyAggregateActivityStats**](Destiny2Api.md#destiny2GetDestinyAggregateActivityStats) | **GET** /Destiny2/{membershipType}/Account/{destinyMembershipId}/Character/{characterId}/Stats/AggregateActivityStats/ | 
[**destiny2GetDestinyEntityDefinition**](Destiny2Api.md#destiny2GetDestinyEntityDefinition) | **GET** /Destiny2/Manifest/{entityType}/{hashIdentifier}/ | 
[**destiny2GetDestinyManifest**](Destiny2Api.md#destiny2GetDestinyManifest) | **GET** /Destiny2/Manifest/ | 
[**destiny2GetHistoricalStats**](Destiny2Api.md#destiny2GetHistoricalStats) | **GET** /Destiny2/{membershipType}/Account/{destinyMembershipId}/Character/{characterId}/Stats/ | 
[**destiny2GetHistoricalStatsDefinition**](Destiny2Api.md#destiny2GetHistoricalStatsDefinition) | **GET** /Destiny2/Stats/Definition/ | 
[**destiny2GetHistoricalStatsForAccount**](Destiny2Api.md#destiny2GetHistoricalStatsForAccount) | **GET** /Destiny2/{membershipType}/Account/{destinyMembershipId}/Stats/ | 
[**destiny2GetItem**](Destiny2Api.md#destiny2GetItem) | **GET** /Destiny2/{membershipType}/Profile/{destinyMembershipId}/Item/{itemInstanceId}/ | 
[**destiny2GetLeaderboards**](Destiny2Api.md#destiny2GetLeaderboards) | **GET** /Destiny2/{membershipType}/Account/{destinyMembershipId}/Stats/Leaderboards/ | 
[**destiny2GetLeaderboardsForCharacter**](Destiny2Api.md#destiny2GetLeaderboardsForCharacter) | **GET** /Destiny2/Stats/Leaderboards/{membershipType}/{destinyMembershipId}/{characterId}/ | 
[**destiny2GetLinkedProfiles**](Destiny2Api.md#destiny2GetLinkedProfiles) | **GET** /Destiny2/{membershipType}/Profile/{membershipId}/LinkedProfiles/ | 
[**destiny2GetPostGameCarnageReport**](Destiny2Api.md#destiny2GetPostGameCarnageReport) | **GET** /Destiny2/Stats/PostGameCarnageReport/{activityId}/ | 
[**destiny2GetProfile**](Destiny2Api.md#destiny2GetProfile) | **GET** /Destiny2/{membershipType}/Profile/{destinyMembershipId}/ | 
[**destiny2GetPublicMilestoneContent**](Destiny2Api.md#destiny2GetPublicMilestoneContent) | **GET** /Destiny2/Milestones/{milestoneHash}/Content/ | 
[**destiny2GetPublicMilestones**](Destiny2Api.md#destiny2GetPublicMilestones) | **GET** /Destiny2/Milestones/ | 
[**destiny2GetUniqueWeaponHistory**](Destiny2Api.md#destiny2GetUniqueWeaponHistory) | **GET** /Destiny2/{membershipType}/Account/{destinyMembershipId}/Character/{characterId}/Stats/UniqueWeapons/ | 
[**destiny2GetVendor**](Destiny2Api.md#destiny2GetVendor) | **GET** /Destiny2/{membershipType}/Profile/{destinyMembershipId}/Character/{characterId}/Vendors/{vendorHash}/ | 
[**destiny2GetVendors**](Destiny2Api.md#destiny2GetVendors) | **GET** /Destiny2/{membershipType}/Profile/{destinyMembershipId}/Character/{characterId}/Vendors/ | 
[**destiny2InsertSocketPlug**](Destiny2Api.md#destiny2InsertSocketPlug) | **POST** /Destiny2/Actions/Items/InsertSocketPlug/ | 
[**destiny2PullFromPostmaster**](Destiny2Api.md#destiny2PullFromPostmaster) | **POST** /Destiny2/Actions/Items/PullFromPostmaster/ | 
[**destiny2ReportOffensivePostGameCarnageReportPlayer**](Destiny2Api.md#destiny2ReportOffensivePostGameCarnageReportPlayer) | **POST** /Destiny2/Stats/PostGameCarnageReport/{activityId}/Report/ | 
[**destiny2SearchDestinyEntities**](Destiny2Api.md#destiny2SearchDestinyEntities) | **GET** /Destiny2/Armory/Search/{type}/{searchTerm}/ | 
[**destiny2SearchDestinyPlayer**](Destiny2Api.md#destiny2SearchDestinyPlayer) | **GET** /Destiny2/SearchDestinyPlayer/{membershipType}/{displayName}/ | 
[**destiny2SetItemLockState**](Destiny2Api.md#destiny2SetItemLockState) | **POST** /Destiny2/Actions/Items/SetLockState/ | 
[**destiny2TransferItem**](Destiny2Api.md#destiny2TransferItem) | **POST** /Destiny2/Actions/Items/TransferItem/ | 


# **destiny2AwaGetActionToken**
> \Bungie\Model\InlineResponse20059 destiny2AwaGetActionToken($correlationId)



Returns the action token if user approves the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Bungie\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$correlationId = "correlationId_example"; // string | The identifier for the advanced write action request.

try {
    $result = $apiInstance->destiny2AwaGetActionToken($correlationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2AwaGetActionToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **correlationId** | **string**| The identifier for the advanced write action request. |

### Return type

[**\Bungie\Model\InlineResponse20059**](../Model/InlineResponse20059.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **destiny2AwaInitializeRequest**
> \Bungie\Model\InlineResponse20058 destiny2AwaInitializeRequest()



Initialize a request to perform an advanced write action.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Bungie\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->destiny2AwaInitializeRequest();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2AwaInitializeRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Bungie\Model\InlineResponse20058**](../Model/InlineResponse20058.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **destiny2AwaProvideAuthorizationResult**
> \Bungie\Model\InlineResponse20019 destiny2AwaProvideAuthorizationResult()



Provide the result of the user interaction. Called by the Bungie Destiny App to approve or reject a request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->destiny2AwaProvideAuthorizationResult();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2AwaProvideAuthorizationResult: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Bungie\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **destiny2EquipItem**
> \Bungie\Model\InlineResponse20019 destiny2EquipItem()



Equip an item. You must have a valid Destiny Account, and either be in a social space, in orbit, or offline.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Bungie\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->destiny2EquipItem();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2EquipItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Bungie\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **destiny2EquipItems**
> \Bungie\Model\InlineResponse20044 destiny2EquipItems()



Equip a list of items by itemInstanceIds. You must have a valid Destiny Account, and either be in a social space, in orbit, or offline. Any items not found on your character will be ignored.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Bungie\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->destiny2EquipItems();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2EquipItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Bungie\Model\InlineResponse20044**](../Model/InlineResponse20044.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **destiny2GetActivityHistory**
> \Bungie\Model\InlineResponse20053 destiny2GetActivityHistory($characterId, $destinyMembershipId, $membershipType, $count, $mode, $page)



Gets activity history stats for indicated character.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$characterId = 789; // int | The id of the character to retrieve.
$destinyMembershipId = 789; // int | The Destiny membershipId of the user to retrieve.
$membershipType = 56; // int | A valid non-BungieNet membership type.
$count = 56; // int | Number of rows to return
$mode = 56; // int | A filter for the activity mode to be returned. None returns all activities. See the documentation for DestinyActivityModeType for valid values, and pass in string representation.
$page = 56; // int | Page number to return, starting with 0.

try {
    $result = $apiInstance->destiny2GetActivityHistory($characterId, $destinyMembershipId, $membershipType, $count, $mode, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2GetActivityHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| The id of the character to retrieve. |
 **destinyMembershipId** | **int**| The Destiny membershipId of the user to retrieve. |
 **membershipType** | **int**| A valid non-BungieNet membership type. |
 **count** | **int**| Number of rows to return | [optional]
 **mode** | **int**| A filter for the activity mode to be returned. None returns all activities. See the documentation for DestinyActivityModeType for valid values, and pass in string representation. | [optional]
 **page** | **int**| Page number to return, starting with 0. | [optional]

### Return type

[**\Bungie\Model\InlineResponse20053**](../Model/InlineResponse20053.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **destiny2GetCharacter**
> \Bungie\Model\InlineResponse20038 destiny2GetCharacter($characterId, $destinyMembershipId, $membershipType, $components)



Returns character information for the supplied character.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$characterId = 789; // int | ID of the character.
$destinyMembershipId = 789; // int | Destiny membership ID.
$membershipType = 56; // int | A valid non-BungieNet membership type.
$components = array(new \Bungie\Model\\Bungie\Model\DestinyDestinyComponentType()); // \Bungie\Model\DestinyDestinyComponentType[] | A comma separated list of components to return (as strings or numeric values). See the DestinyComponentType enum for valid components to request. You must request at least one component to receive results.

try {
    $result = $apiInstance->destiny2GetCharacter($characterId, $destinyMembershipId, $membershipType, $components);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2GetCharacter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| ID of the character. |
 **destinyMembershipId** | **int**| Destiny membership ID. |
 **membershipType** | **int**| A valid non-BungieNet membership type. |
 **components** | [**\Bungie\Model\DestinyDestinyComponentType[]**](../Model/\Bungie\Model\DestinyDestinyComponentType.md)| A comma separated list of components to return (as strings or numeric values). See the DestinyComponentType enum for valid components to request. You must request at least one component to receive results. | [optional]

### Return type

[**\Bungie\Model\InlineResponse20038**](../Model/InlineResponse20038.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **destiny2GetClanAggregateStats**
> \Bungie\Model\InlineResponse20049 destiny2GetClanAggregateStats($groupId, $modes)



Gets aggregated stats for a clan using the same categories as the clan leaderboards. PREVIEW: This endpoint is still in beta, and may experience rough edges. The schema is in final form, but there may be bugs that prevent desirable operation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$groupId = 789; // int | Group ID of the clan whose leaderboards you wish to fetch.
$modes = "modes_example"; // string | List of game modes for which to get leaderboards. See the documentation for DestinyActivityModeType for valid values, and pass in string representation, comma delimited.

try {
    $result = $apiInstance->destiny2GetClanAggregateStats($groupId, $modes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2GetClanAggregateStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**| Group ID of the clan whose leaderboards you wish to fetch. |
 **modes** | **string**| List of game modes for which to get leaderboards. See the documentation for DestinyActivityModeType for valid values, and pass in string representation, comma delimited. | [optional]

### Return type

[**\Bungie\Model\InlineResponse20049**](../Model/InlineResponse20049.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **destiny2GetClanLeaderboards**
> \Bungie\Model\InlineResponse20048 destiny2GetClanLeaderboards($groupId, $maxtop, $modes, $statid)



Gets leaderboards with the signed in user's friends and the supplied destinyMembershipId as the focus. PREVIEW: This endpoint is still in beta, and may experience rough edges. The schema is in final form, but there may be bugs that prevent desirable operation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$groupId = 789; // int | Group ID of the clan whose leaderboards you wish to fetch.
$maxtop = 56; // int | Maximum number of top players to return. Use a large number to get entire leaderboard.
$modes = "modes_example"; // string | List of game modes for which to get leaderboards. See the documentation for DestinyActivityModeType for valid values, and pass in string representation, comma delimited.
$statid = "statid_example"; // string | ID of stat to return rather than returning all Leaderboard stats.

try {
    $result = $apiInstance->destiny2GetClanLeaderboards($groupId, $maxtop, $modes, $statid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2GetClanLeaderboards: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**| Group ID of the clan whose leaderboards you wish to fetch. |
 **maxtop** | **int**| Maximum number of top players to return. Use a large number to get entire leaderboard. | [optional]
 **modes** | **string**| List of game modes for which to get leaderboards. See the documentation for DestinyActivityModeType for valid values, and pass in string representation, comma delimited. | [optional]
 **statid** | **string**| ID of stat to return rather than returning all Leaderboard stats. | [optional]

### Return type

[**\Bungie\Model\InlineResponse20048**](../Model/InlineResponse20048.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **destiny2GetClanWeeklyRewardState**
> \Bungie\Model\InlineResponse20039 destiny2GetClanWeeklyRewardState($groupId)



Returns information on the weekly clan rewards and if the clan has earned them or not. Note that this will always report rewards as not redeemed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$groupId = 789; // int | A valid group id of clan.

try {
    $result = $apiInstance->destiny2GetClanWeeklyRewardState($groupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2GetClanWeeklyRewardState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**| A valid group id of clan. |

### Return type

[**\Bungie\Model\InlineResponse20039**](../Model/InlineResponse20039.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **destiny2GetCollectibleNodeDetails**
> \Bungie\Model\InlineResponse20043 destiny2GetCollectibleNodeDetails($characterId, $collectiblePresentationNodeHash, $destinyMembershipId, $membershipType, $components)



Given a Presentation Node that has Collectibles as direct descendants, this will return item details about those descendants in the context of the requesting character.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$characterId = 789; // int | The Destiny Character ID of the character for whom we're getting collectible detail info.
$collectiblePresentationNodeHash = 56; // int | The hash identifier of the Presentation Node for whom we should return collectible details. Details will only be returned for collectibles that are direct descendants of this node.
$destinyMembershipId = 789; // int | Destiny membership ID of another user. You may be denied.
$membershipType = 56; // int | A valid non-BungieNet membership type.
$components = array(new \Bungie\Model\\Bungie\Model\DestinyDestinyComponentType()); // \Bungie\Model\DestinyDestinyComponentType[] | A comma separated list of components to return (as strings or numeric values). See the DestinyComponentType enum for valid components to request. You must request at least one component to receive results.

try {
    $result = $apiInstance->destiny2GetCollectibleNodeDetails($characterId, $collectiblePresentationNodeHash, $destinyMembershipId, $membershipType, $components);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2GetCollectibleNodeDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| The Destiny Character ID of the character for whom we&#39;re getting collectible detail info. |
 **collectiblePresentationNodeHash** | **int**| The hash identifier of the Presentation Node for whom we should return collectible details. Details will only be returned for collectibles that are direct descendants of this node. |
 **destinyMembershipId** | **int**| Destiny membership ID of another user. You may be denied. |
 **membershipType** | **int**| A valid non-BungieNet membership type. |
 **components** | [**\Bungie\Model\DestinyDestinyComponentType[]**](../Model/\Bungie\Model\DestinyDestinyComponentType.md)| A comma separated list of components to return (as strings or numeric values). See the DestinyComponentType enum for valid components to request. You must request at least one component to receive results. | [optional]

### Return type

[**\Bungie\Model\InlineResponse20043**](../Model/InlineResponse20043.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **destiny2GetDestinyAggregateActivityStats**
> \Bungie\Model\InlineResponse20055 destiny2GetDestinyAggregateActivityStats($characterId, $destinyMembershipId, $membershipType)



Gets all activities the character has participated in together with aggregate statistics for those activities.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$characterId = 789; // int | The specific character whose activities should be returned.
$destinyMembershipId = 789; // int | The Destiny membershipId of the user to retrieve.
$membershipType = 56; // int | A valid non-BungieNet membership type.

try {
    $result = $apiInstance->destiny2GetDestinyAggregateActivityStats($characterId, $destinyMembershipId, $membershipType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2GetDestinyAggregateActivityStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| The specific character whose activities should be returned. |
 **destinyMembershipId** | **int**| The Destiny membershipId of the user to retrieve. |
 **membershipType** | **int**| A valid non-BungieNet membership type. |

### Return type

[**\Bungie\Model\InlineResponse20055**](../Model/InlineResponse20055.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **destiny2GetDestinyEntityDefinition**
> \Bungie\Model\InlineResponse20034 destiny2GetDestinyEntityDefinition($entityType, $hashIdentifier)



Returns the static definition of an entity of the given Type and hash identifier. Examine the API Documentation for the Type Names of entities that have their own definitions. Note that the return type will always *inherit from* DestinyDefinition, but the specific type returned will be the requested entity type if it can be found. Please don't use this as a chatty alternative to the Manifest database if you require large sets of data, but for simple and one-off accesses this should be handy.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$entityType = "entityType_example"; // string | The type of entity for whom you would like results. These correspond to the entity's definition contract name. For instance, if you are looking for items, this property should be 'DestinyInventoryItemDefinition'. PREVIEW: This endpoint is still in beta, and may experience rough edges. The schema is tentatively in final form, but there may be bugs that prevent desirable operation.
$hashIdentifier = 56; // int | The hash identifier for the specific Entity you want returned.

try {
    $result = $apiInstance->destiny2GetDestinyEntityDefinition($entityType, $hashIdentifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2GetDestinyEntityDefinition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entityType** | **string**| The type of entity for whom you would like results. These correspond to the entity&#39;s definition contract name. For instance, if you are looking for items, this property should be &#39;DestinyInventoryItemDefinition&#39;. PREVIEW: This endpoint is still in beta, and may experience rough edges. The schema is tentatively in final form, but there may be bugs that prevent desirable operation. |
 **hashIdentifier** | **int**| The hash identifier for the specific Entity you want returned. |

### Return type

[**\Bungie\Model\InlineResponse20034**](../Model/InlineResponse20034.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **destiny2GetDestinyManifest**
> \Bungie\Model\InlineResponse20033 destiny2GetDestinyManifest()



Returns the current version of the manifest as a json object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->destiny2GetDestinyManifest();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2GetDestinyManifest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Bungie\Model\InlineResponse20033**](../Model/InlineResponse20033.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **destiny2GetHistoricalStats**
> \Bungie\Model\InlineResponse20051 destiny2GetHistoricalStats($characterId, $destinyMembershipId, $membershipType, $dayend, $daystart, $groups, $modes, $periodType)



Gets historical stats for indicated character.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$characterId = 789; // int | The id of the character to retrieve. You can omit this character ID or set it to 0 to get aggregate stats across all characters.
$destinyMembershipId = 789; // int | The Destiny membershipId of the user to retrieve.
$membershipType = 56; // int | A valid non-BungieNet membership type.
$dayend = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Last day to return when daily stats are requested. Use the format YYYY-MM-DD.
$daystart = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | First day to return when daily stats are requested. Use the format YYYY-MM-DD
$groups = array(new \Bungie\Model\\Bungie\Model\DestinyHistoricalStatsDefinitionsDestinyStatsGroupType()); // \Bungie\Model\DestinyHistoricalStatsDefinitionsDestinyStatsGroupType[] | Group of stats to include, otherwise only general stats are returned. Comma separated list is allowed. Values: General, Weapons, Medals
$modes = array(new \Bungie\Model\\Bungie\Model\DestinyHistoricalStatsDefinitionsDestinyActivityModeType()); // \Bungie\Model\DestinyHistoricalStatsDefinitionsDestinyActivityModeType[] | Game modes to return. See the documentation for DestinyActivityModeType for valid values, and pass in string representation, comma delimited.
$periodType = 56; // int | Indicates a specific period type to return. Optional. May be: Daily, AllTime, or Activity

try {
    $result = $apiInstance->destiny2GetHistoricalStats($characterId, $destinyMembershipId, $membershipType, $dayend, $daystart, $groups, $modes, $periodType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2GetHistoricalStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| The id of the character to retrieve. You can omit this character ID or set it to 0 to get aggregate stats across all characters. |
 **destinyMembershipId** | **int**| The Destiny membershipId of the user to retrieve. |
 **membershipType** | **int**| A valid non-BungieNet membership type. |
 **dayend** | **\DateTime**| Last day to return when daily stats are requested. Use the format YYYY-MM-DD. | [optional]
 **daystart** | **\DateTime**| First day to return when daily stats are requested. Use the format YYYY-MM-DD | [optional]
 **groups** | [**\Bungie\Model\DestinyHistoricalStatsDefinitionsDestinyStatsGroupType[]**](../Model/\Bungie\Model\DestinyHistoricalStatsDefinitionsDestinyStatsGroupType.md)| Group of stats to include, otherwise only general stats are returned. Comma separated list is allowed. Values: General, Weapons, Medals | [optional]
 **modes** | [**\Bungie\Model\DestinyHistoricalStatsDefinitionsDestinyActivityModeType[]**](../Model/\Bungie\Model\DestinyHistoricalStatsDefinitionsDestinyActivityModeType.md)| Game modes to return. See the documentation for DestinyActivityModeType for valid values, and pass in string representation, comma delimited. | [optional]
 **periodType** | **int**| Indicates a specific period type to return. Optional. May be: Daily, AllTime, or Activity | [optional]

### Return type

[**\Bungie\Model\InlineResponse20051**](../Model/InlineResponse20051.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **destiny2GetHistoricalStatsDefinition**
> \Bungie\Model\InlineResponse20047 destiny2GetHistoricalStatsDefinition()



Gets historical stats definitions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->destiny2GetHistoricalStatsDefinition();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2GetHistoricalStatsDefinition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Bungie\Model\InlineResponse20047**](../Model/InlineResponse20047.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **destiny2GetHistoricalStatsForAccount**
> \Bungie\Model\InlineResponse20052 destiny2GetHistoricalStatsForAccount($destinyMembershipId, $membershipType, $groups)



Gets aggregate historical stats organized around each character for a given account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$destinyMembershipId = 789; // int | The Destiny membershipId of the user to retrieve.
$membershipType = 56; // int | A valid non-BungieNet membership type.
$groups = array(new \Bungie\Model\\Bungie\Model\DestinyHistoricalStatsDefinitionsDestinyStatsGroupType()); // \Bungie\Model\DestinyHistoricalStatsDefinitionsDestinyStatsGroupType[] | Groups of stats to include, otherwise only general stats are returned. Comma separated list is allowed. Values: General, Weapons, Medals.

try {
    $result = $apiInstance->destiny2GetHistoricalStatsForAccount($destinyMembershipId, $membershipType, $groups);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2GetHistoricalStatsForAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **destinyMembershipId** | **int**| The Destiny membershipId of the user to retrieve. |
 **membershipType** | **int**| A valid non-BungieNet membership type. |
 **groups** | [**\Bungie\Model\DestinyHistoricalStatsDefinitionsDestinyStatsGroupType[]**](../Model/\Bungie\Model\DestinyHistoricalStatsDefinitionsDestinyStatsGroupType.md)| Groups of stats to include, otherwise only general stats are returned. Comma separated list is allowed. Values: General, Weapons, Medals. | [optional]

### Return type

[**\Bungie\Model\InlineResponse20052**](../Model/InlineResponse20052.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **destiny2GetItem**
> \Bungie\Model\InlineResponse20040 destiny2GetItem($destinyMembershipId, $itemInstanceId, $membershipType, $components)



Retrieve the details of an instanced Destiny Item. An instanced Destiny item is one with an ItemInstanceId. Non-instanced items, such as materials, have no useful instance-specific details and thus are not queryable here.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$destinyMembershipId = 789; // int | The membership ID of the destiny profile.
$itemInstanceId = 789; // int | The Instance ID of the destiny item.
$membershipType = 56; // int | A valid non-BungieNet membership type.
$components = array(new \Bungie\Model\\Bungie\Model\DestinyDestinyComponentType()); // \Bungie\Model\DestinyDestinyComponentType[] | A comma separated list of components to return (as strings or numeric values). See the DestinyComponentType enum for valid components to request. You must request at least one component to receive results.

try {
    $result = $apiInstance->destiny2GetItem($destinyMembershipId, $itemInstanceId, $membershipType, $components);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2GetItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **destinyMembershipId** | **int**| The membership ID of the destiny profile. |
 **itemInstanceId** | **int**| The Instance ID of the destiny item. |
 **membershipType** | **int**| A valid non-BungieNet membership type. |
 **components** | [**\Bungie\Model\DestinyDestinyComponentType[]**](../Model/\Bungie\Model\DestinyDestinyComponentType.md)| A comma separated list of components to return (as strings or numeric values). See the DestinyComponentType enum for valid components to request. You must request at least one component to receive results. | [optional]

### Return type

[**\Bungie\Model\InlineResponse20040**](../Model/InlineResponse20040.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **destiny2GetLeaderboards**
> \Bungie\Model\InlineResponse20048 destiny2GetLeaderboards($destinyMembershipId, $membershipType, $maxtop, $modes, $statid)



Gets leaderboards with the signed in user's friends and the supplied destinyMembershipId as the focus. PREVIEW: This endpoint has not yet been implemented. It is being returned for a preview of future functionality, and for public comment/suggestion/preparation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$destinyMembershipId = 789; // int | The Destiny membershipId of the user to retrieve.
$membershipType = 56; // int | A valid non-BungieNet membership type.
$maxtop = 56; // int | Maximum number of top players to return. Use a large number to get entire leaderboard.
$modes = "modes_example"; // string | List of game modes for which to get leaderboards. See the documentation for DestinyActivityModeType for valid values, and pass in string representation, comma delimited.
$statid = "statid_example"; // string | ID of stat to return rather than returning all Leaderboard stats.

try {
    $result = $apiInstance->destiny2GetLeaderboards($destinyMembershipId, $membershipType, $maxtop, $modes, $statid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2GetLeaderboards: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **destinyMembershipId** | **int**| The Destiny membershipId of the user to retrieve. |
 **membershipType** | **int**| A valid non-BungieNet membership type. |
 **maxtop** | **int**| Maximum number of top players to return. Use a large number to get entire leaderboard. | [optional]
 **modes** | **string**| List of game modes for which to get leaderboards. See the documentation for DestinyActivityModeType for valid values, and pass in string representation, comma delimited. | [optional]
 **statid** | **string**| ID of stat to return rather than returning all Leaderboard stats. | [optional]

### Return type

[**\Bungie\Model\InlineResponse20048**](../Model/InlineResponse20048.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **destiny2GetLeaderboardsForCharacter**
> \Bungie\Model\InlineResponse20048 destiny2GetLeaderboardsForCharacter($characterId, $destinyMembershipId, $membershipType, $maxtop, $modes, $statid)



Gets leaderboards with the signed in user's friends and the supplied destinyMembershipId as the focus. PREVIEW: This endpoint is still in beta, and may experience rough edges. The schema is in final form, but there may be bugs that prevent desirable operation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$characterId = 789; // int | The specific character to build the leaderboard around for the provided Destiny Membership.
$destinyMembershipId = 789; // int | The Destiny membershipId of the user to retrieve.
$membershipType = 56; // int | A valid non-BungieNet membership type.
$maxtop = 56; // int | Maximum number of top players to return. Use a large number to get entire leaderboard.
$modes = "modes_example"; // string | List of game modes for which to get leaderboards. See the documentation for DestinyActivityModeType for valid values, and pass in string representation, comma delimited.
$statid = "statid_example"; // string | ID of stat to return rather than returning all Leaderboard stats.

try {
    $result = $apiInstance->destiny2GetLeaderboardsForCharacter($characterId, $destinyMembershipId, $membershipType, $maxtop, $modes, $statid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2GetLeaderboardsForCharacter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| The specific character to build the leaderboard around for the provided Destiny Membership. |
 **destinyMembershipId** | **int**| The Destiny membershipId of the user to retrieve. |
 **membershipType** | **int**| A valid non-BungieNet membership type. |
 **maxtop** | **int**| Maximum number of top players to return. Use a large number to get entire leaderboard. | [optional]
 **modes** | **string**| List of game modes for which to get leaderboards. See the documentation for DestinyActivityModeType for valid values, and pass in string representation, comma delimited. | [optional]
 **statid** | **string**| ID of stat to return rather than returning all Leaderboard stats. | [optional]

### Return type

[**\Bungie\Model\InlineResponse20048**](../Model/InlineResponse20048.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **destiny2GetLinkedProfiles**
> \Bungie\Model\InlineResponse20036 destiny2GetLinkedProfiles($membershipId, $membershipType)



Returns a summary information about all profiles linked to the requesting membership type/membership ID that have valid Destiny information. The passed-in Membership Type/Membership ID may be a Bungie.Net membership or a Destiny membership. It only returns the minimal amount of data to begin making more substantive requests, but will hopefully serve as a useful alternative to UserServices for people who just care about Destiny data. Note that it will only return linked accounts whose linkages you are allowed to view.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$membershipId = 789; // int | The ID of the membership whose linked Destiny accounts you want returned. Make sure your membership ID matches its Membership Type: don't pass us a PSN membership ID and the XBox membership type, it's not going to work!
$membershipType = 56; // int | The type for the membership whose linked Destiny accounts you want returned.

try {
    $result = $apiInstance->destiny2GetLinkedProfiles($membershipId, $membershipType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2GetLinkedProfiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membershipId** | **int**| The ID of the membership whose linked Destiny accounts you want returned. Make sure your membership ID matches its Membership Type: don&#39;t pass us a PSN membership ID and the XBox membership type, it&#39;s not going to work! |
 **membershipType** | **int**| The type for the membership whose linked Destiny accounts you want returned. |

### Return type

[**\Bungie\Model\InlineResponse20036**](../Model/InlineResponse20036.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **destiny2GetPostGameCarnageReport**
> \Bungie\Model\InlineResponse20046 destiny2GetPostGameCarnageReport($activityId)



Gets the available post game carnage report for the activity ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$activityId = 789; // int | The ID of the activity whose PGCR is requested.

try {
    $result = $apiInstance->destiny2GetPostGameCarnageReport($activityId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2GetPostGameCarnageReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activityId** | **int**| The ID of the activity whose PGCR is requested. |

### Return type

[**\Bungie\Model\InlineResponse20046**](../Model/InlineResponse20046.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **destiny2GetProfile**
> \Bungie\Model\InlineResponse20037 destiny2GetProfile($destinyMembershipId, $membershipType, $components)



Returns Destiny Profile information for the supplied membership.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$destinyMembershipId = 789; // int | Destiny membership ID.
$membershipType = 56; // int | A valid non-BungieNet membership type.
$components = array(new \Bungie\Model\\Bungie\Model\DestinyDestinyComponentType()); // \Bungie\Model\DestinyDestinyComponentType[] | A comma separated list of components to return (as strings or numeric values). See the DestinyComponentType enum for valid components to request. You must request at least one component to receive results.

try {
    $result = $apiInstance->destiny2GetProfile($destinyMembershipId, $membershipType, $components);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2GetProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **destinyMembershipId** | **int**| Destiny membership ID. |
 **membershipType** | **int**| A valid non-BungieNet membership type. |
 **components** | [**\Bungie\Model\DestinyDestinyComponentType[]**](../Model/\Bungie\Model\DestinyDestinyComponentType.md)| A comma separated list of components to return (as strings or numeric values). See the DestinyComponentType enum for valid components to request. You must request at least one component to receive results. | [optional]

### Return type

[**\Bungie\Model\InlineResponse20037**](../Model/InlineResponse20037.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **destiny2GetPublicMilestoneContent**
> \Bungie\Model\InlineResponse20056 destiny2GetPublicMilestoneContent($milestoneHash)



Gets custom localized content for the milestone of the given hash, if it exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$milestoneHash = 56; // int | The identifier for the milestone to be returned.

try {
    $result = $apiInstance->destiny2GetPublicMilestoneContent($milestoneHash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2GetPublicMilestoneContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **milestoneHash** | **int**| The identifier for the milestone to be returned. |

### Return type

[**\Bungie\Model\InlineResponse20056**](../Model/InlineResponse20056.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **destiny2GetPublicMilestones**
> \Bungie\Model\InlineResponse20057 destiny2GetPublicMilestones()



Gets public information about currently available Milestones.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->destiny2GetPublicMilestones();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2GetPublicMilestones: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Bungie\Model\InlineResponse20057**](../Model/InlineResponse20057.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **destiny2GetUniqueWeaponHistory**
> \Bungie\Model\InlineResponse20054 destiny2GetUniqueWeaponHistory($characterId, $destinyMembershipId, $membershipType)



Gets details about unique weapon usage, including all exotic weapons.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$characterId = 789; // int | The id of the character to retrieve.
$destinyMembershipId = 789; // int | The Destiny membershipId of the user to retrieve.
$membershipType = 56; // int | A valid non-BungieNet membership type.

try {
    $result = $apiInstance->destiny2GetUniqueWeaponHistory($characterId, $destinyMembershipId, $membershipType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2GetUniqueWeaponHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| The id of the character to retrieve. |
 **destinyMembershipId** | **int**| The Destiny membershipId of the user to retrieve. |
 **membershipType** | **int**| A valid non-BungieNet membership type. |

### Return type

[**\Bungie\Model\InlineResponse20054**](../Model/InlineResponse20054.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **destiny2GetVendor**
> \Bungie\Model\InlineResponse20042 destiny2GetVendor($characterId, $destinyMembershipId, $membershipType, $vendorHash, $components)



Get the details of a specific Vendor.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$characterId = 789; // int | The Destiny Character ID of the character for whom we're getting vendor info.
$destinyMembershipId = 789; // int | Destiny membership ID of another user. You may be denied.
$membershipType = 56; // int | A valid non-BungieNet membership type.
$vendorHash = 56; // int | The Hash identifier of the Vendor to be returned.
$components = array(new \Bungie\Model\\Bungie\Model\DestinyDestinyComponentType()); // \Bungie\Model\DestinyDestinyComponentType[] | A comma separated list of components to return (as strings or numeric values). See the DestinyComponentType enum for valid components to request. You must request at least one component to receive results.

try {
    $result = $apiInstance->destiny2GetVendor($characterId, $destinyMembershipId, $membershipType, $vendorHash, $components);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2GetVendor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| The Destiny Character ID of the character for whom we&#39;re getting vendor info. |
 **destinyMembershipId** | **int**| Destiny membership ID of another user. You may be denied. |
 **membershipType** | **int**| A valid non-BungieNet membership type. |
 **vendorHash** | **int**| The Hash identifier of the Vendor to be returned. |
 **components** | [**\Bungie\Model\DestinyDestinyComponentType[]**](../Model/\Bungie\Model\DestinyDestinyComponentType.md)| A comma separated list of components to return (as strings or numeric values). See the DestinyComponentType enum for valid components to request. You must request at least one component to receive results. | [optional]

### Return type

[**\Bungie\Model\InlineResponse20042**](../Model/InlineResponse20042.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **destiny2GetVendors**
> \Bungie\Model\InlineResponse20041 destiny2GetVendors($characterId, $destinyMembershipId, $membershipType, $components)



Get currently available vendors from the list of vendors that can possibly have rotating inventory. Note that this does not include things like preview vendors and vendors-as-kiosks, neither of whom have rotating/dynamic inventories. Use their definitions as-is for those.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$characterId = 789; // int | The Destiny Character ID of the character for whom we're getting vendor info.
$destinyMembershipId = 789; // int | Destiny membership ID of another user. You may be denied.
$membershipType = 56; // int | A valid non-BungieNet membership type.
$components = array(new \Bungie\Model\\Bungie\Model\DestinyDestinyComponentType()); // \Bungie\Model\DestinyDestinyComponentType[] | A comma separated list of components to return (as strings or numeric values). See the DestinyComponentType enum for valid components to request. You must request at least one component to receive results.

try {
    $result = $apiInstance->destiny2GetVendors($characterId, $destinyMembershipId, $membershipType, $components);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2GetVendors: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| The Destiny Character ID of the character for whom we&#39;re getting vendor info. |
 **destinyMembershipId** | **int**| Destiny membership ID of another user. You may be denied. |
 **membershipType** | **int**| A valid non-BungieNet membership type. |
 **components** | [**\Bungie\Model\DestinyDestinyComponentType[]**](../Model/\Bungie\Model\DestinyDestinyComponentType.md)| A comma separated list of components to return (as strings or numeric values). See the DestinyComponentType enum for valid components to request. You must request at least one component to receive results. | [optional]

### Return type

[**\Bungie\Model\InlineResponse20041**](../Model/InlineResponse20041.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **destiny2InsertSocketPlug**
> \Bungie\Model\InlineResponse20045 destiny2InsertSocketPlug()



Insert a plug into a socketed item. I know how it sounds, but I assure you it's much more G-rated than you might be guessing. We haven't decided yet whether this will be able to insert plugs that have side effects, but if we do it will require special scope permission for an application attempting to do so. You must have a valid Destiny Account, and either be in a social space, in orbit, or offline. Request must include proof of permission for 'InsertPlugs' from the account owner.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Bungie\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->destiny2InsertSocketPlug();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2InsertSocketPlug: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Bungie\Model\InlineResponse20045**](../Model/InlineResponse20045.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **destiny2PullFromPostmaster**
> \Bungie\Model\InlineResponse20019 destiny2PullFromPostmaster()



Extract an item from the Postmaster, with whatever implications that may entail. You must have a valid Destiny account. You must also pass BOTH a reference AND an instance ID if it's an instanced item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Bungie\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->destiny2PullFromPostmaster();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2PullFromPostmaster: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Bungie\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **destiny2ReportOffensivePostGameCarnageReportPlayer**
> \Bungie\Model\InlineResponse20019 destiny2ReportOffensivePostGameCarnageReportPlayer($activityId)



Report a player that you met in an activity that was engaging in ToS-violating activities. Both you and the offending player must have played in the activityId passed in. Please use this judiciously and only when you have strong suspicions of violation, pretty please.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Bungie\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$activityId = 789; // int | The ID of the activity where you ran into the brigand that you're reporting.

try {
    $result = $apiInstance->destiny2ReportOffensivePostGameCarnageReportPlayer($activityId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2ReportOffensivePostGameCarnageReportPlayer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activityId** | **int**| The ID of the activity where you ran into the brigand that you&#39;re reporting. |

### Return type

[**\Bungie\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **destiny2SearchDestinyEntities**
> \Bungie\Model\InlineResponse20050 destiny2SearchDestinyEntities($searchTerm, $type, $page)



Gets a page list of Destiny items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$searchTerm = "searchTerm_example"; // string | The string to use when searching for Destiny entities.
$type = "type_example"; // string | The type of entity for whom you would like results. These correspond to the entity's definition contract name. For instance, if you are looking for items, this property should be 'DestinyInventoryItemDefinition'.
$page = 56; // int | Page number to return, starting with 0.

try {
    $result = $apiInstance->destiny2SearchDestinyEntities($searchTerm, $type, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2SearchDestinyEntities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **searchTerm** | **string**| The string to use when searching for Destiny entities. |
 **type** | **string**| The type of entity for whom you would like results. These correspond to the entity&#39;s definition contract name. For instance, if you are looking for items, this property should be &#39;DestinyInventoryItemDefinition&#39;. |
 **page** | **int**| Page number to return, starting with 0. | [optional]

### Return type

[**\Bungie\Model\InlineResponse20050**](../Model/InlineResponse20050.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **destiny2SearchDestinyPlayer**
> \Bungie\Model\InlineResponse20035 destiny2SearchDestinyPlayer($displayName, $membershipType)



Returns a list of Destiny memberships given a full Gamertag or PSN ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$displayName = "displayName_example"; // string | The full gamertag or PSN id of the player. Spaces and case are ignored.
$membershipType = 56; // int | A valid non-BungieNet membership type, or All.

try {
    $result = $apiInstance->destiny2SearchDestinyPlayer($displayName, $membershipType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2SearchDestinyPlayer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **displayName** | **string**| The full gamertag or PSN id of the player. Spaces and case are ignored. |
 **membershipType** | **int**| A valid non-BungieNet membership type, or All. |

### Return type

[**\Bungie\Model\InlineResponse20035**](../Model/InlineResponse20035.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **destiny2SetItemLockState**
> \Bungie\Model\InlineResponse20019 destiny2SetItemLockState()



Set the Lock State for an instanced item. You must have a valid Destiny Account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Bungie\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->destiny2SetItemLockState();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2SetItemLockState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Bungie\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **destiny2TransferItem**
> \Bungie\Model\InlineResponse20019 destiny2TransferItem()



Transfer an item to/from your vault. You must have a valid Destiny account. You must also pass BOTH a reference AND an instance ID if it's an instanced item. itshappening.gif

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
$config = Bungie\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->destiny2TransferItem();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->destiny2TransferItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Bungie\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

