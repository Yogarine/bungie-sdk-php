# Bungie\CommunityContentApi

All URIs are relative to *https://www.bungie.net/Platform*

Method | HTTP request | Description
------------- | ------------- | -------------
[**communityContentGetCommunityContent**](CommunityContentApi.md#communityContentGetCommunityContent) | **GET** /CommunityContent/Get/{sort}/{mediaFilter}/{page}/ | 
[**communityContentGetCommunityLiveStatuses**](CommunityContentApi.md#communityContentGetCommunityLiveStatuses) | **GET** /CommunityContent/Live/All/{partnershipType}/{sort}/{page}/ | 
[**communityContentGetCommunityLiveStatusesForClanmates**](CommunityContentApi.md#communityContentGetCommunityLiveStatusesForClanmates) | **GET** /CommunityContent/Live/Clan/{partnershipType}/{sort}/{page}/ | 
[**communityContentGetCommunityLiveStatusesForFriends**](CommunityContentApi.md#communityContentGetCommunityLiveStatusesForFriends) | **GET** /CommunityContent/Live/Friends/{partnershipType}/{sort}/{page}/ | 
[**communityContentGetFeaturedCommunityLiveStatuses**](CommunityContentApi.md#communityContentGetFeaturedCommunityLiveStatuses) | **GET** /CommunityContent/Live/Featured/{partnershipType}/{sort}/{page}/ | 
[**communityContentGetStreamingStatusForMember**](CommunityContentApi.md#communityContentGetStreamingStatusForMember) | **GET** /CommunityContent/Live/Users/{partnershipType}/{membershipType}/{membershipId}/ | 


# **communityContentGetCommunityContent**
> \Bungie\Model\InlineResponse20010 communityContentGetCommunityContent($mediaFilter, $page, $sort)



Returns community content.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\CommunityContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mediaFilter = 56; // int | The type of media to get
$page = 56; // int | Zero based page
$sort = 56; // int | The sort mode.

try {
    $result = $apiInstance->communityContentGetCommunityContent($mediaFilter, $page, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunityContentApi->communityContentGetCommunityContent: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **communityContentGetCommunityLiveStatuses**
> \Bungie\Model\InlineResponse20060 communityContentGetCommunityLiveStatuses($page, $partnershipType, $sort, $modeHash, $streamLocale)



Returns info about community members who are live streaming.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\CommunityContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 56; // int | Zero based page.
$partnershipType = 56; // int | The type of partnership for which the status should be returned.
$sort = 56; // int | The sort mode.
$modeHash = 56; // int | The hash of the Activity Mode for which streams should be retrieved. Don't pass it in or pass 0 to not filter by mode.
$streamLocale = 'streamLocale_example'; // string | The locale for streams you'd like to see. Don't pass this to fall back on your BNet locale. Pass 'ALL' to not filter by locale.

try {
    $result = $apiInstance->communityContentGetCommunityLiveStatuses($page, $partnershipType, $sort, $modeHash, $streamLocale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunityContentApi->communityContentGetCommunityLiveStatuses: ', $e->getMessage(), PHP_EOL;
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

[**\Bungie\Model\InlineResponse20060**](../Model/InlineResponse20060.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **communityContentGetCommunityLiveStatusesForClanmates**
> \Bungie\Model\InlineResponse20060 communityContentGetCommunityLiveStatusesForClanmates($page, $partnershipType, $sort)



Returns info about community members who are live streaming in your clans.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\CommunityContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 56; // int | Zero based page.
$partnershipType = 56; // int | The type of partnership for which the status should be returned.
$sort = 56; // int | The sort mode.

try {
    $result = $apiInstance->communityContentGetCommunityLiveStatusesForClanmates($page, $partnershipType, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunityContentApi->communityContentGetCommunityLiveStatusesForClanmates: ', $e->getMessage(), PHP_EOL;
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

[**\Bungie\Model\InlineResponse20060**](../Model/InlineResponse20060.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **communityContentGetCommunityLiveStatusesForFriends**
> \Bungie\Model\InlineResponse20060 communityContentGetCommunityLiveStatusesForFriends($page, $partnershipType, $sort)



Returns info about community members who are live streaming among your friends.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\CommunityContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 56; // int | Zero based page.
$partnershipType = 56; // int | The type of partnership for which the status should be returned.
$sort = 56; // int | The sort mode.

try {
    $result = $apiInstance->communityContentGetCommunityLiveStatusesForFriends($page, $partnershipType, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunityContentApi->communityContentGetCommunityLiveStatusesForFriends: ', $e->getMessage(), PHP_EOL;
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

[**\Bungie\Model\InlineResponse20060**](../Model/InlineResponse20060.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **communityContentGetFeaturedCommunityLiveStatuses**
> \Bungie\Model\InlineResponse20060 communityContentGetFeaturedCommunityLiveStatuses($page, $partnershipType, $sort, $streamLocale)



Returns info about Featured live streams.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\CommunityContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$page = 56; // int | Zero based page.
$partnershipType = 56; // int | The type of partnership for which the status should be returned.
$sort = 56; // int | The sort mode.
$streamLocale = 'streamLocale_example'; // string | The locale for streams you'd like to see. Don't pass this to fall back on your BNet locale. Pass 'ALL' to not filter by locale.

try {
    $result = $apiInstance->communityContentGetFeaturedCommunityLiveStatuses($page, $partnershipType, $sort, $streamLocale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunityContentApi->communityContentGetFeaturedCommunityLiveStatuses: ', $e->getMessage(), PHP_EOL;
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

[**\Bungie\Model\InlineResponse20060**](../Model/InlineResponse20060.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **communityContentGetStreamingStatusForMember**
> \Bungie\Model\InlineResponse20061 communityContentGetStreamingStatusForMember($membershipId, $membershipType, $partnershipType)



Gets the Live Streaming status of a particular Account and Membership Type.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\CommunityContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$membershipId = 56; // int | The membershipId related to that type.
$membershipType = 56; // int | The type of account for which info will be extracted.
$partnershipType = 56; // int | The type of partnership for which info will be extracted.

try {
    $result = $apiInstance->communityContentGetStreamingStatusForMember($membershipId, $membershipType, $partnershipType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunityContentApi->communityContentGetStreamingStatusForMember: ', $e->getMessage(), PHP_EOL;
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

[**\Bungie\Model\InlineResponse20061**](../Model/InlineResponse20061.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
