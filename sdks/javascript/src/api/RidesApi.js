/**
 * Walt Disney World API
 * An api that encompasses the Walt Disney World Resort parks, rides, resorts, and restaurants. This API follows the OpenAPI standard.
 *
 * OpenAPI spec version: 0.1.0
 * Contact: support@disapi.io
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 *
 * OpenAPI Generator version: 3.2.3
 *
 * Do not edit the class manually.
 *
 */

(function(root, factory) {
  if (typeof define === 'function' && define.amd) {
    // AMD. Register as an anonymous module.
    define(['ApiClient', 'model/InlineResponse2002', 'model/InlineResponse2003'], factory);
  } else if (typeof module === 'object' && module.exports) {
    // CommonJS-like environments that support module.exports, like Node.
    module.exports = factory(require('../ApiClient'), require('../model/InlineResponse2002'), require('../model/InlineResponse2003'));
  } else {
    // Browser globals (root is window)
    if (!root.WaltDisneyWorldApi) {
      root.WaltDisneyWorldApi = {};
    }
    root.WaltDisneyWorldApi.RidesApi = factory(root.WaltDisneyWorldApi.ApiClient, root.WaltDisneyWorldApi.InlineResponse2002, root.WaltDisneyWorldApi.InlineResponse2003);
  }
}(this, function(ApiClient, InlineResponse2002, InlineResponse2003) {
  'use strict';

  /**
   * Rides service.
   * @module api/RidesApi
   * @version 0.1.0
   */

  /**
   * Constructs a new RidesApi. 
   * @alias module:api/RidesApi
   * @class
   * @param {module:ApiClient} [apiClient] Optional API client implementation to use,
   * default to {@link module:ApiClient#instance} if unspecified.
   */
  var exports = function(apiClient) {
    this.apiClient = apiClient || ApiClient.instance;


    /**
     * Callback function to receive the result of the createRides operation.
     * @callback module:api/RidesApi~createRidesCallback
     * @param {String} error Error message, if any.
     * @param data This operation does not return a value.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Create a new ride resource
     * Create a new ride resource for the Walt Disney World Resort
     * @param {Object} opts Optional parameters
     * @param {String} opts.name 
     * @param {Number} opts.parkId 
     * @param {Number} opts.openingYear 
     * @param {String} opts.rideType 
     * @param {String} opts.rideVehicle 
     * @param {Boolean} opts.interactiveQueue 
     * @param {Boolean} opts.giftStoreFinish 
     * @param {Number} opts.singleRider 
     * @param {Number} opts.ridePhoto 
     * @param {Number} opts.heightRestriction 
     * @param {module:api/RidesApi~createRidesCallback} callback The callback function, accepting three arguments: error, data, response
     */
    this.createRides = function(opts, callback) {
      opts = opts || {};
      var postBody = null;


      var pathParams = {
      };
      var queryParams = {
      };
      var collectionQueryParams = {
      };
      var headerParams = {
      };
      var formParams = {
        'name': opts['name'],
        'parkId': opts['parkId'],
        'openingYear': opts['openingYear'],
        'rideType': opts['rideType'],
        'rideVehicle': opts['rideVehicle'],
        'interactiveQueue': opts['interactiveQueue'],
        'giftStoreFinish': opts['giftStoreFinish'],
        'singleRider': opts['singleRider'],
        'ridePhoto': opts['ridePhoto'],
        'heightRestriction': opts['heightRestriction']
      };

      var authNames = [];
      var contentTypes = ['application/x-www-form-urlencoded'];
      var accepts = [];
      var returnType = null;

      return this.apiClient.callApi(
        '/rides', 'POST',
        pathParams, queryParams, collectionQueryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the deleteRide operation.
     * @callback module:api/RidesApi~deleteRideCallback
     * @param {String} error Error message, if any.
     * @param data This operation does not return a value.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Delete ride resource by ID
     * @param {module:api/RidesApi~deleteRideCallback} callback The callback function, accepting three arguments: error, data, response
     */
    this.deleteRide = function(callback) {
      var postBody = null;


      var pathParams = {
      };
      var queryParams = {
      };
      var collectionQueryParams = {
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = [];
      var contentTypes = [];
      var accepts = [];
      var returnType = null;

      return this.apiClient.callApi(
        '/rides/{id}', 'DELETE',
        pathParams, queryParams, collectionQueryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the editRide operation.
     * @callback module:api/RidesApi~editRideCallback
     * @param {String} error Error message, if any.
     * @param data This operation does not return a value.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Edit a ride by ID
     * Edit a ride in the resource collection by ID
     * @param {Object} opts Optional parameters
     * @param {String} opts.name 
     * @param {Number} opts.parkId 
     * @param {Number} opts.openingYear 
     * @param {String} opts.rideType 
     * @param {String} opts.rideVehicle 
     * @param {Boolean} opts.interactiveQueue 
     * @param {Boolean} opts.giftStoreFinish 
     * @param {Number} opts.singleRider 
     * @param {Number} opts.ridePhoto 
     * @param {Number} opts.heightRestriction 
     * @param {module:api/RidesApi~editRideCallback} callback The callback function, accepting three arguments: error, data, response
     */
    this.editRide = function(opts, callback) {
      opts = opts || {};
      var postBody = null;


      var pathParams = {
      };
      var queryParams = {
      };
      var collectionQueryParams = {
      };
      var headerParams = {
      };
      var formParams = {
        'name': opts['name'],
        'parkId': opts['parkId'],
        'openingYear': opts['openingYear'],
        'rideType': opts['rideType'],
        'rideVehicle': opts['rideVehicle'],
        'interactiveQueue': opts['interactiveQueue'],
        'giftStoreFinish': opts['giftStoreFinish'],
        'singleRider': opts['singleRider'],
        'ridePhoto': opts['ridePhoto'],
        'heightRestriction': opts['heightRestriction']
      };

      var authNames = [];
      var contentTypes = ['application/x-www-form-urlencoded'];
      var accepts = [];
      var returnType = null;

      return this.apiClient.callApi(
        '/rides/{id}', 'PUT',
        pathParams, queryParams, collectionQueryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the getRide operation.
     * @callback module:api/RidesApi~getRideCallback
     * @param {String} error Error message, if any.
     * @param {module:model/InlineResponse2003} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * Get ride by ID
     * Get a ride at Walt Disney World by ID
     * @param {module:api/RidesApi~getRideCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/InlineResponse2003}
     */
    this.getRide = function(callback) {
      var postBody = null;


      var pathParams = {
      };
      var queryParams = {
      };
      var collectionQueryParams = {
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = [];
      var contentTypes = [];
      var accepts = ['application/json'];
      var returnType = InlineResponse2003;

      return this.apiClient.callApi(
        '/rides/{id}', 'GET',
        pathParams, queryParams, collectionQueryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }

    /**
     * Callback function to receive the result of the getRides operation.
     * @callback module:api/RidesApi~getRidesCallback
     * @param {String} error Error message, if any.
     * @param {module:model/InlineResponse2002} data The data returned by the service call.
     * @param {String} response The complete HTTP response.
     */

    /**
     * List rides at Walt Disney World
     * Get a list of rides at all Walt Disney World Parks 
     * @param {module:api/RidesApi~getRidesCallback} callback The callback function, accepting three arguments: error, data, response
     * data is of type: {@link module:model/InlineResponse2002}
     */
    this.getRides = function(callback) {
      var postBody = null;


      var pathParams = {
      };
      var queryParams = {
      };
      var collectionQueryParams = {
      };
      var headerParams = {
      };
      var formParams = {
      };

      var authNames = [];
      var contentTypes = [];
      var accepts = ['application/json'];
      var returnType = InlineResponse2002;

      return this.apiClient.callApi(
        '/rides', 'GET',
        pathParams, queryParams, collectionQueryParams, headerParams, formParams, postBody,
        authNames, contentTypes, accepts, returnType, callback
      );
    }
  };

  return exports;
}));
