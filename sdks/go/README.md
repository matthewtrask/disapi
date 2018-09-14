# Go API client for openapi

An api that encompasses the Walt Disney World Resort parks, rides, resorts, and restaurants. This API follows the OpenAPI standard.

## Overview
This API client was generated by the [OpenAPI Generator](https://openapi-generator.tech) project.  By using the [OpenAPI-spec](https://www.openapis.org/) from a remote server, you can easily generate an API client.

- API version: 0.1.0
- Package version: 1.0.0
- Build package: org.openapitools.codegen.languages.GoClientCodegen
For more information, please visit [disapi.co/support](disapi.co/support)

## Installation

Install the following dependencies:
```
go get github.com/stretchr/testify/assert
go get golang.org/x/oauth2
go get golang.org/x/net/context
go get github.com/antihax/optional
```

Put the package under your project folder and add the following in import:
```golang
import "./openapi"
```

## Documentation for API Endpoints

All URIs are relative to *http://homestead.test/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ParksApi* | [**CreatePark**](docs/ParksApi.md#createpark) | **Post** /parks | Create a new park resource in the collection
*ParksApi* | [**DeletePark**](docs/ParksApi.md#deletepark) | **Delete** /parks/{id} | Remove a resource from the collection
*ParksApi* | [**EditPark**](docs/ParksApi.md#editpark) | **Put** /parks/{id} | Edit a resource by ID
*ParksApi* | [**GetPark**](docs/ParksApi.md#getpark) | **Get** /parks/{id} | List a park by ID
*ParksApi* | [**GetParks**](docs/ParksApi.md#getparks) | **Get** /parks | List all parks at Walt Disney World
*ResortsApi* | [**CreateResort**](docs/ResortsApi.md#createresort) | **Post** /resorts | Create a new resort resource
*ResortsApi* | [**DeleteResort**](docs/ResortsApi.md#deleteresort) | **Delete** /resorts/{id} | Delete resort resource by ID
*ResortsApi* | [**EditResort**](docs/ResortsApi.md#editresort) | **Put** /resorts/{id} | Edit a specific resort resource by ID
*ResortsApi* | [**GetResort**](docs/ResortsApi.md#getresort) | **Get** /resorts/{id} | List a specific resort resource by ID
*ResortsApi* | [**GetResorts**](docs/ResortsApi.md#getresorts) | **Get** /resorts | List resorts at Walt Disney World
*RestaurantsApi* | [**CreateRestaurant**](docs/RestaurantsApi.md#createrestaurant) | **Post** /restaurants | Create a new restaurant resource
*RestaurantsApi* | [**DeleteRestaurant**](docs/RestaurantsApi.md#deleterestaurant) | **Delete** /restaurants/{id} | Remove a resource from the restaurants collection
*RestaurantsApi* | [**EditRestaurant**](docs/RestaurantsApi.md#editrestaurant) | **Put** /restaurants/{id} | Edit a single restaurant resource in the collection by ID
*RestaurantsApi* | [**GetRestaurant**](docs/RestaurantsApi.md#getrestaurant) | **Get** /restaurants/{id} | List a single restaurant resource from the collection by ID
*RestaurantsApi* | [**GetRestaurants**](docs/RestaurantsApi.md#getrestaurants) | **Get** /restaurants | List restaurants at Walt Disney World
*RidesApi* | [**CreateRides**](docs/RidesApi.md#createrides) | **Post** /rides | Create a new ride resource
*RidesApi* | [**DeleteRide**](docs/RidesApi.md#deleteride) | **Delete** /rides/{id} | Delete ride resource by ID
*RidesApi* | [**EditRide**](docs/RidesApi.md#editride) | **Put** /rides/{id} | Edit a ride by ID
*RidesApi* | [**GetRide**](docs/RidesApi.md#getride) | **Get** /rides/{id} | Get ride by ID
*RidesApi* | [**GetRides**](docs/RidesApi.md#getrides) | **Get** /rides | List rides at Walt Disney World


## Documentation For Models

 - [InlineResponse200](docs/InlineResponse200.md)
 - [InlineResponse2001](docs/InlineResponse2001.md)
 - [InlineResponse2002](docs/InlineResponse2002.md)
 - [InlineResponse2003](docs/InlineResponse2003.md)
 - [InlineResponse2004](docs/InlineResponse2004.md)
 - [InlineResponse2005](docs/InlineResponse2005.md)
 - [InlineResponse2006](docs/InlineResponse2006.md)
 - [InlineResponse2007](docs/InlineResponse2007.md)
 - [Park](docs/Park.md)
 - [ParkForm](docs/ParkForm.md)
 - [Parks](docs/Parks.md)
 - [Resort](docs/Resort.md)
 - [ResortForm](docs/ResortForm.md)
 - [Resorts](docs/Resorts.md)
 - [Restaurant](docs/Restaurant.md)
 - [RestaurantForm](docs/RestaurantForm.md)
 - [Restaurants](docs/Restaurants.md)
 - [Ride](docs/Ride.md)
 - [RideForm](docs/RideForm.md)
 - [Rides](docs/Rides.md)


## Documentation For Authorization
 Endpoints do not require authorization.


## Author

support@disapi.io
