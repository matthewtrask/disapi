<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Factories\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ParkRetaurantsController extends AbstractApiController
{
    public function __construct(ResponseFactory $responseFactory)
    {
        parent::__construct($responseFactory);
    }

    public function index(Request $request) : Response
    {

    }
}
