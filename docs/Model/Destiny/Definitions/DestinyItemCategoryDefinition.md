# DestinyItemCategoryDefinition

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**displayProperties** | [**\Bungie\Model\Destiny\Definitions\Common\DestinyDisplayPropertiesDefinition**](DestinyDisplayPropertiesDefinition.md) |  | [optional] 
**visible** | **bool** | If True, this category should be visible in UI. Sometimes we make categories that we don&#39;t think are interesting externally. It&#39;s up to you if you want to skip on showing them. | [optional] 
**deprecated** | **bool** | If True, this category has been deprecated: it may have no items left, or there may be only legacy items that remain in it which are no longer relevant to the game. | [optional] 
**shortTitle** | **string** | A shortened version of the title. The reason why we have this is because the Armory in German had titles that were too long to display in our UI, so these were localized abbreviated versions of those categories. The property still exists today, even though the Armory doesn&#39;t exist for D2... yet. | [optional] 
**itemTypeRegex** | **string** | The janky regular expression we used against the item type to try and discern whether the item belongs to this category. | [optional] 
**plugCategoryIdentifier** | **string** | If the item is a plug, this is the identifier we expect to find associated with it if it is in this category. | [optional] 
**itemTypeRegexNot** | **string** | If the item type matches this janky regex, it does *not* belong to this category. | [optional] 
**originBucketIdentifier** | **string** | If the item belongs to this bucket, it does belong to this category. | [optional] 
**grantDestinyItemType** | [**\Bungie\Model\Destiny\DestinyItemType**](DestinyItemType.md) | If an item belongs to this category, it will also receive this item type. This is now how DestinyItemType is populated for items: it used to be an even jankier process, but that&#39;s a story that requires more alcohol. | [optional] 
**grantDestinySubType** | [**\Bungie\Model\Destiny\DestinyItemSubType**](DestinyItemSubType.md) | If an item belongs to this category, it will also receive this subtype enum value.  I know what you&#39;re thinking - what if it belongs to multiple categories that provide sub-types?  The last one processed wins, as is the case with all of these \&quot;grant\&quot; enums. Now you can see one reason why we moved away from these enums... but they&#39;re so convenient when they work, aren&#39;t they? | [optional] 
**grantDestinyClass** | [**\Bungie\Model\Destiny\DestinyClass**](DestinyClass.md) | If an item belongs to this category, it will also get this class restriction enum value.  See the other \&quot;grant\&quot;-prefixed properties on this definition for my color commentary. | [optional] 
**groupedCategoryHashes** | **\Bungie\Model\int[]** | If this category is a \&quot;parent\&quot; category of other categories, those children will have their hashes listed in rendering order here, and can be looked up using these hashes against DestinyItemCategoryDefinition.  In this way, you can build up a visual hierarchy of item categories. That&#39;s what we did, and you can do it too. I believe in you. Yes, you, Carl.  (I hope someone named Carl reads this someday) | [optional] 
**parentCategoryHashes** | **\Bungie\Model\int[]** | All item category hashes of \&quot;parent\&quot; categories: categories that contain this as a child through the hierarchy of groupedCategoryHashes. It&#39;s a bit redundant, but having this child-centric list speeds up some calculations. | [optional] 
**groupCategoryOnly** | **bool** | If true, this category is only used for grouping, and should not be evaluated with its own checks. Rather, the item only has this category if it has one of its child categories. | [optional] 
**hash** | **int** | The unique identifier for this entity. Guaranteed to be unique for the type of entity, but not globally.  When entities refer to each other in Destiny content, it is this hash that they are referring to. | [optional] 
**index** | **int** | The index of the entity as it was found in the investment tables. | [optional] 
**redacted** | **bool** | If this is true, then there is an entity with this identifier/type combination, but BNet is not yet allowed to show it. Sorry! | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


