<?php

namespace Tests\Feature;

use App\Model\Park;
use App\Model\ParkDetail;
use App\Models\Restaurant;
use App\Models\Ride;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ParksEndpointTest extends TestCase
{
    public function testParksEndpointSuccess() : void
    {
        factory(Park::class, 4)->make();

        $response = $this->get('/api/parks');

        $response->assertOk();
        $response->assertSuccessful();
        $response->assertHeader('etag');
        $response->assertJsonSchema(base_path('schemas/parks.json'));
    }

    public function testGetOnePark() : void
    {
        $parks = factory(Park::class, 1)->create();

        $id = null;

        $parks->each(function ($park) use ($id) {
            $id = $park->getId();

            return $id;
        });

        $response = $this->get('/api/parks/' . $id);

        $response->assertSuccessful();
        $response->assertOk();
        $response->assertHeader('etag');
        $response->assertJsonSchema(base_path('schemas/park.json'));
    }

    public function testFetchOneParkWithIncludes() : void
    {
        $parks = factory(Park::class, 1)->create()->each(function($park) {
            $park->detail()
                ->saveMany(factory(ParkDetail::class, 1)->create());
            $park->restaurants()
                ->saveMany(factory(Restaurant::class, 5)->create());
            $park->rides()
                ->saveMany(factory(Ride::class, 5)->create());
        });

        $id = null;

        $parks->each(function ($park) use ($id) {
            $id = $park->getId();

            return $id;
        });

        $response = $this->get('/api/parks/' . $id . '?includes=rides,restaurants');

        $response->assertSuccessful();
        $response->assertOk();
        $response->assertHeader('etag');
    }

    public function testCreateParkEndpoint() : void
    {
        $data = [
            'name' => 'Magic Kingdom',
            'centralAttraction' => 'Cinderella\'s Castle',
            'yearOpened' => 1971,
            'rideCount' => 30,
            'restaurantCount' => 35,
            'resortCount' => 3,
            'size' => 1900,
            'fireworks' => true
        ];

        $response = $this->post('/api/parks',
            $data,
            ['HTTP_X_REQUESTED_WITH' => 'XMLHttpRequest']
        );

        $response->assertStatus(201);
        $response->assertHeader('Location');
    }

    public function testEditParkEndpoint() : void
    {
        $data = [
            'name' => 'Magic Kingdom',
            'centralAttraction' => 'Cinderella\'s Castle',
            'yearOpened' => 1971,
            'rideCount' => 30,
            'restaurantCount' => 35,
            'resortCount' => 3,
            'size' => 1900,
            'fireworks' => true
        ];

        $response = $this->post('/api/parks',
            $data,
            ['HTTP_X_REQUESTED_WITH' => 'XMLHttpRequest']
        );

        $url = parse_url($response->headers->get('location'));

        unset($data);
        unset($response);

        $data = [
            'name' => 'Magic Kingdoms',
            'centralAttraction' => 'Cinderella\'s Castle',
            'yearOpened' => 1971,
            'rideCount' => 30,
            'restaurantCount' => 35,
            'resortCount' => 3,
            'size' => 1900,
            'fireworks' => true
        ];

        $response = $this->put(
            $url['path'],
            $data,
            ['HTTP_X_REQUESTED_WITH' => 'XMLHttpRequest']
        );

        $response->assertOk();
    }

    public function testDeleteParkEndpoint() : void
    {
        $data = [
            'name' => 'Magic Kingdom',
            'centralAttraction' => 'Cinderella\'s Castle',
            'yearOpened' => 1971,
            'rideCount' => 30,
            'restaurantCount' => 35,
            'resortCount' => 3,
            'size' => 1900,
            'fireworks' => true
        ];

        $response = $this->post('/api/parks',
            $data,
            ['HTTP_X_REQUESTED_WITH' => 'XMLHttpRequest']
        );

        $url = parse_url($response->headers->get('location'));

        unset($data);
        unset($response);

        $response = $this->delete(
            $url['path']
        );

        $response->assertStatus(204);
    }

    public function testGetNonExistantParkError() : void
    {
        $id = 1000;

        $response = $this->get('/api/rides/' . $id);

        $response->assertStatus(404);
    }
}
