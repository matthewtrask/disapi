# OpenapiClient::ParksApi

All URIs are relative to *http://homestead.test/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**create_park**](ParksApi.md#create_park) | **POST** /parks | Create a new park resource in the collection
[**delete_park**](ParksApi.md#delete_park) | **DELETE** /parks/{id} | Remove a resource from the collection
[**edit_park**](ParksApi.md#edit_park) | **PUT** /parks/{id} | Edit a resource by ID
[**get_park**](ParksApi.md#get_park) | **GET** /parks/{id} | List a park by ID
[**get_parks**](ParksApi.md#get_parks) | **GET** /parks | List all parks at Walt Disney World


# **create_park**
> create_park(opts)

Create a new park resource in the collection

Create a new park at Walt Disney World

### Example
```ruby
# load the gem
require 'openapi_client'

api_instance = OpenapiClient::ParksApi.new
opts = {
  name: 'name_example', # String | 
  central_attraction: 'central_attraction_example', # String | 
  year_opened: 56, # Integer | 
  ride_count: 56, # Integer | 
  restaurant_count: 56, # Integer | 
  resort_count: 56, # Integer | 
  size: 56, # Integer | 
  fireworks: true # BOOLEAN | 
}

begin
  #Create a new park resource in the collection
  api_instance.create_park(opts)
rescue OpenapiClient::ApiError => e
  puts "Exception when calling ParksApi->create_park: #{e}"
end
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **String**|  | [optional] 
 **central_attraction** | **String**|  | [optional] 
 **year_opened** | **Integer**|  | [optional] 
 **ride_count** | **Integer**|  | [optional] 
 **restaurant_count** | **Integer**|  | [optional] 
 **resort_count** | **Integer**|  | [optional] 
 **size** | **Integer**|  | [optional] 
 **fireworks** | **BOOLEAN**|  | [optional] 

### Return type

nil (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined



# **delete_park**
> delete_park

Remove a resource from the collection

Remove a resource from the collection by ID

### Example
```ruby
# load the gem
require 'openapi_client'

api_instance = OpenapiClient::ParksApi.new

begin
  #Remove a resource from the collection
  api_instance.delete_park
rescue OpenapiClient::ApiError => e
  puts "Exception when calling ParksApi->delete_park: #{e}"
end
```

### Parameters
This endpoint does not need any parameter.

### Return type

nil (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined



# **edit_park**
> edit_park

Edit a resource by ID

Edit a park resource by an ID

### Example
```ruby
# load the gem
require 'openapi_client'

api_instance = OpenapiClient::ParksApi.new

begin
  #Edit a resource by ID
  api_instance.edit_park
rescue OpenapiClient::ApiError => e
  puts "Exception when calling ParksApi->edit_park: #{e}"
end
```

### Parameters
This endpoint does not need any parameter.

### Return type

nil (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined



# **get_park**
> InlineResponse2007 get_park

List a park by ID

Get a park at Walt Disney World by ID

### Example
```ruby
# load the gem
require 'openapi_client'

api_instance = OpenapiClient::ParksApi.new

begin
  #List a park by ID
  result = api_instance.get_park
  p result
rescue OpenapiClient::ApiError => e
  puts "Exception when calling ParksApi->get_park: #{e}"
end
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**InlineResponse2007**](InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json



# **get_parks**
> InlineResponse2006 get_parks

List all parks at Walt Disney World

Get a list of all parks at Walt Disney World

### Example
```ruby
# load the gem
require 'openapi_client'

api_instance = OpenapiClient::ParksApi.new

begin
  #List all parks at Walt Disney World
  result = api_instance.get_parks
  p result
rescue OpenapiClient::ApiError => e
  puts "Exception when calling ParksApi->get_parks: #{e}"
end
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



