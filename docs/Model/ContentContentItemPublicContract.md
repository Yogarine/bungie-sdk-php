# ContentContentItemPublicContract

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contentId** | **int** |  | [optional] 
**cType** | **string** |  | [optional] 
**cmsPath** | **string** |  | [optional] 
**creationDate** | [**\DateTime**](\DateTime.md) |  | [optional] 
**modifyDate** | [**\DateTime**](\DateTime.md) |  | [optional] 
**allowComments** | **bool** |  | [optional] 
**hasAgeGate** | **bool** |  | [optional] 
**minimumAge** | **int** |  | [optional] 
**ratingImagePath** | **string** |  | [optional] 
**author** | [**\Bungie\Model\UserGeneralUser**](UserGeneralUser.md) |  | [optional] 
**autoEnglishPropertyFallback** | **bool** |  | [optional] 
**properties** | **map[string,object]** | Firehose content is really a collection of metadata and \&quot;properties\&quot;, which are the potentially-but-not-strictly localizable data that comprises the meat of whatever content is being shown.  As Cole Porter would have crooned, \&quot;Anything Goes\&quot; with Firehose properties. They are most often strings, but they can theoretically be anything. They are JSON encoded, and could be JSON structures, simple strings, numbers etc... The Content Type of the item (cType) will describe the properties, and thus how they ought to be deserialized. | [optional] 
**representations** | [**\Bungie\Model\ContentContentRepresentation[]**](ContentContentRepresentation.md) |  | [optional] 
**tags** | **string[]** |  | [optional] 
**commentSummary** | [**\Bungie\Model\ContentCommentSummary**](ContentCommentSummary.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


