# \ParksApi

All URIs are relative to *https://disapi.co/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**CreatePark**](ParksApi.md#CreatePark) | **Post** /parks | Create a new park resource in the collection
[**DeletePark**](ParksApi.md#DeletePark) | **Delete** /parks/{id} | Remove a resource from the collection
[**EditPark**](ParksApi.md#EditPark) | **Put** /parks/{id} | Edit a resource by ID
[**GetPark**](ParksApi.md#GetPark) | **Get** /parks/{id} | List a park by ID
[**GetParks**](ParksApi.md#GetParks) | **Get** /parks | List all parks at Walt Disney World


# **CreatePark**
> CreatePark(ctx, optional)
Create a new park resource in the collection

Create a new park at Walt Disney World

### Required Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ctx** | **context.Context** | context for authentication, logging, cancellation, deadlines, tracing, etc.
 **optional** | ***CreateParkOpts** | optional parameters | nil if no parameters

### Optional Parameters
Optional parameters are passed through a pointer to a CreateParkOpts struct

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **optional.String**|  | 
 **centralAttraction** | **optional.String**|  | 
 **yearOpened** | **optional.Int32**|  | 
 **rideCount** | **optional.Int32**|  | 
 **restaurantCount** | **optional.Int32**|  | 
 **resortCount** | **optional.Int32**|  | 
 **size** | **optional.Int32**|  | 
 **fireworks** | **optional.Bool**|  | 

### Return type

 (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **DeletePark**
> DeletePark(ctx, id)
Remove a resource from the collection

Remove a resource from the collection by ID

### Required Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ctx** | **context.Context** | context for authentication, logging, cancellation, deadlines, tracing, etc.
  **id** | **int32**| The ID of the park | 

### Return type

 (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **EditPark**
> EditPark(ctx, id)
Edit a resource by ID

Edit a park resource by an ID

### Required Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ctx** | **context.Context** | context for authentication, logging, cancellation, deadlines, tracing, etc.
  **id** | **int32**| The ID of the park | 

### Return type

 (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **GetPark**
> InlineResponse2007 GetPark(ctx, id)
List a park by ID

Get a park at Walt Disney World by ID

### Required Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ctx** | **context.Context** | context for authentication, logging, cancellation, deadlines, tracing, etc.
  **id** | **int32**| The ID of the park | 

### Return type

[**InlineResponse2007**](inline_response_200_7.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **GetParks**
> InlineResponse2006 GetParks(ctx, )
List all parks at Walt Disney World

Get a list of all parks at Walt Disney World

### Required Parameters
This endpoint does not need any parameter.

### Return type

[**InlineResponse2006**](inline_response_200_6.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

