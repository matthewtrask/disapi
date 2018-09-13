<?php

namespace Tests\Unit\Events;

use App\Events\UserHitEndpoint;
use App\Services\ConstantService;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserHitEndpointTest extends TestCase
{
    /** @var UserHitEndpoint */
    private $userHitEndpoint;

    /** @var string */
    private $userToken;

    /** @var string */
    private $endpoint;

    /** @var string */
    private $action;

    /** @var bool */
    private $success;

    /** @var string */
    private $error;

    public function setup()
    {
        $this->userToken = md5('thisisastring');
        $this->endpoint = ConstantService::RIDES_ENDPONT;
        $this->action = ConstantService::GET_ACTION;
        $this->success = true;

        $this->userHitEndpoint = new UserHitEndpoint(
            $this->userToken,
            $this->endpoint,
            $this->action,
            $this->success
        );
    }

    public function testCanGetInstance()
    {
        $this->assertInstanceOf(UserHitEndpoint::class, $this->userHitEndpoint);
    }
}
