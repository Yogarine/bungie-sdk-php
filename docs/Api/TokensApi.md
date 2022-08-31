# Bungie\TokensApi

All URIs are relative to *https://www.bungie.net/Platform*

Method | HTTP request | Description
------------- | ------------- | -------------
[**applyMissingPartnerOffersWithoutClaim**](TokensApi.md#applyMissingPartnerOffersWithoutClaim) | **POST** /Tokens/Partner/ApplyMissingOffers/{partnerApplicationId}/{targetBnetMembershipId}/ | 
[**claimPartnerOffer**](TokensApi.md#claimPartnerOffer) | **POST** /Tokens/Partner/ClaimOffer/ | 
[**forceDropsRepair**](TokensApi.md#forceDropsRepair) | **POST** /Tokens/Partner/ForceDropsRepair/ | 
[**getBungieRewardsForPlatformUser**](TokensApi.md#getBungieRewardsForPlatformUser) | **GET** /Tokens/Rewards/GetRewardsForPlatformUser/{membershipId}/{membershipType}/ | 
[**getBungieRewardsForUser**](TokensApi.md#getBungieRewardsForUser) | **GET** /Tokens/Rewards/GetRewardsForUser/{membershipId}/ | 
[**getBungieRewardsList**](TokensApi.md#getBungieRewardsList) | **GET** /Tokens/Rewards/BungieRewards/ | 
[**getPartnerOfferSkuHistory**](TokensApi.md#getPartnerOfferSkuHistory) | **GET** /Tokens/Partner/History/{partnerApplicationId}/{targetBnetMembershipId}/ | 
[**getPartnerRewardHistory**](TokensApi.md#getPartnerRewardHistory) | **GET** /Tokens/Partner/History/{targetBnetMembershipId}/Application/{partnerApplicationId}/ | 


# **applyMissingPartnerOffersWithoutClaim**
> \Bungie\Model\InlineResponse20020 applyMissingPartnerOffersWithoutClaim($partnerApplicationId, $targetBnetMembershipId)



Apply a partner offer to the targeted user. This endpoint does not claim a new offer, but any already claimed offers will be applied to the game if not already.

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

$apiInstance = new Bungie\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$partnerApplicationId = 56; // int | The partner application identifier.
$targetBnetMembershipId = 56; // int | The bungie.net user to apply missing offers to. If not self, elevated permissions are required.

try {
    $result = $apiInstance->applyMissingPartnerOffersWithoutClaim($partnerApplicationId, $targetBnetMembershipId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->applyMissingPartnerOffersWithoutClaim: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partnerApplicationId** | **int**| The partner application identifier. |
 **targetBnetMembershipId** | **int**| The bungie.net user to apply missing offers to. If not self, elevated permissions are required. |

### Return type

[**\Bungie\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **claimPartnerOffer**
> \Bungie\Model\InlineResponse20020 claimPartnerOffer($partnerOfferClaimRequest)



Claim a partner offer as the authenticated user.

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

$apiInstance = new Bungie\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$partnerOfferClaimRequest = new PartnerOfferClaimRequest(); // \Bungie\Model\Tokens\PartnerOfferClaimRequest | 

try {
    $result = $apiInstance->claimPartnerOffer($partnerOfferClaimRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->claimPartnerOffer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partnerOfferClaimRequest** | [**\Bungie\Model\Tokens\PartnerOfferClaimRequest**](../Model/PartnerOfferClaimRequest.md)|  |

### Return type

[**\Bungie\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **forceDropsRepair**
> \Bungie\Model\InlineResponse20020 forceDropsRepair()



Twitch Drops self-repair function - scans twitch for drops not marked as fulfilled and resyncs them.

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

$apiInstance = new Bungie\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->forceDropsRepair();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->forceDropsRepair: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Bungie\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBungieRewardsForPlatformUser**
> \Bungie\Model\InlineResponse20037 getBungieRewardsForPlatformUser($membershipId, $membershipType)



Returns the bungie rewards for the targeted user when a platform membership Id and Type are used.

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

$apiInstance = new Bungie\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$membershipId = 56; // int | users platform membershipId for requested user rewards. If not self, elevated permissions are required.
$membershipType = 56; // int | The target Destiny 2 membership type.

try {
    $result = $apiInstance->getBungieRewardsForPlatformUser($membershipId, $membershipType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->getBungieRewardsForPlatformUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membershipId** | **int**| users platform membershipId for requested user rewards. If not self, elevated permissions are required. |
 **membershipType** | **int**| The target Destiny 2 membership type. |

### Return type

[**\Bungie\Model\InlineResponse20037**](../Model/InlineResponse20037.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBungieRewardsForUser**
> \Bungie\Model\InlineResponse20037 getBungieRewardsForUser($membershipId)



Returns the bungie rewards for the targeted user.

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

$apiInstance = new Bungie\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$membershipId = 56; // int | bungie.net user membershipId for requested user rewards. If not self, elevated permissions are required.

try {
    $result = $apiInstance->getBungieRewardsForUser($membershipId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->getBungieRewardsForUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **membershipId** | **int**| bungie.net user membershipId for requested user rewards. If not self, elevated permissions are required. |

### Return type

[**\Bungie\Model\InlineResponse20037**](../Model/InlineResponse20037.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBungieRewardsList**
> \Bungie\Model\InlineResponse20037 getBungieRewardsList()



Returns a list of the current bungie rewards

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getBungieRewardsList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->getBungieRewardsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Bungie\Model\InlineResponse20037**](../Model/InlineResponse20037.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPartnerOfferSkuHistory**
> \Bungie\Model\InlineResponse20035 getPartnerOfferSkuHistory($partnerApplicationId, $targetBnetMembershipId)



Returns the partner sku and offer history of the targeted user. Elevated permissions are required to see users that are not yourself.

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

$apiInstance = new Bungie\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$partnerApplicationId = 56; // int | The partner application identifier.
$targetBnetMembershipId = 56; // int | The bungie.net user to apply missing offers to. If not self, elevated permissions are required.

try {
    $result = $apiInstance->getPartnerOfferSkuHistory($partnerApplicationId, $targetBnetMembershipId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->getPartnerOfferSkuHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partnerApplicationId** | **int**| The partner application identifier. |
 **targetBnetMembershipId** | **int**| The bungie.net user to apply missing offers to. If not self, elevated permissions are required. |

### Return type

[**\Bungie\Model\InlineResponse20035**](../Model/InlineResponse20035.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPartnerRewardHistory**
> \Bungie\Model\InlineResponse20036 getPartnerRewardHistory($partnerApplicationId, $targetBnetMembershipId)



Returns the partner rewards history of the targeted user, both partner offers and Twitch drops.

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

$apiInstance = new Bungie\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$partnerApplicationId = 56; // int | The partner application identifier.
$targetBnetMembershipId = 56; // int | The bungie.net user to return reward history for.

try {
    $result = $apiInstance->getPartnerRewardHistory($partnerApplicationId, $targetBnetMembershipId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->getPartnerRewardHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partnerApplicationId** | **int**| The partner application identifier. |
 **targetBnetMembershipId** | **int**| The bungie.net user to return reward history for. |

### Return type

[**\Bungie\Model\InlineResponse20036**](../Model/InlineResponse20036.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

