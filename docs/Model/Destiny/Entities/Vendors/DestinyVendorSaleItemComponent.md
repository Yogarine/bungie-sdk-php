# DestinyVendorSaleItemComponent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**saleStatus** | **int** | A flag indicating whether the requesting character can buy the item, and if not the reasons why the character can&#39;t buy it. | [optional] 
**requiredUnlocks** | **int[]** | If you can&#39;t buy the item due to a complex character state, these will be hashes for DestinyUnlockDefinitions that you can check to see messages regarding the failure (if the unlocks have human readable information: it is not guaranteed that Unlocks will have human readable strings, and your application will have to handle that)  Prefer using failureIndexes instead. These are provided for informational purposes, but have largely been supplanted by failureIndexes. | [optional] 
**unlockStatuses** | [**\Bungie\Model\Destiny\DestinyUnlockStatus[]**](DestinyUnlockStatus.md) | If any complex unlock states are checked in determining purchasability, these will be returned here along with the status of the unlock check.  Prefer using failureIndexes instead. These are provided for informational purposes, but have largely been supplanted by failureIndexes. | [optional] 
**failureIndexes** | **int[]** | Indexes in to the \&quot;failureStrings\&quot; lookup table in DestinyVendorDefinition for the given Vendor. Gives some more reliable failure information for why you can&#39;t purchase an item.  It is preferred to use these over requiredUnlocks and unlockStatuses: the latter are provided mostly in case someone can do something interesting with it that I didn&#39;t anticipate. | [optional] 
**augments** | **int** | A flags enumeration value representing the current state of any \&quot;state modifiers\&quot; on the item being sold. These are meant to correspond with some sort of visual indicator as to the augmentation: for instance, if an item is on sale or if you already own the item in question.  Determining how you want to represent these in your own app (or if you even want to) is an exercise left for the reader. | [optional] 
**itemValueVisibility** | **bool[]** | If available, a list that describes which item values (rewards) should be shown (true) or hidden (false). | [optional] 
**vendorItemIndex** | **int** | The index into the DestinyVendorDefinition.itemList property. Note that this means Vendor data *is* Content Version dependent: make sure you have the latest content before you use Vendor data, or these indexes may mismatch.   Most systems avoid this problem, but Vendors is one area where we are unable to reasonably avoid content dependency at the moment. | [optional] 
**itemHash** | **int** | The hash of the item being sold, as a quick shortcut for looking up the DestinyInventoryItemDefinition of the sale item. | [optional] 
**overrideStyleItemHash** | **int** | If populated, this is the hash of the item whose icon (and other secondary styles, but *not* the human readable strings) should override whatever icons/styles are on the item being sold.  If you don&#39;t do this, certain items whose styles are being overridden by socketed items - such as the \&quot;Recycle Shader\&quot; item - would show whatever their default icon/style is, and it wouldn&#39;t be pretty or look accurate. | [optional] 
**quantity** | **int** | How much of the item you&#39;ll be getting. | [optional] 
**costs** | [**\Bungie\Model\Destiny\DestinyItemQuantity[]**](DestinyItemQuantity.md) | A summary of the current costs of the item. | [optional] 
**overrideNextRefreshDate** | **\DateTime** | If this item has its own custom date where it may be removed from the Vendor&#39;s rotation, this is that date.  Note that there&#39;s not actually any guarantee that it will go away: it could be chosen again and end up still being in the Vendor&#39;s sale items! But this is the next date where that test will occur, and is also the date that the game shows for availability on things like Bounties being sold. So it&#39;s the best we can give. | [optional] 
**apiPurchasable** | **bool** | If true, this item can be purchased through the Bungie.net API. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


