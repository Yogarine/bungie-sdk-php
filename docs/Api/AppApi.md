# Bungie\AppApi

All URIs are relative to *https://www.bungie.net/Platform*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApplicationApiUsage**](AppApi.md#getApplicationApiUsage) | **GET** /App/ApiUsage/{applicationId}/ | 
[**getBungieApplications**](AppApi.md#getBungieApplications) | **GET** /App/FirstParty/ | 


# **getApplicationApiUsage**
> \Bungie\Model\InlineResponse200 getApplicationApiUsage($applicationId, $end, $start)



Get API usage by application for time frame specified. You can go as far back as 30 days ago, and can ask for up to a 48 hour window of time in a single request. You must be authenticated with at least the ReadUserData permission to access this endpoint.

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

$apiInstance = new Bungie\Api\AppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applicationId = 56; // int | ID of the application to get usage statistics.
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End time for query. Goes to now if not specified.
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start time for query. Goes to 24 hours ago if not specified.

try {
    $result = $apiInstance->getApplicationApiUsage($applicationId, $end, $start);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppApi->getApplicationApiUsage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applicationId** | **int**| ID of the application to get usage statistics. |
 **end** | **\DateTime**| End time for query. Goes to now if not specified. | [optional]
 **start** | **\DateTime**| Start time for query. Goes to 24 hours ago if not specified. | [optional]

### Return type

[**\Bungie\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBungieApplications**
> \Bungie\Model\InlineResponse2001 getBungieApplications()



Get list of applications created by Bungie.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\AppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getBungieApplications();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppApi->getBungieApplications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Bungie\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

