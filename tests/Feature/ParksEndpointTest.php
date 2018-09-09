<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ParksEndpointTest extends TestCase
{
    public function testParksEndpointSuccess() : void
    {
        $response = $this->get('/api/parks');
        dd($response);
        $response->assertOk();
        $response->assertSuccessful();
        $response->assertHeader('etag');
        $response->assertJsonSchema(base_path('schemas/parks.json'));
    }

    public function testGetOnePark() : void
    {
        $id = random_int(1, 3);
        $response = $this->get('/api/parks/' . $id);

        $response->assertSuccessful();
        $response->assertOk();
        $response->assertHeader('etag');
        $response->assertJsonSchema(base_path('schemas/park.json'));
    }

    public function testGetOneParkWithIncludes()
    {
        $id = random_int(1, 3);
        $response = $this->get('/api/parks/' . $id . '?includes=rides&restaurants');
        $response->assertSuccessful();
        $response->assertOk();
        $response->assertHeader('etag');
    }

    public function testGetNonExistantParkError() : void
    {
        $id = 1000;

        $response = $this->get('/api/rides' . $id);

        $response->assertStatus(404);
    }
}
