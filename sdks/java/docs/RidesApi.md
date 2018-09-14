# RidesApi

All URIs are relative to *http://homestead.test/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRides**](RidesApi.md#createRides) | **POST** /rides | Create a new ride resource
[**deleteRide**](RidesApi.md#deleteRide) | **DELETE** /rides/{id} | Delete ride resource by ID
[**editRide**](RidesApi.md#editRide) | **PUT** /rides/{id} | Edit a ride by ID
[**getRide**](RidesApi.md#getRide) | **GET** /rides/{id} | Get ride by ID
[**getRides**](RidesApi.md#getRides) | **GET** /rides | List rides at Walt Disney World


<a name="createRides"></a>
# **createRides**
> createRides(name, parkId, openingYear, rideType, rideVehicle, interactiveQueue, giftStoreFinish, singleRider, ridePhoto, heightRestriction)

Create a new ride resource

Create a new ride resource for the Walt Disney World Resort

### Example
```java
// Import classes:
//import org.openapitools.client.ApiException;
//import org.openapitools.client.api.RidesApi;


RidesApi apiInstance = new RidesApi();
String name = "null"; // String | 
Integer parkId = null; // Integer | 
Integer openingYear = null; // Integer | 
String rideType = "null"; // String | 
String rideVehicle = "null"; // String | 
Boolean interactiveQueue = null; // Boolean | 
Boolean giftStoreFinish = null; // Boolean | 
Integer singleRider = null; // Integer | 
Integer ridePhoto = null; // Integer | 
Integer heightRestriction = null; // Integer | 
try {
    apiInstance.createRides(name, parkId, openingYear, rideType, rideVehicle, interactiveQueue, giftStoreFinish, singleRider, ridePhoto, heightRestriction);
} catch (ApiException e) {
    System.err.println("Exception when calling RidesApi#createRides");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **String**|  | [optional] [default to null]
 **parkId** | **Integer**|  | [optional] [default to null]
 **openingYear** | **Integer**|  | [optional] [default to null]
 **rideType** | **String**|  | [optional] [default to null]
 **rideVehicle** | **String**|  | [optional] [default to null]
 **interactiveQueue** | **Boolean**|  | [optional] [default to null]
 **giftStoreFinish** | **Boolean**|  | [optional] [default to null]
 **singleRider** | **Integer**|  | [optional] [default to null]
 **ridePhoto** | **Integer**|  | [optional] [default to null]
 **heightRestriction** | **Integer**|  | [optional] [default to null]

### Return type

null (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

<a name="deleteRide"></a>
# **deleteRide**
> deleteRide()

Delete ride resource by ID

### Example
```java
// Import classes:
//import org.openapitools.client.ApiException;
//import org.openapitools.client.api.RidesApi;


RidesApi apiInstance = new RidesApi();
try {
    apiInstance.deleteRide();
} catch (ApiException e) {
    System.err.println("Exception when calling RidesApi#deleteRide");
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

<a name="editRide"></a>
# **editRide**
> editRide(name, parkId, openingYear, rideType, rideVehicle, interactiveQueue, giftStoreFinish, singleRider, ridePhoto, heightRestriction)

Edit a ride by ID

Edit a ride in the resource collection by ID

### Example
```java
// Import classes:
//import org.openapitools.client.ApiException;
//import org.openapitools.client.api.RidesApi;


RidesApi apiInstance = new RidesApi();
String name = "null"; // String | 
Integer parkId = null; // Integer | 
Integer openingYear = null; // Integer | 
String rideType = "null"; // String | 
String rideVehicle = "null"; // String | 
Boolean interactiveQueue = null; // Boolean | 
Boolean giftStoreFinish = null; // Boolean | 
Integer singleRider = null; // Integer | 
Integer ridePhoto = null; // Integer | 
Integer heightRestriction = null; // Integer | 
try {
    apiInstance.editRide(name, parkId, openingYear, rideType, rideVehicle, interactiveQueue, giftStoreFinish, singleRider, ridePhoto, heightRestriction);
} catch (ApiException e) {
    System.err.println("Exception when calling RidesApi#editRide");
    e.printStackTrace();
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **String**|  | [optional] [default to null]
 **parkId** | **Integer**|  | [optional] [default to null]
 **openingYear** | **Integer**|  | [optional] [default to null]
 **rideType** | **String**|  | [optional] [default to null]
 **rideVehicle** | **String**|  | [optional] [default to null]
 **interactiveQueue** | **Boolean**|  | [optional] [default to null]
 **giftStoreFinish** | **Boolean**|  | [optional] [default to null]
 **singleRider** | **Integer**|  | [optional] [default to null]
 **ridePhoto** | **Integer**|  | [optional] [default to null]
 **heightRestriction** | **Integer**|  | [optional] [default to null]

### Return type

null (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

<a name="getRide"></a>
# **getRide**
> InlineResponse2003 getRide()

Get ride by ID

Get a ride at Walt Disney World by ID

### Example
```java
// Import classes:
//import org.openapitools.client.ApiException;
//import org.openapitools.client.api.RidesApi;


RidesApi apiInstance = new RidesApi();
try {
    InlineResponse2003 result = apiInstance.getRide();
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling RidesApi#getRide");
    e.printStackTrace();
}
```

### Parameters
This endpoint does not need any parameter.

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
```java
// Import classes:
//import org.openapitools.client.ApiException;
//import org.openapitools.client.api.RidesApi;


RidesApi apiInstance = new RidesApi();
try {
    InlineResponse2002 result = apiInstance.getRides();
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling RidesApi#getRides");
    e.printStackTrace();
}
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

