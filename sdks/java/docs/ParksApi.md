# ParksApi

All URIs are relative to *https://disapi.co/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPark**](ParksApi.md#createPark) | **POST** /parks | Create a new park resource in the collection
[**deletePark**](ParksApi.md#deletePark) | **DELETE** /parks/{id} | Remove a resource from the collection
[**editPark**](ParksApi.md#editPark) | **PUT** /parks/{id} | Edit a resource by ID
[**getPark**](ParksApi.md#getPark) | **GET** /parks/{id} | List a park by ID
[**getParks**](ParksApi.md#getParks) | **GET** /parks | List all parks at Walt Disney World


<a name="createPark"></a>
# **createPark**
> createPark(name, centralAttraction, yearOpened, rideCount, restaurantCount, resortCount, size, fireworks)

Create a new park resource in the collection

Create a new park at Walt Disney World

### Example
```java
// Import classes:
//import org.openapitools.client.ApiException;
//import org.openapitools.client.api.ParksApi;


ParksApi apiInstance = new ParksApi();
String name = "null"; // String | 
String centralAttraction = "null"; // String | 
Integer yearOpened = null; // Integer | 
Integer rideCount = null; // Integer | 
Integer restaurantCount = null; // Integer | 
Integer resortCount = null; // Integer | 
Integer size = null; // Integer | 
Boolean fireworks = null; // Boolean | 
try {
    apiInstance.createPark(name, centralAttraction, yearOpened, rideCount, restaurantCount, resortCount, size, fireworks);
} catch (ApiException e) {
    System.err.println("Exception when calling ParksApi#createPark");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **String**|  | [optional] [default to null]
 **centralAttraction** | **String**|  | [optional] [default to null]
 **yearOpened** | **Integer**|  | [optional] [default to null]
 **rideCount** | **Integer**|  | [optional] [default to null]
 **restaurantCount** | **Integer**|  | [optional] [default to null]
 **resortCount** | **Integer**|  | [optional] [default to null]
 **size** | **Integer**|  | [optional] [default to null]
 **fireworks** | **Boolean**|  | [optional] [default to null]

### Return type

null (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

<a name="deletePark"></a>
# **deletePark**
> deletePark(id)

Remove a resource from the collection

Remove a resource from the collection by ID

### Example
```java
// Import classes:
//import org.openapitools.client.ApiException;
//import org.openapitools.client.api.ParksApi;


ParksApi apiInstance = new ParksApi();
Integer id = 56; // Integer | The ID of the park
try {
    apiInstance.deletePark(id);
} catch (ApiException e) {
    System.err.println("Exception when calling ParksApi#deletePark");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **Integer**| The ID of the park |

### Return type

null (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

<a name="editPark"></a>
# **editPark**
> editPark(id)

Edit a resource by ID

Edit a park resource by an ID

### Example
```java
// Import classes:
//import org.openapitools.client.ApiException;
//import org.openapitools.client.api.ParksApi;


ParksApi apiInstance = new ParksApi();
Integer id = 56; // Integer | The ID of the park
try {
    apiInstance.editPark(id);
} catch (ApiException e) {
    System.err.println("Exception when calling ParksApi#editPark");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **Integer**| The ID of the park |

### Return type

null (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

<a name="getPark"></a>
# **getPark**
> InlineResponse2007 getPark(id)

List a park by ID

Get a park at Walt Disney World by ID

### Example
```java
// Import classes:
//import org.openapitools.client.ApiException;
//import org.openapitools.client.api.ParksApi;


ParksApi apiInstance = new ParksApi();
Integer id = 56; // Integer | The ID of the park
try {
    InlineResponse2007 result = apiInstance.getPark(id);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling ParksApi#getPark");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **Integer**| The ID of the park |

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
```java
// Import classes:
//import org.openapitools.client.ApiException;
//import org.openapitools.client.api.ParksApi;


ParksApi apiInstance = new ParksApi();
try {
    InlineResponse2006 result = apiInstance.getParks();
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling ParksApi#getParks");
    e.printStackTrace();
}
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

