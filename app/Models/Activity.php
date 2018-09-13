<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    public function setUserToken(string $token) : void
    {
        $this->user_token = $token;
    }

    public function getUserToken() : string
    {
        return $this->user_token;
    }

    public function setEndpoint(string $endpoint) : void
    {
        $this->endpoint = $endpoint;
    }

    public function getEndpoint() : string
    {
        return $this->endpoint;
    }

    public function setAction(string $action) : void
    {
        $this->action = $action;
    }

    public function getAction() : string
    {
        return $this->action;
    }

    public function setSuccess(bool $success) : void
    {
        $this->success = $success;
    }

    public function getSuccess() : string
    {
        return $this->success;
    }

    public function setError(? string $error) : void
    {
        $this->error_message = $error;
    }

    public function getError() : string
    {
        return $this->error_message;
    }
}
