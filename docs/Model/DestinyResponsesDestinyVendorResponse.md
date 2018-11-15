# DestinyResponsesDestinyVendorResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**vendor** | **object** | The base properties of the vendor.  COMPONENT TYPE: Vendors | [optional] 
**categories** | **object** | Categories that the vendor has available, and references to the sales therein.  COMPONENT TYPE: VendorCategories | [optional] 
**sales** | **object** | Sales, keyed by the vendorItemIndex of the item being sold.  COMPONENT TYPE: VendorSales | [optional] 
**itemComponents** | **object** | Item components, keyed by the vendorItemIndex of the active sale items.  COMPONENT TYPE: [See inside the DestinyItemComponentSet contract for component types.] | [optional] 
**currencyLookups** | **object** | A \&quot;lookup\&quot; convenience component that can be used to quickly check if the character has access to items that can be used for purchasing.  COMPONENT TYPE: CurrencyLookups | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


