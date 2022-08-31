# Bungie\SocialApi

All URIs are relative to *https://www.bungie.net/Platform*

Method | HTTP request | Description
------------- | ------------- | -------------
[**acceptFriendRequest**](SocialApi.md#acceptFriendRequest) | **POST** /Social/Friends/Requests/Accept/{membershipId}/ | 
[**declineFriendRequest**](SocialApi.md#declineFriendRequest) | **POST** /Social/Friends/Requests/Decline/{membershipId}/ | 
[**getFriendList**](SocialApi.md#getFriendList) | **GET** /Social/Friends/ | 
[**getFriendRequestList**](SocialApi.md#getFriendRequestList) | **GET** /Social/Friends/Requests/ | 
[**getPlatformFriendList**](SocialApi.md#getPlatformFriendList) | **GET** /Social/PlatformFriends/{friendPlatform}/{page}/ | 
[**issueFriendRequest**](SocialApi.md#issueFriendRequest) | **POST** /Social/Friends/Add/{membershipId}/ | 
[**removeFriend**](SocialApi.md#removeFriend) | **POST** /Social/Friends/Remove/{membershipId}/ | 
[**removeFriendRequest**](SocialApi.md#removeFriendRequest) | **POST** /Social/Friends/Requests/Remove/{membershipId}/ | 


# **acceptFriendRequest**
> \Bungie\Model\InlineResponse20020 acceptFriendRequest($membershipId)



Accepts a friend relationship with the target user. The user must be on your incoming friend request list, though no error will occur if they are not.

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

$apiInstance = new Bungie\Api\SocialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$membershipId = 'membershipId_example'; // string | The membership id of the user you wish to accept.

try {
    $result = $apiInstance->acceptFriendRequest($membershipId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialApi->acceptFriendRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membershipId** | **string**| The membership id of the user you wish to accept. |

### Return type

[**\Bungie\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **declineFriendRequest**
> \Bungie\Model\InlineResponse20020 declineFriendRequest($membershipId)



Declines a friend relationship with the target user. The user must be on your incoming friend request list, though no error will occur if they are not.

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

$apiInstance = new Bungie\Api\SocialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$membershipId = 'membershipId_example'; // string | The membership id of the user you wish to decline.

try {
    $result = $apiInstance->declineFriendRequest($membershipId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialApi->declineFriendRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membershipId** | **string**| The membership id of the user you wish to decline. |

### Return type

[**\Bungie\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFriendList**
> \Bungie\Model\InlineResponse20073 getFriendList()



Returns your Bungie Friend list

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

$apiInstance = new Bungie\Api\SocialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getFriendList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialApi->getFriendList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Bungie\Model\InlineResponse20073**](../Model/InlineResponse20073.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFriendRequestList**
> \Bungie\Model\InlineResponse20074 getFriendRequestList()



Returns your friend request queue.

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

$apiInstance = new Bungie\Api\SocialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getFriendRequestList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialApi->getFriendRequestList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Bungie\Model\InlineResponse20074**](../Model/InlineResponse20074.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPlatformFriendList**
> \Bungie\Model\InlineResponse20075 getPlatformFriendList($friendPlatform, $page)



Gets the platform friend of the requested type, with additional information if they have Bungie accounts. Must have a recent login session with said platform.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\SocialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$friendPlatform = 56; // int | The platform friend type.
$page = 'page_example'; // string | The zero based page to return. Page size is 100.

try {
    $result = $apiInstance->getPlatformFriendList($friendPlatform, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialApi->getPlatformFriendList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **friendPlatform** | **int**| The platform friend type. |
 **page** | **string**| The zero based page to return. Page size is 100. |

### Return type

[**\Bungie\Model\InlineResponse20075**](../Model/InlineResponse20075.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **issueFriendRequest**
> \Bungie\Model\InlineResponse20020 issueFriendRequest($membershipId)



Requests a friend relationship with the target user. Any of the target user's linked membership ids are valid inputs.

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

$apiInstance = new Bungie\Api\SocialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$membershipId = 'membershipId_example'; // string | The membership id of the user you wish to add.

try {
    $result = $apiInstance->issueFriendRequest($membershipId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialApi->issueFriendRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membershipId** | **string**| The membership id of the user you wish to add. |

### Return type

[**\Bungie\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeFriend**
> \Bungie\Model\InlineResponse20020 removeFriend($membershipId)



Remove a friend relationship with the target user. The user must be on your friend list, though no error will occur if they are not.

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

$apiInstance = new Bungie\Api\SocialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$membershipId = 'membershipId_example'; // string | The membership id of the user you wish to remove.

try {
    $result = $apiInstance->removeFriend($membershipId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialApi->removeFriend: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membershipId** | **string**| The membership id of the user you wish to remove. |

### Return type

[**\Bungie\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeFriendRequest**
> \Bungie\Model\InlineResponse20020 removeFriendRequest($membershipId)



Remove a friend relationship with the target user. The user must be on your outgoing request friend list, though no error will occur if they are not.

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

$apiInstance = new Bungie\Api\SocialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$membershipId = 'membershipId_example'; // string | The membership id of the user you wish to remove.

try {
    $result = $apiInstance->removeFriendRequest($membershipId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SocialApi->removeFriendRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membershipId** | **string**| The membership id of the user you wish to remove. |

### Return type

[**\Bungie\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

