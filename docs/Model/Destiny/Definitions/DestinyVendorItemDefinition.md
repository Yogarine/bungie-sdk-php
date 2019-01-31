# DestinyVendorItemDefinition

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**vendorItemIndex** | **int** | The index into the DestinyVendorDefinition.saleList. This is what we use to refer to items being sold throughout live and definition data. | [optional] 
**itemHash** | **int** | The hash identifier of the item being sold (DestinyInventoryItemDefinition).  Note that a vendor can sell the same item in multiple ways, so don&#39;t assume that itemHash is a unique identifier for this entity. | [optional] 
**quantity** | **int** | The amount you will recieve of the item described in itemHash if you make the purchase. | [optional] 
**failureIndexes** | **int[]** | An list of indexes into the DestinyVendorDefinition.failureStrings array, indicating the possible failure strings that can be relevant for this item. | [optional] 
**currencies** | [**\Bungie\Model\Destiny\Definitions\DestinyVendorItemQuantity[]**](DestinyVendorItemQuantity.md) | This is a pre-compiled aggregation of item value and priceOverrideList, so that we have one place to check for what the purchaser must pay for the item. Use this instead of trying to piece together the price separately.  The somewhat crappy part about this is that, now that item quantity overrides have dynamic modifiers, this will not necessarily be statically true. If you were using this instead of live data, switch to using live data. | [optional] 
**refundPolicy** | **int** | If this item can be refunded, this is the policy for what will be refundd, how, and in what time period. | [optional] 
**refundTimeLimit** | **int** | The amount of time before refundability of the newly purchased item will expire. | [optional] 
**creationLevels** | [**\Bungie\Model\Destiny\Definitions\DestinyItemCreationEntryLevelDefinition[]**](DestinyItemCreationEntryLevelDefinition.md) | The Default level at which the item will spawn. Almost always driven by an adjusto these days. Ideally should be singular. It&#39;s a long story how this ended up as a list, but there is always either going to be 0:1 of these entities. | [optional] 
**displayCategoryIndex** | **int** | This is an index specifically into the display category, as opposed to the server-side Categories (which do not need to match or pair with each other in any way: server side categories are really just structures for common validation. Display Category will let us more easily categorize items visually) | [optional] 
**categoryIndex** | **int** | The index into the DestinyVendorDefinition.categories array, so you can find the category associated with this item. | [optional] 
**originalCategoryIndex** | **int** | Same as above, but for the original category indexes. | [optional] 
**minimumLevel** | **int** | The minimum character level at which this item is available for sale. | [optional] 
**maximumLevel** | **int** | The maximum character level at which this item is available for sale. | [optional] 
**action** | [**\Bungie\Model\Destiny\Definitions\DestinyVendorSaleItemActionBlockDefinition**](DestinyVendorSaleItemActionBlockDefinition.md) | The action to be performed when purchasing the item, if it&#39;s not just \&quot;buy\&quot;. | [optional] 
**displayCategory** | **string** | The string identifier for the category selling this item. | [optional] 
**inventoryBucketHash** | **int** | The inventory bucket into which this item will be placed upon purchase. | [optional] 
**visibilityScope** | **int** | The most restrictive scope that determines whether the item is available in the Vendor&#39;s inventory. See DestinyGatingScope&#39;s documentation for more information.  This can be determined by Unlock gating, or by whether or not the item has purchase level requirements (minimumLevel and maximumLevel properties). | [optional] 
**purchasableScope** | **int** | Similar to visibilityScope, it represents the most restrictive scope that determines whether the item can be purchased. It will at least be as restrictive as visibilityScope, but could be more restrictive if the item has additional purchase requirements beyond whether it is merely visible or not.  See DestinyGatingScope&#39;s documentation for more information. | [optional] 
**exclusivity** | **int** | If this item can only be purchased by a given platform, this indicates the platform to which it is restricted. | [optional] 
**isOffer** | **bool** | If this sale can only be performed as the result of an offer check, this is true. | [optional] 
**isCrm** | **bool** | If this sale can only be performed as the result of receiving a CRM offer, this is true. | [optional] 
**sortValue** | **int** | *if* the category this item is in supports non-default sorting, this value should represent the sorting value to use, pre-processed and ready to go. | [optional] 
**expirationTooltip** | **string** | If this item can expire, this is the tooltip message to show with its expiration info. | [optional] 
**redirectToSaleIndexes** | **int[]** | If this is populated, the purchase of this item should redirect to purchasing these other items instead. | [optional] 
**socketOverrides** | [**\Bungie\Model\Destiny\Definitions\DestinyVendorItemSocketOverride[]**](DestinyVendorItemSocketOverride.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


