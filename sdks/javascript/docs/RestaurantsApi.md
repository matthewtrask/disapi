# WaltDisneyWorldApi.RestaurantsApi

All URIs are relative to *http://homestead.test/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRestaurant**](RestaurantsApi.md#createRestaurant) | **POST** /restaurants | Create a new restaurant resource
[**deleteRestaurant**](RestaurantsApi.md#deleteRestaurant) | **DELETE** /restaurants/{id} | Remove a resource from the restaurants collection
[**editRestaurant**](RestaurantsApi.md#editRestaurant) | **PUT** /restaurants/{id} | Edit a single restaurant resource in the collection by ID
[**getRestaurant**](RestaurantsApi.md#getRestaurant) | **GET** /restaurants/{id} | List a single restaurant resource from the collection by ID
[**getRestaurants**](RestaurantsApi.md#getRestaurants) | **GET** /restaurants | List restaurants at Walt Disney World


<a name="createRestaurant"></a>
# **createRestaurant**
> createRestaurant(opts)

Create a new restaurant resource

Create a new restaurnat resource at Walt Disney World

### Example
```javascript
var WaltDisneyWorldApi = require('walt_disney_world_api');

var apiInstance = new WaltDisneyWorldApi.RestaurantsApi();
var opts = {
  'name': "name_example", // String | 
  'parkId': 56, // Number | 
  'quickService': true, // Boolean | 
  'tableService': true, // Boolean | 
  'alcohol': true, // Boolean | 
  'diningPlan': true, // Boolean | 
  'mealTypes': "mealTypes_example", // [String] | 
  'foodTypes': "foodTypes_example" // [String] | 
};
var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully.');
  }
};
apiInstance.createRestaurant(opts, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **String**|  | [optional] 
 **parkId** | **Number**|  | [optional] 
 **quickService** | **Boolean**|  | [optional] 
 **tableService** | **Boolean**|  | [optional] 
 **alcohol** | **Boolean**|  | [optional] 
 **diningPlan** | **Boolean**|  | [optional] 
 **mealTypes** | [**[String]**](String.md)|  | [optional] 
 **foodTypes** | [**[String]**](String.md)|  | [optional] 

### Return type

null (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

<a name="deleteRestaurant"></a>
# **deleteRestaurant**
> deleteRestaurant()

Remove a resource from the restaurants collection

Remove a resource from the restaurants collection by ID

### Example
```javascript
var WaltDisneyWorldApi = require('walt_disney_world_api');

var apiInstance = new WaltDisneyWorldApi.RestaurantsApi();
var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully.');
  }
};
apiInstance.deleteRestaurant(callback);
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

<a name="editRestaurant"></a>
# **editRestaurant**
> editRestaurant(opts)

Edit a single restaurant resource in the collection by ID

Edit a restaurant by ID

### Example
```javascript
var WaltDisneyWorldApi = require('walt_disney_world_api');

var apiInstance = new WaltDisneyWorldApi.RestaurantsApi();
var opts = {
  'name': "name_example", // String | 
  'parkId': 56, // Number | 
  'quickService': true, // Boolean | 
  'tableService': true, // Boolean | 
  'alcohol': true, // Boolean | 
  'diningPlan': true, // Boolean | 
  'mealTypes': "mealTypes_example", // [String] | 
  'foodTypes': "foodTypes_example" // [String] | 
};
var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully.');
  }
};
apiInstance.editRestaurant(opts, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **String**|  | [optional] 
 **parkId** | **Number**|  | [optional] 
 **quickService** | **Boolean**|  | [optional] 
 **tableService** | **Boolean**|  | [optional] 
 **alcohol** | **Boolean**|  | [optional] 
 **diningPlan** | **Boolean**|  | [optional] 
 **mealTypes** | [**[String]**](String.md)|  | [optional] 
 **foodTypes** | [**[String]**](String.md)|  | [optional] 

### Return type

null (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

<a name="getRestaurant"></a>
# **getRestaurant**
> InlineResponse2005 getRestaurant()

List a single restaurant resource from the collection by ID

Get a single restaurant resource by ID

### Example
```javascript
var WaltDisneyWorldApi = require('walt_disney_world_api');

var apiInstance = new WaltDisneyWorldApi.RestaurantsApi();
var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.getRestaurant(callback);
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**InlineResponse2005**](InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

<a name="getRestaurants"></a>
# **getRestaurants**
> InlineResponse2004 getRestaurants()

List restaurants at Walt Disney World

Get a list of restaurants at all parks

### Example
```javascript
var WaltDisneyWorldApi = require('walt_disney_world_api');

var apiInstance = new WaltDisneyWorldApi.RestaurantsApi();
var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.getRestaurants(callback);
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**InlineResponse2004**](InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

