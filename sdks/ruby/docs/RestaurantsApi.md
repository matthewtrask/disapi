# OpenapiClient::RestaurantsApi

All URIs are relative to *https://disapi.co/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create_restaurant**](RestaurantsApi.md#create_restaurant) | **POST** /restaurants | Create a new restaurant resource
[**delete_restaurant**](RestaurantsApi.md#delete_restaurant) | **DELETE** /restaurants/{id} | Remove a resource from the restaurants collection
[**edit_restaurant**](RestaurantsApi.md#edit_restaurant) | **PUT** /restaurants/{id} | Edit a single restaurant resource in the collection by ID
[**get_restaurant**](RestaurantsApi.md#get_restaurant) | **GET** /restaurants/{id} | List a single restaurant resource from the collection by ID
[**get_restaurants**](RestaurantsApi.md#get_restaurants) | **GET** /restaurants | List restaurants at Walt Disney World


# **create_restaurant**
> create_restaurant(opts)

Create a new restaurant resource

Create a new restaurnat resource at Walt Disney World

### Example
```ruby
# load the gem
require 'openapi_client'

api_instance = OpenapiClient::RestaurantsApi.new
opts = {
  name: 'name_example', # String | 
  park_id: 56, # Integer | 
  quick_service: true, # BOOLEAN | 
  table_service: true, # BOOLEAN | 
  alcohol: true, # BOOLEAN | 
  dining_plan: true, # BOOLEAN | 
  meal_types: 'meal_types_example', # Array<String> | 
  food_types: 'food_types_example' # Array<String> | 
}

begin
  #Create a new restaurant resource
  api_instance.create_restaurant(opts)
rescue OpenapiClient::ApiError => e
  puts "Exception when calling RestaurantsApi->create_restaurant: #{e}"
end
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **String**|  | [optional] 
 **park_id** | **Integer**|  | [optional] 
 **quick_service** | **BOOLEAN**|  | [optional] 
 **table_service** | **BOOLEAN**|  | [optional] 
 **alcohol** | **BOOLEAN**|  | [optional] 
 **dining_plan** | **BOOLEAN**|  | [optional] 
 **meal_types** | [**Array&lt;String&gt;**](String.md)|  | [optional] 
 **food_types** | [**Array&lt;String&gt;**](String.md)|  | [optional] 

### Return type

nil (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined



# **delete_restaurant**
> delete_restaurant(id)

Remove a resource from the restaurants collection

Remove a resource from the restaurants collection by ID

### Example
```ruby
# load the gem
require 'openapi_client'

api_instance = OpenapiClient::RestaurantsApi.new
id = 56 # Integer | The ID of the restaurant

begin
  #Remove a resource from the restaurants collection
  api_instance.delete_restaurant(id)
rescue OpenapiClient::ApiError => e
  puts "Exception when calling RestaurantsApi->delete_restaurant: #{e}"
end
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **Integer**| The ID of the restaurant | 

### Return type

nil (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined



# **edit_restaurant**
> edit_restaurant(id, opts)

Edit a single restaurant resource in the collection by ID

Edit a restaurant by ID

### Example
```ruby
# load the gem
require 'openapi_client'

api_instance = OpenapiClient::RestaurantsApi.new
id = 56 # Integer | The ID of the restaurant
opts = {
  name: 'name_example', # String | 
  park_id: 56, # Integer | 
  quick_service: true, # BOOLEAN | 
  table_service: true, # BOOLEAN | 
  alcohol: true, # BOOLEAN | 
  dining_plan: true, # BOOLEAN | 
  meal_types: 'meal_types_example', # Array<String> | 
  food_types: 'food_types_example' # Array<String> | 
}

begin
  #Edit a single restaurant resource in the collection by ID
  api_instance.edit_restaurant(id, opts)
rescue OpenapiClient::ApiError => e
  puts "Exception when calling RestaurantsApi->edit_restaurant: #{e}"
end
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **Integer**| The ID of the restaurant | 
 **name** | **String**|  | [optional] 
 **park_id** | **Integer**|  | [optional] 
 **quick_service** | **BOOLEAN**|  | [optional] 
 **table_service** | **BOOLEAN**|  | [optional] 
 **alcohol** | **BOOLEAN**|  | [optional] 
 **dining_plan** | **BOOLEAN**|  | [optional] 
 **meal_types** | [**Array&lt;String&gt;**](String.md)|  | [optional] 
 **food_types** | [**Array&lt;String&gt;**](String.md)|  | [optional] 

### Return type

nil (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined



# **get_restaurant**
> InlineResponse2005 get_restaurant(id)

List a single restaurant resource from the collection by ID

Get a single restaurant resource by ID

### Example
```ruby
# load the gem
require 'openapi_client'

api_instance = OpenapiClient::RestaurantsApi.new
id = 56 # Integer | The ID of the restaurant

begin
  #List a single restaurant resource from the collection by ID
  result = api_instance.get_restaurant(id)
  p result
rescue OpenapiClient::ApiError => e
  puts "Exception when calling RestaurantsApi->get_restaurant: #{e}"
end
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **Integer**| The ID of the restaurant | 

### Return type

[**InlineResponse2005**](InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json



# **get_restaurants**
> InlineResponse2004 get_restaurants

List restaurants at Walt Disney World

Get a list of restaurants at all parks

### Example
```ruby
# load the gem
require 'openapi_client'

api_instance = OpenapiClient::RestaurantsApi.new

begin
  #List restaurants at Walt Disney World
  result = api_instance.get_restaurants
  p result
rescue OpenapiClient::ApiError => e
  puts "Exception when calling RestaurantsApi->get_restaurants: #{e}"
end
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



