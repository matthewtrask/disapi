# WaltDisneyWorldApi.ParksApi

All URIs are relative to *http://homestead.test/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPark**](ParksApi.md#createPark) | **POST** /parks | Create a new park resource in the collection
[**deletePark**](ParksApi.md#deletePark) | **DELETE** /parks/{id} | Remove a resource from the collection
[**editPark**](ParksApi.md#editPark) | **PUT** /parks/{id} | Edit a resource by ID
[**getPark**](ParksApi.md#getPark) | **GET** /parks/{id} | List a park by ID
[**getParks**](ParksApi.md#getParks) | **GET** /parks | List all parks at Walt Disney World


<a name="createPark"></a>
# **createPark**
> createPark(opts)

Create a new park resource in the collection

Create a new park at Walt Disney World

### Example
```javascript
var WaltDisneyWorldApi = require('walt_disney_world_api');

var apiInstance = new WaltDisneyWorldApi.ParksApi();
var opts = {
  'name': "name_example", // String | 
  'centralAttraction': "centralAttraction_example", // String | 
  'yearOpened': 56, // Number | 
  'rideCount': 56, // Number | 
  'restaurantCount': 56, // Number | 
  'resortCount': 56, // Number | 
  'size': 56, // Number | 
  'fireworks': true // Boolean | 
};
var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully.');
  }
};
apiInstance.createPark(opts, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **String**|  | [optional] 
 **centralAttraction** | **String**|  | [optional] 
 **yearOpened** | **Number**|  | [optional] 
 **rideCount** | **Number**|  | [optional] 
 **restaurantCount** | **Number**|  | [optional] 
 **resortCount** | **Number**|  | [optional] 
 **size** | **Number**|  | [optional] 
 **fireworks** | **Boolean**|  | [optional] 

### Return type

null (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

<a name="deletePark"></a>
# **deletePark**
> deletePark()

Remove a resource from the collection

Remove a resource from the collection by ID

### Example
```javascript
var WaltDisneyWorldApi = require('walt_disney_world_api');

var apiInstance = new WaltDisneyWorldApi.ParksApi();
var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully.');
  }
};
apiInstance.deletePark(callback);
```

### Parameters
This endpoint does not need any parameter.

### Return type

null (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

<a name="editPark"></a>
# **editPark**
> editPark()

Edit a resource by ID

Edit a park resource by an ID

### Example
```javascript
var WaltDisneyWorldApi = require('walt_disney_world_api');

var apiInstance = new WaltDisneyWorldApi.ParksApi();
var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully.');
  }
};
apiInstance.editPark(callback);
```

### Parameters
This endpoint does not need any parameter.

### Return type

null (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

<a name="getPark"></a>
# **getPark**
> InlineResponse2007 getPark()

List a park by ID

Get a park at Walt Disney World by ID

### Example
```javascript
var WaltDisneyWorldApi = require('walt_disney_world_api');

var apiInstance = new WaltDisneyWorldApi.ParksApi();
var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.getPark(callback);
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**InlineResponse2007**](InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="getParks"></a>
# **getParks**
> InlineResponse2006 getParks()

List all parks at Walt Disney World

Get a list of all parks at Walt Disney World

### Example
```javascript
var WaltDisneyWorldApi = require('walt_disney_world_api');

var apiInstance = new WaltDisneyWorldApi.ParksApi();
var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.getParks(callback);
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**InlineResponse2006**](InlineResponse2006.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

