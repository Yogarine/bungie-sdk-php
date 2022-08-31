# DestinyPublicVendorsResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**vendorGroups** | [**\Bungie\Model\SingleComponentResponseOfDestinyVendorGroupComponent**](SingleComponentResponseOfDestinyVendorGroupComponent.md) | For Vendors being returned, this will give you the information you need to group them and order them in the same way that the Bungie Companion app performs grouping. It will automatically be returned if you request the Vendors component.  COMPONENT TYPE: Vendors | [optional] 
**vendors** | [**\Bungie\Model\DictionaryComponentResponseOfuint32AndDestinyPublicVendorComponent**](DictionaryComponentResponseOfuint32AndDestinyPublicVendorComponent.md) | The base properties of the vendor. These are keyed by the Vendor Hash, so you will get one Vendor Component per vendor returned.  COMPONENT TYPE: Vendors | [optional] 
**categories** | [**\Bungie\Model\DictionaryComponentResponseOfuint32AndDestinyVendorCategoriesComponent**](DictionaryComponentResponseOfuint32AndDestinyVendorCategoriesComponent.md) | Categories that the vendor has available, and references to the sales therein. These are keyed by the Vendor Hash, so you will get one Categories Component per vendor returned.  COMPONENT TYPE: VendorCategories | [optional] 
**sales** | [**\Bungie\Model\DictionaryComponentResponseOfuint32AndPublicDestinyVendorSaleItemSetComponent**](DictionaryComponentResponseOfuint32AndPublicDestinyVendorSaleItemSetComponent.md) | Sales, keyed by the vendorItemIndex of the item being sold. These are keyed by the Vendor Hash, so you will get one Sale Item Set Component per vendor returned.  Note that within the Sale Item Set component, the sales are themselves keyed by the vendorSaleIndex, so you can relate it to the corrent sale item definition within the Vendor&#39;s definition.  COMPONENT TYPE: VendorSales | [optional] 
**stringVariables** | [**\Bungie\Model\SingleComponentResponseOfDestinyStringVariablesComponent**](SingleComponentResponseOfDestinyStringVariablesComponent.md) | A set of string variable values by hash for a public vendors context.  COMPONENT TYPE: StringVariables | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


