# Bungie\UserApi

All URIs are relative to *https://www.bungie.net/Platform*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAvailableThemes**](UserApi.md#getAvailableThemes) | **GET** /User/GetAvailableThemes/ | 
[**getBungieNetUserById**](UserApi.md#getBungieNetUserById) | **GET** /User/GetBungieNetUserById/{id}/ | 
[**getCredentialTypesForTargetAccount**](UserApi.md#getCredentialTypesForTargetAccount) | **GET** /User/GetCredentialTypesForTargetAccount/{membershipId}/ | 
[**getMembershipDataById**](UserApi.md#getMembershipDataById) | **GET** /User/GetMembershipsById/{membershipId}/{membershipType}/ | 
[**getMembershipDataForCurrentUser**](UserApi.md#getMembershipDataForCurrentUser) | **GET** /User/GetMembershipsForCurrentUser/ | 
[**getMembershipFromHardLinkedCredential**](UserApi.md#getMembershipFromHardLinkedCredential) | **GET** /User/GetMembershipFromHardLinkedCredential/{crType}/{credential}/ | 
[**getSanitizedPlatformDisplayNames**](UserApi.md#getSanitizedPlatformDisplayNames) | **GET** /User/GetSanitizedPlatformDisplayNames/{membershipId}/ | 
[**searchByGlobalNamePost**](UserApi.md#searchByGlobalNamePost) | **POST** /User/Search/GlobalName/{page}/ | 
[**searchByGlobalNamePrefix**](UserApi.md#searchByGlobalNamePrefix) | **GET** /User/Search/Prefix/{displayNamePrefix}/{page}/ | 


# **getAvailableThemes**
> \Bungie\Model\InlineResponse2005 getAvailableThemes()



Returns a list of all available user themes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAvailableThemes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getAvailableThemes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Bungie\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBungieNetUserById**
> \Bungie\Model\InlineResponse2002 getBungieNetUserById($id)



Loads a bungienet user by membership id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The requested Bungie.net membership id.

try {
    $result = $apiInstance->getBungieNetUserById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getBungieNetUserById: ', $e->getMessage(), PHP_EOL;
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

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCredentialTypesForTargetAccount**
> \Bungie\Model\InlineResponse2004 getCredentialTypesForTargetAccount($membershipId)



Returns a list of credential types attached to the requested account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$membershipId = 56; // int | The user's membership id

try {
    $result = $apiInstance->getCredentialTypesForTargetAccount($membershipId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getCredentialTypesForTargetAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membershipId** | **int**| The user&#39;s membership id |

### Return type

[**\Bungie\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMembershipDataById**
> \Bungie\Model\InlineResponse2006 getMembershipDataById($membershipId, $membershipType)



Returns a list of accounts associated with the supplied membership ID and membership type. This will include all linked accounts (even when hidden) if supplied credentials permit it.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$membershipId = 56; // int | The membership ID of the target user.
$membershipType = 56; // int | Type of the supplied membership ID.

try {
    $result = $apiInstance->getMembershipDataById($membershipId, $membershipType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getMembershipDataById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membershipId** | **int**| The membership ID of the target user. |
 **membershipType** | **int**| Type of the supplied membership ID. |

### Return type

[**\Bungie\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMembershipDataForCurrentUser**
> \Bungie\Model\InlineResponse2006 getMembershipDataForCurrentUser()



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
    $result = $apiInstance->getMembershipDataForCurrentUser();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getMembershipDataForCurrentUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Bungie\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMembershipFromHardLinkedCredential**
> \Bungie\Model\InlineResponse2007 getMembershipFromHardLinkedCredential($credential, $crType)



Gets any hard linked membership given a credential. Only works for credentials that are public (just SteamID64 right now). Cross Save aware.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credential = 'credential_example'; // string | The credential to look up. Must be a valid SteamID64.
$crType = 56; // int | The credential type. 'SteamId' is the only valid value at present.

try {
    $result = $apiInstance->getMembershipFromHardLinkedCredential($credential, $crType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getMembershipFromHardLinkedCredential: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credential** | **string**| The credential to look up. Must be a valid SteamID64. |
 **crType** | **int**| The credential type. &#39;SteamId&#39; is the only valid value at present. |

### Return type

[**\Bungie\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSanitizedPlatformDisplayNames**
> \Bungie\Model\InlineResponse2003 getSanitizedPlatformDisplayNames($membershipId)



Gets a list of all display names linked to this membership id but sanitized (profanity filtered). Obeys all visibility rules of calling user and is heavily cached.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$membershipId = 56; // int | The requested membership id to load.

try {
    $result = $apiInstance->getSanitizedPlatformDisplayNames($membershipId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getSanitizedPlatformDisplayNames: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membershipId** | **int**| The requested membership id to load. |

### Return type

[**\Bungie\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchByGlobalNamePost**
> \Bungie\Model\InlineResponse2008 searchByGlobalNamePost($page, $userSearchPrefixRequest)



Given the prefix of a global display name, returns all users who share that name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | The zero-based page of results you desire.
$userSearchPrefixRequest = new UserSearchPrefixRequest(); // \Bungie\Model\User\UserSearchPrefixRequest | 

try {
    $result = $apiInstance->searchByGlobalNamePost($page, $userSearchPrefixRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->searchByGlobalNamePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The zero-based page of results you desire. |
 **userSearchPrefixRequest** | [**\Bungie\Model\User\UserSearchPrefixRequest**](../Model/UserSearchPrefixRequest.md)|  |

### Return type

[**\Bungie\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchByGlobalNamePrefix**
> \Bungie\Model\InlineResponse2008 searchByGlobalNamePrefix($displayNamePrefix, $page)



[OBSOLETE] Do not use this to search users, use SearchByGlobalNamePost instead.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$displayNamePrefix = 'displayNamePrefix_example'; // string | The display name prefix you're looking for.
$page = 56; // int | The zero-based page of results you desire.

try {
    $result = $apiInstance->searchByGlobalNamePrefix($displayNamePrefix, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->searchByGlobalNamePrefix: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **displayNamePrefix** | **string**| The display name prefix you&#39;re looking for. |
 **page** | **int**| The zero-based page of results you desire. |

### Return type

[**\Bungie\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

