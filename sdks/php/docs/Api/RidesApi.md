# OpenAPI\Client\RidesApi

All URIs are relative to *https://disapi.co/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRides**](RidesApi.md#createRides) | **POST** /rides | Create a new ride resource
[**deleteRide**](RidesApi.md#deleteRide) | **DELETE** /rides/{id} | Delete ride resource by ID
[**editRide**](RidesApi.md#editRide) | **PUT** /rides/{id} | Edit a ride by ID
[**getRide**](RidesApi.md#getRide) | **GET** /rides/{id} | Get ride by ID
[**getRides**](RidesApi.md#getRides) | **GET** /rides | List rides at Walt Disney World


# **createRides**
> createRides($name, $park_id, $opening_year, $ride_type, $ride_vehicle, $interactive_queue, $gift_store_finish, $single_rider, $ride_photo, $height_restriction)

Create a new ride resource

Create a new ride resource for the Walt Disney World Resort

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\RidesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | 
$park_id = 56; // int | 
$opening_year = 56; // int | 
$ride_type = 'ride_type_example'; // string | 
$ride_vehicle = 'ride_vehicle_example'; // string | 
$interactive_queue = True; // bool | 
$gift_store_finish = True; // bool | 
$single_rider = 56; // int | 
$ride_photo = 56; // int | 
$height_restriction = 56; // int | 

try {
    $apiInstance->createRides($name, $park_id, $opening_year, $ride_type, $ride_vehicle, $interactive_queue, $gift_store_finish, $single_rider, $ride_photo, $height_restriction);
} catch (Exception $e) {
    echo 'Exception when calling RidesApi->createRides: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  | [optional]
 **park_id** | **int**|  | [optional]
 **opening_year** | **int**|  | [optional]
 **ride_type** | **string**|  | [optional]
 **ride_vehicle** | **string**|  | [optional]
 **interactive_queue** | **bool**|  | [optional]
 **gift_store_finish** | **bool**|  | [optional]
 **single_rider** | **int**|  | [optional]
 **ride_photo** | **int**|  | [optional]
 **height_restriction** | **int**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRide**
> deleteRide($id)

Delete ride resource by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\RidesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | The ID of the ride

try {
    $apiInstance->deleteRide($id);
} catch (Exception $e) {
    echo 'Exception when calling RidesApi->deleteRide: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the ride |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editRide**
> editRide($id, $name, $park_id, $opening_year, $ride_type, $ride_vehicle, $interactive_queue, $gift_store_finish, $single_rider, $ride_photo, $height_restriction)

Edit a ride by ID

Edit a ride in the resource collection by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\RidesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | The ID of the ride
$name = 'name_example'; // string | 
$park_id = 56; // int | 
$opening_year = 56; // int | 
$ride_type = 'ride_type_example'; // string | 
$ride_vehicle = 'ride_vehicle_example'; // string | 
$interactive_queue = True; // bool | 
$gift_store_finish = True; // bool | 
$single_rider = 56; // int | 
$ride_photo = 56; // int | 
$height_restriction = 56; // int | 

try {
    $apiInstance->editRide($id, $name, $park_id, $opening_year, $ride_type, $ride_vehicle, $interactive_queue, $gift_store_finish, $single_rider, $ride_photo, $height_restriction);
} catch (Exception $e) {
    echo 'Exception when calling RidesApi->editRide: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the ride |
 **name** | **string**|  | [optional]
 **park_id** | **int**|  | [optional]
 **opening_year** | **int**|  | [optional]
 **ride_type** | **string**|  | [optional]
 **ride_vehicle** | **string**|  | [optional]
 **interactive_queue** | **bool**|  | [optional]
 **gift_store_finish** | **bool**|  | [optional]
 **single_rider** | **int**|  | [optional]
 **ride_photo** | **int**|  | [optional]
 **height_restriction** | **int**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRide**
> \OpenAPI\Client\Model\InlineResponse2003 getRide($id)

Get ride by ID

Get a ride at Walt Disney World by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\RidesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | The ID of the ride

try {
    $result = $apiInstance->getRide($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RidesApi->getRide: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the ride |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRides**
> \OpenAPI\Client\Model\InlineResponse2002 getRides()

List rides at Walt Disney World

Get a list of rides at all Walt Disney World Parks

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\RidesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getRides();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RidesApi->getRides: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

