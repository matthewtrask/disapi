<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Factories\ResponseFactory;
use App\Http\Requests\Api\RestaurantRequest;
use App\Repositories\RestaurantsRespository;
use App\Transformers\Api\RestaurantsTransformer;
use App\Transformers\Api\RestaurantTransformer;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use League\Fractal\Pagination\IlluminatePaginatorAdapter;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class RestaurantsController extends ApiController
{
    public const RESTAURANT = 'restaurant';

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
        $collection  = $restaurants->getCollection();
        $manager     = $this->createManager();

        $resources = new Collection($collection, new RestaurantsTransformer(), 'Restaurants');
        $resources->setMeta($this->createMetaData());
        $resources->setPaginator(new IlluminatePaginatorAdapter($restaurants));

        $data = $manager->createData($resources)->toArray();
        $etag = $this->createEtag($data);

        return $this->resourcesFoundResponse($data, $etag);
    }

    public function fetch(Request $request) : Response
    {
        $restaurant = $this->restaurantsRepository->fetch((int) $request->id);

        if (! $restaurant) {
            return $this->resourceNotFoundResponse((int)$request->id, self::RESTAURANT);
        }

        $manager = $this->createManager();

        if ($request->query('includes') === 'park') {
            $manager->parseIncludes('park');
        }

        $item = new Item($restaurant, new RestaurantTransformer(), 'Restaurants');
        $item->setMeta($this->createMetaData());

        $data = $manager->createData($item)->toArray();
        $etag = $this->createEtag($data);

        return $this->resourcesFoundResponse($data, $etag);
    }

    public function create(RestaurantRequest $request) : Response
    {
        $restaurant = $this->restaurantsRepository->create($request);

        return $this->resourceCreatedResponse($restaurant, self::RESTAURANT);
    }

    public function edit(RestaurantRequest $request) : Response
    {
        $restaurant = $this->restaurantsRepository->edit($request);

        return $this->resourceEditedResponse($restaurant, self::RESTAURANT);
    }

    public function destroy(Request $request) : Response
    {
        $restaurant = $this->restaurantsRepository->fetch((int) $request->id);

        if (! $restaurant) {
            return $this->resourceNotFoundResponse((int)$request->id, self::RESTAURANT);
        }

        $this->restaurantsRepository->destroy($request->id);

        return $this->resourceDeletedResponse();
    }
}
