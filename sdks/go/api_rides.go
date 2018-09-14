/*
 * Walt Disney World API
 *
 * An api that encompasses the Walt Disney World Resort parks, rides, resorts, and restaurants. This API follows the OpenAPI standard.
 *
 * API version: 0.1.0
 * Contact: support@disapi.io
 * Generated by: OpenAPI Generator (https://openapi-generator.tech)
 */

package openapi

import (
	"context"
	"io/ioutil"
	"net/http"
	"net/url"
	"strings"
	"github.com/antihax/optional"
)

// Linger please
var (
	_ context.Context
)

type RidesApiService service

/*
RidesApiService Create a new ride resource
Create a new ride resource for the Walt Disney World Resort
 * @param ctx context.Context - for authentication, logging, cancellation, deadlines, tracing, etc. Passed from http.Request or context.Background().
 * @param optional nil or *CreateRidesOpts - Optional Parameters:
 * @param "Name" (optional.String) - 
 * @param "ParkId" (optional.Int32) - 
 * @param "OpeningYear" (optional.Int32) - 
 * @param "RideType" (optional.String) - 
 * @param "RideVehicle" (optional.String) - 
 * @param "InteractiveQueue" (optional.Bool) - 
 * @param "GiftStoreFinish" (optional.Bool) - 
 * @param "SingleRider" (optional.Int32) - 
 * @param "RidePhoto" (optional.Int32) - 
 * @param "HeightRestriction" (optional.Int32) - 
*/

type CreateRidesOpts struct {
    Name optional.String
    ParkId optional.Int32
    OpeningYear optional.Int32
    RideType optional.String
    RideVehicle optional.String
    InteractiveQueue optional.Bool
    GiftStoreFinish optional.Bool
    SingleRider optional.Int32
    RidePhoto optional.Int32
    HeightRestriction optional.Int32
}

func (a *RidesApiService) CreateRides(ctx context.Context, localVarOptionals *CreateRidesOpts) (*http.Response, error) {
	var (
		localVarHttpMethod = strings.ToUpper("Post")
		localVarPostBody     interface{}
		localVarFormFileName string
		localVarFileName     string
		localVarFileBytes    []byte
	)

	// create path and map variables
	localVarPath := a.client.cfg.BasePath + "/rides"

	localVarHeaderParams := make(map[string]string)
	localVarQueryParams := url.Values{}
	localVarFormParams := url.Values{}

	// to determine the Content-Type header
	localVarHttpContentTypes := []string{"application/x-www-form-urlencoded"}

	// set Content-Type header
	localVarHttpContentType := selectHeaderContentType(localVarHttpContentTypes)
	if localVarHttpContentType != "" {
		localVarHeaderParams["Content-Type"] = localVarHttpContentType
	}

	// to determine the Accept header
	localVarHttpHeaderAccepts := []string{}

	// set Accept header
	localVarHttpHeaderAccept := selectHeaderAccept(localVarHttpHeaderAccepts)
	if localVarHttpHeaderAccept != "" {
		localVarHeaderParams["Accept"] = localVarHttpHeaderAccept
	}
	if localVarOptionals != nil && localVarOptionals.Name.IsSet() {
		localVarFormParams.Add("name", parameterToString(localVarOptionals.Name.Value(), ""))
	}
	if localVarOptionals != nil && localVarOptionals.ParkId.IsSet() {
		localVarFormParams.Add("parkId", parameterToString(localVarOptionals.ParkId.Value(), ""))
	}
	if localVarOptionals != nil && localVarOptionals.OpeningYear.IsSet() {
		localVarFormParams.Add("openingYear", parameterToString(localVarOptionals.OpeningYear.Value(), ""))
	}
	if localVarOptionals != nil && localVarOptionals.RideType.IsSet() {
		localVarFormParams.Add("rideType", parameterToString(localVarOptionals.RideType.Value(), ""))
	}
	if localVarOptionals != nil && localVarOptionals.RideVehicle.IsSet() {
		localVarFormParams.Add("rideVehicle", parameterToString(localVarOptionals.RideVehicle.Value(), ""))
	}
	if localVarOptionals != nil && localVarOptionals.InteractiveQueue.IsSet() {
		localVarFormParams.Add("interactiveQueue", parameterToString(localVarOptionals.InteractiveQueue.Value(), ""))
	}
	if localVarOptionals != nil && localVarOptionals.GiftStoreFinish.IsSet() {
		localVarFormParams.Add("giftStoreFinish", parameterToString(localVarOptionals.GiftStoreFinish.Value(), ""))
	}
	if localVarOptionals != nil && localVarOptionals.SingleRider.IsSet() {
		localVarFormParams.Add("singleRider", parameterToString(localVarOptionals.SingleRider.Value(), ""))
	}
	if localVarOptionals != nil && localVarOptionals.RidePhoto.IsSet() {
		localVarFormParams.Add("ridePhoto", parameterToString(localVarOptionals.RidePhoto.Value(), ""))
	}
	if localVarOptionals != nil && localVarOptionals.HeightRestriction.IsSet() {
		localVarFormParams.Add("heightRestriction", parameterToString(localVarOptionals.HeightRestriction.Value(), ""))
	}
	r, err := a.client.prepareRequest(ctx, localVarPath, localVarHttpMethod, localVarPostBody, localVarHeaderParams, localVarQueryParams, localVarFormParams, localVarFormFileName, localVarFileName, localVarFileBytes)
	if err != nil {
		return nil, err
	}

	localVarHttpResponse, err := a.client.callAPI(r)
	if err != nil || localVarHttpResponse == nil {
		return localVarHttpResponse, err
	}

	localVarBody, err := ioutil.ReadAll(localVarHttpResponse.Body)
	localVarHttpResponse.Body.Close()
	if err != nil {
		return localVarHttpResponse, err
	}

	if localVarHttpResponse.StatusCode >= 300 {
		newErr := GenericOpenAPIError{
			body: localVarBody,
			error: localVarHttpResponse.Status,
		}
		return localVarHttpResponse, newErr
	}

	return localVarHttpResponse, nil
}

