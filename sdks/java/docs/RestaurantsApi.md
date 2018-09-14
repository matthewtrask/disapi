# RestaurantsApi

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
> createRestaurant(name, parkId, quickService, tableService, alcohol, diningPlan, mealTypes, foodTypes)

Create a new restaurant resource

Create a new restaurnat resource at Walt Disney World

### Example
```java
// Import classes:
//import org.openapitools.client.ApiException;
//import org.openapitools.client.api.RestaurantsApi;


RestaurantsApi apiInstance = new RestaurantsApi();
String name = "null"; // String | 
Integer parkId = null; // Integer | 
Boolean quickService = null; // Boolean | 
Boolean tableService = null; // Boolean | 
Boolean alcohol = null; // Boolean | 
Boolean diningPlan = null; // Boolean | 
List<String> mealTypes = "null"; // List<String> | 
List<String> foodTypes = "null"; // List<String> | 
try {
    apiInstance.createRestaurant(name, parkId, quickService, tableService, alcohol, diningPlan, mealTypes, foodTypes);
} catch (ApiException e) {
    System.err.println("Exception when calling RestaurantsApi#createRestaurant");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **String**|  | [optional] [default to null]
 **parkId** | **Integer**|  | [optional] [default to null]
 **quickService** | **Boolean**|  | [optional] [default to null]
 **tableService** | **Boolean**|  | [optional] [default to null]
 **alcohol** | **Boolean**|  | [optional] [default to null]
 **diningPlan** | **Boolean**|  | [optional] [default to null]
 **mealTypes** | [**List&lt;String&gt;**](String.md)|  | [optional] [default to null]
 **foodTypes** | [**List&lt;String&gt;**](String.md)|  | [optional] [default to null]

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
```java
// Import classes:
//import org.openapitools.client.ApiException;
//import org.openapitools.client.api.RestaurantsApi;


RestaurantsApi apiInstance = new RestaurantsApi();
try {
    apiInstance.deleteRestaurant();
} catch (ApiException e) {
    System.err.println("Exception when calling RestaurantsApi#deleteRestaurant");
    e.printStackTrace();
}
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
> editRestaurant(name, parkId, quickService, tableService, alcohol, diningPlan, mealTypes, foodTypes)

Edit a single restaurant resource in the collection by ID

Edit a restaurant by ID

### Example
```java
// Import classes:
//import org.openapitools.client.ApiException;
//import org.openapitools.client.api.RestaurantsApi;


RestaurantsApi apiInstance = new RestaurantsApi();
String name = "null"; // String | 
Integer parkId = null; // Integer | 
Boolean quickService = null; // Boolean | 
Boolean tableService = null; // Boolean | 
Boolean alcohol = null; // Boolean | 
Boolean diningPlan = null; // Boolean | 
List<String> mealTypes = "null"; // List<String> | 
List<String> foodTypes = "null"; // List<String> | 
try {
    apiInstance.editRestaurant(name, parkId, quickService, tableService, alcohol, diningPlan, mealTypes, foodTypes);
} catch (ApiException e) {
    System.err.println("Exception when calling RestaurantsApi#editRestaurant");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **String**|  | [optional] [default to null]
 **parkId** | **Integer**|  | [optional] [default to null]
 **quickService** | **Boolean**|  | [optional] [default to null]
 **tableService** | **Boolean**|  | [optional] [default to null]
 **alcohol** | **Boolean**|  | [optional] [default to null]
 **diningPlan** | **Boolean**|  | [optional] [default to null]
 **mealTypes** | [**List&lt;String&gt;**](String.md)|  | [optional] [default to null]
 **foodTypes** | [**List&lt;String&gt;**](String.md)|  | [optional] [default to null]

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
```java
// Import classes:
//import org.openapitools.client.ApiException;
//import org.openapitools.client.api.RestaurantsApi;


RestaurantsApi apiInstance = new RestaurantsApi();
try {
    InlineResponse2005 result = apiInstance.getRestaurant();
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling RestaurantsApi#getRestaurant");
    e.printStackTrace();
}
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
```java
// Import classes:
//import org.openapitools.client.ApiException;
//import org.openapitools.client.api.RestaurantsApi;


RestaurantsApi apiInstance = new RestaurantsApi();
try {
    InlineResponse2004 result = apiInstance.getRestaurants();
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling RestaurantsApi#getRestaurants");
    e.printStackTrace();
}
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

