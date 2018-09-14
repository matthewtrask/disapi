# \RestaurantsApi

All URIs are relative to *https://disapi.co/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**CreateRestaurant**](RestaurantsApi.md#CreateRestaurant) | **Post** /restaurants | Create a new restaurant resource
[**DeleteRestaurant**](RestaurantsApi.md#DeleteRestaurant) | **Delete** /restaurants/{id} | Remove a resource from the restaurants collection
[**EditRestaurant**](RestaurantsApi.md#EditRestaurant) | **Put** /restaurants/{id} | Edit a single restaurant resource in the collection by ID
[**GetRestaurant**](RestaurantsApi.md#GetRestaurant) | **Get** /restaurants/{id} | List a single restaurant resource from the collection by ID
[**GetRestaurants**](RestaurantsApi.md#GetRestaurants) | **Get** /restaurants | List restaurants at Walt Disney World


# **CreateRestaurant**
> CreateRestaurant(ctx, optional)
Create a new restaurant resource

Create a new restaurnat resource at Walt Disney World

### Required Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ctx** | **context.Context** | context for authentication, logging, cancellation, deadlines, tracing, etc.
 **optional** | ***CreateRestaurantOpts** | optional parameters | nil if no parameters

### Optional Parameters
Optional parameters are passed through a pointer to a CreateRestaurantOpts struct

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **optional.String**|  | 
 **parkId** | **optional.Int32**|  | 
 **quickService** | **optional.Bool**|  | 
 **tableService** | **optional.Bool**|  | 
 **alcohol** | **optional.Bool**|  | 
 **diningPlan** | **optional.Bool**|  | 
 **mealTypes** | [**optional.Interface of []string**](string.md)|  | 
 **foodTypes** | [**optional.Interface of []string**](string.md)|  | 

### Return type

 (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **DeleteRestaurant**
> DeleteRestaurant(ctx, id)
Remove a resource from the restaurants collection

Remove a resource from the restaurants collection by ID

### Required Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ctx** | **context.Context** | context for authentication, logging, cancellation, deadlines, tracing, etc.
  **id** | **int32**| The ID of the restaurant | 

### Return type

 (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **EditRestaurant**
> EditRestaurant(ctx, id, optional)
Edit a single restaurant resource in the collection by ID

Edit a restaurant by ID

### Required Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ctx** | **context.Context** | context for authentication, logging, cancellation, deadlines, tracing, etc.
  **id** | **int32**| The ID of the restaurant | 
 **optional** | ***EditRestaurantOpts** | optional parameters | nil if no parameters

### Optional Parameters
Optional parameters are passed through a pointer to a EditRestaurantOpts struct

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------

 **name** | **optional.String**|  | 
 **parkId** | **optional.Int32**|  | 
 **quickService** | **optional.Bool**|  | 
 **tableService** | **optional.Bool**|  | 
 **alcohol** | **optional.Bool**|  | 
 **diningPlan** | **optional.Bool**|  | 
 **mealTypes** | [**optional.Interface of []string**](string.md)|  | 
 **foodTypes** | [**optional.Interface of []string**](string.md)|  | 

### Return type

 (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **GetRestaurant**
> InlineResponse2005 GetRestaurant(ctx, id)
List a single restaurant resource from the collection by ID

Get a single restaurant resource by ID

### Required Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ctx** | **context.Context** | context for authentication, logging, cancellation, deadlines, tracing, etc.
  **id** | **int32**| The ID of the restaurant | 

### Return type

[**InlineResponse2005**](inline_response_200_5.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **GetRestaurants**
> InlineResponse2004 GetRestaurants(ctx, )
List restaurants at Walt Disney World

Get a list of restaurants at all parks

### Required Parameters
This endpoint does not need any parameter.

### Return type

[**InlineResponse2004**](inline_response_200_4.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

