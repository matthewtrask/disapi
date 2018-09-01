<?php

namespace Tests\Feature;

use App\Models\Ride;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RestaurantsEndpointTest extends TestCase
{
    public function testGetRestaurants() : void
    {
        $response = $this->get('/api/restaurants');

        $response->assertStatus(200);
        $response->assertJsonSchema(base_path('schemas/restaurants.json'));
        $this->assertTrue(is_object($response));
    }

    public function testGetOneRestaurant() : void
    {
        $rand = random_int(1, 8);

        $response = $this->get('/api/restaurants/' . $rand);
        $response->assertSuccessful();
        $response->assertStatus(200);
        $response->assertJsonSchema(base_path('schemas/restaurant.json'));
        $this->assertTrue(is_object($response));
    }

    public function testGetRestaurantThatDoesNotExist() : void
    {
        $response = $this->get('/api/restaurants/1000');

        $response->assertStatus(404);
    }
}
