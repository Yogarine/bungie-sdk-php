# DestinyVendorComponent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**vendorHash** | **int** | The unique identifier for the vendor. Use it to look up their DestinyVendorDefinition. | [optional] 
**nextRefreshDate** | **\DateTime** | The date when this vendor&#39;s inventory will next rotate/refresh.  Note that this is distinct from the date ranges that the vendor is visible/available in-game: this field indicates the specific time when the vendor&#39;s available items refresh and rotate, regardless of whether the vendor is actually available at that time. Unfortunately, these two values may be (and are, for the case of important vendors like Xur) different.  Issue https://github.com/Bungie-net/api/issues/353 is tracking a fix to start providing visibility date ranges where possible in addition to this refresh date, so that all important dates for vendors are available for use. | [optional] 
**enabled** | **bool** | If True, the Vendor is currently accessible.   If False, they may not actually be visible in the world at the moment. | [optional] 
**canPurchase** | **bool** | If True, you can purchase from the Vendor.  Theoretically, Vendors can be restricted from selling items. In practice, none do that (yet?). | [optional] 
**progression** | [**\Bungie\Model\Destiny\DestinyProgression**](DestinyProgression.md) | If the Vendor has a related Reputation, this is the Progression data that represents the character&#39;s Reputation level with this Vendor. | [optional] 
**vendorLocationIndex** | **int** | An index into the vendor definition&#39;s \&quot;locations\&quot; property array, indicating which location they are at currently. If -1, then the vendor has no known location (and you may choose not to show them in your UI as a result. I mean, it&#39;s your bag honey) | [optional] 
**seasonalRank** | **int** | If this vendor has a seasonal rank, this will be the calculated value of that rank. How nice is that? I mean, that&#39;s pretty sweeet. It&#39;s a whole 32 bit integer. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


