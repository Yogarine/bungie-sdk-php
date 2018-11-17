# Bungie\ForumApi

All URIs are relative to *https://www.bungie.net/Platform*

Method | HTTP request | Description
------------- | ------------- | -------------
[**forumApproveFireteamThread**](ForumApi.md#forumApproveFireteamThread) | **POST** /Forum/Recruit/Approve/{topicId}/ | 
[**forumGetCoreTopicsPaged**](ForumApi.md#forumGetCoreTopicsPaged) | **GET** /Forum/GetCoreTopicsPaged/{page}/{sort}/{quickDate}/{categoryFilter}/ | 
[**forumGetForumTagSuggestions**](ForumApi.md#forumGetForumTagSuggestions) | **GET** /Forum/GetForumTagSuggestions/ | 
[**forumGetPoll**](ForumApi.md#forumGetPoll) | **GET** /Forum/Poll/{topicId}/ | 
[**forumGetPostAndParent**](ForumApi.md#forumGetPostAndParent) | **GET** /Forum/GetPostAndParent/{childPostId}/ | 
[**forumGetPostAndParentAwaitingApproval**](ForumApi.md#forumGetPostAndParentAwaitingApproval) | **GET** /Forum/GetPostAndParentAwaitingApproval/{childPostId}/ | 
[**forumGetPostsThreadedPaged**](ForumApi.md#forumGetPostsThreadedPaged) | **GET** /Forum/GetPostsThreadedPaged/{parentPostId}/{page}/{pageSize}/{replySize}/{getParentPost}/{rootThreadMode}/{sortMode}/ | 
[**forumGetPostsThreadedPagedFromChild**](ForumApi.md#forumGetPostsThreadedPagedFromChild) | **GET** /Forum/GetPostsThreadedPagedFromChild/{childPostId}/{page}/{pageSize}/{replySize}/{rootThreadMode}/{sortMode}/ | 
[**forumGetRecruitmentThreadSummaries**](ForumApi.md#forumGetRecruitmentThreadSummaries) | **POST** /Forum/Recruit/Summaries/ | 
[**forumGetTopicForContent**](ForumApi.md#forumGetTopicForContent) | **GET** /Forum/GetTopicForContent/{contentId}/ | 
[**forumGetTopicsPaged**](ForumApi.md#forumGetTopicsPaged) | **GET** /Forum/GetTopicsPaged/{page}/{pageSize}/{group}/{sort}/{quickDate}/{categoryFilter}/ | 
[**forumJoinFireteamThread**](ForumApi.md#forumJoinFireteamThread) | **POST** /Forum/Recruit/Join/{topicId}/ | 
[**forumKickBanFireteamApplicant**](ForumApi.md#forumKickBanFireteamApplicant) | **POST** /Forum/Recruit/KickBan/{topicId}/{targetMembershipId}/ | 
[**forumLeaveFireteamThread**](ForumApi.md#forumLeaveFireteamThread) | **POST** /Forum/Recruit/Leave/{topicId}/ | 


# **forumApproveFireteamThread**
> \Bungie\Model\InlineResponse20014 forumApproveFireteamThread($topicId)



Allows the owner of a fireteam thread to approve all joined members and start a private message conversation with them.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

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
    $result = $apiInstance->forumApproveFireteamThread($topicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForumApi->forumApproveFireteamThread: ', $e->getMessage(), PHP_EOL;
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

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **forumGetCoreTopicsPaged**
> \Bungie\Model\InlineResponse20010 forumGetCoreTopicsPaged($categoryFilter, $page, $quickDate, $sort, $locales)



Gets a listing of all topics marked as part of the core group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\ForumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$categoryFilter = 56; // int | The category filter.
$page = 56; // int | Zero base page
$quickDate = 56; // int | The date filter.
$sort = 56; // int | The sort mode.
$locales = 'locales_example'; // string | Comma seperated list of locales posts must match to return in the result list. Default 'en'

try {
    $result = $apiInstance->forumGetCoreTopicsPaged($categoryFilter, $page, $quickDate, $sort, $locales);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForumApi->forumGetCoreTopicsPaged: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **categoryFilter** | **int**| The category filter. |
 **page** | **int**| Zero base page |
 **quickDate** | **int**| The date filter. |
 **sort** | **int**| The sort mode. |
 **locales** | **string**| Comma seperated list of locales posts must match to return in the result list. Default &#39;en&#39; | [optional]

### Return type

[**\Bungie\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **forumGetForumTagSuggestions**
> \Bungie\Model\InlineResponse20012 forumGetForumTagSuggestions($partialtag)



Gets tag suggestions based on partial text entry, matching them with other tags previously used in the forums.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\ForumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$partialtag = 'partialtag_example'; // string | The partial tag input to generate suggestions from.

try {
    $result = $apiInstance->forumGetForumTagSuggestions($partialtag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForumApi->forumGetForumTagSuggestions: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **forumGetPoll**
> \Bungie\Model\InlineResponse20010 forumGetPoll($topicId)



Gets the specified forum poll.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\ForumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$topicId = 56; // int | The post id of the topic that has the poll.

try {
    $result = $apiInstance->forumGetPoll($topicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForumApi->forumGetPoll: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **forumGetPostAndParent**
> \Bungie\Model\InlineResponse20010 forumGetPostAndParent($childPostId, $showbanned)



Returns the post specified and its immediate parent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\ForumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$childPostId = 56; // int | 
$showbanned = 'showbanned_example'; // string | If this value is not null or empty, banned posts are requested to be returned

try {
    $result = $apiInstance->forumGetPostAndParent($childPostId, $showbanned);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForumApi->forumGetPostAndParent: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **forumGetPostAndParentAwaitingApproval**
> \Bungie\Model\InlineResponse20010 forumGetPostAndParentAwaitingApproval($childPostId, $showbanned)



Returns the post specified and its immediate parent of posts that are awaiting approval.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\ForumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$childPostId = 56; // int | 
$showbanned = 'showbanned_example'; // string | If this value is not null or empty, banned posts are requested to be returned

try {
    $result = $apiInstance->forumGetPostAndParentAwaitingApproval($childPostId, $showbanned);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForumApi->forumGetPostAndParentAwaitingApproval: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **forumGetPostsThreadedPaged**
> \Bungie\Model\InlineResponse20010 forumGetPostsThreadedPaged($getParentPost, $page, $pageSize, $parentPostId, $replySize, $rootThreadMode, $sortMode, $showbanned)



Returns a thread of posts at the given parent, optionally returning replies to those posts as well as the original parent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\ForumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$getParentPost = True; // bool | 
$page = 56; // int | 
$pageSize = 56; // int | 
$parentPostId = 56; // int | 
$replySize = 56; // int | 
$rootThreadMode = True; // bool | 
$sortMode = 56; // int | 
$showbanned = 'showbanned_example'; // string | If this value is not null or empty, banned posts are requested to be returned

try {
    $result = $apiInstance->forumGetPostsThreadedPaged($getParentPost, $page, $pageSize, $parentPostId, $replySize, $rootThreadMode, $sortMode, $showbanned);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForumApi->forumGetPostsThreadedPaged: ', $e->getMessage(), PHP_EOL;
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
 **sortMode** | **int**|  |
 **showbanned** | **string**| If this value is not null or empty, banned posts are requested to be returned | [optional]

### Return type

[**\Bungie\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **forumGetPostsThreadedPagedFromChild**
> \Bungie\Model\InlineResponse20010 forumGetPostsThreadedPagedFromChild($childPostId, $page, $pageSize, $replySize, $rootThreadMode, $sortMode, $showbanned)



Returns a thread of posts starting at the topicId of the input childPostId, optionally returning replies to those posts as well as the original parent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\ForumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$childPostId = 56; // int | 
$page = 56; // int | 
$pageSize = 56; // int | 
$replySize = 56; // int | 
$rootThreadMode = True; // bool | 
$sortMode = 56; // int | 
$showbanned = 'showbanned_example'; // string | If this value is not null or empty, banned posts are requested to be returned

try {
    $result = $apiInstance->forumGetPostsThreadedPagedFromChild($childPostId, $page, $pageSize, $replySize, $rootThreadMode, $sortMode, $showbanned);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForumApi->forumGetPostsThreadedPagedFromChild: ', $e->getMessage(), PHP_EOL;
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
 **sortMode** | **int**|  |
 **showbanned** | **string**| If this value is not null or empty, banned posts are requested to be returned | [optional]

### Return type

[**\Bungie\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **forumGetRecruitmentThreadSummaries**
> \Bungie\Model\InlineResponse20015 forumGetRecruitmentThreadSummaries()



Allows the caller to get a list of to 25 recruitment thread summary information objects.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\ForumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->forumGetRecruitmentThreadSummaries();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForumApi->forumGetRecruitmentThreadSummaries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Bungie\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **forumGetTopicForContent**
> \Bungie\Model\InlineResponse20011 forumGetTopicForContent($contentId)



Gets the post Id for the given content item's comments, if it exists.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\ForumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$contentId = 56; // int | 

try {
    $result = $apiInstance->forumGetTopicForContent($contentId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForumApi->forumGetTopicForContent: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **forumGetTopicsPaged**
> \Bungie\Model\InlineResponse20010 forumGetTopicsPaged($categoryFilter, $group, $page, $pageSize, $quickDate, $sort, $locales, $tagstring)



Get topics from any forum.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Bungie\Api\ForumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$categoryFilter = 56; // int | A category filter
$group = 56; // int | The group, if any.
$page = 56; // int | Zero paged page number
$pageSize = 56; // int | Unused
$quickDate = 56; // int | A date filter.
$sort = 56; // int | The sort mode.
$locales = 'locales_example'; // string | Comma seperated list of locales posts must match to return in the result list. Default 'en'
$tagstring = 'tagstring_example'; // string | The tags to search, if any.

try {
    $result = $apiInstance->forumGetTopicsPaged($categoryFilter, $group, $page, $pageSize, $quickDate, $sort, $locales, $tagstring);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForumApi->forumGetTopicsPaged: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **categoryFilter** | **int**| A category filter |
 **group** | **int**| The group, if any. |
 **page** | **int**| Zero paged page number |
 **pageSize** | **int**| Unused |
 **quickDate** | **int**| A date filter. |
 **sort** | **int**| The sort mode. |
 **locales** | **string**| Comma seperated list of locales posts must match to return in the result list. Default &#39;en&#39; | [optional]
 **tagstring** | **string**| The tags to search, if any. | [optional]

### Return type

[**\Bungie\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **forumJoinFireteamThread**
> \Bungie\Model\InlineResponse20013 forumJoinFireteamThread($topicId)



Allows a user to slot themselves into a recruitment thread fireteam slot. Returns the new state of the fireteam.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

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
    $result = $apiInstance->forumJoinFireteamThread($topicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForumApi->forumJoinFireteamThread: ', $e->getMessage(), PHP_EOL;
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

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **forumKickBanFireteamApplicant**
> \Bungie\Model\InlineResponse20013 forumKickBanFireteamApplicant($targetMembershipId, $topicId)



Allows a recruitment thread owner to kick a join user from the fireteam. Returns the new state of the fireteam.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

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
    $result = $apiInstance->forumKickBanFireteamApplicant($targetMembershipId, $topicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForumApi->forumKickBanFireteamApplicant: ', $e->getMessage(), PHP_EOL;
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

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **forumLeaveFireteamThread**
> \Bungie\Model\InlineResponse20013 forumLeaveFireteamThread($topicId)



Allows a user to remove themselves from a recruitment thread fireteam slot. Returns the new state of the fireteam.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

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
    $result = $apiInstance->forumLeaveFireteamThread($topicId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForumApi->forumLeaveFireteamThread: ', $e->getMessage(), PHP_EOL;
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

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

