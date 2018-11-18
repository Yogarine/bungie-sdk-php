# Bungie\ContentApi

All URIs are relative to *https://www.bungie.net/Platform*

Method | HTTP request | Description
------------- | ------------- | -------------
[**contentGetContentById**](ContentApi.md#contentGetContentById) | **GET** /Content/GetContentById/{id}/{locale}/ | 
[**contentGetContentByTagAndType**](ContentApi.md#contentGetContentByTagAndType) | **GET** /Content/GetContentByTagAndType/{tag}/{type}/{locale}/ | 
[**contentGetContentType**](ContentApi.md#contentGetContentType) | **GET** /Content/GetContentType/{type}/ | 
[**contentSearchContentByTagAndType**](ContentApi.md#contentSearchContentByTagAndType) | **GET** /Content/SearchContentByTagAndType/{tag}/{type}/{locale}/ | 
[**contentSearchContentWithText**](ContentApi.md#contentSearchContentWithText) | **GET** /Content/Search/{locale}/ | 


# **contentGetContentById**
> \Bungie\Model\InlineResponse2008 contentGetContentById($id, $locale, $head)



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
    $result = $apiInstance->contentGetContentById($id, $locale, $head);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->contentGetContentById: ', $e->getMessage(), PHP_EOL;
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

[**\Bungie\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contentGetContentByTagAndType**
> \Bungie\Model\InlineResponse2008 contentGetContentByTagAndType($locale, $tag, $type, $head)



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
    $result = $apiInstance->contentGetContentByTagAndType($locale, $tag, $type, $head);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->contentGetContentByTagAndType: ', $e->getMessage(), PHP_EOL;
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

[**\Bungie\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contentGetContentType**
> \Bungie\Model\InlineResponse2007 contentGetContentType($type)



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
    $result = $apiInstance->contentGetContentType($type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->contentGetContentType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**|  |

### Return type

[**\Bungie\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contentSearchContentByTagAndType**
> \Bungie\Model\InlineResponse2009 contentSearchContentByTagAndType($locale, $tag, $type, $currentpage, $head, $itemsperpage)



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
    $result = $apiInstance->contentSearchContentByTagAndType($locale, $tag, $type, $currentpage, $head, $itemsperpage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->contentSearchContentByTagAndType: ', $e->getMessage(), PHP_EOL;
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

[**\Bungie\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contentSearchContentWithText**
> \Bungie\Model\InlineResponse2009 contentSearchContentWithText($locale, $ctype, $currentpage, $head, $searchtext, $source, $tag)



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
    $result = $apiInstance->contentSearchContentWithText($locale, $ctype, $currentpage, $head, $searchtext, $source, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContentApi->contentSearchContentWithText: ', $e->getMessage(), PHP_EOL;
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

[**\Bungie\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

