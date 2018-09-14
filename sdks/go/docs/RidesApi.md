# \RidesApi

All URIs are relative to *https://disapi.co/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**CreateRides**](RidesApi.md#CreateRides) | **Post** /rides | Create a new ride resource
[**DeleteRide**](RidesApi.md#DeleteRide) | **Delete** /rides/{id} | Delete ride resource by ID
[**EditRide**](RidesApi.md#EditRide) | **Put** /rides/{id} | Edit a ride by ID
[**GetRide**](RidesApi.md#GetRide) | **Get** /rides/{id} | Get ride by ID
[**GetRides**](RidesApi.md#GetRides) | **Get** /rides | List rides at Walt Disney World


# **CreateRides**
> CreateRides(ctx, optional)
Create a new ride resource

Create a new ride resource for the Walt Disney World Resort

### Required Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ctx** | **context.Context** | context for authentication, logging, cancellation, deadlines, tracing, etc.
 **optional** | ***CreateRidesOpts** | optional parameters | nil if no parameters

### Optional Parameters
Optional parameters are passed through a pointer to a CreateRidesOpts struct

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **optional.String**|  | 
 **parkId** | **optional.Int32**|  | 
 **openingYear** | **optional.Int32**|  | 
 **rideType** | **optional.String**|  | 
 **rideVehicle** | **optional.String**|  | 
 **interactiveQueue** | **optional.Bool**|  | 
 **giftStoreFinish** | **optional.Bool**|  | 
 **singleRider** | **optional.Int32**|  | 
 **ridePhoto** | **optional.Int32**|  | 
 **heightRestriction** | **optional.Int32**|  | 

### Return type

 (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **DeleteRide**
> DeleteRide(ctx, id)
Delete ride resource by ID

### Required Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ctx** | **context.Context** | context for authentication, logging, cancellation, deadlines, tracing, etc.
  **id** | **int32**| The ID of the ride | 

### Return type

 (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **EditRide**
> EditRide(ctx, id, optional)
Edit a ride by ID

Edit a ride in the resource collection by ID

### Required Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ctx** | **context.Context** | context for authentication, logging, cancellation, deadlines, tracing, etc.
  **id** | **int32**| The ID of the ride | 
 **optional** | ***EditRideOpts** | optional parameters | nil if no parameters

### Optional Parameters
Optional parameters are passed through a pointer to a EditRideOpts struct

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------

 **name** | **optional.String**|  | 
 **parkId** | **optional.Int32**|  | 
 **openingYear** | **optional.Int32**|  | 
 **rideType** | **optional.String**|  | 
 **rideVehicle** | **optional.String**|  | 
 **interactiveQueue** | **optional.Bool**|  | 
 **giftStoreFinish** | **optional.Bool**|  | 
 **singleRider** | **optional.Int32**|  | 
 **ridePhoto** | **optional.Int32**|  | 
 **heightRestriction** | **optional.Int32**|  | 

### Return type

 (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **GetRide**
> InlineResponse2003 GetRide(ctx, id)
Get ride by ID

Get a ride at Walt Disney World by ID

### Required Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ctx** | **context.Context** | context for authentication, logging, cancellation, deadlines, tracing, etc.
  **id** | **int32**| The ID of the ride | 

### Return type

[**InlineResponse2003**](inline_response_200_3.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **GetRides**
> InlineResponse2002 GetRides(ctx, )
List rides at Walt Disney World

Get a list of rides at all Walt Disney World Parks 

### Required Parameters
This endpoint does not need any parameter.

### Return type

[**InlineResponse2002**](inline_response_200_2.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

