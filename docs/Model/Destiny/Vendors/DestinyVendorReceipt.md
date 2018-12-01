# DestinyVendorReceipt

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**currencyPaid** | [**\Bungie\Model\Destiny\DestinyItemQuantity[]**](DestinyItemQuantity.md) | The amount paid for the item, in terms of items that were consumed in the purchase and their quantity. | [optional] 
**itemReceived** | [**\Bungie\Model\Destiny\DestinyItemQuantity**](DestinyItemQuantity.md) | The item that was received, and its quantity. | [optional] 
**licenseUnlockHash** | **int** | The unlock flag used to determine whether you still have the purchased item. | [optional] 
**purchasedByCharacterId** | **int** | The ID of the character who made the purchase. | [optional] 
**refundPolicy** | [**\Bungie\Model\Destiny\DestinyVendorItemRefundPolicy**](DestinyVendorItemRefundPolicy.md) | Whether you can get a refund, and what happens in order for the refund to be received. See the DestinyVendorItemRefundPolicy enum for details. | [optional] 
**sequenceNumber** | **int** | The identifier of this receipt. | [optional] 
**timeToExpiration** | **int** | The seconds since epoch at which this receipt is rendered invalid. | [optional] 
**expiresOn** | **\DateTime** | The date at which this receipt is rendered invalid. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


