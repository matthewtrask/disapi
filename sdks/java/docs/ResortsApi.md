# ResortsApi

All URIs are relative to *https://disapi.co/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createResort**](ResortsApi.md#createResort) | **POST** /resorts | Create a new resort resource
[**deleteResort**](ResortsApi.md#deleteResort) | **DELETE** /resorts/{id} | Delete resort resource by ID
[**editResort**](ResortsApi.md#editResort) | **PUT** /resorts/{id} | Edit a specific resort resource by ID
[**getResort**](ResortsApi.md#getResort) | **GET** /resorts/{id} | List a specific resort resource by ID
[**getResorts**](ResortsApi.md#getResorts) | **GET** /resorts | List resorts at Walt Disney World


<a name="createResort"></a>
# **createResort**
> createResort(name, parkId, openingYear, resortType, transportOptions, category, numOfRooms, quickServiceRestaurants, tableServiceRestaurants, giftShop, arcade, pool)

Create a new resort resource

Create a new resort resource for the Walt Disney World Resort

### Example
```java
// Import classes:
//import org.openapitools.client.ApiException;
//import org.openapitools.client.api.ResortsApi;


ResortsApi apiInstance = new ResortsApi();
String name = "null"; // String | 
Integer parkId = null; // Integer | 
Integer openingYear = null; // Integer | 
String resortType = "null"; // String | 
String transportOptions = "null"; // String | 
String category = "null"; // String | 
Integer numOfRooms = null; // Integer | 
Boolean quickServiceRestaurants = null; // Boolean | 
Boolean tableServiceRestaurants = null; // Boolean | 
Boolean giftShop = null; // Boolean | 
Boolean arcade = null; // Boolean | 
Boolean pool = null; // Boolean | 
try {
    apiInstance.createResort(name, parkId, openingYear, resortType, transportOptions, category, numOfRooms, quickServiceRestaurants, tableServiceRestaurants, giftShop, arcade, pool);
} catch (ApiException e) {
    System.err.println("Exception when calling ResortsApi#createResort");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **String**|  | [optional] [default to null]
 **parkId** | **Integer**|  | [optional] [default to null]
 **openingYear** | **Integer**|  | [optional] [default to null]
 **resortType** | **String**|  | [optional] [default to null]
 **transportOptions** | **String**|  | [optional] [default to null]
 **category** | **String**|  | [optional] [default to null]
 **numOfRooms** | **Integer**|  | [optional] [default to null]
 **quickServiceRestaurants** | **Boolean**|  | [optional] [default to null]
 **tableServiceRestaurants** | **Boolean**|  | [optional] [default to null]
 **giftShop** | **Boolean**|  | [optional] [default to null]
 **arcade** | **Boolean**|  | [optional] [default to null]
 **pool** | **Boolean**|  | [optional] [default to null]

### Return type

null (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

<a name="deleteResort"></a>
# **deleteResort**
> deleteResort(id)

Delete resort resource by ID

### Example
```java
// Import classes:
//import org.openapitools.client.ApiException;
//import org.openapitools.client.api.ResortsApi;


ResortsApi apiInstance = new ResortsApi();
Integer id = 56; // Integer | The ID of the resort
try {
    apiInstance.deleteResort(id);
} catch (ApiException e) {
    System.err.println("Exception when calling ResortsApi#deleteResort");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **Integer**| The ID of the resort |

### Return type

null (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

<a name="editResort"></a>
# **editResort**
> editResort(id, name, parkId, openingYear, resortType, transportOptions, category, numOfRooms, quickServiceRestaurants, tableServiceRestaurants, giftShop, arcade, pool)

Edit a specific resort resource by ID

Find and edit a specific resort resource by its ID

### Example
```java
// Import classes:
//import org.openapitools.client.ApiException;
//import org.openapitools.client.api.ResortsApi;


ResortsApi apiInstance = new ResortsApi();
Integer id = 56; // Integer | The ID of the resort
String name = "null"; // String | 
Integer parkId = null; // Integer | 
Integer openingYear = null; // Integer | 
String resortType = "null"; // String | 
String transportOptions = "null"; // String | 
String category = "null"; // String | 
Integer numOfRooms = null; // Integer | 
Boolean quickServiceRestaurants = null; // Boolean | 
Boolean tableServiceRestaurants = null; // Boolean | 
Boolean giftShop = null; // Boolean | 
Boolean arcade = null; // Boolean | 
Boolean pool = null; // Boolean | 
try {
    apiInstance.editResort(id, name, parkId, openingYear, resortType, transportOptions, category, numOfRooms, quickServiceRestaurants, tableServiceRestaurants, giftShop, arcade, pool);
} catch (ApiException e) {
    System.err.println("Exception when calling ResortsApi#editResort");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **Integer**| The ID of the resort |
 **name** | **String**|  | [optional] [default to null]
 **parkId** | **Integer**|  | [optional] [default to null]
 **openingYear** | **Integer**|  | [optional] [default to null]
 **resortType** | **String**|  | [optional] [default to null]
 **transportOptions** | **String**|  | [optional] [default to null]
 **category** | **String**|  | [optional] [default to null]
 **numOfRooms** | **Integer**|  | [optional] [default to null]
 **quickServiceRestaurants** | **Boolean**|  | [optional] [default to null]
 **tableServiceRestaurants** | **Boolean**|  | [optional] [default to null]
 **giftShop** | **Boolean**|  | [optional] [default to null]
 **arcade** | **Boolean**|  | [optional] [default to null]
 **pool** | **Boolean**|  | [optional] [default to null]

### Return type

null (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

<a name="getResort"></a>
# **getResort**
> InlineResponse2001 getResort(id, name, parkId, openingYear, resortType, transportOptions, category, numOfRooms, quickServiceRestaurants, tableServiceRestaurants, giftShop, arcade, pool)

List a specific resort resource by ID

Get a specific resort resource by ID

### Example
```java
// Import classes:
//import org.openapitools.client.ApiException;
//import org.openapitools.client.api.ResortsApi;


ResortsApi apiInstance = new ResortsApi();
Integer id = 56; // Integer | The ID of the resort
String name = "null"; // String | 
Integer parkId = null; // Integer | 
Integer openingYear = null; // Integer | 
String resortType = "null"; // String | 
String transportOptions = "null"; // String | 
String category = "null"; // String | 
Integer numOfRooms = null; // Integer | 
Boolean quickServiceRestaurants = null; // Boolean | 
Boolean tableServiceRestaurants = null; // Boolean | 
Boolean giftShop = null; // Boolean | 
Boolean arcade = null; // Boolean | 
Boolean pool = null; // Boolean | 
try {
    InlineResponse2001 result = apiInstance.getResort(id, name, parkId, openingYear, resortType, transportOptions, category, numOfRooms, quickServiceRestaurants, tableServiceRestaurants, giftShop, arcade, pool);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling ResortsApi#getResort");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **Integer**| The ID of the resort |
 **name** | **String**|  | [optional] [default to null]
 **parkId** | **Integer**|  | [optional] [default to null]
 **openingYear** | **Integer**|  | [optional] [default to null]
 **resortType** | **String**|  | [optional] [default to null]
 **transportOptions** | **String**|  | [optional] [default to null]
 **category** | **String**|  | [optional] [default to null]
 **numOfRooms** | **Integer**|  | [optional] [default to null]
 **quickServiceRestaurants** | **Boolean**|  | [optional] [default to null]
 **tableServiceRestaurants** | **Boolean**|  | [optional] [default to null]
 **giftShop** | **Boolean**|  | [optional] [default to null]
 **arcade** | **Boolean**|  | [optional] [default to null]
 **pool** | **Boolean**|  | [optional] [default to null]

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
```java
// Import classes:
//import org.openapitools.client.ApiException;
//import org.openapitools.client.api.ResortsApi;


ResortsApi apiInstance = new ResortsApi();
try {
    InlineResponse200 result = apiInstance.getResorts();
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling ResortsApi#getResorts");
    e.printStackTrace();
}
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

