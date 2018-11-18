# Bungie\FireteamApi

All URIs are relative to *https://www.bungie.net/Platform*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fireteamGetActivePrivateClanFireteamCount**](FireteamApi.md#fireteamGetActivePrivateClanFireteamCount) | **GET** /Fireteam/Clan/{groupId}/ActiveCount/ | 
[**fireteamGetAvailableClanFireteams**](FireteamApi.md#fireteamGetAvailableClanFireteams) | **GET** /Fireteam/Clan/{groupId}/Available/{platform}/{activityType}/{dateRange}/{slotFilter}/{publicOnly}/{page}/ | 
[**fireteamGetClanFireteam**](FireteamApi.md#fireteamGetClanFireteam) | **GET** /Fireteam/Clan/{groupId}/Summary/{fireteamId}/ | 
[**fireteamGetMyClanFireteams**](FireteamApi.md#fireteamGetMyClanFireteams) | **GET** /Fireteam/Clan/{groupId}/My/{platform}/{includeClosed}/{page}/ | 
[**fireteamSearchPublicAvailableClanFireteams**](FireteamApi.md#fireteamSearchPublicAvailableClanFireteams) | **GET** /Fireteam/Search/Available/{platform}/{activityType}/{dateRange}/{slotFilter}/{page}/ | 


# **fireteamGetActivePrivateClanFireteamCount**
> \Bungie\Model\InlineResponse20019 fireteamGetActivePrivateClanFireteamCount($groupId)



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
    $result = $apiInstance->fireteamGetActivePrivateClanFireteamCount($groupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FireteamApi->fireteamGetActivePrivateClanFireteamCount: ', $e->getMessage(), PHP_EOL;
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

# **fireteamGetAvailableClanFireteams**
> \Bungie\Model\InlineResponse20065 fireteamGetAvailableClanFireteams($activityType, $dateRange, $groupId, $page, $platform, $publicOnly, $slotFilter, $langFilter)



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
$activityType = new \Bungie\Model\\Bungie\Model\FireteamFireteamActivityType(); // \Bungie\Model\FireteamFireteamActivityType | The activity type to filter by.
$dateRange = new \Bungie\Model\\Bungie\Model\FireteamFireteamDateRange(); // \Bungie\Model\FireteamFireteamDateRange | The date range to grab available fireteams.
$groupId = 56; // int | The group id of the clan.
$page = 56; // int | Zero based page
$platform = new \Bungie\Model\\Bungie\Model\FireteamFireteamPlatform(); // \Bungie\Model\FireteamFireteamPlatform | The platform filter.
$publicOnly = new \Bungie\Model\\Bungie\Model\FireteamFireteamPublicSearchOption(); // \Bungie\Model\FireteamFireteamPublicSearchOption | Determines public/private filtering.
$slotFilter = new \Bungie\Model\\Bungie\Model\FireteamFireteamSlotSearch(); // \Bungie\Model\FireteamFireteamSlotSearch | Filters based on available slots
$langFilter = 'langFilter_example'; // string | An optional language filter.

try {
    $result = $apiInstance->fireteamGetAvailableClanFireteams($activityType, $dateRange, $groupId, $page, $platform, $publicOnly, $slotFilter, $langFilter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FireteamApi->fireteamGetAvailableClanFireteams: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activityType** | [**\Bungie\Model\FireteamFireteamActivityType**](../Model/.md)| The activity type to filter by. |
 **dateRange** | [**\Bungie\Model\FireteamFireteamDateRange**](../Model/.md)| The date range to grab available fireteams. |
 **groupId** | **int**| The group id of the clan. |
 **page** | **int**| Zero based page |
 **platform** | [**\Bungie\Model\FireteamFireteamPlatform**](../Model/.md)| The platform filter. |
 **publicOnly** | [**\Bungie\Model\FireteamFireteamPublicSearchOption**](../Model/.md)| Determines public/private filtering. |
 **slotFilter** | [**\Bungie\Model\FireteamFireteamSlotSearch**](../Model/.md)| Filters based on available slots |
 **langFilter** | **string**| An optional language filter. | [optional]

### Return type

[**\Bungie\Model\InlineResponse20065**](../Model/InlineResponse20065.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fireteamGetClanFireteam**
> \Bungie\Model\InlineResponse20067 fireteamGetClanFireteam($fireteamId, $groupId)



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
    $result = $apiInstance->fireteamGetClanFireteam($fireteamId, $groupId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FireteamApi->fireteamGetClanFireteam: ', $e->getMessage(), PHP_EOL;
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

# **fireteamGetMyClanFireteams**
> \Bungie\Model\InlineResponse20066 fireteamGetMyClanFireteams($groupId, $includeClosed, $page, $platform, $groupFilter, $langFilter)



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
$platform = new \Bungie\Model\\Bungie\Model\FireteamFireteamPlatform(); // \Bungie\Model\FireteamFireteamPlatform | The platform filter.
$groupFilter = True; // bool | If true, filter by clan. Otherwise, ignore the clan and show all of the user's fireteams.
$langFilter = 'langFilter_example'; // string | An optional language filter.

try {
    $result = $apiInstance->fireteamGetMyClanFireteams($groupId, $includeClosed, $page, $platform, $groupFilter, $langFilter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FireteamApi->fireteamGetMyClanFireteams: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupId** | **int**| The group id of the clan. (This parameter is ignored unless the optional query parameter groupFilter is true). |
 **includeClosed** | **bool**| If true, return fireteams that have been closed. |
 **page** | **int**| Deprecated parameter, ignored. |
 **platform** | [**\Bungie\Model\FireteamFireteamPlatform**](../Model/.md)| The platform filter. |
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

# **fireteamSearchPublicAvailableClanFireteams**
> \Bungie\Model\InlineResponse20065 fireteamSearchPublicAvailableClanFireteams($activityType, $dateRange, $page, $platform, $slotFilter, $langFilter)



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
$activityType = new \Bungie\Model\\Bungie\Model\FireteamFireteamActivityType(); // \Bungie\Model\FireteamFireteamActivityType | The activity type to filter by.
$dateRange = new \Bungie\Model\\Bungie\Model\FireteamFireteamDateRange(); // \Bungie\Model\FireteamFireteamDateRange | The date range to grab available fireteams.
$page = 56; // int | Zero based page
$platform = new \Bungie\Model\\Bungie\Model\FireteamFireteamPlatform(); // \Bungie\Model\FireteamFireteamPlatform | The platform filter.
$slotFilter = new \Bungie\Model\\Bungie\Model\FireteamFireteamSlotSearch(); // \Bungie\Model\FireteamFireteamSlotSearch | Filters based on available slots
$langFilter = 'langFilter_example'; // string | An optional language filter.

try {
    $result = $apiInstance->fireteamSearchPublicAvailableClanFireteams($activityType, $dateRange, $page, $platform, $slotFilter, $langFilter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FireteamApi->fireteamSearchPublicAvailableClanFireteams: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activityType** | [**\Bungie\Model\FireteamFireteamActivityType**](../Model/.md)| The activity type to filter by. |
 **dateRange** | [**\Bungie\Model\FireteamFireteamDateRange**](../Model/.md)| The date range to grab available fireteams. |
 **page** | **int**| Zero based page |
 **platform** | [**\Bungie\Model\FireteamFireteamPlatform**](../Model/.md)| The platform filter. |
 **slotFilter** | [**\Bungie\Model\FireteamFireteamSlotSearch**](../Model/.md)| Filters based on available slots |
 **langFilter** | **string**| An optional language filter. | [optional]

### Return type

[**\Bungie\Model\InlineResponse20065**](../Model/InlineResponse20065.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

