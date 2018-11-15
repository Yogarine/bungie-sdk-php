# ForumPostSearchResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**relatedPosts** | [**\Bungie\Model\ForumPostResponse[]**](ForumPostResponse.md) |  | [optional] 
**authors** | [**\Bungie\Model\UserGeneralUser[]**](UserGeneralUser.md) |  | [optional] 
**groups** | [**\Bungie\Model\GroupsV2GroupResponse[]**](GroupsV2GroupResponse.md) |  | [optional] 
**searchedTags** | [**\Bungie\Model\TagsModelsContractsTagResponse[]**](TagsModelsContractsTagResponse.md) |  | [optional] 
**polls** | [**\Bungie\Model\ForumPollResponse[]**](ForumPollResponse.md) |  | [optional] 
**recruitmentDetails** | [**\Bungie\Model\ForumForumRecruitmentDetail[]**](ForumForumRecruitmentDetail.md) |  | [optional] 
**availablePages** | **int** |  | [optional] 
**results** | [**\Bungie\Model\ForumPostResponse[]**](ForumPostResponse.md) |  | [optional] 
**totalResults** | **int** |  | [optional] 
**hasMore** | **bool** |  | [optional] 
**query** | [**\Bungie\Model\QueriesPagedQuery**](QueriesPagedQuery.md) |  | [optional] 
**replacementContinuationToken** | **string** |  | [optional] 
**useTotalResults** | **bool** | If useTotalResults is true, then totalResults represents an accurate count.  If False, it does not, and may be estimated/only the size of the current page.  Either way, you should probably always only trust hasMore.  This is a long-held historical throwback to when we used to do paging with known total results. Those queries toasted our database, and we were left to hastily alter our endpoints and create backward- compatible shims, of which useTotalResults is one. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


