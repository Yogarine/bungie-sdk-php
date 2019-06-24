# Bungie\CommunityContentApi

All URIs are relative to *https://www.bungie.net/Platform*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCommunityContent**](CommunityContentApi.md#getCommunityContent) | **GET** /CommunityContent/Get/{sort}/{mediaFilter}/{page}/ | 
[**getCommunityLiveStatuses**](CommunityContentApi.md#getCommunityLiveStatuses) | **GET** /CommunityContent/Live/All/{partnershipType}/{sort}/{page}/ | 
[**getCommunityLiveStatusesForClanmates**](CommunityContentApi.md#getCommunityLiveStatusesForClanmates) | **GET** /CommunityContent/Live/Clan/{partnershipType}/{sort}/{page}/ | 
[**getCommunityLiveStatusesForFriends**](CommunityContentApi.md#getCommunityLiveStatusesForFriends) | **GET** /CommunityContent/Live/Friends/{partnershipType}/{sort}/{page}/ | 
[**getFeaturedCommunityLiveStatuses**](CommunityContentApi.md#getFeaturedCommunityLiveStatuses) | **GET** /CommunityContent/Live/Featured/{partnershipType}/{sort}/{page}/ | 
[**getStreamingStatusForMember**](CommunityContentApi.md#getStreamingStatusForMember) | **GET** /CommunityContent/Live/Users/{partnershipType}/{membershipType}/{membershipId}/ | 


# **getCommunityContent**
> \Bungie\Model\InlineResponse20010 getCommunityContent($mediaFilter, $page, $sort)



Returns community content.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\CommunityContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mediaFilter = 56; // int | The type of media to get
$page = 56; // int | Zero based page
$sort = 56; // int | The sort mode.

try {
    $result = $apiInstance->getCommunityContent($mediaFilter, $page, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunityContentApi->getCommunityContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mediaFilter** | **int**| The type of media to get |
 **page** | **int**| Zero based page |
 **sort** | **int**| The sort mode. |

### Return type

[**\Bungie\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCommunityLiveStatuses**
> \Bungie\Model\InlineResponse20058 getCommunityLiveStatuses($page, $partnershipType, $sort, $modeHash, $streamLocale)



Returns info about community members who are live streaming.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\CommunityContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Zero based page.
$partnershipType = 56; // int | The type of partnership for which the status should be returned.
$sort = 56; // int | The sort mode.
$modeHash = 56; // int | The hash of the Activity Mode for which streams should be retrieved. Don't pass it in or pass 0 to not filter by mode.
$streamLocale = 'streamLocale_example'; // string | The locale for streams you'd like to see. Don't pass this to fall back on your BNet locale. Pass 'ALL' to not filter by locale.

try {
    $result = $apiInstance->getCommunityLiveStatuses($page, $partnershipType, $sort, $modeHash, $streamLocale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunityContentApi->getCommunityLiveStatuses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Zero based page. |
 **partnershipType** | **int**| The type of partnership for which the status should be returned. |
 **sort** | **int**| The sort mode. |
 **modeHash** | **int**| The hash of the Activity Mode for which streams should be retrieved. Don&#39;t pass it in or pass 0 to not filter by mode. | [optional]
 **streamLocale** | **string**| The locale for streams you&#39;d like to see. Don&#39;t pass this to fall back on your BNet locale. Pass &#39;ALL&#39; to not filter by locale. | [optional]

### Return type

[**\Bungie\Model\InlineResponse20058**](../Model/InlineResponse20058.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCommunityLiveStatusesForClanmates**
> \Bungie\Model\InlineResponse20058 getCommunityLiveStatusesForClanmates($page, $partnershipType, $sort)



Returns info about community members who are live streaming in your clans.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\CommunityContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Zero based page.
$partnershipType = 56; // int | The type of partnership for which the status should be returned.
$sort = 56; // int | The sort mode.

try {
    $result = $apiInstance->getCommunityLiveStatusesForClanmates($page, $partnershipType, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunityContentApi->getCommunityLiveStatusesForClanmates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Zero based page. |
 **partnershipType** | **int**| The type of partnership for which the status should be returned. |
 **sort** | **int**| The sort mode. |

### Return type

[**\Bungie\Model\InlineResponse20058**](../Model/InlineResponse20058.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCommunityLiveStatusesForFriends**
> \Bungie\Model\InlineResponse20058 getCommunityLiveStatusesForFriends($page, $partnershipType, $sort)



Returns info about community members who are live streaming among your friends.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\CommunityContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Zero based page.
$partnershipType = 56; // int | The type of partnership for which the status should be returned.
$sort = 56; // int | The sort mode.

try {
    $result = $apiInstance->getCommunityLiveStatusesForFriends($page, $partnershipType, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunityContentApi->getCommunityLiveStatusesForFriends: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Zero based page. |
 **partnershipType** | **int**| The type of partnership for which the status should be returned. |
 **sort** | **int**| The sort mode. |

### Return type

[**\Bungie\Model\InlineResponse20058**](../Model/InlineResponse20058.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFeaturedCommunityLiveStatuses**
> \Bungie\Model\InlineResponse20058 getFeaturedCommunityLiveStatuses($page, $partnershipType, $sort, $streamLocale)



Returns info about Featured live streams.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\CommunityContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Zero based page.
$partnershipType = 56; // int | The type of partnership for which the status should be returned.
$sort = 56; // int | The sort mode.
$streamLocale = 'streamLocale_example'; // string | The locale for streams you'd like to see. Don't pass this to fall back on your BNet locale. Pass 'ALL' to not filter by locale.

try {
    $result = $apiInstance->getFeaturedCommunityLiveStatuses($page, $partnershipType, $sort, $streamLocale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunityContentApi->getFeaturedCommunityLiveStatuses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Zero based page. |
 **partnershipType** | **int**| The type of partnership for which the status should be returned. |
 **sort** | **int**| The sort mode. |
 **streamLocale** | **string**| The locale for streams you&#39;d like to see. Don&#39;t pass this to fall back on your BNet locale. Pass &#39;ALL&#39; to not filter by locale. | [optional]

### Return type

[**\Bungie\Model\InlineResponse20058**](../Model/InlineResponse20058.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStreamingStatusForMember**
> \Bungie\Model\InlineResponse20059 getStreamingStatusForMember($membershipId, $membershipType, $partnershipType)



Gets the Live Streaming status of a particular Account and Membership Type.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\CommunityContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$membershipId = 56; // int | The membershipId related to that type.
$membershipType = 56; // int | The type of account for which info will be extracted.
$partnershipType = 56; // int | The type of partnership for which info will be extracted.

try {
    $result = $apiInstance->getStreamingStatusForMember($membershipId, $membershipType, $partnershipType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunityContentApi->getStreamingStatusForMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membershipId** | **int**| The membershipId related to that type. |
 **membershipType** | **int**| The type of account for which info will be extracted. |
 **partnershipType** | **int**| The type of partnership for which info will be extracted. |

### Return type

[**\Bungie\Model\InlineResponse20059**](../Model/InlineResponse20059.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

