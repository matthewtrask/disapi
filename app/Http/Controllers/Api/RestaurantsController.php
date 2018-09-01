<?php

namespace App\Http\Controllers\Api;

use App\Factories\ResponseFactory;
use App\Repositories\RestaurantsRespository;
use App\Transformers\Api\RestaurantsTransformer;
use App\Transformers\Api\RestaurantTransformer;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class RestaurantsController extends AbstractApiController
{
    /** @var RestaurantsRespository */
    private $restaurantsRepository;

    public function __construct(ResponseFactory $responseFactory, RestaurantsRespository $restaurantsRespository)
    {
        parent::__construct($responseFactory);
        $this->restaurantsRepository = $restaurantsRespository;
    }

    public function index() : Response
    {
        $restaurants = $this->restaurantsRepository->get();

        $manager = $this->createManager();

        $resources = new Collection($restaurants, new RestaurantsTransformer(), 'Restaurants');
        $resources->setMeta($this->createMetaData());

        $data = $manager->createData($resources)->toArray();
        $etag = $this->createEtag($data);

        return $this->restaurantsResponse($data, $etag);
    }

    public function fetch(Request $request) : Response
    {
        $restaurant = $this->restaurantsRepository->fetch($request->id);

        if (!$restaurant) {
            return $this->restaurantNotFoundResponse($request->id);
        }

        $manager = $this->createManager();

        if ($request->query('includes') === 'park') {
            $manager->parseIncludes('park');
        }

        $item = new Item($restaurant, new RestaurantTransformer(), 'Restaurants');
        $item->setMeta($this->createMetaData());

        $data = $manager->createData($item)->toArray();
        $etag = $this->createEtag($data);

        return $this->restaurantsResponse($data, $etag);
    }

    public function destroy(Request $request) : Response
    {
        $this->restaurantsRepository->destroy($request->id);

        return $this->createRestaurantDestroyedResponse($request->id);
    }
}
