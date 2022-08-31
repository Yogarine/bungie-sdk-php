# Bungie\PreviewApi

All URIs are relative to *https://www.bungie.net/Platform*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getClanAggregateStats**](PreviewApi.md#getClanAggregateStats) | **GET** /Destiny2/Stats/AggregateClanStats/{groupId}/ | 
[**getClanLeaderboards**](PreviewApi.md#getClanLeaderboards) | **GET** /Destiny2/Stats/Leaderboards/Clans/{groupId}/ | 
[**getLeaderboards**](PreviewApi.md#getLeaderboards) | **GET** /Destiny2/{membershipType}/Account/{destinyMembershipId}/Stats/Leaderboards/ | 
[**getLeaderboardsForCharacter**](PreviewApi.md#getLeaderboardsForCharacter) | **GET** /Destiny2/Stats/Leaderboards/{membershipType}/{destinyMembershipId}/{characterId}/ | 
[**getPublicVendors**](PreviewApi.md#getPublicVendors) | **GET** /Destiny2/Vendors/ | 
[**insertSocketPlug**](PreviewApi.md#insertSocketPlug) | **POST** /Destiny2/Actions/Items/InsertSocketPlug/ | 
[**insertSocketPlugFree**](PreviewApi.md#insertSocketPlugFree) | **POST** /Destiny2/Actions/Items/InsertSocketPlugFree/ | 


# **getClanAggregateStats**
> \Bungie\Model\InlineResponse20056 getClanAggregateStats($groupId, $modes)



Gets aggregated stats for a clan using the same categories as the clan leaderboards. PREVIEW: This endpoint is still in beta, and may experience rough edges. The schema is in final form, but there may be bugs that prevent desirable operation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\PreviewApi(
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
    echo 'Exception when calling PreviewApi->getClanAggregateStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**| Group ID of the clan whose leaderboards you wish to fetch. |
 **modes** | **string**| List of game modes for which to get leaderboards. See the documentation for DestinyActivityModeType for valid values, and pass in string representation, comma delimited. | [optional]

### Return type

[**\Bungie\Model\InlineResponse20056**](../Model/InlineResponse20056.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getClanLeaderboards**
> \Bungie\Model\InlineResponse20055 getClanLeaderboards($groupId, $maxtop, $modes, $statid)



Gets leaderboards with the signed in user's friends and the supplied destinyMembershipId as the focus. PREVIEW: This endpoint is still in beta, and may experience rough edges. The schema is in final form, but there may be bugs that prevent desirable operation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\PreviewApi(
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
    echo 'Exception when calling PreviewApi->getClanLeaderboards: ', $e->getMessage(), PHP_EOL;
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

[**\Bungie\Model\InlineResponse20055**](../Model/InlineResponse20055.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLeaderboards**
> \Bungie\Model\InlineResponse20055 getLeaderboards($destinyMembershipId, $membershipType, $maxtop, $modes, $statid)



Gets leaderboards with the signed in user's friends and the supplied destinyMembershipId as the focus. PREVIEW: This endpoint has not yet been implemented. It is being returned for a preview of future functionality, and for public comment/suggestion/preparation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\PreviewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$destinyMembershipId = 56; // int | The Destiny membershipId of the user to retrieve.
$membershipType = 56; // int | A valid non-BungieNet membership type.
$maxtop = 56; // int | Maximum number of top players to return. Use a large number to get entire leaderboard.
$modes = 'modes_example'; // string | List of game modes for which to get leaderboards. See the documentation for DestinyActivityModeType for valid values, and pass in string representation, comma delimited.
$statid = 'statid_example'; // string | ID of stat to return rather than returning all Leaderboard stats.

try {
    $result = $apiInstance->getLeaderboards($destinyMembershipId, $membershipType, $maxtop, $modes, $statid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PreviewApi->getLeaderboards: ', $e->getMessage(), PHP_EOL;
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

[**\Bungie\Model\InlineResponse20055**](../Model/InlineResponse20055.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLeaderboardsForCharacter**
> \Bungie\Model\InlineResponse20055 getLeaderboardsForCharacter($characterId, $destinyMembershipId, $membershipType, $maxtop, $modes, $statid)



Gets leaderboards with the signed in user's friends and the supplied destinyMembershipId as the focus. PREVIEW: This endpoint is still in beta, and may experience rough edges. The schema is in final form, but there may be bugs that prevent desirable operation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\PreviewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$characterId = 56; // int | The specific character to build the leaderboard around for the provided Destiny Membership.
$destinyMembershipId = 56; // int | The Destiny membershipId of the user to retrieve.
$membershipType = 56; // int | A valid non-BungieNet membership type.
$maxtop = 56; // int | Maximum number of top players to return. Use a large number to get entire leaderboard.
$modes = 'modes_example'; // string | List of game modes for which to get leaderboards. See the documentation for DestinyActivityModeType for valid values, and pass in string representation, comma delimited.
$statid = 'statid_example'; // string | ID of stat to return rather than returning all Leaderboard stats.

try {
    $result = $apiInstance->getLeaderboardsForCharacter($characterId, $destinyMembershipId, $membershipType, $maxtop, $modes, $statid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PreviewApi->getLeaderboardsForCharacter: ', $e->getMessage(), PHP_EOL;
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

[**\Bungie\Model\InlineResponse20055**](../Model/InlineResponse20055.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPublicVendors**
> \Bungie\Model\InlineResponse20049 getPublicVendors($components)



Get items available from vendors where the vendors have items for sale that are common for everyone. If any portion of the Vendor's available inventory is character or account specific, we will be unable to return their data from this endpoint due to the way that available inventory is computed. As I am often guilty of saying: 'It's a long story...'

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\PreviewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$components = array(56); // int[] | A comma separated list of components to return (as strings or numeric values). See the DestinyComponentType enum for valid components to request. You must request at least one component to receive results.

try {
    $result = $apiInstance->getPublicVendors($components);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PreviewApi->getPublicVendors: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **components** | [**int[]**](../Model/int.md)| A comma separated list of components to return (as strings or numeric values). See the DestinyComponentType enum for valid components to request. You must request at least one component to receive results. | [optional]

### Return type

[**\Bungie\Model\InlineResponse20049**](../Model/InlineResponse20049.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **insertSocketPlug**
> \Bungie\Model\InlineResponse20052 insertSocketPlug($destinyInsertPlugsActionRequest)



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

$apiInstance = new Bungie\Api\PreviewApi(
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
    echo 'Exception when calling PreviewApi->insertSocketPlug: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **destinyInsertPlugsActionRequest** | [**\Bungie\Model\Destiny\Requests\Actions\DestinyInsertPlugsActionRequest**](../Model/DestinyInsertPlugsActionRequest.md)|  |

### Return type

[**\Bungie\Model\InlineResponse20052**](../Model/InlineResponse20052.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **insertSocketPlugFree**
> \Bungie\Model\InlineResponse20052 insertSocketPlugFree($destinyInsertPlugsFreeActionRequest)



Insert a 'free' plug into an item's socket. This does not require 'Advanced Write Action' authorization and is available to 3rd-party apps, but will only work on 'free and reversible' socket actions (Perks, Armor Mods, Shaders, Ornaments, etc.). You must have a valid Destiny Account, and the character must either be in a social space, in orbit, or offline.

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

$apiInstance = new Bungie\Api\PreviewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$destinyInsertPlugsFreeActionRequest = new DestinyInsertPlugsFreeActionRequest(); // \Bungie\Model\Destiny\Requests\Actions\DestinyInsertPlugsFreeActionRequest | 

try {
    $result = $apiInstance->insertSocketPlugFree($destinyInsertPlugsFreeActionRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PreviewApi->insertSocketPlugFree: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **destinyInsertPlugsFreeActionRequest** | [**\Bungie\Model\Destiny\Requests\Actions\DestinyInsertPlugsFreeActionRequest**](../Model/DestinyInsertPlugsFreeActionRequest.md)|  |

### Return type

[**\Bungie\Model\InlineResponse20052**](../Model/InlineResponse20052.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

