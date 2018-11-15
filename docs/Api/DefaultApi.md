# Bungie\DefaultApi

All URIs are relative to *https://www.bungie.net/Platform*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAvailableLocales**](DefaultApi.md#getAvailableLocales) | **GET** /GetAvailableLocales/ | 
[**getCommonSettings**](DefaultApi.md#getCommonSettings) | **GET** /Settings/ | 
[**getGlobalAlerts**](DefaultApi.md#getGlobalAlerts) | **GET** /GlobalAlerts/ | 


# **getAvailableLocales**
> \Bungie\Model\InlineResponse20016 getAvailableLocales()



List of available localization cultures

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAvailableLocales();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAvailableLocales: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Bungie\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCommonSettings**
> \Bungie\Model\InlineResponse20068 getCommonSettings()



Get the common settings used by the Bungie.Net environment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getCommonSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCommonSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Bungie\Model\InlineResponse20068**](../Model/InlineResponse20068.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGlobalAlerts**
> \Bungie\Model\InlineResponse20069 getGlobalAlerts($includestreaming)



Gets any active global alert for display in the forum banners, help pages, etc. Usually used for DOC alerts.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$includestreaming = true; // bool | Determines whether Streaming Alerts are included in results

try {
    $result = $apiInstance->getGlobalAlerts($includestreaming);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getGlobalAlerts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **includestreaming** | **bool**| Determines whether Streaming Alerts are included in results | [optional]

### Return type

[**\Bungie\Model\InlineResponse20069**](../Model/InlineResponse20069.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

