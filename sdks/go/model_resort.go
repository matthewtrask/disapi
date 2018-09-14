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

type Resort struct {
	Id string `json:"id,omitempty"`
	Name string `json:"name,omitempty"`
	ParkId int32 `json:"parkId,omitempty"`
	TransportOptions []string `json:"transportOptions,omitempty"`
	Category string `json:"category,omitempty"`
	NumOfRooms int32 `json:"numOfRooms,omitempty"`
	QuickServiceRestaurants bool `json:"quickServiceRestaurants,omitempty"`
	TableServiceRestaurants bool `json:"tableServiceRestaurants,omitempty"`
	GiftShop bool `json:"giftShop,omitempty"`
	Arcade bool `json:"arcade,omitempty"`
	Pool bool `json:"pool,omitempty"`
}
