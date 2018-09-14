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
    instance = new WaltDisneyWorldApi.Ride();
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

  describe('Ride', function() {
    it('should create an instance of Ride', function() {
      // uncomment below and update the code to test Ride
      //var instance = new WaltDisneyWorldApi.Ride();
      //expect(instance).to.be.a(WaltDisneyWorldApi.Ride);
    });

    it('should have the property name (base name: "name")', function() {
      // uncomment below and update the code to test the property name
      //var instance = new WaltDisneyWorldApi.Ride();
      //expect(instance).to.be();
    });

    it('should have the property parkId (base name: "parkId")', function() {
      // uncomment below and update the code to test the property parkId
      //var instance = new WaltDisneyWorldApi.Ride();
      //expect(instance).to.be();
    });

    it('should have the property openingYear (base name: "openingYear")', function() {
      // uncomment below and update the code to test the property openingYear
      //var instance = new WaltDisneyWorldApi.Ride();
      //expect(instance).to.be();
    });

    it('should have the property rideType (base name: "rideType")', function() {
      // uncomment below and update the code to test the property rideType
      //var instance = new WaltDisneyWorldApi.Ride();
      //expect(instance).to.be();
    });

    it('should have the property rideVehicle (base name: "rideVehicle")', function() {
      // uncomment below and update the code to test the property rideVehicle
      //var instance = new WaltDisneyWorldApi.Ride();
      //expect(instance).to.be();
    });

    it('should have the property interactiveQueue (base name: "interactiveQueue")', function() {
      // uncomment below and update the code to test the property interactiveQueue
      //var instance = new WaltDisneyWorldApi.Ride();
      //expect(instance).to.be();
    });

    it('should have the property giftStoreFinish (base name: "giftStoreFinish")', function() {
      // uncomment below and update the code to test the property giftStoreFinish
      //var instance = new WaltDisneyWorldApi.Ride();
      //expect(instance).to.be();
    });

    it('should have the property singleRider (base name: "singleRider")', function() {
      // uncomment below and update the code to test the property singleRider
      //var instance = new WaltDisneyWorldApi.Ride();
      //expect(instance).to.be();
    });

    it('should have the property ridePhoto (base name: "ridePhoto")', function() {
      // uncomment below and update the code to test the property ridePhoto
      //var instance = new WaltDisneyWorldApi.Ride();
      //expect(instance).to.be();
    });

    it('should have the property heightRestriction (base name: "heightRestriction")', function() {
      // uncomment below and update the code to test the property heightRestriction
      //var instance = new WaltDisneyWorldApi.Ride();
      //expect(instance).to.be();
    });

  });

}));