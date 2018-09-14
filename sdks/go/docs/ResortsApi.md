# \ResortsApi

All URIs are relative to *http://homestead.test/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**CreateResort**](ResortsApi.md#CreateResort) | **Post** /resorts | Create a new resort resource
[**DeleteResort**](ResortsApi.md#DeleteResort) | **Delete** /resorts/{id} | Delete resort resource by ID
[**EditResort**](ResortsApi.md#EditResort) | **Put** /resorts/{id} | Edit a specific resort resource by ID
[**GetResort**](ResortsApi.md#GetResort) | **Get** /resorts/{id} | List a specific resort resource by ID
[**GetResorts**](ResortsApi.md#GetResorts) | **Get** /resorts | List resorts at Walt Disney World


# **CreateResort**
> CreateResort(ctx, optional)
Create a new resort resource

Create a new resort resource for the Walt Disney World Resort

### Required Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ctx** | **context.Context** | context for authentication, logging, cancellation, deadlines, tracing, etc.
 **optional** | ***CreateResortOpts** | optional parameters | nil if no parameters

### Optional Parameters
Optional parameters are passed through a pointer to a CreateResortOpts struct

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **optional.String**|  | 
 **parkId** | **optional.Int32**|  | 
 **openingYear** | **optional.Int32**|  | 
 **resortType** | **optional.String**|  | 
 **transportOptions** | **optional.String**|  | 
 **category** | **optional.String**|  | 
 **numOfRooms** | **optional.Int32**|  | 
 **quickServiceRestaurants** | **optional.Bool**|  | 
 **tableServiceRestaurants** | **optional.Bool**|  | 
 **giftShop** | **optional.Bool**|  | 
 **arcade** | **optional.Bool**|  | 
 **pool** | **optional.Bool**|  | 

### Return type

 (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **DeleteResort**
> DeleteResort(ctx, )
Delete resort resource by ID

### Required Parameters
This endpoint does not need any parameter.

### Return type

 (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **EditResort**
> EditResort(ctx, optional)
Edit a specific resort resource by ID

Find and edit a specific resort resource by its ID

### Required Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ctx** | **context.Context** | context for authentication, logging, cancellation, deadlines, tracing, etc.
 **optional** | ***EditResortOpts** | optional parameters | nil if no parameters

### Optional Parameters
Optional parameters are passed through a pointer to a EditResortOpts struct

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **optional.String**|  | 
 **parkId** | **optional.Int32**|  | 
 **openingYear** | **optional.Int32**|  | 
 **resortType** | **optional.String**|  | 
 **transportOptions** | **optional.String**|  | 
 **category** | **optional.String**|  | 
 **numOfRooms** | **optional.Int32**|  | 
 **quickServiceRestaurants** | **optional.Bool**|  | 
 **tableServiceRestaurants** | **optional.Bool**|  | 
 **giftShop** | **optional.Bool**|  | 
 **arcade** | **optional.Bool**|  | 
 **pool** | **optional.Bool**|  | 

### Return type

 (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **GetResort**
> InlineResponse2001 GetResort(ctx, optional)
List a specific resort resource by ID

Get a specific resort resource by ID

### Required Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ctx** | **context.Context** | context for authentication, logging, cancellation, deadlines, tracing, etc.
 **optional** | ***GetResortOpts** | optional parameters | nil if no parameters

### Optional Parameters
Optional parameters are passed through a pointer to a GetResortOpts struct

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **optional.String**|  | 
 **parkId** | **optional.Int32**|  | 
 **openingYear** | **optional.Int32**|  | 
 **resortType** | **optional.String**|  | 
 **transportOptions** | **optional.String**|  | 
 **category** | **optional.String**|  | 
 **numOfRooms** | **optional.Int32**|  | 
 **quickServiceRestaurants** | **optional.Bool**|  | 
 **tableServiceRestaurants** | **optional.Bool**|  | 
 **giftShop** | **optional.Bool**|  | 
 **arcade** | **optional.Bool**|  | 
 **pool** | **optional.Bool**|  | 

### Return type

[**InlineResponse2001**](inline_response_200_1.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **GetResorts**
> InlineResponse200 GetResorts(ctx, )
List resorts at Walt Disney World

Get a list of resorts at Walt Disney World

### Required Parameters
This endpoint does not need any parameter.

### Return type

[**InlineResponse200**](inline_response_200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

