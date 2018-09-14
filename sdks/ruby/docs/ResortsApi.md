# OpenapiClient::ResortsApi

All URIs are relative to *https://disapi.co/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create_resort**](ResortsApi.md#create_resort) | **POST** /resorts | Create a new resort resource
[**delete_resort**](ResortsApi.md#delete_resort) | **DELETE** /resorts/{id} | Delete resort resource by ID
[**edit_resort**](ResortsApi.md#edit_resort) | **PUT** /resorts/{id} | Edit a specific resort resource by ID
[**get_resort**](ResortsApi.md#get_resort) | **GET** /resorts/{id} | List a specific resort resource by ID
[**get_resorts**](ResortsApi.md#get_resorts) | **GET** /resorts | List resorts at Walt Disney World


# **create_resort**
> create_resort(opts)

Create a new resort resource

Create a new resort resource for the Walt Disney World Resort

### Example
```ruby
# load the gem
require 'openapi_client'

api_instance = OpenapiClient::ResortsApi.new
opts = {
  name: 'name_example', # String | 
  park_id: 56, # Integer | 
  opening_year: 56, # Integer | 
  resort_type: 'resort_type_example', # String | 
  transport_options: 'transport_options_example', # String | 
  category: 'category_example', # String | 
  num_of_rooms: 56, # Integer | 
  quick_service_restaurants: true, # BOOLEAN | 
  table_service_restaurants: true, # BOOLEAN | 
  gift_shop: true, # BOOLEAN | 
  arcade: true, # BOOLEAN | 
  pool: true # BOOLEAN | 
}

begin
  #Create a new resort resource
  api_instance.create_resort(opts)
rescue OpenapiClient::ApiError => e
  puts "Exception when calling ResortsApi->create_resort: #{e}"
end
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **String**|  | [optional] 
 **park_id** | **Integer**|  | [optional] 
 **opening_year** | **Integer**|  | [optional] 
 **resort_type** | **String**|  | [optional] 
 **transport_options** | **String**|  | [optional] 
 **category** | **String**|  | [optional] 
 **num_of_rooms** | **Integer**|  | [optional] 
 **quick_service_restaurants** | **BOOLEAN**|  | [optional] 
 **table_service_restaurants** | **BOOLEAN**|  | [optional] 
 **gift_shop** | **BOOLEAN**|  | [optional] 
 **arcade** | **BOOLEAN**|  | [optional] 
 **pool** | **BOOLEAN**|  | [optional] 

### Return type

nil (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined



# **delete_resort**
> delete_resort(id)

Delete resort resource by ID

### Example
```ruby
# load the gem
require 'openapi_client'

api_instance = OpenapiClient::ResortsApi.new
id = 56 # Integer | The ID of the resort

begin
  #Delete resort resource by ID
  api_instance.delete_resort(id)
rescue OpenapiClient::ApiError => e
  puts "Exception when calling ResortsApi->delete_resort: #{e}"
end
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **Integer**| The ID of the resort | 

### Return type

nil (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined



# **edit_resort**
> edit_resort(id, opts)

Edit a specific resort resource by ID

Find and edit a specific resort resource by its ID

### Example
```ruby
# load the gem
require 'openapi_client'

api_instance = OpenapiClient::ResortsApi.new
id = 56 # Integer | The ID of the resort
opts = {
  name: 'name_example', # String | 
  park_id: 56, # Integer | 
  opening_year: 56, # Integer | 
  resort_type: 'resort_type_example', # String | 
  transport_options: 'transport_options_example', # String | 
  category: 'category_example', # String | 
  num_of_rooms: 56, # Integer | 
  quick_service_restaurants: true, # BOOLEAN | 
  table_service_restaurants: true, # BOOLEAN | 
  gift_shop: true, # BOOLEAN | 
  arcade: true, # BOOLEAN | 
  pool: true # BOOLEAN | 
}

begin
  #Edit a specific resort resource by ID
  api_instance.edit_resort(id, opts)
rescue OpenapiClient::ApiError => e
  puts "Exception when calling ResortsApi->edit_resort: #{e}"
end
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **Integer**| The ID of the resort | 
 **name** | **String**|  | [optional] 
 **park_id** | **Integer**|  | [optional] 
 **opening_year** | **Integer**|  | [optional] 
 **resort_type** | **String**|  | [optional] 
 **transport_options** | **String**|  | [optional] 
 **category** | **String**|  | [optional] 
 **num_of_rooms** | **Integer**|  | [optional] 
 **quick_service_restaurants** | **BOOLEAN**|  | [optional] 
 **table_service_restaurants** | **BOOLEAN**|  | [optional] 
 **gift_shop** | **BOOLEAN**|  | [optional] 
 **arcade** | **BOOLEAN**|  | [optional] 
 **pool** | **BOOLEAN**|  | [optional] 

### Return type

nil (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined



# **get_resort**
> InlineResponse2001 get_resort(id, opts)

List a specific resort resource by ID

Get a specific resort resource by ID

### Example
```ruby
# load the gem
require 'openapi_client'

api_instance = OpenapiClient::ResortsApi.new
id = 56 # Integer | The ID of the resort
opts = {
  name: 'name_example', # String | 
  park_id: 56, # Integer | 
  opening_year: 56, # Integer | 
  resort_type: 'resort_type_example', # String | 
  transport_options: 'transport_options_example', # String | 
  category: 'category_example', # String | 
  num_of_rooms: 56, # Integer | 
  quick_service_restaurants: true, # BOOLEAN | 
  table_service_restaurants: true, # BOOLEAN | 
  gift_shop: true, # BOOLEAN | 
  arcade: true, # BOOLEAN | 
  pool: true # BOOLEAN | 
}

begin
  #List a specific resort resource by ID
  result = api_instance.get_resort(id, opts)
  p result
rescue OpenapiClient::ApiError => e
  puts "Exception when calling ResortsApi->get_resort: #{e}"
end
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **Integer**| The ID of the resort | 
 **name** | **String**|  | [optional] 
 **park_id** | **Integer**|  | [optional] 
 **opening_year** | **Integer**|  | [optional] 
 **resort_type** | **String**|  | [optional] 
 **transport_options** | **String**|  | [optional] 
 **category** | **String**|  | [optional] 
 **num_of_rooms** | **Integer**|  | [optional] 
 **quick_service_restaurants** | **BOOLEAN**|  | [optional] 
 **table_service_restaurants** | **BOOLEAN**|  | [optional] 
 **gift_shop** | **BOOLEAN**|  | [optional] 
 **arcade** | **BOOLEAN**|  | [optional] 
 **pool** | **BOOLEAN**|  | [optional] 

### Return type

[**InlineResponse2001**](InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json



# **get_resorts**
> InlineResponse200 get_resorts

List resorts at Walt Disney World

Get a list of resorts at Walt Disney World

### Example
```ruby
# load the gem
require 'openapi_client'

api_instance = OpenapiClient::ResortsApi.new

begin
  #List resorts at Walt Disney World
  result = api_instance.get_resorts
  p result
rescue OpenapiClient::ApiError => e
  puts "Exception when calling ResortsApi->get_resorts: #{e}"
end
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



