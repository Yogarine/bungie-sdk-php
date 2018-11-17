# DestinyResponsesDestinyCharacterResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**inventory** | [**SingleComponentResponseOfDestinyInventoryComponent**](SingleComponentResponseOfDestinyInventoryComponent.md) | The character-level non-equipped inventory items.  COMPONENT TYPE: CharacterInventories | [optional] 
**character** | [**SingleComponentResponseOfDestinyCharacterComponent**](SingleComponentResponseOfDestinyCharacterComponent.md) | Base information about the character in question.  COMPONENT TYPE: Characters | [optional] 
**progressions** | [**SingleComponentResponseOfDestinyCharacterProgressionComponent**](SingleComponentResponseOfDestinyCharacterProgressionComponent.md) | Character progression data, including Milestones.  COMPONENT TYPE: CharacterProgressions | [optional] 
**renderData** | [**SingleComponentResponseOfDestinyCharacterRenderComponent**](SingleComponentResponseOfDestinyCharacterRenderComponent.md) | Character rendering data - a minimal set of information about equipment and dyes used for rendering.  COMPONENT TYPE: CharacterRenderData | [optional] 
**activities** | [**SingleComponentResponseOfDestinyCharacterActivitiesComponent**](SingleComponentResponseOfDestinyCharacterActivitiesComponent.md) | Activity data - info about current activities available to the player.  COMPONENT TYPE: CharacterActivities | [optional] 
**equipment** | [**SingleComponentResponseOfDestinyInventoryComponent**](SingleComponentResponseOfDestinyInventoryComponent.md) | Equipped items on the character.  COMPONENT TYPE: CharacterEquipment | [optional] 
**kiosks** | [**SingleComponentResponseOfDestinyKiosksComponent**](SingleComponentResponseOfDestinyKiosksComponent.md) | Items available from Kiosks that are available to this specific character.   COMPONENT TYPE: Kiosks | [optional] 
**plugSets** | [**SingleComponentResponseOfDestinyPlugSetsComponent**](SingleComponentResponseOfDestinyPlugSetsComponent.md) | When sockets refer to reusable Plug Sets (see DestinyPlugSetDefinition for more info), this is the set of plugs and their states that are scoped to this character.  This comes back with ItemSockets, as it is needed for a complete picture of the sockets on requested items.  COMPONENT TYPE: ItemSockets | [optional] 
**presentationNodes** | [**SingleComponentResponseOfDestinyPresentationNodesComponent**](SingleComponentResponseOfDestinyPresentationNodesComponent.md) | COMPONENT TYPE: PresentationNodes | [optional] 
**records** | [**SingleComponentResponseOfDestinyCharacterRecordsComponent**](SingleComponentResponseOfDestinyCharacterRecordsComponent.md) | COMPONENT TYPE: Records | [optional] 
**collectibles** | [**SingleComponentResponseOfDestinyCollectiblesComponent**](SingleComponentResponseOfDestinyCollectiblesComponent.md) | COMPONENT TYPE: Collectibles | [optional] 
**itemComponents** | [**DestinyItemComponentSetOfint64**](DestinyItemComponentSetOfint64.md) | The set of components belonging to the player&#39;s instanced items.  COMPONENT TYPE: [See inside the DestinyItemComponentSet contract for component types.] | [optional] 
**uninstancedItemComponents** | [**DestinyBaseItemComponentSetOfuint32**](DestinyBaseItemComponentSetOfuint32.md) | The set of components belonging to the player&#39;s UNinstanced items. Because apparently now those too can have information relevant to the character&#39;s state.  COMPONENT TYPE: [See inside the DestinyItemComponentSet contract for component types.] | [optional] 
**currencyLookups** | [**SingleComponentResponseOfDestinyCurrenciesComponent**](SingleComponentResponseOfDestinyCurrenciesComponent.md) | A \&quot;lookup\&quot; convenience component that can be used to quickly check if the character has access to items that can be used for purchasing.  COMPONENT TYPE: CurrencyLookups | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


