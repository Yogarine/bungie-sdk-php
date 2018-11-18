# Bungie\UserApi

All URIs are relative to *https://www.bungie.net/Platform*

Method | HTTP request | Description
------------- | ------------- | -------------
[**userGetAvailableThemes**](UserApi.md#userGetAvailableThemes) | **GET** /User/GetAvailableThemes/ | 
[**userGetBungieNetUserById**](UserApi.md#userGetBungieNetUserById) | **GET** /User/GetBungieNetUserById/{id}/ | 
[**userGetMembershipDataById**](UserApi.md#userGetMembershipDataById) | **GET** /User/GetMembershipsById/{membershipId}/{membershipType}/ | 
[**userGetMembershipDataForCurrentUser**](UserApi.md#userGetMembershipDataForCurrentUser) | **GET** /User/GetMembershipsForCurrentUser/ | 
[**userGetPartnerships**](UserApi.md#userGetPartnerships) | **GET** /User/{membershipId}/Partnerships/ | 
[**userSearchUsers**](UserApi.md#userSearchUsers) | **GET** /User/SearchUsers/ | 


# **userGetAvailableThemes**
> \Bungie\Model\InlineResponse2004 userGetAvailableThemes()



Returns a list of all available user themes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->userGetAvailableThemes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userGetAvailableThemes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Bungie\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userGetBungieNetUserById**
> \Bungie\Model\InlineResponse2002 userGetBungieNetUserById($id)



Loads a bungienet user by membership id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | The requested Bungie.net membership id.

try {
    $result = $apiInstance->userGetBungieNetUserById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userGetBungieNetUserById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The requested Bungie.net membership id. |

### Return type

[**\Bungie\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userGetMembershipDataById**
> \Bungie\Model\InlineResponse2005 userGetMembershipDataById($membershipId, $membershipType)



Returns a list of accounts associated with the supplied membership ID and membership type. This will include all linked accounts (even when hidden) if supplied credentials permit it.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$membershipId = 56; // int | The membership ID of the target user.
$membershipType = new \Bungie\Model\\Bungie\Model\BungieMembershipType(); // \Bungie\Model\BungieMembershipType | Type of the supplied membership ID.

try {
    $result = $apiInstance->userGetMembershipDataById($membershipId, $membershipType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userGetMembershipDataById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membershipId** | **int**| The membership ID of the target user. |
 **membershipType** | [**\Bungie\Model\BungieMembershipType**](../Model/.md)| Type of the supplied membership ID. |

### Return type

[**\Bungie\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userGetMembershipDataForCurrentUser**
> \Bungie\Model\InlineResponse2005 userGetMembershipDataForCurrentUser()



Returns a list of accounts associated with signed in user. This is useful for OAuth implementations that do not give you access to the token response.

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

$apiInstance = new Bungie\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->userGetMembershipDataForCurrentUser();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userGetMembershipDataForCurrentUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Bungie\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userGetPartnerships**
> \Bungie\Model\InlineResponse2006 userGetPartnerships($membershipId)



Returns a user's linked Partnerships.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$membershipId = 56; // int | The ID of the member for whom partnerships should be returned.

try {
    $result = $apiInstance->userGetPartnerships($membershipId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userGetPartnerships: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membershipId** | **int**| The ID of the member for whom partnerships should be returned. |

### Return type

[**\Bungie\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userSearchUsers**
> \Bungie\Model\InlineResponse2003 userSearchUsers($q)



Returns a list of possible users based on the search string

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$q = 'q_example'; // string | The search string.

try {
    $result = $apiInstance->userSearchUsers($q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->userSearchUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| The search string. | [optional]

### Return type

[**\Bungie\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

