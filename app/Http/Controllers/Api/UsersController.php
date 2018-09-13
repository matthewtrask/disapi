<?php

namespace App\Http\Controllers\Api;

use App\Factories\ResponseFactory;
use App\Http\Requests\Api\UsersRequest;
use App\Repositories\UsersRepository;
use Illuminate\Http\Response;

class UsersController extends ApiController
{
    /** @var UsersRepository $usersRepository */
    private $usersRepository;

    public function __construct(ResponseFactory $responseFactory, UsersRepository $usersRepository)
    {
        parent::__construct($responseFactory);

        $this->usersRepository = $usersRepository;
    }

    public function create(UsersRequest $request) : Response
    {
        $email = $request->getEmail();

        $token = md5($email);

        $this->usersRepository->create($email, $token);

        return $this->userCreatedResponse($token);
    }
}
