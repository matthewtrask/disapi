# WaltDisneyWorldApi.RidesApi

All URIs are relative to *https://disapi.co/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRides**](RidesApi.md#createRides) | **POST** /rides | Create a new ride resource
[**deleteRide**](RidesApi.md#deleteRide) | **DELETE** /rides/{id} | Delete ride resource by ID
[**editRide**](RidesApi.md#editRide) | **PUT** /rides/{id} | Edit a ride by ID
[**getRide**](RidesApi.md#getRide) | **GET** /rides/{id} | Get ride by ID
[**getRides**](RidesApi.md#getRides) | **GET** /rides | List rides at Walt Disney World


<a name="createRides"></a>
# **createRides**
> createRides(opts)

Create a new ride resource

Create a new ride resource for the Walt Disney World Resort

### Example
```javascript
var WaltDisneyWorldApi = require('walt_disney_world_api');

var apiInstance = new WaltDisneyWorldApi.RidesApi();
var opts = {
  'name': "name_example", // String | 
  'parkId': 56, // Number | 
  'openingYear': 56, // Number | 
  'rideType': "rideType_example", // String | 
  'rideVehicle': "rideVehicle_example", // String | 
  'interactiveQueue': true, // Boolean | 
  'giftStoreFinish': true, // Boolean | 
  'singleRider': 56, // Number | 
  'ridePhoto': 56, // Number | 
  'heightRestriction': 56 // Number | 
};
var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully.');
  }
};
apiInstance.createRides(opts, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **String**|  | [optional] 
 **parkId** | **Number**|  | [optional] 
 **openingYear** | **Number**|  | [optional] 
 **rideType** | **String**|  | [optional] 
 **rideVehicle** | **String**|  | [optional] 
 **interactiveQueue** | **Boolean**|  | [optional] 
 **giftStoreFinish** | **Boolean**|  | [optional] 
 **singleRider** | **Number**|  | [optional] 
 **ridePhoto** | **Number**|  | [optional] 
 **heightRestriction** | **Number**|  | [optional] 

### Return type

null (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

<a name="deleteRide"></a>
# **deleteRide**
> deleteRide(id)

Delete ride resource by ID

### Example
```javascript
var WaltDisneyWorldApi = require('walt_disney_world_api');

var apiInstance = new WaltDisneyWorldApi.RidesApi();
var id = 56; // Number | The ID of the ride
var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully.');
  }
};
apiInstance.deleteRide(id, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **Number**| The ID of the ride | 

### Return type

null (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

<a name="editRide"></a>
# **editRide**
> editRide(id, opts)

Edit a ride by ID

Edit a ride in the resource collection by ID

### Example
```javascript
var WaltDisneyWorldApi = require('walt_disney_world_api');

var apiInstance = new WaltDisneyWorldApi.RidesApi();
var id = 56; // Number | The ID of the ride
var opts = {
  'name': "name_example", // String | 
  'parkId': 56, // Number | 
  'openingYear': 56, // Number | 
  'rideType': "rideType_example", // String | 
  'rideVehicle': "rideVehicle_example", // String | 
  'interactiveQueue': true, // Boolean | 
  'giftStoreFinish': true, // Boolean | 
  'singleRider': 56, // Number | 
  'ridePhoto': 56, // Number | 
  'heightRestriction': 56 // Number | 
};
var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully.');
  }
};
apiInstance.editRide(id, opts, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **Number**| The ID of the ride | 
 **name** | **String**|  | [optional] 
 **parkId** | **Number**|  | [optional] 
 **openingYear** | **Number**|  | [optional] 
 **rideType** | **String**|  | [optional] 
 **rideVehicle** | **String**|  | [optional] 
 **interactiveQueue** | **Boolean**|  | [optional] 
 **giftStoreFinish** | **Boolean**|  | [optional] 
 **singleRider** | **Number**|  | [optional] 
 **ridePhoto** | **Number**|  | [optional] 
 **heightRestriction** | **Number**|  | [optional] 

### Return type

null (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

<a name="getRide"></a>
# **getRide**
> InlineResponse2003 getRide(id)

Get ride by ID

Get a ride at Walt Disney World by ID

### Example
```javascript
var WaltDisneyWorldApi = require('walt_disney_world_api');

var apiInstance = new WaltDisneyWorldApi.RidesApi();
var id = 56; // Number | The ID of the ride
var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.getRide(id, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **Number**| The ID of the ride | 

### Return type

[**InlineResponse2003**](InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="getRides"></a>
# **getRides**
> InlineResponse2002 getRides()

List rides at Walt Disney World

Get a list of rides at all Walt Disney World Parks 

### Example
```javascript
var WaltDisneyWorldApi = require('walt_disney_world_api');

var apiInstance = new WaltDisneyWorldApi.RidesApi();
var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.getRides(callback);
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**InlineResponse2002**](InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