/*
RidesApiService Delete ride resource by ID
 * @param ctx context.Context - for authentication, logging, cancellation, deadlines, tracing, etc. Passed from http.Request or context.Background().
*/
func (a *RidesApiService) DeleteRide(ctx context.Context) (*http.Response, error) {
	var (
		localVarHttpMethod = strings.ToUpper("Delete")
		localVarPostBody     interface{}
		localVarFormFileName string
		localVarFileName     string
		localVarFileBytes    []byte
	)

	// create path and map variables
	localVarPath := a.client.cfg.BasePath + "/rides/{id}"

	localVarHeaderParams := make(map[string]string)
	localVarQueryParams := url.Values{}
	localVarFormParams := url.Values{}

	// to determine the Content-Type header
	localVarHttpContentTypes := []string{}

	// set Content-Type header
	localVarHttpContentType := selectHeaderContentType(localVarHttpContentTypes)
	if localVarHttpContentType != "" {
		localVarHeaderParams["Content-Type"] = localVarHttpContentType
	}

	// to determine the Accept header
	localVarHttpHeaderAccepts := []string{}

	// set Accept header
	localVarHttpHeaderAccept := selectHeaderAccept(localVarHttpHeaderAccepts)
	if localVarHttpHeaderAccept != "" {
		localVarHeaderParams["Accept"] = localVarHttpHeaderAccept
	}
	r, err := a.client.prepareRequest(ctx, localVarPath, localVarHttpMethod, localVarPostBody, localVarHeaderParams, localVarQueryParams, localVarFormParams, localVarFormFileName, localVarFileName, localVarFileBytes)
	if err != nil {
		return nil, err
	}

	localVarHttpResponse, err := a.client.callAPI(r)
	if err != nil || localVarHttpResponse == nil {
		return localVarHttpResponse, err
	}

	localVarBody, err := ioutil.ReadAll(localVarHttpResponse.Body)
	localVarHttpResponse.Body.Close()
	if err != nil {
		return localVarHttpResponse, err
	}

	if localVarHttpResponse.StatusCode >= 300 {
		newErr := GenericOpenAPIError{
			body: localVarBody,
			error: localVarHttpResponse.Status,
		}
		return localVarHttpResponse, newErr
	}

	return localVarHttpResponse, nil
}

