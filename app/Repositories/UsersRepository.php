<?php

declare(strict_types=1);


namespace App\Repositories;

use App\Models\User;

class UsersRepository
{
    public function create(string $email, string $token) : User
    {
        $user = new User();

        $user->setEmail($email);
        $user->setToken($token);

        $user->save();

        return $user;
    }
}