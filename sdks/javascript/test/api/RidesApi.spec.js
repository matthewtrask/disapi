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
    // AMD.
    define(['expect.js', '../../src/index'], factory);
  } else if (typeof module === 'object' && module.exports) {
    // CommonJS-like environments that support module.exports, like Node.
    factory(require('expect.js'), require('../../src/index'));
  } else {
    // Browser globals (root is window)
    factory(root.expect, root.WaltDisneyWorldApi);
  }
}(this, function(expect, WaltDisneyWorldApi) {
  'use strict';

  var instance;

  beforeEach(function() {
    instance = new WaltDisneyWorldApi.RidesApi();
  });

  var getProperty = function(object, getter, property) {
    // Use getter method if present; otherwise, get the property directly.
    if (typeof object[getter] === 'function')
      return object[getter]();
    else
      return object[property];
  }

  var setProperty = function(object, setter, property, value) {
    // Use setter method if present; otherwise, set the property directly.
    if (typeof object[setter] === 'function')
      object[setter](value);
    else
      object[property] = value;
  }

  describe('RidesApi', function() {
    describe('createRides', function() {
      it('should call createRides successfully', function(done) {
        //uncomment below and update the code to test createRides
        //instance.createRides(function(error) {
        //  if (error) throw error;
        //expect().to.be();
        //});
        done();
      });
    });
    describe('deleteRide', function() {
      it('should call deleteRide successfully', function(done) {
        //uncomment below and update the code to test deleteRide
        //instance.deleteRide(function(error) {
        //  if (error) throw error;
        //expect().to.be();
        //});
        done();
      });
    });
    describe('editRide', function() {
      it('should call editRide successfully', function(done) {
        //uncomment below and update the code to test editRide
        //instance.editRide(function(error) {
        //  if (error) throw error;
        //expect().to.be();
        //});
        done();
      });
    });
    describe('getRide', function() {
      it('should call getRide successfully', function(done) {
        //uncomment below and update the code to test getRide
        //instance.getRide(function(error) {
        //  if (error) throw error;
        //expect().to.be();
        //});
        done();
      });
    });
    describe('getRides', function() {
      it('should call getRides successfully', function(done) {
        //uncomment below and update the code to test getRides
        //instance.getRides(function(error) {
        //  if (error) throw error;
        //expect().to.be();
        //});
        done();
      });
    });
  });

}));
