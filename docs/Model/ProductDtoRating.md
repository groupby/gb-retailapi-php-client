# # ProductDtoRating

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**rating_count** | **int** | The total number of ratings. This value is independent of the value of histogram.This value must be nonnegative. | [optional]
**average_rating** | **float** | The average rating of the product. The rating is scaled at 1-5. | [optional]
**rating_histogram** | **int[]** | List of rating counts per rating value (index &#x3D; rating - 1). The list is empty if there is no rating. If the list is non-empty, its size is always 5. For example, [41, 14, 13, 47, 303]. It means that the product got 41 ratings with 1 star, 14 ratings with 2 star, and so on. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
