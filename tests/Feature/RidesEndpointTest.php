<?php

namespace Tests\Feature;

use App\Models\Ride;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RidesEndpointTest extends TestCase
{
    public function testGetRides() : void
    {
        $userToken = md5('somestring');
        $response = $this->get('/api/rides?token=' . $userToken);
        $response->assertOk();
        $response->assertJsonSchema(base_path('schemas/rides.json'));
        $this->assertTrue(is_object($response));
    }

    public function testGetOneRide() : void
    {
        $userToken = md5('somestring');

        $response = $this->get('/api/rides/1?token=' . $userToken);

        $response->assertSuccessful();
        $response->assertStatus(200);
        $response->assertJsonSchema(base_path('schemas/ride.json'));
        $this->assertTrue(is_object($response));
    }

    public function testCreateRide() : void
    {
        $userToken = md5('somestring');
        $data = [
            'name' => 'Matterhorn',
            'parkId' => 1,
            'openingYear' => 1984,
            'rideType' => 'Roller Coaster',
            'rideVehicle' => 'Bobsled',
            'interactiveQueue' => 0,
            'giftStoreFinish' => 0,
            'singleRider' => 1,
            'ridePhoto' => 1,
            'heightRestriction' => 1
        ];

        $response = $this->call('POST', '/api/rides?token=' . $userToken, $data);

        $response->assertStatus(201);
    }

    public function testGetRideThatDoesNotExist() : void
    {
        $response = $this->get('/api/rides/1000');

        $response->assertStatus(404);
    }
}