/*
RidesApiService Edit a ride by ID
Edit a ride in the resource collection by ID
 * @param ctx context.Context - for authentication, logging, cancellation, deadlines, tracing, etc. Passed from http.Request or context.Background().
 * @param optional nil or *EditRideOpts - Optional Parameters:
 * @param "Name" (optional.String) - 
 * @param "ParkId" (optional.Int32) - 
 * @param "OpeningYear" (optional.Int32) - 
 * @param "RideType" (optional.String) - 
 * @param "RideVehicle" (optional.String) - 
 * @param "InteractiveQueue" (optional.Bool) - 
 * @param "GiftStoreFinish" (optional.Bool) - 
 * @param "SingleRider" (optional.Int32) - 
 * @param "RidePhoto" (optional.Int32) - 
 * @param "HeightRestriction" (optional.Int32) - 
*/

type EditRideOpts struct {
    Name optional.String
    ParkId optional.Int32
    OpeningYear optional.Int32
    RideType optional.String
    RideVehicle optional.String
    InteractiveQueue optional.Bool
    GiftStoreFinish optional.Bool
    SingleRider optional.Int32
    RidePhoto optional.Int32
    HeightRestriction optional.Int32
}

func (a *RidesApiService) EditRide(ctx context.Context, localVarOptionals *EditRideOpts) (*http.Response, error) {
	var (
		localVarHttpMethod = strings.ToUpper("Put")
		localVarPostBody     interface{}
		localVarFormFileName string
		localVarFileName     string
		localVarFileBytes    []byte
	)

	// create path and map variables
	localVarPath := a.client.cfg.BasePath + "/rides/{id}"

	localVarHeaderParams := make(map[string]string)
	localVarQueryParams := url.Values{}
	localVarFormParams := url.Values{}

	// to determine the Content-Type header
	localVarHttpContentTypes := []string{"application/x-www-form-urlencoded"}

	// set Content-Type header
	localVarHttpContentType := selectHeaderContentType(localVarHttpContentTypes)
	if localVarHttpContentType != "" {
		localVarHeaderParams["Content-Type"] = localVarHttpContentType
	}

	// to determine the Accept header
	localVarHttpHeaderAccepts := []string{}

	// set Accept header
	localVarHttpHeaderAccept := selectHeaderAccept(localVarHttpHeaderAccepts)
	if localVarHttpHeaderAccept != "" {
		localVarHeaderParams["Accept"] = localVarHttpHeaderAccept
	}
	if localVarOptionals != nil && localVarOptionals.Name.IsSet() {
		localVarFormParams.Add("name", parameterToString(localVarOptionals.Name.Value(), ""))
	}
	if localVarOptionals != nil && localVarOptionals.ParkId.IsSet() {
		localVarFormParams.Add("parkId", parameterToString(localVarOptionals.ParkId.Value(), ""))
	}
	if localVarOptionals != nil && localVarOptionals.OpeningYear.IsSet() {
		localVarFormParams.Add("openingYear", parameterToString(localVarOptionals.OpeningYear.Value(), ""))
	}
	if localVarOptionals != nil && localVarOptionals.RideType.IsSet() {
		localVarFormParams.Add("rideType", parameterToString(localVarOptionals.RideType.Value(), ""))
	}
	if localVarOptionals != nil && localVarOptionals.RideVehicle.IsSet() {
		localVarFormParams.Add("rideVehicle", parameterToString(localVarOptionals.RideVehicle.Value(), ""))
	}
	if localVarOptionals != nil && localVarOptionals.InteractiveQueue.IsSet() {
		localVarFormParams.Add("interactiveQueue", parameterToString(localVarOptionals.InteractiveQueue.Value(), ""))
	}
	if localVarOptionals != nil && localVarOptionals.GiftStoreFinish.IsSet() {
		localVarFormParams.Add("giftStoreFinish", parameterToString(localVarOptionals.GiftStoreFinish.Value(), ""))
	}
	if localVarOptionals != nil && localVarOptionals.SingleRider.IsSet() {
		localVarFormParams.Add("singleRider", parameterToString(localVarOptionals.SingleRider.Value(), ""))
	}
	if localVarOptionals != nil && localVarOptionals.RidePhoto.IsSet() {
		localVarFormParams.Add("ridePhoto", parameterToString(localVarOptionals.RidePhoto.Value(), ""))
	}
	if localVarOptionals != nil && localVarOptionals.HeightRestriction.IsSet() {
		localVarFormParams.Add("heightRestriction", parameterToString(localVarOptionals.HeightRestriction.Value(), ""))
	}
	r, err := a.client.prepareRequest(ctx, localVarPath, localVarHttpMethod, localVarPostBody, localVarHeaderParams, localVarQueryParams, localVarFormParams, localVarFormFileName, localVarFileName, localVarFileBytes)
	if err != nil {
		return nil, err
	}

	localVarHttpResponse, err := a.client.callAPI(r)
	if err != nil || localVarHttpResponse == nil {
		return localVarHttpResponse, err
	}

	localVarBody, err := ioutil.ReadAll(localVarHttpResponse.Body)
	localVarHttpResponse.Body.Close()
	if err != nil {
		return localVarHttpResponse, err
	}

	if localVarHttpResponse.StatusCode >= 300 {
		newErr := GenericOpenAPIError{
			body: localVarBody,
			error: localVarHttpResponse.Status,
		}
		return localVarHttpResponse, newErr
	}

	return localVarHttpResponse, nil
}

