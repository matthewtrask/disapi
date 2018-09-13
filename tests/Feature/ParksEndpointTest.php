<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ParksEndpointTest extends TestCase
{
    public function testParksEndpointSuccess() : void
    {
        $userToken = md5('somestring');

        $response = $this->get('/api/parks?token=' . $userToken);

        $response->assertOk();
        $response->assertSuccessful();
        $response->assertHeader('etag');
        $response->assertJsonSchema(base_path('schemas/parks.json'));
    }

    public function testGetOnePark() : void
    {
        $userToken = md5('somestring');
        $id = random_int(1, 3);
        $response = $this->get('/api/parks/' . $id . '?token=' . $userToken);

        $response->assertSuccessful();
        $response->assertOk();
        $response->assertHeader('etag');
        $response->assertJsonSchema(base_path('schemas/park.json'));
    }

    public function testGetOneParkWithIncludes()
    {
        $userToken = md5('somestring');
        $id = random_int(1, 3);
        $response = $this->get('/api/parks/' . $id . '?token=' . $userToken . '&includes=rides,restaurants');

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
