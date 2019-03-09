<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Factories\ResponseFactory;
use App\Transformers\Api\RestaurantsTransformer;
use App\Transformers\Api\RestaurantTransformer;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ParkRetaurantsController extends ApiController
{
    /** @var RestaurantsTransformer */
    private $restaurantsTransformer;

    /** @var RestaurantTransformer */
    private $restaurantTransformer;

    public function __construct(
        ResponseFactory $response,
        RestaurantsTransformer $restaurantsTransformer,
        RestaurantTransformer $restaurantTransformer)
    {
        parent::__construct($response);
        $this->restaurantsTransformer = $restaurantsTransformer;
        $this->restaurantTransformer = $restaurantTransformer;
    }

    public function index(Request $request) : Response
    {

    }
}
