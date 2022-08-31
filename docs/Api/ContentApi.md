# Bungie\ContentApi

All URIs are relative to *https://www.bungie.net/Platform*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getContentById**](ContentApi.md#getContentById) | **GET** /Content/GetContentById/{id}/{locale}/ | 
[**getContentByTagAndType**](ContentApi.md#getContentByTagAndType) | **GET** /Content/GetContentByTagAndType/{tag}/{type}/{locale}/ | 
[**getContentType**](ContentApi.md#getContentType) | **GET** /Content/GetContentType/{type}/ | 
[**rssNewsArticles**](ContentApi.md#rssNewsArticles) | **GET** /Content/Rss/NewsArticles/{pageToken}/ | 
[**searchContentByTagAndType**](ContentApi.md#searchContentByTagAndType) | **GET** /Content/SearchContentByTagAndType/{tag}/{type}/{locale}/ | 
[**searchContentWithText**](ContentApi.md#searchContentWithText) | **GET** /Content/Search/{locale}/ | 
[**searchHelpArticles**](ContentApi.md#searchHelpArticles) | **GET** /Content/SearchHelpArticles/{searchtext}/{size}/ | 


# **getContentById**
> \Bungie\Model\InlineResponse20010 getContentById($id, $locale, $head)



Returns a content item referenced by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\ContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$locale = 'locale_example'; // string | 
$head = True; // bool | false

try {
    $result = $apiInstance->getContentById($id, $locale, $head);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->getContentById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **locale** | **string**|  |
 **head** | **bool**| false | [optional]

### Return type

[**\Bungie\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContentByTagAndType**
> \Bungie\Model\InlineResponse20010 getContentByTagAndType($locale, $tag, $type, $head)



Returns the newest item that matches a given tag and Content Type.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\ContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$locale = 'locale_example'; // string | 
$tag = 'tag_example'; // string | 
$type = 'type_example'; // string | 
$head = True; // bool | Not used.

try {
    $result = $apiInstance->getContentByTagAndType($locale, $tag, $type, $head);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->getContentByTagAndType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locale** | **string**|  |
 **tag** | **string**|  |
 **type** | **string**|  |
 **head** | **bool**| Not used. | [optional]

### Return type

[**\Bungie\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContentType**
> \Bungie\Model\InlineResponse2009 getContentType($type)



Gets an object describing a particular variant of content.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\ContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | 

try {
    $result = $apiInstance->getContentType($type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->getContentType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**|  |

### Return type

[**\Bungie\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rssNewsArticles**
> \Bungie\Model\InlineResponse20013 rssNewsArticles($pageToken)



Returns a JSON string response that is the RSS feed for news articles.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\ContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageToken = 'pageToken_example'; // string | Zero-based pagination token for paging through result sets.

try {
    $result = $apiInstance->rssNewsArticles($pageToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->rssNewsArticles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pageToken** | **string**| Zero-based pagination token for paging through result sets. |

### Return type

[**\Bungie\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchContentByTagAndType**
> \Bungie\Model\InlineResponse20011 searchContentByTagAndType($locale, $tag, $type, $currentpage, $head, $itemsperpage)



Searches for Content Items that match the given Tag and Content Type.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\ContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$locale = 'locale_example'; // string | 
$tag = 'tag_example'; // string | 
$type = 'type_example'; // string | 
$currentpage = 56; // int | Page number for the search results starting with page 1.
$head = True; // bool | Not used.
$itemsperpage = 56; // int | Not used.

try {
    $result = $apiInstance->searchContentByTagAndType($locale, $tag, $type, $currentpage, $head, $itemsperpage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->searchContentByTagAndType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locale** | **string**|  |
 **tag** | **string**|  |
 **type** | **string**|  |
 **currentpage** | **int**| Page number for the search results starting with page 1. | [optional]
 **head** | **bool**| Not used. | [optional]
 **itemsperpage** | **int**| Not used. | [optional]

### Return type

[**\Bungie\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchContentWithText**
> \Bungie\Model\InlineResponse20011 searchContentWithText($locale, $ctype, $currentpage, $head, $searchtext, $source, $tag)



Gets content based on querystring information passed in. Provides basic search and text search capabilities.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\ContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$locale = 'locale_example'; // string | 
$ctype = 'ctype_example'; // string | Content type tag: Help, News, etc. Supply multiple ctypes separated by space.
$currentpage = 56; // int | Page number for the search results, starting with page 1.
$head = True; // bool | Not used.
$searchtext = 'searchtext_example'; // string | Word or phrase for the search.
$source = 'source_example'; // string | For analytics, hint at the part of the app that triggered the search. Optional.
$tag = 'tag_example'; // string | Tag used on the content to be searched.

try {
    $result = $apiInstance->searchContentWithText($locale, $ctype, $currentpage, $head, $searchtext, $source, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->searchContentWithText: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **locale** | **string**|  |
 **ctype** | **string**| Content type tag: Help, News, etc. Supply multiple ctypes separated by space. | [optional]
 **currentpage** | **int**| Page number for the search results, starting with page 1. | [optional]
 **head** | **bool**| Not used. | [optional]
 **searchtext** | **string**| Word or phrase for the search. | [optional]
 **source** | **string**| For analytics, hint at the part of the app that triggered the search. Optional. | [optional]
 **tag** | **string**| Tag used on the content to be searched. | [optional]

### Return type

[**\Bungie\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchHelpArticles**
> \Bungie\Model\InlineResponse20012 searchHelpArticles($searchtext, $size)



Search for Help Articles.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\ContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$searchtext = 'searchtext_example'; // string | 
$size = 'size_example'; // string | 

try {
    $result = $apiInstance->searchHelpArticles($searchtext, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->searchHelpArticles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **searchtext** | **string**|  |
 **size** | **string**|  |

### Return type

[**\Bungie\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

