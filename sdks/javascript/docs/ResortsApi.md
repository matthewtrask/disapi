# WaltDisneyWorldApi.ResortsApi

All URIs are relative to *http://homestead.test/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createResort**](ResortsApi.md#createResort) | **POST** /resorts | Create a new resort resource
[**deleteResort**](ResortsApi.md#deleteResort) | **DELETE** /resorts/{id} | Delete resort resource by ID
[**editResort**](ResortsApi.md#editResort) | **PUT** /resorts/{id} | Edit a specific resort resource by ID
[**getResort**](ResortsApi.md#getResort) | **GET** /resorts/{id} | List a specific resort resource by ID
[**getResorts**](ResortsApi.md#getResorts) | **GET** /resorts | List resorts at Walt Disney World


<a name="createResort"></a>
# **createResort**
> createResort(opts)

Create a new resort resource

Create a new resort resource for the Walt Disney World Resort

### Example
```javascript
var WaltDisneyWorldApi = require('walt_disney_world_api');

var apiInstance = new WaltDisneyWorldApi.ResortsApi();
var opts = {
  'name': "name_example", // String | 
  'parkId': 56, // Number | 
  'openingYear': 56, // Number | 
  'resortType': "resortType_example", // String | 
  'transportOptions': "transportOptions_example", // String | 
  'category': "category_example", // String | 
  'numOfRooms': 56, // Number | 
  'quickServiceRestaurants': true, // Boolean | 
  'tableServiceRestaurants': true, // Boolean | 
  'giftShop': true, // Boolean | 
  'arcade': true, // Boolean | 
  'pool': true // Boolean | 
};
var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully.');
  }
};
apiInstance.createResort(opts, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **String**|  | [optional] 
 **parkId** | **Number**|  | [optional] 
 **openingYear** | **Number**|  | [optional] 
 **resortType** | **String**|  | [optional] 
 **transportOptions** | **String**|  | [optional] 
 **category** | **String**|  | [optional] 
 **numOfRooms** | **Number**|  | [optional] 
 **quickServiceRestaurants** | **Boolean**|  | [optional] 
 **tableServiceRestaurants** | **Boolean**|  | [optional] 
 **giftShop** | **Boolean**|  | [optional] 
 **arcade** | **Boolean**|  | [optional] 
 **pool** | **Boolean**|  | [optional] 

### Return type

null (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

<a name="deleteResort"></a>
# **deleteResort**
> deleteResort()

Delete resort resource by ID

### Example
```javascript
var WaltDisneyWorldApi = require('walt_disney_world_api');

var apiInstance = new WaltDisneyWorldApi.ResortsApi();
var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully.');
  }
};
apiInstance.deleteResort(callback);
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

<a name="editResort"></a>
# **editResort**
> editResort(opts)

Edit a specific resort resource by ID

Find and edit a specific resort resource by its ID

### Example
```javascript
var WaltDisneyWorldApi = require('walt_disney_world_api');

var apiInstance = new WaltDisneyWorldApi.ResortsApi();
var opts = {
  'name': "name_example", // String | 
  'parkId': 56, // Number | 
  'openingYear': 56, // Number | 
  'resortType': "resortType_example", // String | 
  'transportOptions': "transportOptions_example", // String | 
  'category': "category_example", // String | 
  'numOfRooms': 56, // Number | 
  'quickServiceRestaurants': true, // Boolean | 
  'tableServiceRestaurants': true, // Boolean | 
  'giftShop': true, // Boolean | 
  'arcade': true, // Boolean | 
  'pool': true // Boolean | 
};
var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully.');
  }
};
apiInstance.editResort(opts, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **String**|  | [optional] 
 **parkId** | **Number**|  | [optional] 
 **openingYear** | **Number**|  | [optional] 
 **resortType** | **String**|  | [optional] 
 **transportOptions** | **String**|  | [optional] 
 **category** | **String**|  | [optional] 
 **numOfRooms** | **Number**|  | [optional] 
 **quickServiceRestaurants** | **Boolean**|  | [optional] 
 **tableServiceRestaurants** | **Boolean**|  | [optional] 
 **giftShop** | **Boolean**|  | [optional] 
 **arcade** | **Boolean**|  | [optional] 
 **pool** | **Boolean**|  | [optional] 

### Return type

null (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

<a name="getResort"></a>
# **getResort**
> InlineResponse2001 getResort(opts)

List a specific resort resource by ID

Get a specific resort resource by ID

### Example
```javascript
var WaltDisneyWorldApi = require('walt_disney_world_api');

var apiInstance = new WaltDisneyWorldApi.ResortsApi();
var opts = {
  'name': "name_example", // String | 
  'parkId': 56, // Number | 
  'openingYear': 56, // Number | 
  'resortType': "resortType_example", // String | 
  'transportOptions': "transportOptions_example", // String | 
  'category': "category_example", // String | 
  'numOfRooms': 56, // Number | 
  'quickServiceRestaurants': true, // Boolean | 
  'tableServiceRestaurants': true, // Boolean | 
  'giftShop': true, // Boolean | 
  'arcade': true, // Boolean | 
  'pool': true // Boolean | 
};
var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.getResort(opts, callback);
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **String**|  | [optional] 
 **parkId** | **Number**|  | [optional] 
 **openingYear** | **Number**|  | [optional] 
 **resortType** | **String**|  | [optional] 
 **transportOptions** | **String**|  | [optional] 
 **category** | **String**|  | [optional] 
 **numOfRooms** | **Number**|  | [optional] 
 **quickServiceRestaurants** | **Boolean**|  | [optional] 
 **tableServiceRestaurants** | **Boolean**|  | [optional] 
 **giftShop** | **Boolean**|  | [optional] 
 **arcade** | **Boolean**|  | [optional] 
 **pool** | **Boolean**|  | [optional] 

### Return type

[**InlineResponse2001**](InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

<a name="getResorts"></a>
# **getResorts**
> InlineResponse200 getResorts()

List resorts at Walt Disney World

Get a list of resorts at Walt Disney World

### Example
```javascript
var WaltDisneyWorldApi = require('walt_disney_world_api');

var apiInstance = new WaltDisneyWorldApi.ResortsApi();
var callback = function(error, data, response) {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
};
apiInstance.getResorts(callback);
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**InlineResponse200**](InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

