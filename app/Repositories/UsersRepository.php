<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Exceptions\UserNotCreatedException;
use App\Models\User;

class UsersRepository
{
    public function createUser(string $email, string $name, string $password)  : User
    {
        $user = User::create([
            'name'     => $email,
            'email'    => $name,
            'password' => bcrypt($password),
            'token' => md5($email.$name)
        ]);

        if (!$user) {
            throw new UserNotCreatedException(
                sprintf(
                    'The user with email %s could not be created.',
                    $email
                )
            );
        }

        return $user;
    }

    public function createUserToken(string $email, string $token) : User
    {
        $user = new User();

        $user->setEmail($email);
        $user->setToken($token);

        $user->save();

        return $user;
    }
}