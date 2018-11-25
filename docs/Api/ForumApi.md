# Bungie\ForumApi

All URIs are relative to *https://www.bungie.net/Platform*

Method | HTTP request | Description
------------- | ------------- | -------------
[**approveFireteamThread**](ForumApi.md#approveFireteamThread) | **POST** /Forum/Recruit/Approve/{topicId}/ | 
[**getCoreTopicsPaged**](ForumApi.md#getCoreTopicsPaged) | **GET** /Forum/GetCoreTopicsPaged/{page}/{sort}/{quickDate}/{categoryFilter}/ | 
[**getForumTagSuggestions**](ForumApi.md#getForumTagSuggestions) | **GET** /Forum/GetForumTagSuggestions/ | 
[**getPoll**](ForumApi.md#getPoll) | **GET** /Forum/Poll/{topicId}/ | 
[**getPostAndParent**](ForumApi.md#getPostAndParent) | **GET** /Forum/GetPostAndParent/{childPostId}/ | 
[**getPostAndParentAwaitingApproval**](ForumApi.md#getPostAndParentAwaitingApproval) | **GET** /Forum/GetPostAndParentAwaitingApproval/{childPostId}/ | 
[**getPostsThreadedPaged**](ForumApi.md#getPostsThreadedPaged) | **GET** /Forum/GetPostsThreadedPaged/{parentPostId}/{page}/{pageSize}/{replySize}/{getParentPost}/{rootThreadMode}/{sortMode}/ | 
[**getPostsThreadedPagedFromChild**](ForumApi.md#getPostsThreadedPagedFromChild) | **GET** /Forum/GetPostsThreadedPagedFromChild/{childPostId}/{page}/{pageSize}/{replySize}/{rootThreadMode}/{sortMode}/ | 
[**getRecruitmentThreadSummaries**](ForumApi.md#getRecruitmentThreadSummaries) | **POST** /Forum/Recruit/Summaries/ | 
[**getTopicForContent**](ForumApi.md#getTopicForContent) | **GET** /Forum/GetTopicForContent/{contentId}/ | 
[**getTopicsPaged**](ForumApi.md#getTopicsPaged) | **GET** /Forum/GetTopicsPaged/{page}/{pageSize}/{group}/{sort}/{quickDate}/{categoryFilter}/ | 
[**joinFireteamThread**](ForumApi.md#joinFireteamThread) | **POST** /Forum/Recruit/Join/{topicId}/ | 
[**kickBanFireteamApplicant**](ForumApi.md#kickBanFireteamApplicant) | **POST** /Forum/Recruit/KickBan/{topicId}/{targetMembershipId}/ | 
[**leaveFireteamThread**](ForumApi.md#leaveFireteamThread) | **POST** /Forum/Recruit/Leave/{topicId}/ | 


# **approveFireteamThread**
> \Bungie\Model\InlineResponse20014 approveFireteamThread($topicId)



Allows the owner of a fireteam thread to approve all joined members and start a private message conversation with them.

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

$apiInstance = new Bungie\Api\ForumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$topicId = 56; // int | The post id of the recruitment topic to approve.

try {
    $result = $apiInstance->approveFireteamThread($topicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForumApi->approveFireteamThread: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **topicId** | **int**| The post id of the recruitment topic to approve. |

### Return type

[**\Bungie\Model\InlineResponse20014**](../Model/InlineResponse20014.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCoreTopicsPaged**
> \Bungie\Model\InlineResponse20010 getCoreTopicsPaged($categoryFilter, $page, $quickDate, $sort, $locales)



Gets a listing of all topics marked as part of the core group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\ForumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$categoryFilter = new \Bungie\Model\Forum\ForumTopicsCategoryFiltersEnum(); // \Bungie\Model\Forum\ForumTopicsCategoryFiltersEnum | The category filter.
$page = 56; // int | Zero base page
$quickDate = new \Bungie\Model\Forum\ForumTopicsQuickDateEnum(); // \Bungie\Model\Forum\ForumTopicsQuickDateEnum | The date filter.
$sort = new \Bungie\Model\Forum\ForumTopicsSortEnum(); // \Bungie\Model\Forum\ForumTopicsSortEnum | The sort mode.
$locales = 'locales_example'; // string | Comma seperated list of locales posts must match to return in the result list. Default 'en'

try {
    $result = $apiInstance->getCoreTopicsPaged($categoryFilter, $page, $quickDate, $sort, $locales);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForumApi->getCoreTopicsPaged: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **categoryFilter** | [**\Bungie\Model\Forum\ForumTopicsCategoryFiltersEnum**](../Model/.md)| The category filter. |
 **page** | **int**| Zero base page |
 **quickDate** | [**\Bungie\Model\Forum\ForumTopicsQuickDateEnum**](../Model/.md)| The date filter. |
 **sort** | [**\Bungie\Model\Forum\ForumTopicsSortEnum**](../Model/.md)| The sort mode. |
 **locales** | **string**| Comma seperated list of locales posts must match to return in the result list. Default &#39;en&#39; | [optional]

### Return type

[**\Bungie\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getForumTagSuggestions**
> \Bungie\Model\InlineResponse20012 getForumTagSuggestions($partialtag)



Gets tag suggestions based on partial text entry, matching them with other tags previously used in the forums.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\ForumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$partialtag = 'partialtag_example'; // string | The partial tag input to generate suggestions from.

try {
    $result = $apiInstance->getForumTagSuggestions($partialtag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForumApi->getForumTagSuggestions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **partialtag** | **string**| The partial tag input to generate suggestions from. | [optional]

### Return type

[**\Bungie\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPoll**
> \Bungie\Model\InlineResponse20010 getPoll($topicId)



Gets the specified forum poll.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\ForumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$topicId = 56; // int | The post id of the topic that has the poll.

try {
    $result = $apiInstance->getPoll($topicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForumApi->getPoll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **topicId** | **int**| The post id of the topic that has the poll. |

### Return type

[**\Bungie\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPostAndParent**
> \Bungie\Model\InlineResponse20010 getPostAndParent($childPostId, $showbanned)



Returns the post specified and its immediate parent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\ForumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$childPostId = 56; // int | 
$showbanned = 'showbanned_example'; // string | If this value is not null or empty, banned posts are requested to be returned

try {
    $result = $apiInstance->getPostAndParent($childPostId, $showbanned);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForumApi->getPostAndParent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **childPostId** | **int**|  |
 **showbanned** | **string**| If this value is not null or empty, banned posts are requested to be returned | [optional]

### Return type

[**\Bungie\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPostAndParentAwaitingApproval**
> \Bungie\Model\InlineResponse20010 getPostAndParentAwaitingApproval($childPostId, $showbanned)



Returns the post specified and its immediate parent of posts that are awaiting approval.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\ForumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$childPostId = 56; // int | 
$showbanned = 'showbanned_example'; // string | If this value is not null or empty, banned posts are requested to be returned

try {
    $result = $apiInstance->getPostAndParentAwaitingApproval($childPostId, $showbanned);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForumApi->getPostAndParentAwaitingApproval: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **childPostId** | **int**|  |
 **showbanned** | **string**| If this value is not null or empty, banned posts are requested to be returned | [optional]

### Return type

[**\Bungie\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPostsThreadedPaged**
> \Bungie\Model\InlineResponse20010 getPostsThreadedPaged($getParentPost, $page, $pageSize, $parentPostId, $replySize, $rootThreadMode, $sortMode, $showbanned)



Returns a thread of posts at the given parent, optionally returning replies to those posts as well as the original parent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\ForumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$getParentPost = True; // bool | 
$page = 56; // int | 
$pageSize = 56; // int | 
$parentPostId = 56; // int | 
$replySize = 56; // int | 
$rootThreadMode = True; // bool | 
$sortMode = new \Bungie\Model\Forum\ForumPostSortEnum(); // \Bungie\Model\Forum\ForumPostSortEnum | 
$showbanned = 'showbanned_example'; // string | If this value is not null or empty, banned posts are requested to be returned

try {
    $result = $apiInstance->getPostsThreadedPaged($getParentPost, $page, $pageSize, $parentPostId, $replySize, $rootThreadMode, $sortMode, $showbanned);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForumApi->getPostsThreadedPaged: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **getParentPost** | **bool**|  |
 **page** | **int**|  |
 **pageSize** | **int**|  |
 **parentPostId** | **int**|  |
 **replySize** | **int**|  |
 **rootThreadMode** | **bool**|  |
 **sortMode** | [**\Bungie\Model\Forum\ForumPostSortEnum**](../Model/.md)|  |
 **showbanned** | **string**| If this value is not null or empty, banned posts are requested to be returned | [optional]

### Return type

[**\Bungie\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPostsThreadedPagedFromChild**
> \Bungie\Model\InlineResponse20010 getPostsThreadedPagedFromChild($childPostId, $page, $pageSize, $replySize, $rootThreadMode, $sortMode, $showbanned)



Returns a thread of posts starting at the topicId of the input childPostId, optionally returning replies to those posts as well as the original parent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\ForumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$childPostId = 56; // int | 
$page = 56; // int | 
$pageSize = 56; // int | 
$replySize = 56; // int | 
$rootThreadMode = True; // bool | 
$sortMode = new \Bungie\Model\Forum\ForumPostSortEnum(); // \Bungie\Model\Forum\ForumPostSortEnum | 
$showbanned = 'showbanned_example'; // string | If this value is not null or empty, banned posts are requested to be returned

try {
    $result = $apiInstance->getPostsThreadedPagedFromChild($childPostId, $page, $pageSize, $replySize, $rootThreadMode, $sortMode, $showbanned);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForumApi->getPostsThreadedPagedFromChild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **childPostId** | **int**|  |
 **page** | **int**|  |
 **pageSize** | **int**|  |
 **replySize** | **int**|  |
 **rootThreadMode** | **bool**|  |
 **sortMode** | [**\Bungie\Model\Forum\ForumPostSortEnum**](../Model/.md)|  |
 **showbanned** | **string**| If this value is not null or empty, banned posts are requested to be returned | [optional]

### Return type

[**\Bungie\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRecruitmentThreadSummaries**
> \Bungie\Model\InlineResponse20015 getRecruitmentThreadSummaries($requestBody)



Allows the caller to get a list of to 25 recruitment thread summary information objects.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\ForumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$requestBody = array(new array()); // \Bungie\Model\int[] | 

try {
    $result = $apiInstance->getRecruitmentThreadSummaries($requestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForumApi->getRecruitmentThreadSummaries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestBody** | [**\Bungie\Model\int[]**](../Model/array.md)|  |

### Return type

[**\Bungie\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTopicForContent**
> \Bungie\Model\InlineResponse20011 getTopicForContent($contentId)



Gets the post Id for the given content item's comments, if it exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\ForumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contentId = 56; // int | 

try {
    $result = $apiInstance->getTopicForContent($contentId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForumApi->getTopicForContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contentId** | **int**|  |

### Return type

[**\Bungie\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTopicsPaged**
> \Bungie\Model\InlineResponse20010 getTopicsPaged($categoryFilter, $group, $page, $pageSize, $quickDate, $sort, $locales, $tagstring)



Get topics from any forum.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = Bungie\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Bungie\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

$apiInstance = new Bungie\Api\ForumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$categoryFilter = new \Bungie\Model\Forum\ForumTopicsCategoryFiltersEnum(); // \Bungie\Model\Forum\ForumTopicsCategoryFiltersEnum | A category filter
$group = 56; // int | The group, if any.
$page = 56; // int | Zero paged page number
$pageSize = 56; // int | Unused
$quickDate = new \Bungie\Model\Forum\ForumTopicsQuickDateEnum(); // \Bungie\Model\Forum\ForumTopicsQuickDateEnum | A date filter.
$sort = new \Bungie\Model\Forum\ForumTopicsSortEnum(); // \Bungie\Model\Forum\ForumTopicsSortEnum | The sort mode.
$locales = 'locales_example'; // string | Comma seperated list of locales posts must match to return in the result list. Default 'en'
$tagstring = 'tagstring_example'; // string | The tags to search, if any.

try {
    $result = $apiInstance->getTopicsPaged($categoryFilter, $group, $page, $pageSize, $quickDate, $sort, $locales, $tagstring);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForumApi->getTopicsPaged: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **categoryFilter** | [**\Bungie\Model\Forum\ForumTopicsCategoryFiltersEnum**](../Model/.md)| A category filter |
 **group** | **int**| The group, if any. |
 **page** | **int**| Zero paged page number |
 **pageSize** | **int**| Unused |
 **quickDate** | [**\Bungie\Model\Forum\ForumTopicsQuickDateEnum**](../Model/.md)| A date filter. |
 **sort** | [**\Bungie\Model\Forum\ForumTopicsSortEnum**](../Model/.md)| The sort mode. |
 **locales** | **string**| Comma seperated list of locales posts must match to return in the result list. Default &#39;en&#39; | [optional]
 **tagstring** | **string**| The tags to search, if any. | [optional]

### Return type

[**\Bungie\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **joinFireteamThread**
> \Bungie\Model\InlineResponse20013 joinFireteamThread($topicId)



Allows a user to slot themselves into a recruitment thread fireteam slot. Returns the new state of the fireteam.

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

$apiInstance = new Bungie\Api\ForumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$topicId = 56; // int | The post id of the recruitment topic you wish to join.

try {
    $result = $apiInstance->joinFireteamThread($topicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForumApi->joinFireteamThread: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **topicId** | **int**| The post id of the recruitment topic you wish to join. |

### Return type

[**\Bungie\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **kickBanFireteamApplicant**
> \Bungie\Model\InlineResponse20013 kickBanFireteamApplicant($targetMembershipId, $topicId)



Allows a recruitment thread owner to kick a join user from the fireteam. Returns the new state of the fireteam.

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

$apiInstance = new Bungie\Api\ForumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$targetMembershipId = 56; // int | The id of the user you wish to kick.
$topicId = 56; // int | The post id of the recruitment topic you wish to join.

try {
    $result = $apiInstance->kickBanFireteamApplicant($targetMembershipId, $topicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForumApi->kickBanFireteamApplicant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **targetMembershipId** | **int**| The id of the user you wish to kick. |
 **topicId** | **int**| The post id of the recruitment topic you wish to join. |

### Return type

[**\Bungie\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leaveFireteamThread**
> \Bungie\Model\InlineResponse20013 leaveFireteamThread($topicId)



Allows a user to remove themselves from a recruitment thread fireteam slot. Returns the new state of the fireteam.

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

$apiInstance = new Bungie\Api\ForumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$topicId = 56; // int | The post id of the recruitment topic you wish to leave.

try {
    $result = $apiInstance->leaveFireteamThread($topicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForumApi->leaveFireteamThread: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **topicId** | **int**| The post id of the recruitment topic you wish to leave. |

### Return type

[**\Bungie\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

