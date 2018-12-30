<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable, SoftDeletes;

    /** @var string[] */
    protected $fillable = [
        'name',
        'email',
        'password',
        'token'
    ];

    /** @var string[] */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function getId() : int
    {
        return $this->id;
    }

    public function setEmail(string $email) : void
    {
        $this->email = $email;
    }

    public function setName(string $name) : void
    {
        $this->name = $name;
    }

    public function setToken(string $token) : void
    {
        $this->token = $token;
    }

    public function getEmail() : string
    {
        return $this->email;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getToken()
    {
        return $this->token;
    }
}
