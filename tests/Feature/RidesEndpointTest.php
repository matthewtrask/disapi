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
        $response = $this->get('/api/rides');
        $response->assertOk();
        $response->assertJsonSchema(base_path('schemas/rides.json'));
        $this->assertTrue(is_object($response));
    }

    public function testGetOneRide() : void
    {
        $response = $this->get('/api/rides/1');

        $response->assertSuccessful();
        $response->assertStatus(200);
        $response->assertJsonSchema(base_path('schemas/ride.json'));
        $this->assertTrue(is_object($response));
    }

    public function testGetRideThatDoesNotExist() : void
    {
        $response = $this->get('/api/rides/1000');

        $response->assertStatus(404);
    }
}
