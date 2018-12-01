# DestinyHistoricalStatsDefinition

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**statId** | **string** | Unique programmer friendly ID for this stat | [optional] 
**group** | [**\Bungie\Model\Destiny\HistoricalStats\Definitions\DestinyStatsGroupType**](DestinyStatsGroupType.md) | Statistic group | [optional] 
**periodTypes** | [**\Bungie\Model\Destiny\HistoricalStats\Definitions\PeriodType[]**](PeriodType.md) | Time periods the statistic covers | [optional] 
**modes** | [**\Bungie\Model\Destiny\HistoricalStats\Definitions\DestinyActivityModeType[]**](DestinyActivityModeType.md) | Game modes where this statistic can be reported. | [optional] 
**category** | [**\Bungie\Model\Destiny\HistoricalStats\Definitions\DestinyStatsCategoryType**](DestinyStatsCategoryType.md) | Category for the stat. | [optional] 
**statName** | **string** | Display name | [optional] 
**statNameAbbr** | **string** | Display name abbreviated | [optional] 
**statDescription** | **string** | Description of a stat if applicable. | [optional] 
**unitType** | [**\Bungie\Model\Destiny\HistoricalStats\Definitions\UnitType**](UnitType.md) | Unit, if any, for the statistic | [optional] 
**iconImage** | **string** | Optional URI to an icon for the statistic | [optional] 
**mergeMethod** | **int** | Optional icon for the statistic | [optional] 
**unitLabel** | **string** | Localized Unit Name for the stat. | [optional] 
**weight** | **int** | Weight assigned to this stat indicating its relative impressiveness. | [optional] 
**medalTierHash** | **int** | The tier associated with this medal - be it implicitly or explicitly. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


