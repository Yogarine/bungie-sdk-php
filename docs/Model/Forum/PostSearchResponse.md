# PostSearchResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**relatedPosts** | [**\Bungie\Model\Forum\PostResponse[]**](PostResponse.md) |  | [optional] 
**authors** | [**\Bungie\Model\User\GeneralUser[]**](GeneralUser.md) |  | [optional] 
**groups** | [**\Bungie\Model\GroupsV2\GroupResponse[]**](GroupResponse.md) |  | [optional] 
**searchedTags** | [**\Bungie\Model\Tags\Models\Contracts\TagResponse[]**](TagResponse.md) |  | [optional] 
**polls** | [**\Bungie\Model\Forum\PollResponse[]**](PollResponse.md) |  | [optional] 
**recruitmentDetails** | [**\Bungie\Model\Forum\ForumRecruitmentDetail[]**](ForumRecruitmentDetail.md) |  | [optional] 
**availablePages** | **int** |  | [optional] 
**results** | [**\Bungie\Model\Forum\PostResponse[]**](PostResponse.md) |  | [optional] 
**totalResults** | **int** |  | [optional] 
**hasMore** | **bool** |  | [optional] 
**query** | [**\Bungie\Model\Queries\PagedQuery**](PagedQuery.md) |  | [optional] 
**replacementContinuationToken** | **string** |  | [optional] 
**useTotalResults** | **bool** | If useTotalResults is true, then totalResults represents an accurate count.  If False, it does not, and may be estimated/only the size of the current page.  Either way, you should probably always only trust hasMore.  This is a long-held historical throwback to when we used to do paging with known total results. Those queries toasted our database, and we were left to hastily alter our endpoints and create backward- compatible shims, of which useTotalResults is one. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


