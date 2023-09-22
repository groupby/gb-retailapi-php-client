# # SelectedRefinementDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**navigation_name** | **string** | The name of the navigation the refinement is for. |
**type** | [**NavigationTypeDto**](NavigationTypeDto.md) |  |
**value** | **string** | Value of selected refinement, if type is value. | [optional]
**low** | **float** | The lowest end or value of the range, if applicable. | [optional]
**high** | **float** | The highest end or value of the range, if applicable. | [optional]
**source** | **string** | Field which is indicated that it is dynamic navigation. | [optional]
**or** | **bool** | Navigation multiselect. Indicate that it is possibly to select more than one navigation value due to search request. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
