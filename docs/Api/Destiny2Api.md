# Bungie\Destiny2Api

All URIs are relative to *https://www.bungie.net/Platform*

Method | HTTP request | Description
------------- | ------------- | -------------
[**awaGetActionToken**](Destiny2Api.md#awaGetActionToken) | **GET** /Destiny2/Awa/GetActionToken/{correlationId}/ | 
[**awaInitializeRequest**](Destiny2Api.md#awaInitializeRequest) | **POST** /Destiny2/Awa/Initialize/ | 
[**awaProvideAuthorizationResult**](Destiny2Api.md#awaProvideAuthorizationResult) | **POST** /Destiny2/Awa/AwaProvideAuthorizationResult/ | 
[**equipItem**](Destiny2Api.md#equipItem) | **POST** /Destiny2/Actions/Items/EquipItem/ | 
[**equipItems**](Destiny2Api.md#equipItems) | **POST** /Destiny2/Actions/Items/EquipItems/ | 
[**getActivityHistory**](Destiny2Api.md#getActivityHistory) | **GET** /Destiny2/{membershipType}/Account/{destinyMembershipId}/Character/{characterId}/Stats/Activities/ | 
[**getCharacter**](Destiny2Api.md#getCharacter) | **GET** /Destiny2/{membershipType}/Profile/{destinyMembershipId}/Character/{characterId}/ | 
[**getClanAggregateStats**](Destiny2Api.md#getClanAggregateStats) | **GET** /Destiny2/Stats/AggregateClanStats/{groupId}/ | 
[**getClanLeaderboards**](Destiny2Api.md#getClanLeaderboards) | **GET** /Destiny2/Stats/Leaderboards/Clans/{groupId}/ | 
[**getClanWeeklyRewardState**](Destiny2Api.md#getClanWeeklyRewardState) | **GET** /Destiny2/Clan/{groupId}/WeeklyRewardState/ | 
[**getCollectibleNodeDetails**](Destiny2Api.md#getCollectibleNodeDetails) | **GET** /Destiny2/{membershipType}/Profile/{destinyMembershipId}/Character/{characterId}/Collectibles/{collectiblePresentationNodeHash}/ | 
[**getDestinyAggregateActivityStats**](Destiny2Api.md#getDestinyAggregateActivityStats) | **GET** /Destiny2/{membershipType}/Account/{destinyMembershipId}/Character/{characterId}/Stats/AggregateActivityStats/ | 
[**getDestinyEntityDefinition**](Destiny2Api.md#getDestinyEntityDefinition) | **GET** /Destiny2/Manifest/{entityType}/{hashIdentifier}/ | 
[**getDestinyManifest**](Destiny2Api.md#getDestinyManifest) | **GET** /Destiny2/Manifest/ | 
[**getHistoricalStats**](Destiny2Api.md#getHistoricalStats) | **GET** /Destiny2/{membershipType}/Account/{destinyMembershipId}/Character/{characterId}/Stats/ | 
[**getHistoricalStatsDefinition**](Destiny2Api.md#getHistoricalStatsDefinition) | **GET** /Destiny2/Stats/Definition/ | 
[**getHistoricalStatsForAccount**](Destiny2Api.md#getHistoricalStatsForAccount) | **GET** /Destiny2/{membershipType}/Account/{destinyMembershipId}/Stats/ | 
[**getItem**](Destiny2Api.md#getItem) | **GET** /Destiny2/{membershipType}/Profile/{destinyMembershipId}/Item/{itemInstanceId}/ | 
[**getLeaderboards**](Destiny2Api.md#getLeaderboards) | **GET** /Destiny2/{membershipType}/Account/{destinyMembershipId}/Stats/Leaderboards/ | 
[**getLeaderboardsForCharacter**](Destiny2Api.md#getLeaderboardsForCharacter) | **GET** /Destiny2/Stats/Leaderboards/{membershipType}/{destinyMembershipId}/{characterId}/ | 
[**getLinkedProfiles**](Destiny2Api.md#getLinkedProfiles) | **GET** /Destiny2/{membershipType}/Profile/{membershipId}/LinkedProfiles/ | 
[**getPostGameCarnageReport**](Destiny2Api.md#getPostGameCarnageReport) | **GET** /Destiny2/Stats/PostGameCarnageReport/{activityId}/ | 
[**getProfile**](Destiny2Api.md#getProfile) | **GET** /Destiny2/{membershipType}/Profile/{destinyMembershipId}/ | 
[**getPublicMilestoneContent**](Destiny2Api.md#getPublicMilestoneContent) | **GET** /Destiny2/Milestones/{milestoneHash}/Content/ | 
[**getPublicMilestones**](Destiny2Api.md#getPublicMilestones) | **GET** /Destiny2/Milestones/ | 
[**getUniqueWeaponHistory**](Destiny2Api.md#getUniqueWeaponHistory) | **GET** /Destiny2/{membershipType}/Account/{destinyMembershipId}/Character/{characterId}/Stats/UniqueWeapons/ | 
[**getVendor**](Destiny2Api.md#getVendor) | **GET** /Destiny2/{membershipType}/Profile/{destinyMembershipId}/Character/{characterId}/Vendors/{vendorHash}/ | 
[**getVendors**](Destiny2Api.md#getVendors) | **GET** /Destiny2/{membershipType}/Profile/{destinyMembershipId}/Character/{characterId}/Vendors/ | 
[**insertSocketPlug**](Destiny2Api.md#insertSocketPlug) | **POST** /Destiny2/Actions/Items/InsertSocketPlug/ | 
[**pullFromPostmaster**](Destiny2Api.md#pullFromPostmaster) | **POST** /Destiny2/Actions/Items/PullFromPostmaster/ | 
[**reportOffensivePostGameCarnageReportPlayer**](Destiny2Api.md#reportOffensivePostGameCarnageReportPlayer) | **POST** /Destiny2/Stats/PostGameCarnageReport/{activityId}/Report/ | 
[**searchDestinyEntities**](Destiny2Api.md#searchDestinyEntities) | **GET** /Destiny2/Armory/Search/{type}/{searchTerm}/ | 
[**searchDestinyPlayer**](Destiny2Api.md#searchDestinyPlayer) | **GET** /Destiny2/SearchDestinyPlayer/{membershipType}/{displayName}/ | 
[**setItemLockState**](Destiny2Api.md#setItemLockState) | **POST** /Destiny2/Actions/Items/SetLockState/ | 
[**transferItem**](Destiny2Api.md#transferItem) | **POST** /Destiny2/Actions/Items/TransferItem/ | 


# **awaGetActionToken**
> \Bungie\Model\InlineResponse20059 awaGetActionToken($correlationId)



Returns the action token if user approves the request.

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

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$correlationId = 'correlationId_example'; // string | The identifier for the advanced write action request.

try {
    $result = $apiInstance->awaGetActionToken($correlationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->awaGetActionToken: ', $e->getMessage(), PHP_EOL;
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

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **awaInitializeRequest**
> \Bungie\Model\InlineResponse20058 awaInitializeRequest($awaPermissionRequested)



Initialize a request to perform an advanced write action.

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

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$awaPermissionRequested = new AwaPermissionRequested(); // \Bungie\Model\Destiny\Advanced\AwaPermissionRequested | 

try {
    $result = $apiInstance->awaInitializeRequest($awaPermissionRequested);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->awaInitializeRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **awaPermissionRequested** | [**\Bungie\Model\Destiny\Advanced\AwaPermissionRequested**](../Model/AwaPermissionRequested.md)|  |

### Return type

[**\Bungie\Model\InlineResponse20058**](../Model/InlineResponse20058.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **awaProvideAuthorizationResult**
> \Bungie\Model\InlineResponse20019 awaProvideAuthorizationResult($awaUserResponse)



Provide the result of the user interaction. Called by the Bungie Destiny App to approve or reject a request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$awaUserResponse = new AwaUserResponse(); // \Bungie\Model\Destiny\Advanced\AwaUserResponse | 

try {
    $result = $apiInstance->awaProvideAuthorizationResult($awaUserResponse);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->awaProvideAuthorizationResult: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **awaUserResponse** | [**\Bungie\Model\Destiny\Advanced\AwaUserResponse**](../Model/AwaUserResponse.md)|  |

### Return type

[**\Bungie\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **equipItem**
> \Bungie\Model\InlineResponse20019 equipItem($destinyItemActionRequest)



Equip an item. You must have a valid Destiny Account, and either be in a social space, in orbit, or offline.

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

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$destinyItemActionRequest = new DestinyItemActionRequest(); // \Bungie\Model\Destiny\Requests\Actions\DestinyItemActionRequest | 

try {
    $result = $apiInstance->equipItem($destinyItemActionRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->equipItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **destinyItemActionRequest** | [**\Bungie\Model\Destiny\Requests\Actions\DestinyItemActionRequest**](../Model/DestinyItemActionRequest.md)|  |

### Return type

[**\Bungie\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **equipItems**
> \Bungie\Model\InlineResponse20044 equipItems($destinyItemSetActionRequest)



Equip a list of items by itemInstanceIds. You must have a valid Destiny Account, and either be in a social space, in orbit, or offline. Any items not found on your character will be ignored.

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

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$destinyItemSetActionRequest = new DestinyItemSetActionRequest(); // \Bungie\Model\Destiny\Requests\Actions\DestinyItemSetActionRequest | 

try {
    $result = $apiInstance->equipItems($destinyItemSetActionRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->equipItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **destinyItemSetActionRequest** | [**\Bungie\Model\Destiny\Requests\Actions\DestinyItemSetActionRequest**](../Model/DestinyItemSetActionRequest.md)|  |

### Return type

[**\Bungie\Model\InlineResponse20044**](../Model/InlineResponse20044.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getActivityHistory**
> \Bungie\Model\InlineResponse20053 getActivityHistory($characterId, $destinyMembershipId, $membershipType, $count, $mode, $page)



Gets activity history stats for indicated character.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$characterId = 56; // int | The id of the character to retrieve.
$destinyMembershipId = 56; // int | The Destiny membershipId of the user to retrieve.
$membershipType = new \Bungie\Model\BungieMembershipType(); // \Bungie\Model\BungieMembershipType | A valid non-BungieNet membership type.
$count = 56; // int | Number of rows to return
$mode = new \Bungie\Model\Destiny\HistoricalStats\Definitions\DestinyActivityModeType(); // \Bungie\Model\Destiny\HistoricalStats\Definitions\DestinyActivityModeType | A filter for the activity mode to be returned. None returns all activities. See the documentation for DestinyActivityModeType for valid values, and pass in string representation.
$page = 56; // int | Page number to return, starting with 0.

try {
    $result = $apiInstance->getActivityHistory($characterId, $destinyMembershipId, $membershipType, $count, $mode, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->getActivityHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| The id of the character to retrieve. |
 **destinyMembershipId** | **int**| The Destiny membershipId of the user to retrieve. |
 **membershipType** | [**\Bungie\Model\BungieMembershipType**](../Model/.md)| A valid non-BungieNet membership type. |
 **count** | **int**| Number of rows to return | [optional]
 **mode** | [**\Bungie\Model\Destiny\HistoricalStats\Definitions\DestinyActivityModeType**](../Model/.md)| A filter for the activity mode to be returned. None returns all activities. See the documentation for DestinyActivityModeType for valid values, and pass in string representation. | [optional]
 **page** | **int**| Page number to return, starting with 0. | [optional]

### Return type

[**\Bungie\Model\InlineResponse20053**](../Model/InlineResponse20053.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharacter**
> \Bungie\Model\InlineResponse20038 getCharacter($characterId, $destinyMembershipId, $membershipType, $components)



Returns character information for the supplied character.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$characterId = 56; // int | ID of the character.
$destinyMembershipId = 56; // int | Destiny membership ID.
$membershipType = new \Bungie\Model\BungieMembershipType(); // \Bungie\Model\BungieMembershipType | A valid non-BungieNet membership type.
$components = array(new \Bungie\Model\Destiny\DestinyComponentType()); // \Bungie\Model\\Bungie\Model\Destiny\DestinyComponentType[] | A comma separated list of components to return (as strings or numeric values). See the DestinyComponentType enum for valid components to request. You must request at least one component to receive results.

try {
    $result = $apiInstance->getCharacter($characterId, $destinyMembershipId, $membershipType, $components);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->getCharacter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| ID of the character. |
 **destinyMembershipId** | **int**| Destiny membership ID. |
 **membershipType** | [**\Bungie\Model\BungieMembershipType**](../Model/.md)| A valid non-BungieNet membership type. |
 **components** | [**\Bungie\Model\\Bungie\Model\Destiny\DestinyComponentType[]**](../Model/\Bungie\Model\Destiny\DestinyComponentType.md)| A comma separated list of components to return (as strings or numeric values). See the DestinyComponentType enum for valid components to request. You must request at least one component to receive results. | [optional]

### Return type

[**\Bungie\Model\InlineResponse20038**](../Model/InlineResponse20038.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getClanAggregateStats**
> \Bungie\Model\InlineResponse20049 getClanAggregateStats($groupId, $modes)



Gets aggregated stats for a clan using the same categories as the clan leaderboards. PREVIEW: This endpoint is still in beta, and may experience rough edges. The schema is in final form, but there may be bugs that prevent desirable operation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = 56; // int | Group ID of the clan whose leaderboards you wish to fetch.
$modes = 'modes_example'; // string | List of game modes for which to get leaderboards. See the documentation for DestinyActivityModeType for valid values, and pass in string representation, comma delimited.

try {
    $result = $apiInstance->getClanAggregateStats($groupId, $modes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->getClanAggregateStats: ', $e->getMessage(), PHP_EOL;
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

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getClanLeaderboards**
> \Bungie\Model\InlineResponse20048 getClanLeaderboards($groupId, $maxtop, $modes, $statid)



Gets leaderboards with the signed in user's friends and the supplied destinyMembershipId as the focus. PREVIEW: This endpoint is still in beta, and may experience rough edges. The schema is in final form, but there may be bugs that prevent desirable operation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = 56; // int | Group ID of the clan whose leaderboards you wish to fetch.
$maxtop = 56; // int | Maximum number of top players to return. Use a large number to get entire leaderboard.
$modes = 'modes_example'; // string | List of game modes for which to get leaderboards. See the documentation for DestinyActivityModeType for valid values, and pass in string representation, comma delimited.
$statid = 'statid_example'; // string | ID of stat to return rather than returning all Leaderboard stats.

try {
    $result = $apiInstance->getClanLeaderboards($groupId, $maxtop, $modes, $statid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->getClanLeaderboards: ', $e->getMessage(), PHP_EOL;
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

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getClanWeeklyRewardState**
> \Bungie\Model\InlineResponse20039 getClanWeeklyRewardState($groupId)



Returns information on the weekly clan rewards and if the clan has earned them or not. Note that this will always report rewards as not redeemed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = 56; // int | A valid group id of clan.

try {
    $result = $apiInstance->getClanWeeklyRewardState($groupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->getClanWeeklyRewardState: ', $e->getMessage(), PHP_EOL;
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

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCollectibleNodeDetails**
> \Bungie\Model\InlineResponse20043 getCollectibleNodeDetails($characterId, $collectiblePresentationNodeHash, $destinyMembershipId, $membershipType, $components)



Given a Presentation Node that has Collectibles as direct descendants, this will return item details about those descendants in the context of the requesting character.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$characterId = 56; // int | The Destiny Character ID of the character for whom we're getting collectible detail info.
$collectiblePresentationNodeHash = 56; // int | The hash identifier of the Presentation Node for whom we should return collectible details. Details will only be returned for collectibles that are direct descendants of this node.
$destinyMembershipId = 56; // int | Destiny membership ID of another user. You may be denied.
$membershipType = new \Bungie\Model\BungieMembershipType(); // \Bungie\Model\BungieMembershipType | A valid non-BungieNet membership type.
$components = array(new \Bungie\Model\Destiny\DestinyComponentType()); // \Bungie\Model\\Bungie\Model\Destiny\DestinyComponentType[] | A comma separated list of components to return (as strings or numeric values). See the DestinyComponentType enum for valid components to request. You must request at least one component to receive results.

try {
    $result = $apiInstance->getCollectibleNodeDetails($characterId, $collectiblePresentationNodeHash, $destinyMembershipId, $membershipType, $components);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->getCollectibleNodeDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| The Destiny Character ID of the character for whom we&#39;re getting collectible detail info. |
 **collectiblePresentationNodeHash** | **int**| The hash identifier of the Presentation Node for whom we should return collectible details. Details will only be returned for collectibles that are direct descendants of this node. |
 **destinyMembershipId** | **int**| Destiny membership ID of another user. You may be denied. |
 **membershipType** | [**\Bungie\Model\BungieMembershipType**](../Model/.md)| A valid non-BungieNet membership type. |
 **components** | [**\Bungie\Model\\Bungie\Model\Destiny\DestinyComponentType[]**](../Model/\Bungie\Model\Destiny\DestinyComponentType.md)| A comma separated list of components to return (as strings or numeric values). See the DestinyComponentType enum for valid components to request. You must request at least one component to receive results. | [optional]

### Return type

[**\Bungie\Model\InlineResponse20043**](../Model/InlineResponse20043.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDestinyAggregateActivityStats**
> \Bungie\Model\InlineResponse20055 getDestinyAggregateActivityStats($characterId, $destinyMembershipId, $membershipType)



Gets all activities the character has participated in together with aggregate statistics for those activities.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$characterId = 56; // int | The specific character whose activities should be returned.
$destinyMembershipId = 56; // int | The Destiny membershipId of the user to retrieve.
$membershipType = new \Bungie\Model\BungieMembershipType(); // \Bungie\Model\BungieMembershipType | A valid non-BungieNet membership type.

try {
    $result = $apiInstance->getDestinyAggregateActivityStats($characterId, $destinyMembershipId, $membershipType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->getDestinyAggregateActivityStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| The specific character whose activities should be returned. |
 **destinyMembershipId** | **int**| The Destiny membershipId of the user to retrieve. |
 **membershipType** | [**\Bungie\Model\BungieMembershipType**](../Model/.md)| A valid non-BungieNet membership type. |

### Return type

[**\Bungie\Model\InlineResponse20055**](../Model/InlineResponse20055.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDestinyEntityDefinition**
> \Bungie\Model\InlineResponse20034 getDestinyEntityDefinition($entityType, $hashIdentifier)



Returns the static definition of an entity of the given Type and hash identifier. Examine the API Documentation for the Type Names of entities that have their own definitions. Note that the return type will always *inherit from* DestinyDefinition, but the specific type returned will be the requested entity type if it can be found. Please don't use this as a chatty alternative to the Manifest database if you require large sets of data, but for simple and one-off accesses this should be handy.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entityType = 'entityType_example'; // string | The type of entity for whom you would like results. These correspond to the entity's definition contract name. For instance, if you are looking for items, this property should be 'DestinyInventoryItemDefinition'. PREVIEW: This endpoint is still in beta, and may experience rough edges. The schema is tentatively in final form, but there may be bugs that prevent desirable operation.
$hashIdentifier = 56; // int | The hash identifier for the specific Entity you want returned.

try {
    $result = $apiInstance->getDestinyEntityDefinition($entityType, $hashIdentifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->getDestinyEntityDefinition: ', $e->getMessage(), PHP_EOL;
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

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDestinyManifest**
> \Bungie\Model\InlineResponse20033 getDestinyManifest()



Returns the current version of the manifest as a json object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getDestinyManifest();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->getDestinyManifest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Bungie\Model\InlineResponse20033**](../Model/InlineResponse20033.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHistoricalStats**
> \Bungie\Model\InlineResponse20051 getHistoricalStats($characterId, $destinyMembershipId, $membershipType, $dayend, $daystart, $groups, $modes, $periodType)



Gets historical stats for indicated character.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$characterId = 56; // int | The id of the character to retrieve. You can omit this character ID or set it to 0 to get aggregate stats across all characters.
$destinyMembershipId = 56; // int | The Destiny membershipId of the user to retrieve.
$membershipType = new \Bungie\Model\BungieMembershipType(); // \Bungie\Model\BungieMembershipType | A valid non-BungieNet membership type.
$dayend = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Last day to return when daily stats are requested. Use the format YYYY-MM-DD.
$daystart = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | First day to return when daily stats are requested. Use the format YYYY-MM-DD
$groups = array(new \Bungie\Model\Destiny\HistoricalStats\Definitions\DestinyStatsGroupType()); // \Bungie\Model\\Bungie\Model\Destiny\HistoricalStats\Definitions\DestinyStatsGroupType[] | Group of stats to include, otherwise only general stats are returned. Comma separated list is allowed. Values: General, Weapons, Medals
$modes = array(new \Bungie\Model\Destiny\HistoricalStats\Definitions\DestinyActivityModeType()); // \Bungie\Model\\Bungie\Model\Destiny\HistoricalStats\Definitions\DestinyActivityModeType[] | Game modes to return. See the documentation for DestinyActivityModeType for valid values, and pass in string representation, comma delimited.
$periodType = new \Bungie\Model\Destiny\HistoricalStats\Definitions\PeriodType(); // \Bungie\Model\Destiny\HistoricalStats\Definitions\PeriodType | Indicates a specific period type to return. Optional. May be: Daily, AllTime, or Activity

try {
    $result = $apiInstance->getHistoricalStats($characterId, $destinyMembershipId, $membershipType, $dayend, $daystart, $groups, $modes, $periodType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->getHistoricalStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| The id of the character to retrieve. You can omit this character ID or set it to 0 to get aggregate stats across all characters. |
 **destinyMembershipId** | **int**| The Destiny membershipId of the user to retrieve. |
 **membershipType** | [**\Bungie\Model\BungieMembershipType**](../Model/.md)| A valid non-BungieNet membership type. |
 **dayend** | **\DateTime**| Last day to return when daily stats are requested. Use the format YYYY-MM-DD. | [optional]
 **daystart** | **\DateTime**| First day to return when daily stats are requested. Use the format YYYY-MM-DD | [optional]
 **groups** | [**\Bungie\Model\\Bungie\Model\Destiny\HistoricalStats\Definitions\DestinyStatsGroupType[]**](../Model/\Bungie\Model\Destiny\HistoricalStats\Definitions\DestinyStatsGroupType.md)| Group of stats to include, otherwise only general stats are returned. Comma separated list is allowed. Values: General, Weapons, Medals | [optional]
 **modes** | [**\Bungie\Model\\Bungie\Model\Destiny\HistoricalStats\Definitions\DestinyActivityModeType[]**](../Model/\Bungie\Model\Destiny\HistoricalStats\Definitions\DestinyActivityModeType.md)| Game modes to return. See the documentation for DestinyActivityModeType for valid values, and pass in string representation, comma delimited. | [optional]
 **periodType** | [**\Bungie\Model\Destiny\HistoricalStats\Definitions\PeriodType**](../Model/.md)| Indicates a specific period type to return. Optional. May be: Daily, AllTime, or Activity | [optional]

### Return type

[**\Bungie\Model\InlineResponse20051**](../Model/InlineResponse20051.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHistoricalStatsDefinition**
> \Bungie\Model\InlineResponse20047 getHistoricalStatsDefinition()



Gets historical stats definitions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getHistoricalStatsDefinition();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->getHistoricalStatsDefinition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Bungie\Model\InlineResponse20047**](../Model/InlineResponse20047.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHistoricalStatsForAccount**
> \Bungie\Model\InlineResponse20052 getHistoricalStatsForAccount($destinyMembershipId, $membershipType, $groups)



Gets aggregate historical stats organized around each character for a given account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$destinyMembershipId = 56; // int | The Destiny membershipId of the user to retrieve.
$membershipType = new \Bungie\Model\BungieMembershipType(); // \Bungie\Model\BungieMembershipType | A valid non-BungieNet membership type.
$groups = array(new \Bungie\Model\Destiny\HistoricalStats\Definitions\DestinyStatsGroupType()); // \Bungie\Model\\Bungie\Model\Destiny\HistoricalStats\Definitions\DestinyStatsGroupType[] | Groups of stats to include, otherwise only general stats are returned. Comma separated list is allowed. Values: General, Weapons, Medals.

try {
    $result = $apiInstance->getHistoricalStatsForAccount($destinyMembershipId, $membershipType, $groups);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->getHistoricalStatsForAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **destinyMembershipId** | **int**| The Destiny membershipId of the user to retrieve. |
 **membershipType** | [**\Bungie\Model\BungieMembershipType**](../Model/.md)| A valid non-BungieNet membership type. |
 **groups** | [**\Bungie\Model\\Bungie\Model\Destiny\HistoricalStats\Definitions\DestinyStatsGroupType[]**](../Model/\Bungie\Model\Destiny\HistoricalStats\Definitions\DestinyStatsGroupType.md)| Groups of stats to include, otherwise only general stats are returned. Comma separated list is allowed. Values: General, Weapons, Medals. | [optional]

### Return type

[**\Bungie\Model\InlineResponse20052**](../Model/InlineResponse20052.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItem**
> \Bungie\Model\InlineResponse20040 getItem($destinyMembershipId, $itemInstanceId, $membershipType, $components)



Retrieve the details of an instanced Destiny Item. An instanced Destiny item is one with an ItemInstanceId. Non-instanced items, such as materials, have no useful instance-specific details and thus are not queryable here.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$destinyMembershipId = 56; // int | The membership ID of the destiny profile.
$itemInstanceId = 56; // int | The Instance ID of the destiny item.
$membershipType = new \Bungie\Model\BungieMembershipType(); // \Bungie\Model\BungieMembershipType | A valid non-BungieNet membership type.
$components = array(new \Bungie\Model\Destiny\DestinyComponentType()); // \Bungie\Model\\Bungie\Model\Destiny\DestinyComponentType[] | A comma separated list of components to return (as strings or numeric values). See the DestinyComponentType enum for valid components to request. You must request at least one component to receive results.

try {
    $result = $apiInstance->getItem($destinyMembershipId, $itemInstanceId, $membershipType, $components);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->getItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **destinyMembershipId** | **int**| The membership ID of the destiny profile. |
 **itemInstanceId** | **int**| The Instance ID of the destiny item. |
 **membershipType** | [**\Bungie\Model\BungieMembershipType**](../Model/.md)| A valid non-BungieNet membership type. |
 **components** | [**\Bungie\Model\\Bungie\Model\Destiny\DestinyComponentType[]**](../Model/\Bungie\Model\Destiny\DestinyComponentType.md)| A comma separated list of components to return (as strings or numeric values). See the DestinyComponentType enum for valid components to request. You must request at least one component to receive results. | [optional]

### Return type

[**\Bungie\Model\InlineResponse20040**](../Model/InlineResponse20040.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLeaderboards**
> \Bungie\Model\InlineResponse20048 getLeaderboards($destinyMembershipId, $membershipType, $maxtop, $modes, $statid)



Gets leaderboards with the signed in user's friends and the supplied destinyMembershipId as the focus. PREVIEW: This endpoint has not yet been implemented. It is being returned for a preview of future functionality, and for public comment/suggestion/preparation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$destinyMembershipId = 56; // int | The Destiny membershipId of the user to retrieve.
$membershipType = new \Bungie\Model\BungieMembershipType(); // \Bungie\Model\BungieMembershipType | A valid non-BungieNet membership type.
$maxtop = 56; // int | Maximum number of top players to return. Use a large number to get entire leaderboard.
$modes = 'modes_example'; // string | List of game modes for which to get leaderboards. See the documentation for DestinyActivityModeType for valid values, and pass in string representation, comma delimited.
$statid = 'statid_example'; // string | ID of stat to return rather than returning all Leaderboard stats.

try {
    $result = $apiInstance->getLeaderboards($destinyMembershipId, $membershipType, $maxtop, $modes, $statid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->getLeaderboards: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **destinyMembershipId** | **int**| The Destiny membershipId of the user to retrieve. |
 **membershipType** | [**\Bungie\Model\BungieMembershipType**](../Model/.md)| A valid non-BungieNet membership type. |
 **maxtop** | **int**| Maximum number of top players to return. Use a large number to get entire leaderboard. | [optional]
 **modes** | **string**| List of game modes for which to get leaderboards. See the documentation for DestinyActivityModeType for valid values, and pass in string representation, comma delimited. | [optional]
 **statid** | **string**| ID of stat to return rather than returning all Leaderboard stats. | [optional]

### Return type

[**\Bungie\Model\InlineResponse20048**](../Model/InlineResponse20048.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLeaderboardsForCharacter**
> \Bungie\Model\InlineResponse20048 getLeaderboardsForCharacter($characterId, $destinyMembershipId, $membershipType, $maxtop, $modes, $statid)



Gets leaderboards with the signed in user's friends and the supplied destinyMembershipId as the focus. PREVIEW: This endpoint is still in beta, and may experience rough edges. The schema is in final form, but there may be bugs that prevent desirable operation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$characterId = 56; // int | The specific character to build the leaderboard around for the provided Destiny Membership.
$destinyMembershipId = 56; // int | The Destiny membershipId of the user to retrieve.
$membershipType = new \Bungie\Model\BungieMembershipType(); // \Bungie\Model\BungieMembershipType | A valid non-BungieNet membership type.
$maxtop = 56; // int | Maximum number of top players to return. Use a large number to get entire leaderboard.
$modes = 'modes_example'; // string | List of game modes for which to get leaderboards. See the documentation for DestinyActivityModeType for valid values, and pass in string representation, comma delimited.
$statid = 'statid_example'; // string | ID of stat to return rather than returning all Leaderboard stats.

try {
    $result = $apiInstance->getLeaderboardsForCharacter($characterId, $destinyMembershipId, $membershipType, $maxtop, $modes, $statid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->getLeaderboardsForCharacter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| The specific character to build the leaderboard around for the provided Destiny Membership. |
 **destinyMembershipId** | **int**| The Destiny membershipId of the user to retrieve. |
 **membershipType** | [**\Bungie\Model\BungieMembershipType**](../Model/.md)| A valid non-BungieNet membership type. |
 **maxtop** | **int**| Maximum number of top players to return. Use a large number to get entire leaderboard. | [optional]
 **modes** | **string**| List of game modes for which to get leaderboards. See the documentation for DestinyActivityModeType for valid values, and pass in string representation, comma delimited. | [optional]
 **statid** | **string**| ID of stat to return rather than returning all Leaderboard stats. | [optional]

### Return type

[**\Bungie\Model\InlineResponse20048**](../Model/InlineResponse20048.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLinkedProfiles**
> \Bungie\Model\InlineResponse20036 getLinkedProfiles($membershipId, $membershipType)



Returns a summary information about all profiles linked to the requesting membership type/membership ID that have valid Destiny information. The passed-in Membership Type/Membership ID may be a Bungie.Net membership or a Destiny membership. It only returns the minimal amount of data to begin making more substantive requests, but will hopefully serve as a useful alternative to UserServices for people who just care about Destiny data. Note that it will only return linked accounts whose linkages you are allowed to view.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$membershipId = 56; // int | The ID of the membership whose linked Destiny accounts you want returned. Make sure your membership ID matches its Membership Type: don't pass us a PSN membership ID and the XBox membership type, it's not going to work!
$membershipType = new \Bungie\Model\BungieMembershipType(); // \Bungie\Model\BungieMembershipType | The type for the membership whose linked Destiny accounts you want returned.

try {
    $result = $apiInstance->getLinkedProfiles($membershipId, $membershipType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->getLinkedProfiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membershipId** | **int**| The ID of the membership whose linked Destiny accounts you want returned. Make sure your membership ID matches its Membership Type: don&#39;t pass us a PSN membership ID and the XBox membership type, it&#39;s not going to work! |
 **membershipType** | [**\Bungie\Model\BungieMembershipType**](../Model/.md)| The type for the membership whose linked Destiny accounts you want returned. |

### Return type

[**\Bungie\Model\InlineResponse20036**](../Model/InlineResponse20036.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPostGameCarnageReport**
> \Bungie\Model\InlineResponse20046 getPostGameCarnageReport($activityId)



Gets the available post game carnage report for the activity ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$activityId = 56; // int | The ID of the activity whose PGCR is requested.

try {
    $result = $apiInstance->getPostGameCarnageReport($activityId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->getPostGameCarnageReport: ', $e->getMessage(), PHP_EOL;
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

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProfile**
> \Bungie\Model\InlineResponse20037 getProfile($destinyMembershipId, $membershipType, $components)



Returns Destiny Profile information for the supplied membership.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$destinyMembershipId = 56; // int | Destiny membership ID.
$membershipType = new \Bungie\Model\BungieMembershipType(); // \Bungie\Model\BungieMembershipType | A valid non-BungieNet membership type.
$components = array(new \Bungie\Model\Destiny\DestinyComponentType()); // \Bungie\Model\\Bungie\Model\Destiny\DestinyComponentType[] | A comma separated list of components to return (as strings or numeric values). See the DestinyComponentType enum for valid components to request. You must request at least one component to receive results.

try {
    $result = $apiInstance->getProfile($destinyMembershipId, $membershipType, $components);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->getProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **destinyMembershipId** | **int**| Destiny membership ID. |
 **membershipType** | [**\Bungie\Model\BungieMembershipType**](../Model/.md)| A valid non-BungieNet membership type. |
 **components** | [**\Bungie\Model\\Bungie\Model\Destiny\DestinyComponentType[]**](../Model/\Bungie\Model\Destiny\DestinyComponentType.md)| A comma separated list of components to return (as strings or numeric values). See the DestinyComponentType enum for valid components to request. You must request at least one component to receive results. | [optional]

### Return type

[**\Bungie\Model\InlineResponse20037**](../Model/InlineResponse20037.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPublicMilestoneContent**
> \Bungie\Model\InlineResponse20056 getPublicMilestoneContent($milestoneHash)



Gets custom localized content for the milestone of the given hash, if it exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$milestoneHash = 56; // int | The identifier for the milestone to be returned.

try {
    $result = $apiInstance->getPublicMilestoneContent($milestoneHash);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->getPublicMilestoneContent: ', $e->getMessage(), PHP_EOL;
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

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPublicMilestones**
> \Bungie\Model\InlineResponse20057 getPublicMilestones()



Gets public information about currently available Milestones.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPublicMilestones();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->getPublicMilestones: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Bungie\Model\InlineResponse20057**](../Model/InlineResponse20057.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUniqueWeaponHistory**
> \Bungie\Model\InlineResponse20054 getUniqueWeaponHistory($characterId, $destinyMembershipId, $membershipType)



Gets details about unique weapon usage, including all exotic weapons.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$characterId = 56; // int | The id of the character to retrieve.
$destinyMembershipId = 56; // int | The Destiny membershipId of the user to retrieve.
$membershipType = new \Bungie\Model\BungieMembershipType(); // \Bungie\Model\BungieMembershipType | A valid non-BungieNet membership type.

try {
    $result = $apiInstance->getUniqueWeaponHistory($characterId, $destinyMembershipId, $membershipType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->getUniqueWeaponHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| The id of the character to retrieve. |
 **destinyMembershipId** | **int**| The Destiny membershipId of the user to retrieve. |
 **membershipType** | [**\Bungie\Model\BungieMembershipType**](../Model/.md)| A valid non-BungieNet membership type. |

### Return type

[**\Bungie\Model\InlineResponse20054**](../Model/InlineResponse20054.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVendor**
> \Bungie\Model\InlineResponse20042 getVendor($characterId, $destinyMembershipId, $membershipType, $vendorHash, $components)



Get the details of a specific Vendor.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$characterId = 56; // int | The Destiny Character ID of the character for whom we're getting vendor info.
$destinyMembershipId = 56; // int | Destiny membership ID of another user. You may be denied.
$membershipType = new \Bungie\Model\BungieMembershipType(); // \Bungie\Model\BungieMembershipType | A valid non-BungieNet membership type.
$vendorHash = 56; // int | The Hash identifier of the Vendor to be returned.
$components = array(new \Bungie\Model\Destiny\DestinyComponentType()); // \Bungie\Model\\Bungie\Model\Destiny\DestinyComponentType[] | A comma separated list of components to return (as strings or numeric values). See the DestinyComponentType enum for valid components to request. You must request at least one component to receive results.

try {
    $result = $apiInstance->getVendor($characterId, $destinyMembershipId, $membershipType, $vendorHash, $components);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->getVendor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| The Destiny Character ID of the character for whom we&#39;re getting vendor info. |
 **destinyMembershipId** | **int**| Destiny membership ID of another user. You may be denied. |
 **membershipType** | [**\Bungie\Model\BungieMembershipType**](../Model/.md)| A valid non-BungieNet membership type. |
 **vendorHash** | **int**| The Hash identifier of the Vendor to be returned. |
 **components** | [**\Bungie\Model\\Bungie\Model\Destiny\DestinyComponentType[]**](../Model/\Bungie\Model\Destiny\DestinyComponentType.md)| A comma separated list of components to return (as strings or numeric values). See the DestinyComponentType enum for valid components to request. You must request at least one component to receive results. | [optional]

### Return type

[**\Bungie\Model\InlineResponse20042**](../Model/InlineResponse20042.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVendors**
> \Bungie\Model\InlineResponse20041 getVendors($characterId, $destinyMembershipId, $membershipType, $components)



Get currently available vendors from the list of vendors that can possibly have rotating inventory. Note that this does not include things like preview vendors and vendors-as-kiosks, neither of whom have rotating/dynamic inventories. Use their definitions as-is for those.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$characterId = 56; // int | The Destiny Character ID of the character for whom we're getting vendor info.
$destinyMembershipId = 56; // int | Destiny membership ID of another user. You may be denied.
$membershipType = new \Bungie\Model\BungieMembershipType(); // \Bungie\Model\BungieMembershipType | A valid non-BungieNet membership type.
$components = array(new \Bungie\Model\Destiny\DestinyComponentType()); // \Bungie\Model\\Bungie\Model\Destiny\DestinyComponentType[] | A comma separated list of components to return (as strings or numeric values). See the DestinyComponentType enum for valid components to request. You must request at least one component to receive results.

try {
    $result = $apiInstance->getVendors($characterId, $destinyMembershipId, $membershipType, $components);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->getVendors: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **characterId** | **int**| The Destiny Character ID of the character for whom we&#39;re getting vendor info. |
 **destinyMembershipId** | **int**| Destiny membership ID of another user. You may be denied. |
 **membershipType** | [**\Bungie\Model\BungieMembershipType**](../Model/.md)| A valid non-BungieNet membership type. |
 **components** | [**\Bungie\Model\\Bungie\Model\Destiny\DestinyComponentType[]**](../Model/\Bungie\Model\Destiny\DestinyComponentType.md)| A comma separated list of components to return (as strings or numeric values). See the DestinyComponentType enum for valid components to request. You must request at least one component to receive results. | [optional]

### Return type

[**\Bungie\Model\InlineResponse20041**](../Model/InlineResponse20041.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **insertSocketPlug**
> \Bungie\Model\InlineResponse20045 insertSocketPlug($destinyInsertPlugsActionRequest)



Insert a plug into a socketed item. I know how it sounds, but I assure you it's much more G-rated than you might be guessing. We haven't decided yet whether this will be able to insert plugs that have side effects, but if we do it will require special scope permission for an application attempting to do so. You must have a valid Destiny Account, and either be in a social space, in orbit, or offline. Request must include proof of permission for 'InsertPlugs' from the account owner.

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

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$destinyInsertPlugsActionRequest = new DestinyInsertPlugsActionRequest(); // \Bungie\Model\Destiny\Requests\Actions\DestinyInsertPlugsActionRequest | 

try {
    $result = $apiInstance->insertSocketPlug($destinyInsertPlugsActionRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->insertSocketPlug: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **destinyInsertPlugsActionRequest** | [**\Bungie\Model\Destiny\Requests\Actions\DestinyInsertPlugsActionRequest**](../Model/DestinyInsertPlugsActionRequest.md)|  |

### Return type

[**\Bungie\Model\InlineResponse20045**](../Model/InlineResponse20045.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pullFromPostmaster**
> \Bungie\Model\InlineResponse20019 pullFromPostmaster($destinyPostmasterTransferRequest)



Extract an item from the Postmaster, with whatever implications that may entail. You must have a valid Destiny account. You must also pass BOTH a reference AND an instance ID if it's an instanced item.

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

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$destinyPostmasterTransferRequest = new DestinyPostmasterTransferRequest(); // \Bungie\Model\Destiny\Requests\Actions\DestinyPostmasterTransferRequest | 

try {
    $result = $apiInstance->pullFromPostmaster($destinyPostmasterTransferRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->pullFromPostmaster: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **destinyPostmasterTransferRequest** | [**\Bungie\Model\Destiny\Requests\Actions\DestinyPostmasterTransferRequest**](../Model/DestinyPostmasterTransferRequest.md)|  |

### Return type

[**\Bungie\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportOffensivePostGameCarnageReportPlayer**
> \Bungie\Model\InlineResponse20019 reportOffensivePostGameCarnageReportPlayer($activityId, $destinyReportOffensePgcrRequest)



Report a player that you met in an activity that was engaging in ToS-violating activities. Both you and the offending player must have played in the activityId passed in. Please use this judiciously and only when you have strong suspicions of violation, pretty please.

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

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$activityId = 56; // int | The ID of the activity where you ran into the brigand that you're reporting.
$destinyReportOffensePgcrRequest = new DestinyReportOffensePgcrRequest(); // \Bungie\Model\Destiny\Reporting\Requests\DestinyReportOffensePgcrRequest | 

try {
    $result = $apiInstance->reportOffensivePostGameCarnageReportPlayer($activityId, $destinyReportOffensePgcrRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->reportOffensivePostGameCarnageReportPlayer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activityId** | **int**| The ID of the activity where you ran into the brigand that you&#39;re reporting. |
 **destinyReportOffensePgcrRequest** | [**\Bungie\Model\Destiny\Reporting\Requests\DestinyReportOffensePgcrRequest**](../Model/DestinyReportOffensePgcrRequest.md)|  |

### Return type

[**\Bungie\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchDestinyEntities**
> \Bungie\Model\InlineResponse20050 searchDestinyEntities($searchTerm, $type, $page)



Gets a page list of Destiny items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$searchTerm = 'searchTerm_example'; // string | The string to use when searching for Destiny entities.
$type = 'type_example'; // string | The type of entity for whom you would like results. These correspond to the entity's definition contract name. For instance, if you are looking for items, this property should be 'DestinyInventoryItemDefinition'.
$page = 56; // int | Page number to return, starting with 0.

try {
    $result = $apiInstance->searchDestinyEntities($searchTerm, $type, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->searchDestinyEntities: ', $e->getMessage(), PHP_EOL;
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

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchDestinyPlayer**
> \Bungie\Model\InlineResponse20035 searchDestinyPlayer($displayName, $membershipType)



Returns a list of Destiny memberships given a full Gamertag or PSN ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$displayName = 'displayName_example'; // string | The full gamertag or PSN id of the player. Spaces and case are ignored.
$membershipType = new \Bungie\Model\BungieMembershipType(); // \Bungie\Model\BungieMembershipType | A valid non-BungieNet membership type, or All.

try {
    $result = $apiInstance->searchDestinyPlayer($displayName, $membershipType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->searchDestinyPlayer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **displayName** | **string**| The full gamertag or PSN id of the player. Spaces and case are ignored. |
 **membershipType** | [**\Bungie\Model\BungieMembershipType**](../Model/.md)| A valid non-BungieNet membership type, or All. |

### Return type

[**\Bungie\Model\InlineResponse20035**](../Model/InlineResponse20035.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setItemLockState**
> \Bungie\Model\InlineResponse20019 setItemLockState($destinyItemStateRequest)



Set the Lock State for an instanced item. You must have a valid Destiny Account.

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

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$destinyItemStateRequest = new DestinyItemStateRequest(); // \Bungie\Model\Destiny\Requests\Actions\DestinyItemStateRequest | 

try {
    $result = $apiInstance->setItemLockState($destinyItemStateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->setItemLockState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **destinyItemStateRequest** | [**\Bungie\Model\Destiny\Requests\Actions\DestinyItemStateRequest**](../Model/DestinyItemStateRequest.md)|  |

### Return type

[**\Bungie\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transferItem**
> \Bungie\Model\InlineResponse20019 transferItem($destinyItemTransferRequest)



Transfer an item to/from your vault. You must have a valid Destiny account. You must also pass BOTH a reference AND an instance ID if it's an instanced item. itshappening.gif

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

$apiInstance = new Bungie\Api\Destiny2Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$destinyItemTransferRequest = new DestinyItemTransferRequest(); // \Bungie\Model\Destiny\Requests\DestinyItemTransferRequest | 

try {
    $result = $apiInstance->transferItem($destinyItemTransferRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Destiny2Api->transferItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **destinyItemTransferRequest** | [**\Bungie\Model\Destiny\Requests\DestinyItemTransferRequest**](../Model/DestinyItemTransferRequest.md)|  |

### Return type

[**\Bungie\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

