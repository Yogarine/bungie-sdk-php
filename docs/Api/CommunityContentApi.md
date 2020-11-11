# Bungie\CommunityContentApi

All URIs are relative to *https://www.bungie.net/Platform*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCommunityContent**](CommunityContentApi.md#getCommunityContent) | **GET** /CommunityContent/Get/{sort}/{mediaFilter}/{page}/ | 


# **getCommunityContent**
> \Bungie\Model\InlineResponse20012 getCommunityContent($mediaFilter, $page, $sort)



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

[**\Bungie\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