/*
RidesApiService Get ride by ID
Get a ride at Walt Disney World by ID
 * @param ctx context.Context - for authentication, logging, cancellation, deadlines, tracing, etc. Passed from http.Request or context.Background().
@return InlineResponse2003
*/
func (a *RidesApiService) GetRide(ctx context.Context) (InlineResponse2003, *http.Response, error) {
	var (
		localVarHttpMethod = strings.ToUpper("Get")
		localVarPostBody     interface{}
		localVarFormFileName string
		localVarFileName     string
		localVarFileBytes    []byte
		localVarReturnValue InlineResponse2003
	)

	// create path and map variables
	localVarPath := a.client.cfg.BasePath + "/rides/{id}"

	localVarHeaderParams := make(map[string]string)
	localVarQueryParams := url.Values{}
	localVarFormParams := url.Values{}

	// to determine the Content-Type header
	localVarHttpContentTypes := []string{}

	// set Content-Type header
	localVarHttpContentType := selectHeaderContentType(localVarHttpContentTypes)
	if localVarHttpContentType != "" {
		localVarHeaderParams["Content-Type"] = localVarHttpContentType
	}

	// to determine the Accept header
	localVarHttpHeaderAccepts := []string{"application/json"}

	// set Accept header
	localVarHttpHeaderAccept := selectHeaderAccept(localVarHttpHeaderAccepts)
	if localVarHttpHeaderAccept != "" {
		localVarHeaderParams["Accept"] = localVarHttpHeaderAccept
	}
	r, err := a.client.prepareRequest(ctx, localVarPath, localVarHttpMethod, localVarPostBody, localVarHeaderParams, localVarQueryParams, localVarFormParams, localVarFormFileName, localVarFileName, localVarFileBytes)
	if err != nil {
		return localVarReturnValue, nil, err
	}

	localVarHttpResponse, err := a.client.callAPI(r)
	if err != nil || localVarHttpResponse == nil {
		return localVarReturnValue, localVarHttpResponse, err
	}

	localVarBody, err := ioutil.ReadAll(localVarHttpResponse.Body)
	localVarHttpResponse.Body.Close()
	if err != nil {
		return localVarReturnValue, localVarHttpResponse, err
	}

	if localVarHttpResponse.StatusCode < 300 {
		// If we succeed, return the data, otherwise pass on to decode error.
		err = a.client.decode(&localVarReturnValue, localVarBody, localVarHttpResponse.Header.Get("Content-Type"));
		if err == nil {
			return localVarReturnValue, localVarHttpResponse, err
		}
	}

	if localVarHttpResponse.StatusCode >= 300 {
		newErr := GenericOpenAPIError{
			body: localVarBody,
			error: localVarHttpResponse.Status,
		}
		if localVarHttpResponse.StatusCode == 200 {
			var v InlineResponse2003
			err = a.client.decode(&v, localVarBody, localVarHttpResponse.Header.Get("Content-Type"));
				if err != nil {
					newErr.error = err.Error()
					return localVarReturnValue, localVarHttpResponse, newErr
				}
				newErr.model = v
				return localVarReturnValue, localVarHttpResponse, newErr
		}
		return localVarReturnValue, localVarHttpResponse, newErr
	}

	return localVarReturnValue, localVarHttpResponse, nil
}

