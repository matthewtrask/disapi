# OpenAPI\Client\ParksApi

All URIs are relative to *http://homestead.test/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPark**](ParksApi.md#createPark) | **POST** /parks | Create a new park resource in the collection
[**deletePark**](ParksApi.md#deletePark) | **DELETE** /parks/{id} | Remove a resource from the collection
[**editPark**](ParksApi.md#editPark) | **PUT** /parks/{id} | Edit a resource by ID
[**getPark**](ParksApi.md#getPark) | **GET** /parks/{id} | List a park by ID
[**getParks**](ParksApi.md#getParks) | **GET** /parks | List all parks at Walt Disney World


# **createPark**
> createPark($name, $central_attraction, $year_opened, $ride_count, $restaurant_count, $resort_count, $size, $fireworks)

Create a new park resource in the collection

Create a new park at Walt Disney World

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\ParksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | 
$central_attraction = 'central_attraction_example'; // string | 
$year_opened = 56; // int | 
$ride_count = 56; // int | 
$restaurant_count = 56; // int | 
$resort_count = 56; // int | 
$size = 56; // int | 
$fireworks = True; // bool | 

try {
    $apiInstance->createPark($name, $central_attraction, $year_opened, $ride_count, $restaurant_count, $resort_count, $size, $fireworks);
} catch (Exception $e) {
    echo 'Exception when calling ParksApi->createPark: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  | [optional]
 **central_attraction** | **string**|  | [optional]
 **year_opened** | **int**|  | [optional]
 **ride_count** | **int**|  | [optional]
 **restaurant_count** | **int**|  | [optional]
 **resort_count** | **int**|  | [optional]
 **size** | **int**|  | [optional]
 **fireworks** | **bool**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePark**
> deletePark()

Remove a resource from the collection

Remove a resource from the collection by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\ParksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->deletePark();
} catch (Exception $e) {
    echo 'Exception when calling ParksApi->deletePark: ', $e->getMessage(), PHP_EOL;
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

# **editPark**
> editPark()

Edit a resource by ID

Edit a park resource by an ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\ParksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->editPark();
} catch (Exception $e) {
    echo 'Exception when calling ParksApi->editPark: ', $e->getMessage(), PHP_EOL;
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

# **getPark**
> \OpenAPI\Client\Model\InlineResponse2007 getPark()

List a park by ID

Get a park at Walt Disney World by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\ParksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getPark();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParksApi->getPark: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getParks**
> \OpenAPI\Client\Model\InlineResponse2006 getParks()

List all parks at Walt Disney World

Get a list of all parks at Walt Disney World

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new OpenAPI\Client\Api\ParksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getParks();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParksApi->getParks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

