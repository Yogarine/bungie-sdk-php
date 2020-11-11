# Bungie\TokensApi

All URIs are relative to *https://www.bungie.net/Platform*

Method | HTTP request | Description
------------- | ------------- | -------------
[**applyMissingPartnerOffersWithoutClaim**](TokensApi.md#applyMissingPartnerOffersWithoutClaim) | **POST** /Tokens/Partner/ApplyMissingOffers/{partnerApplicationId}/{targetBnetMembershipId}/ | 
[**claimPartnerOffer**](TokensApi.md#claimPartnerOffer) | **POST** /Tokens/Partner/ClaimOffer/ | 
[**getPartnerOfferSkuHistory**](TokensApi.md#getPartnerOfferSkuHistory) | **GET** /Tokens/Partner/History/{partnerApplicationId}/{targetBnetMembershipId}/ | 


# **applyMissingPartnerOffersWithoutClaim**
> \Bungie\Model\InlineResponse20018 applyMissingPartnerOffersWithoutClaim($partnerApplicationId, $targetBnetMembershipId)



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

[**\Bungie\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **claimPartnerOffer**
> \Bungie\Model\InlineResponse20018 claimPartnerOffer($partnerOfferClaimRequest)



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

[**\Bungie\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPartnerOfferSkuHistory**
> \Bungie\Model\InlineResponse20033 getPartnerOfferSkuHistory($partnerApplicationId, $targetBnetMembershipId)



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

[**\Bungie\Model\InlineResponse20033**](../Model/InlineResponse20033.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

