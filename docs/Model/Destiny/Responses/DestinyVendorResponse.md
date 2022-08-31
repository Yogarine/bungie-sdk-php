# DestinyVendorResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**vendor** | [**\Bungie\Model\SingleComponentResponseOfDestinyVendorComponent**](SingleComponentResponseOfDestinyVendorComponent.md) | The base properties of the vendor.  COMPONENT TYPE: Vendors | [optional] 
**categories** | [**\Bungie\Model\SingleComponentResponseOfDestinyVendorCategoriesComponent**](SingleComponentResponseOfDestinyVendorCategoriesComponent.md) | Categories that the vendor has available, and references to the sales therein.  COMPONENT TYPE: VendorCategories | [optional] 
**sales** | [**\Bungie\Model\DictionaryComponentResponseOfint32AndDestinyVendorSaleItemComponent**](DictionaryComponentResponseOfint32AndDestinyVendorSaleItemComponent.md) | Sales, keyed by the vendorItemIndex of the item being sold.  COMPONENT TYPE: VendorSales | [optional] 
**itemComponents** | [**\Bungie\Model\DestinyItemComponentSetOfint32**](DestinyItemComponentSetOfint32.md) | Item components, keyed by the vendorItemIndex of the active sale items.  COMPONENT TYPE: [See inside the DestinyItemComponentSet contract for component types.] | [optional] 
**currencyLookups** | [**\Bungie\Model\SingleComponentResponseOfDestinyCurrenciesComponent**](SingleComponentResponseOfDestinyCurrenciesComponent.md) | A \&quot;lookup\&quot; convenience component that can be used to quickly check if the character has access to items that can be used for purchasing.  COMPONENT TYPE: CurrencyLookups | [optional] 
**stringVariables** | [**\Bungie\Model\SingleComponentResponseOfDestinyStringVariablesComponent**](SingleComponentResponseOfDestinyStringVariablesComponent.md) | A map of string variable values by hash for this character context.  COMPONENT TYPE: StringVariables | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


