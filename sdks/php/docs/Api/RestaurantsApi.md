# OpenAPI\Client\RestaurantsApi

All URIs are relative to *http://homestead.test/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRestaurant**](RestaurantsApi.md#createRestaurant) | **POST** /restaurants | Create a new restaurant resource
[**deleteRestaurant**](RestaurantsApi.md#deleteRestaurant) | **DELETE** /restaurants/{id} | Remove a resource from the restaurants collection
[**editRestaurant**](RestaurantsApi.md#editRestaurant) | **PUT** /restaurants/{id} | Edit a single restaurant resource in the collection by ID
[**getRestaurant**](RestaurantsApi.md#getRestaurant) | **GET** /restaurants/{id} | List a single restaurant resource from the collection by ID
[**getRestaurants**](RestaurantsApi.md#getRestaurants) | **GET** /restaurants | List restaurants at Walt Disney World


# **createRestaurant**
> createRestaurant($name, $park_id, $quick_service, $table_service, $alcohol, $dining_plan, $meal_types, $food_types)

Create a new restaurant resource

Create a new restaurnat resource at Walt Disney World

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\RestaurantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | 
$park_id = 56; // int | 
$quick_service = True; // bool | 
$table_service = True; // bool | 
$alcohol = True; // bool | 
$dining_plan = True; // bool | 
$meal_types = 'meal_types_example'; // string[] | 
$food_types = 'food_types_example'; // string[] | 

try {
    $apiInstance->createRestaurant($name, $park_id, $quick_service, $table_service, $alcohol, $dining_plan, $meal_types, $food_types);
} catch (Exception $e) {
    echo 'Exception when calling RestaurantsApi->createRestaurant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  | [optional]
 **park_id** | **int**|  | [optional]
 **quick_service** | **bool**|  | [optional]
 **table_service** | **bool**|  | [optional]
 **alcohol** | **bool**|  | [optional]
 **dining_plan** | **bool**|  | [optional]
 **meal_types** | [**string[]**](../Model/string.md)|  | [optional]
 **food_types** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRestaurant**
> deleteRestaurant()

Remove a resource from the restaurants collection

Remove a resource from the restaurants collection by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\RestaurantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->deleteRestaurant();
} catch (Exception $e) {
    echo 'Exception when calling RestaurantsApi->deleteRestaurant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editRestaurant**
> editRestaurant($name, $park_id, $quick_service, $table_service, $alcohol, $dining_plan, $meal_types, $food_types)

Edit a single restaurant resource in the collection by ID

Edit a restaurant by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\RestaurantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | 
$park_id = 56; // int | 
$quick_service = True; // bool | 
$table_service = True; // bool | 
$alcohol = True; // bool | 
$dining_plan = True; // bool | 
$meal_types = 'meal_types_example'; // string[] | 
$food_types = 'food_types_example'; // string[] | 

try {
    $apiInstance->editRestaurant($name, $park_id, $quick_service, $table_service, $alcohol, $dining_plan, $meal_types, $food_types);
} catch (Exception $e) {
    echo 'Exception when calling RestaurantsApi->editRestaurant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  | [optional]
 **park_id** | **int**|  | [optional]
 **quick_service** | **bool**|  | [optional]
 **table_service** | **bool**|  | [optional]
 **alcohol** | **bool**|  | [optional]
 **dining_plan** | **bool**|  | [optional]
 **meal_types** | [**string[]**](../Model/string.md)|  | [optional]
 **food_types** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRestaurant**
> \OpenAPI\Client\Model\InlineResponse2005 getRestaurant()

List a single restaurant resource from the collection by ID

Get a single restaurant resource by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\RestaurantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getRestaurant();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RestaurantsApi->getRestaurant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRestaurants**
> \OpenAPI\Client\Model\InlineResponse2004 getRestaurants()

List restaurants at Walt Disney World

Get a list of restaurants at all parks

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\RestaurantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getRestaurants();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RestaurantsApi->getRestaurants: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

