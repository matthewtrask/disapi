<?php

declare(strict_types=1);

namespace App\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;

class UserHitEndpoint
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /** @var string */
    private $token;

    /** @var string */
    private $endpoint;

    /** @var string */
    private $action;

    /** @var bool */
    private $success;

    /** @var string|null */
    private $error;

    public function __construct(string $token, string $endpoint, string $action, bool $success, string $error = null)
    {
        $this->token = $token;
        $this->endpoint = $endpoint;
        $this->action = $action;
        $this->success = $success;
    }

    public function getToken() : string
    {
        return $this->token;
    }

    public function getEndpoint() : string
    {
        return $this->endpoint;
    }

    public function getAction() : string
    {
        return $this->action;
    }

    public function getSuccess() : bool
    {
        return $this->success;
    }

    public function getError() : ? string
    {
        return $this->error;
    }
}
