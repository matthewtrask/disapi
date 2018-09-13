<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

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
}
