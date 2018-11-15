# Bungie\TrendingApi

All URIs are relative to *https://www.bungie.net/Platform*

Method | HTTP request | Description
------------- | ------------- | -------------
[**trendingGetTrendingCategories**](TrendingApi.md#trendingGetTrendingCategories) | **GET** /Trending/Categories/ | 
[**trendingGetTrendingCategory**](TrendingApi.md#trendingGetTrendingCategory) | **GET** /Trending/Categories/{categoryId}/{pageNumber}/ | 
[**trendingGetTrendingEntryDetail**](TrendingApi.md#trendingGetTrendingEntryDetail) | **GET** /Trending/Details/{trendingEntryType}/{identifier}/ | 


# **trendingGetTrendingCategories**
> \Bungie\Model\InlineResponse20062 trendingGetTrendingCategories()



Returns trending items for Bungie.net, collapsed into the first page of items per category. For pagination within a category, call GetTrendingCategory.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\TrendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->trendingGetTrendingCategories();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrendingApi->trendingGetTrendingCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Bungie\Model\InlineResponse20062**](../Model/InlineResponse20062.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **trendingGetTrendingCategory**
> \Bungie\Model\InlineResponse20063 trendingGetTrendingCategory($categoryId, $pageNumber)



Returns paginated lists of trending items for a category.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\TrendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$categoryId = "categoryId_example"; // string | The ID of the category for whom you want additional results.
$pageNumber = 56; // int | The page # of results to return.

try {
    $result = $apiInstance->trendingGetTrendingCategory($categoryId, $pageNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrendingApi->trendingGetTrendingCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **categoryId** | **string**| The ID of the category for whom you want additional results. |
 **pageNumber** | **int**| The page # of results to return. |

### Return type

[**\Bungie\Model\InlineResponse20063**](../Model/InlineResponse20063.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **trendingGetTrendingEntryDetail**
> \Bungie\Model\InlineResponse20064 trendingGetTrendingEntryDetail($identifier, $trendingEntryType)



Returns the detailed results for a specific trending entry. Note that trending entries are uniquely identified by a combination of *both* the TrendingEntryType *and* the identifier: the identifier alone is not guaranteed to be globally unique.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\TrendingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$identifier = "identifier_example"; // string | The identifier for the entity to be returned.
$trendingEntryType = 56; // int | The type of entity to be returned.

try {
    $result = $apiInstance->trendingGetTrendingEntryDetail($identifier, $trendingEntryType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrendingApi->trendingGetTrendingEntryDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **identifier** | **string**| The identifier for the entity to be returned. |
 **trendingEntryType** | **int**| The type of entity to be returned. |

### Return type

[**\Bungie\Model\InlineResponse20064**](../Model/InlineResponse20064.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

