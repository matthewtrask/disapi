<?php

namespace Tests\Unit\Controllers;

use App\Http\Controllers\Api\RidesController;
use App\Repositories\RidesRepository;
use Illuminate\Http\Response;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;


class RidesControllerTest extends TestCase
{
    /** @var RidesController */
    private $controller;

    /** @var Response */
    private $response;

    /** @var RidesRepository */
    private $ridesRepository;

    public function setUp()
    {
        $this->response = $this->createMock(Response::class);
        $this->ridesRepository = $this->createMock(RidesRepository::class);
        $this->controller = new RidesController($this->response, $this->ridesRepository);
    }
    
    public function testCanGetInstance()
    {
        $this->assertInstanceOf(RidesController::class, $this->controller);
    }

    public function testIndexMethodExists()
    {
        $this->assertTrue(method_exists($this->controller, 'index'));
    }

    public function testGetMethodExists()
    {
        $this->assertTrue(method_exists($this->controller, 'fetch'));
    }
}