/*
RidesApiService List rides at Walt Disney World
Get a list of rides at all Walt Disney World Parks 
 * @param ctx context.Context - for authentication, logging, cancellation, deadlines, tracing, etc. Passed from http.Request or context.Background().
@return InlineResponse2002
*/
func (a *RidesApiService) GetRides(ctx context.Context) (InlineResponse2002, *http.Response, error) {
	var (
		localVarHttpMethod = strings.ToUpper("Get")
		localVarPostBody     interface{}
		localVarFormFileName string
		localVarFileName     string
		localVarFileBytes    []byte
		localVarReturnValue InlineResponse2002
	)

	// create path and map variables
	localVarPath := a.client.cfg.BasePath + "/rides"

	localVarHeaderParams := make(map[string]string)
	localVarQueryParams := url.Values{}
	localVarFormParams := url.Values{}

	// to determine the Content-Type header
	localVarHttpContentTypes := []string{}

	// set Content-Type header
	localVarHttpContentType := selectHeaderContentType(localVarHttpContentTypes)
	if localVarHttpContentType != "" {
		localVarHeaderParams["Content-Type"] = localVarHttpContentType
	}

	// to determine the Accept header
	localVarHttpHeaderAccepts := []string{"application/json"}

	// set Accept header
	localVarHttpHeaderAccept := selectHeaderAccept(localVarHttpHeaderAccepts)
	if localVarHttpHeaderAccept != "" {
		localVarHeaderParams["Accept"] = localVarHttpHeaderAccept
	}
	r, err := a.client.prepareRequest(ctx, localVarPath, localVarHttpMethod, localVarPostBody, localVarHeaderParams, localVarQueryParams, localVarFormParams, localVarFormFileName, localVarFileName, localVarFileBytes)
	if err != nil {
		return localVarReturnValue, nil, err
	}

	localVarHttpResponse, err := a.client.callAPI(r)
	if err != nil || localVarHttpResponse == nil {
		return localVarReturnValue, localVarHttpResponse, err
	}

	localVarBody, err := ioutil.ReadAll(localVarHttpResponse.Body)
	localVarHttpResponse.Body.Close()
	if err != nil {
		return localVarReturnValue, localVarHttpResponse, err
	}

	if localVarHttpResponse.StatusCode < 300 {
		// If we succeed, return the data, otherwise pass on to decode error.
		err = a.client.decode(&localVarReturnValue, localVarBody, localVarHttpResponse.Header.Get("Content-Type"));
		if err == nil {
			return localVarReturnValue, localVarHttpResponse, err
		}
	}

	if localVarHttpResponse.StatusCode >= 300 {
		newErr := GenericOpenAPIError{
			body: localVarBody,
			error: localVarHttpResponse.Status,
		}
		if localVarHttpResponse.StatusCode == 200 {
			var v InlineResponse2002
			err = a.client.decode(&v, localVarBody, localVarHttpResponse.Header.Get("Content-Type"));
				if err != nil {
					newErr.error = err.Error()
					return localVarReturnValue, localVarHttpResponse, newErr
				}
				newErr.model = v
				return localVarReturnValue, localVarHttpResponse, newErr
		}
		return localVarReturnValue, localVarHttpResponse, newErr
	}

	return localVarReturnValue, localVarHttpResponse, nil
}
