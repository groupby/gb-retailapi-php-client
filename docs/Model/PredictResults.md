# # PredictResults

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**warnings** | **object[]** | Warnings collected with validation and Recommendations AI API issues. | [optional]
**products** | **array<string,mixed>[]** | Recommendations built by Recommendations AI model. | [optional]
**records** | **array<string,mixed>[]** | Recommendations built by Recommendations AI model. | [optional]
**model_id** | **string** | Model Id used for predictions | [optional]
**model_name** | **string** | Model Name used for predictions | [optional]
**model_type** | **string** | Currently supported values:   &#x60;recommended-for-you&#x60;   &#x60;others-you-may-like&#x60;,   &#x60;frequently-bought-together&#x60;   &#x60;page-optimization&#x60;   &#x60;similar-items&#x60;,   &#x60;buy-it-again&#x60;   &#x60;on-sale-items&#x60;   &#x60;recently-viewed&#x60;    This field together with optimization_objective describe model metadata to use to control model training and   serving. See https://cloud.google.com/retail/docs/models for more details. | [optional]
**optimization_objective** | **string** | Currently supported values: &#x60;ctr&#x60;, &#x60;cvr&#x60;, &#x60;revenue-per-order&#x60;.     If not specified, we choose default based on model type. Default depends on type of recommendation:   &#x60;recommended-for-you&#x60; &#x3D;&gt; &#x60;ctr&#x60;   &#x60;others-you-may-like&#x60; &#x3D;&gt; &#x60;ctr&#x60;   &#x60;frequently-bought-together&#x60; &#x3D;&gt; &#x60;revenue_per_order&#x60;    This field together with modelType describe model metadata to use to control model training and serving.   See https://cloud.google.com/retail/docs/models for more details on what the model metadata control and which   combination of parameters are valid. | [optional]
**filter_set** | **string** | Filter set applied to the recommendation | [optional]
**raw_filter** | **string** | RawFilter applied to the recommendation | [optional]
**filters** | [**\Groupby\RetailApiClient\Model\FilterParameter[]**](FilterParameter.md) | Filters applied to the recommendation | [optional]
**metadata** | **object** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
