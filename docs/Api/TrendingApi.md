# Bungie\TrendingApi

All URIs are relative to *https://www.bungie.net/Platform*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTrendingCategories**](TrendingApi.md#getTrendingCategories) | **GET** /Trending/Categories/ | 
[**getTrendingCategory**](TrendingApi.md#getTrendingCategory) | **GET** /Trending/Categories/{categoryId}/{pageNumber}/ | 
[**getTrendingEntryDetail**](TrendingApi.md#getTrendingEntryDetail) | **GET** /Trending/Details/{trendingEntryType}/{identifier}/ | 


# **getTrendingCategories**
> \Bungie\Model\InlineResponse20060 getTrendingCategories()



Returns trending items for Bungie.net, collapsed into the first page of items per category. For pagination within a category, call GetTrendingCategory.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\TrendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getTrendingCategories();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrendingApi->getTrendingCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Bungie\Model\InlineResponse20060**](../Model/InlineResponse20060.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTrendingCategory**
> \Bungie\Model\InlineResponse20061 getTrendingCategory($categoryId, $pageNumber)



Returns paginated lists of trending items for a category.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\TrendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$categoryId = 'categoryId_example'; // string | The ID of the category for whom you want additional results.
$pageNumber = 56; // int | The page # of results to return.

try {
    $result = $apiInstance->getTrendingCategory($categoryId, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrendingApi->getTrendingCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **categoryId** | **string**| The ID of the category for whom you want additional results. |
 **pageNumber** | **int**| The page # of results to return. |

### Return type

[**\Bungie\Model\InlineResponse20061**](../Model/InlineResponse20061.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTrendingEntryDetail**
> \Bungie\Model\InlineResponse20062 getTrendingEntryDetail($identifier, $trendingEntryType)



Returns the detailed results for a specific trending entry. Note that trending entries are uniquely identified by a combination of *both* the TrendingEntryType *and* the identifier: the identifier alone is not guaranteed to be globally unique.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\TrendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = 'identifier_example'; // string | The identifier for the entity to be returned.
$trendingEntryType = 56; // int | The type of entity to be returned.

try {
    $result = $apiInstance->getTrendingEntryDetail($identifier, $trendingEntryType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrendingApi->getTrendingEntryDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| The identifier for the entity to be returned. |
 **trendingEntryType** | **int**| The type of entity to be returned. |

### Return type

[**\Bungie\Model\InlineResponse20062**](../Model/InlineResponse20062.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

