<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ResortsEndpointsTest extends TestCase
{
    public function testResortsGetEndpoint()
    {
        $response = $this->get('/api/resorts');

        $response->assertOk();
    }
}
