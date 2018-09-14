# OpenAPI\Client\ResortsApi

All URIs are relative to *https://disapi.co/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createResort**](ResortsApi.md#createResort) | **POST** /resorts | Create a new resort resource
[**deleteResort**](ResortsApi.md#deleteResort) | **DELETE** /resorts/{id} | Delete resort resource by ID
[**editResort**](ResortsApi.md#editResort) | **PUT** /resorts/{id} | Edit a specific resort resource by ID
[**getResort**](ResortsApi.md#getResort) | **GET** /resorts/{id} | List a specific resort resource by ID
[**getResorts**](ResortsApi.md#getResorts) | **GET** /resorts | List resorts at Walt Disney World


# **createResort**
> createResort($name, $park_id, $opening_year, $resort_type, $transport_options, $category, $num_of_rooms, $quick_service_restaurants, $table_service_restaurants, $gift_shop, $arcade, $pool)

Create a new resort resource

Create a new resort resource for the Walt Disney World Resort

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\ResortsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | 
$park_id = 56; // int | 
$opening_year = 56; // int | 
$resort_type = 'resort_type_example'; // string | 
$transport_options = 'transport_options_example'; // string | 
$category = 'category_example'; // string | 
$num_of_rooms = 56; // int | 
$quick_service_restaurants = True; // bool | 
$table_service_restaurants = True; // bool | 
$gift_shop = True; // bool | 
$arcade = True; // bool | 
$pool = True; // bool | 

try {
    $apiInstance->createResort($name, $park_id, $opening_year, $resort_type, $transport_options, $category, $num_of_rooms, $quick_service_restaurants, $table_service_restaurants, $gift_shop, $arcade, $pool);
} catch (Exception $e) {
    echo 'Exception when calling ResortsApi->createResort: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  | [optional]
 **park_id** | **int**|  | [optional]
 **opening_year** | **int**|  | [optional]
 **resort_type** | **string**|  | [optional]
 **transport_options** | **string**|  | [optional]
 **category** | **string**|  | [optional]
 **num_of_rooms** | **int**|  | [optional]
 **quick_service_restaurants** | **bool**|  | [optional]
 **table_service_restaurants** | **bool**|  | [optional]
 **gift_shop** | **bool**|  | [optional]
 **arcade** | **bool**|  | [optional]
 **pool** | **bool**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteResort**
> deleteResort($id)

Delete resort resource by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\ResortsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | The ID of the resort

try {
    $apiInstance->deleteResort($id);
} catch (Exception $e) {
    echo 'Exception when calling ResortsApi->deleteResort: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the resort |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editResort**
> editResort($id, $name, $park_id, $opening_year, $resort_type, $transport_options, $category, $num_of_rooms, $quick_service_restaurants, $table_service_restaurants, $gift_shop, $arcade, $pool)

Edit a specific resort resource by ID

Find and edit a specific resort resource by its ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\ResortsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | The ID of the resort
$name = 'name_example'; // string | 
$park_id = 56; // int | 
$opening_year = 56; // int | 
$resort_type = 'resort_type_example'; // string | 
$transport_options = 'transport_options_example'; // string | 
$category = 'category_example'; // string | 
$num_of_rooms = 56; // int | 
$quick_service_restaurants = True; // bool | 
$table_service_restaurants = True; // bool | 
$gift_shop = True; // bool | 
$arcade = True; // bool | 
$pool = True; // bool | 

try {
    $apiInstance->editResort($id, $name, $park_id, $opening_year, $resort_type, $transport_options, $category, $num_of_rooms, $quick_service_restaurants, $table_service_restaurants, $gift_shop, $arcade, $pool);
} catch (Exception $e) {
    echo 'Exception when calling ResortsApi->editResort: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the resort |
 **name** | **string**|  | [optional]
 **park_id** | **int**|  | [optional]
 **opening_year** | **int**|  | [optional]
 **resort_type** | **string**|  | [optional]
 **transport_options** | **string**|  | [optional]
 **category** | **string**|  | [optional]
 **num_of_rooms** | **int**|  | [optional]
 **quick_service_restaurants** | **bool**|  | [optional]
 **table_service_restaurants** | **bool**|  | [optional]
 **gift_shop** | **bool**|  | [optional]
 **arcade** | **bool**|  | [optional]
 **pool** | **bool**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getResort**
> \OpenAPI\Client\Model\InlineResponse2001 getResort($id, $name, $park_id, $opening_year, $resort_type, $transport_options, $category, $num_of_rooms, $quick_service_restaurants, $table_service_restaurants, $gift_shop, $arcade, $pool)

List a specific resort resource by ID

Get a specific resort resource by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\ResortsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | The ID of the resort
$name = 'name_example'; // string | 
$park_id = 56; // int | 
$opening_year = 56; // int | 
$resort_type = 'resort_type_example'; // string | 
$transport_options = 'transport_options_example'; // string | 
$category = 'category_example'; // string | 
$num_of_rooms = 56; // int | 
$quick_service_restaurants = True; // bool | 
$table_service_restaurants = True; // bool | 
$gift_shop = True; // bool | 
$arcade = True; // bool | 
$pool = True; // bool | 

try {
    $result = $apiInstance->getResort($id, $name, $park_id, $opening_year, $resort_type, $transport_options, $category, $num_of_rooms, $quick_service_restaurants, $table_service_restaurants, $gift_shop, $arcade, $pool);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResortsApi->getResort: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The ID of the resort |
 **name** | **string**|  | [optional]
 **park_id** | **int**|  | [optional]
 **opening_year** | **int**|  | [optional]
 **resort_type** | **string**|  | [optional]
 **transport_options** | **string**|  | [optional]
 **category** | **string**|  | [optional]
 **num_of_rooms** | **int**|  | [optional]
 **quick_service_restaurants** | **bool**|  | [optional]
 **table_service_restaurants** | **bool**|  | [optional]
 **gift_shop** | **bool**|  | [optional]
 **arcade** | **bool**|  | [optional]
 **pool** | **bool**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getResorts**
> \OpenAPI\Client\Model\InlineResponse200 getResorts()

List resorts at Walt Disney World

Get a list of resorts at Walt Disney World

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\ResortsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getResorts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResortsApi->getResorts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

