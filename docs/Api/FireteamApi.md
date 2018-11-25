# Bungie\FireteamApi

All URIs are relative to *https://www.bungie.net/Platform*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getActivePrivateClanFireteamCount**](FireteamApi.md#getActivePrivateClanFireteamCount) | **GET** /Fireteam/Clan/{groupId}/ActiveCount/ | 
[**getAvailableClanFireteams**](FireteamApi.md#getAvailableClanFireteams) | **GET** /Fireteam/Clan/{groupId}/Available/{platform}/{activityType}/{dateRange}/{slotFilter}/{publicOnly}/{page}/ | 
[**getClanFireteam**](FireteamApi.md#getClanFireteam) | **GET** /Fireteam/Clan/{groupId}/Summary/{fireteamId}/ | 
[**getMyClanFireteams**](FireteamApi.md#getMyClanFireteams) | **GET** /Fireteam/Clan/{groupId}/My/{platform}/{includeClosed}/{page}/ | 
[**searchPublicAvailableClanFireteams**](FireteamApi.md#searchPublicAvailableClanFireteams) | **GET** /Fireteam/Search/Available/{platform}/{activityType}/{dateRange}/{slotFilter}/{page}/ | 


# **getActivePrivateClanFireteamCount**
> \Bungie\Model\InlineResponse20019 getActivePrivateClanFireteamCount($groupId)



Gets a count of all active non-public fireteams for the specified clan. Maximum value returned is 25.

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

$apiInstance = new Bungie\Api\FireteamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = 56; // int | The group id of the clan.

try {
    $result = $apiInstance->getActivePrivateClanFireteamCount($groupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FireteamApi->getActivePrivateClanFireteamCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**| The group id of the clan. |

### Return type

[**\Bungie\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAvailableClanFireteams**
> \Bungie\Model\InlineResponse20065 getAvailableClanFireteams($activityType, $dateRange, $groupId, $page, $platform, $publicOnly, $slotFilter, $langFilter)



Gets a listing of all of this clan's fireteams that are have available slots. Caller is not checked for join criteria so caching is maximized.

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

$apiInstance = new Bungie\Api\FireteamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$activityType = new \Bungie\Model\Fireteam\FireteamActivityType(); // \Bungie\Model\Fireteam\FireteamActivityType | The activity type to filter by.
$dateRange = new \Bungie\Model\Fireteam\FireteamDateRange(); // \Bungie\Model\Fireteam\FireteamDateRange | The date range to grab available fireteams.
$groupId = 56; // int | The group id of the clan.
$page = 56; // int | Zero based page
$platform = new \Bungie\Model\Fireteam\FireteamPlatform(); // \Bungie\Model\Fireteam\FireteamPlatform | The platform filter.
$publicOnly = new \Bungie\Model\Fireteam\FireteamPublicSearchOption(); // \Bungie\Model\Fireteam\FireteamPublicSearchOption | Determines public/private filtering.
$slotFilter = new \Bungie\Model\Fireteam\FireteamSlotSearch(); // \Bungie\Model\Fireteam\FireteamSlotSearch | Filters based on available slots
$langFilter = 'langFilter_example'; // string | An optional language filter.

try {
    $result = $apiInstance->getAvailableClanFireteams($activityType, $dateRange, $groupId, $page, $platform, $publicOnly, $slotFilter, $langFilter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FireteamApi->getAvailableClanFireteams: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activityType** | [**\Bungie\Model\Fireteam\FireteamActivityType**](../Model/.md)| The activity type to filter by. |
 **dateRange** | [**\Bungie\Model\Fireteam\FireteamDateRange**](../Model/.md)| The date range to grab available fireteams. |
 **groupId** | **int**| The group id of the clan. |
 **page** | **int**| Zero based page |
 **platform** | [**\Bungie\Model\Fireteam\FireteamPlatform**](../Model/.md)| The platform filter. |
 **publicOnly** | [**\Bungie\Model\Fireteam\FireteamPublicSearchOption**](../Model/.md)| Determines public/private filtering. |
 **slotFilter** | [**\Bungie\Model\Fireteam\FireteamSlotSearch**](../Model/.md)| Filters based on available slots |
 **langFilter** | **string**| An optional language filter. | [optional]

### Return type

[**\Bungie\Model\InlineResponse20065**](../Model/InlineResponse20065.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getClanFireteam**
> \Bungie\Model\InlineResponse20067 getClanFireteam($fireteamId, $groupId)



Gets a specific clan fireteam.

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

$apiInstance = new Bungie\Api\FireteamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fireteamId = 56; // int | The unique id of the fireteam.
$groupId = 56; // int | The group id of the clan.

try {
    $result = $apiInstance->getClanFireteam($fireteamId, $groupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FireteamApi->getClanFireteam: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fireteamId** | **int**| The unique id of the fireteam. |
 **groupId** | **int**| The group id of the clan. |

### Return type

[**\Bungie\Model\InlineResponse20067**](../Model/InlineResponse20067.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMyClanFireteams**
> \Bungie\Model\InlineResponse20066 getMyClanFireteams($groupId, $includeClosed, $page, $platform, $groupFilter, $langFilter)



Gets a listing of all clan fireteams that caller is an applicant, a member, or an alternate of.

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

$apiInstance = new Bungie\Api\FireteamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupId = 56; // int | The group id of the clan. (This parameter is ignored unless the optional query parameter groupFilter is true).
$includeClosed = True; // bool | If true, return fireteams that have been closed.
$page = 56; // int | Deprecated parameter, ignored.
$platform = new \Bungie\Model\Fireteam\FireteamPlatform(); // \Bungie\Model\Fireteam\FireteamPlatform | The platform filter.
$groupFilter = True; // bool | If true, filter by clan. Otherwise, ignore the clan and show all of the user's fireteams.
$langFilter = 'langFilter_example'; // string | An optional language filter.

try {
    $result = $apiInstance->getMyClanFireteams($groupId, $includeClosed, $page, $platform, $groupFilter, $langFilter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FireteamApi->getMyClanFireteams: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**| The group id of the clan. (This parameter is ignored unless the optional query parameter groupFilter is true). |
 **includeClosed** | **bool**| If true, return fireteams that have been closed. |
 **page** | **int**| Deprecated parameter, ignored. |
 **platform** | [**\Bungie\Model\Fireteam\FireteamPlatform**](../Model/.md)| The platform filter. |
 **groupFilter** | **bool**| If true, filter by clan. Otherwise, ignore the clan and show all of the user&#39;s fireteams. | [optional]
 **langFilter** | **string**| An optional language filter. | [optional]

### Return type

[**\Bungie\Model\InlineResponse20066**](../Model/InlineResponse20066.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchPublicAvailableClanFireteams**
> \Bungie\Model\InlineResponse20065 searchPublicAvailableClanFireteams($activityType, $dateRange, $page, $platform, $slotFilter, $langFilter)



Gets a listing of all public fireteams starting now with open slots. Caller is not checked for join criteria so caching is maximized.

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

$apiInstance = new Bungie\Api\FireteamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$activityType = new \Bungie\Model\Fireteam\FireteamActivityType(); // \Bungie\Model\Fireteam\FireteamActivityType | The activity type to filter by.
$dateRange = new \Bungie\Model\Fireteam\FireteamDateRange(); // \Bungie\Model\Fireteam\FireteamDateRange | The date range to grab available fireteams.
$page = 56; // int | Zero based page
$platform = new \Bungie\Model\Fireteam\FireteamPlatform(); // \Bungie\Model\Fireteam\FireteamPlatform | The platform filter.
$slotFilter = new \Bungie\Model\Fireteam\FireteamSlotSearch(); // \Bungie\Model\Fireteam\FireteamSlotSearch | Filters based on available slots
$langFilter = 'langFilter_example'; // string | An optional language filter.

try {
    $result = $apiInstance->searchPublicAvailableClanFireteams($activityType, $dateRange, $page, $platform, $slotFilter, $langFilter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FireteamApi->searchPublicAvailableClanFireteams: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activityType** | [**\Bungie\Model\Fireteam\FireteamActivityType**](../Model/.md)| The activity type to filter by. |
 **dateRange** | [**\Bungie\Model\Fireteam\FireteamDateRange**](../Model/.md)| The date range to grab available fireteams. |
 **page** | **int**| Zero based page |
 **platform** | [**\Bungie\Model\Fireteam\FireteamPlatform**](../Model/.md)| The platform filter. |
 **slotFilter** | [**\Bungie\Model\Fireteam\FireteamSlotSearch**](../Model/.md)| Filters based on available slots |
 **langFilter** | **string**| An optional language filter. | [optional]

### Return type

[**\Bungie\Model\InlineResponse20065**](../Model/InlineResponse20065.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

