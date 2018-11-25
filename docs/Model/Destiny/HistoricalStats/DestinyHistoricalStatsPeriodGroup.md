# DestinyHistoricalStatsPeriodGroup

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**period** | **\DateTime** | Period for the group. If the stat periodType is day, then this will have a specific day. If the type is monthly, then this value will be the first day of the applicable month. This value is not set when the periodType is &#39;all time&#39;. | [optional] 
**activityDetails** | [**\Bungie\Model\Destiny\HistoricalStats\DestinyHistoricalStatsActivity**](DestinyHistoricalStatsActivity.md) | If the period group is for a specific activity, this property will be set. | [optional] 
**values** | [**map[string,\Bungie\Model\Destiny\HistoricalStats\DestinyHistoricalStatsValue]**](DestinyHistoricalStatsValue.md) | Collection of stats for the period. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


