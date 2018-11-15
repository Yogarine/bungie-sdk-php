# DestinyResponsesDestinyCharacterResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**inventory** | **object** | The character-level non-equipped inventory items.  COMPONENT TYPE: CharacterInventories | [optional] 
**character** | **object** | Base information about the character in question.  COMPONENT TYPE: Characters | [optional] 
**progressions** | **object** | Character progression data, including Milestones.  COMPONENT TYPE: CharacterProgressions | [optional] 
**renderData** | **object** | Character rendering data - a minimal set of information about equipment and dyes used for rendering.  COMPONENT TYPE: CharacterRenderData | [optional] 
**activities** | **object** | Activity data - info about current activities available to the player.  COMPONENT TYPE: CharacterActivities | [optional] 
**equipment** | **object** | Equipped items on the character.  COMPONENT TYPE: CharacterEquipment | [optional] 
**kiosks** | **object** | Items available from Kiosks that are available to this specific character.   COMPONENT TYPE: Kiosks | [optional] 
**plugSets** | **object** | When sockets refer to reusable Plug Sets (see DestinyPlugSetDefinition for more info), this is the set of plugs and their states that are scoped to this character.  This comes back with ItemSockets, as it is needed for a complete picture of the sockets on requested items.  COMPONENT TYPE: ItemSockets | [optional] 
**presentationNodes** | **object** | COMPONENT TYPE: PresentationNodes | [optional] 
**records** | **object** | COMPONENT TYPE: Records | [optional] 
**collectibles** | **object** | COMPONENT TYPE: Collectibles | [optional] 
**itemComponents** | **object** | The set of components belonging to the player&#39;s instanced items.  COMPONENT TYPE: [See inside the DestinyItemComponentSet contract for component types.] | [optional] 
**uninstancedItemComponents** | **object** | The set of components belonging to the player&#39;s UNinstanced items. Because apparently now those too can have information relevant to the character&#39;s state.  COMPONENT TYPE: [See inside the DestinyItemComponentSet contract for component types.] | [optional] 
**currencyLookups** | **object** | A \&quot;lookup\&quot; convenience component that can be used to quickly check if the character has access to items that can be used for purchasing.  COMPONENT TYPE: CurrencyLookups | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


