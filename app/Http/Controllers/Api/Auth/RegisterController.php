<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Auth;

use App\Exceptions\UserNotCreatedException;
use App\Factories\ResponseFactory;
use App\Http\Controllers\Api\ApiController;
use App\Http\Requests\Api\Auth\RegisterRequest;
use App\Repositories\UsersRepository;
use App\Services\ConstantService;
use Illuminate\Http\Response;

class RegisterController extends ApiController
{
    /** @var UsersRepository */
    private $usersRepository;

    public function __construct(ResponseFactory $response, UsersRepository $usersRepository)
    {
        parent::__construct($response);
        $this->usersRepository = $usersRepository;
    }

    public function create(RegisterRequest $request) : Response
    {
        try {
            $user = $this->usersRepository->createUser(
                $request->getEmail(),
                $request->getName(),
                $request->getPassword()
            );

            return $this->resourceCreatedResponse($user, ConstantService::USER_TYPE);
        } catch(UserNotCreatedException $e) {
            return $this->resourceNotCreatedResponse($e->getMessage());
        }
    }
}
