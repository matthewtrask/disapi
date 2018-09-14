<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ResortsEndpointsTest extends TestCase
{
    public function testResortsGetEndpoint() : void
    {
        $response = $this->get('/api/resorts');

        $response->assertOk();
        $response->assertHeader('etag');
    }

    public function testResortsGetOneEndpoint() : void
    {
        $id = random_int(1, 15);

        $response = $this->get('/api/resorts/' . $id);
    }
}
