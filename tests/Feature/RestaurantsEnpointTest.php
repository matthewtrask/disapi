<?php

namespace Tests\Feature;

use App\Models\Ride;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RestaurantsEndpointTest extends TestCase
{
    /** @var int $id */
    private $id;

    /** @var string[] */
    private $request;

    public function testGetRestaurants() : void
    {
        $response = $this->get('/api/restaurants');

        $response->assertStatus(200);
        $response->assertJsonSchema(base_path('schemas/restaurants.json'));
        $this->assertTrue(is_object($response));
    }

    public function testGetOneRestaurant() : void
    {
        $rand = random_int(1, 3);

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

    public function testCreateRestaurant() : void
    {
        $request = [
            'name' => 'Test Restaurant',
            'parkId' => 1,
            'quickService' => 1,
            'tableService' => 0,
            'alcohol' => 0,
            'diningPlan' => 1,
            'mealTypes' => ['lunch','dinner'],
            'foodTypes' => ['burgers','sandwiches'],
        ];

        $response = $this->call('POST', '/api/restaurants', $request);

        $response->assertStatus(201);
        $response->assertHeader('Location');
    }
}
