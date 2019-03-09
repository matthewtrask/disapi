<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Factories\ResponseFactory;
use App\Http\Controllers\Api\ApiController;
use App\Repositories\RidesRepository;
use App\Services\ConstantService;
use App\Transformers\Api\RidesTransformer;
use App\Transformers\Api\RideTransformer;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use League\Fractal\Resource\Collection;
use League\Fractal\Pagination\IlluminatePaginatorAdapter;
use League\Fractal\Resource\Item;

class ParkRidesController extends ApiController
{
    /** @var RidesRepository $rideRepository */
    private $ridesRepository;

    public function __construct(ResponseFactory $responseFactory, RidesRepository $ridesRepository)
    {
        parent::__construct($responseFactory);
        $this->ridesRepository = $ridesRepository;
    }

    public function index(Request $request) : Response
    {
        // this will be paginated
        $count      = $this->getResourceCount($request);
        $rides      = $this->ridesRepository->getRidesForPark((int) $request->id, $count);
        $collection = $rides->getCollection();

        if (! $rides) {
            return $this->resourceNotFoundResponse(
                $request->id, 
                ConstantService::RIDE
            );
        }

        $manager = $this->createManager();

        $resources = new Collection(
            $collection,
            new RidesTransformer(), 
            ConstantService::RIDE
        );

        $resources->setMeta($this->createMetaData());
        $resources->setPaginator(new IlluminatePaginatorAdapter($rides));

        $data = $manager->createData($resources)->toArray();
        $etag = $this->createEtag($data);

        return $this->resourcesFoundResponse($data, $etag);
    }

    public function fetch(Request $request) : Response
    {
        $data = $this->ridesRepository->fetchRideForPark((int) $request->id, (int) $request->rideId);

        $ride = $data->map(function ($ride) {
            return $ride;
        });

        if (! $ride) {
            return $this->resourceNotFoundResponse(
                $request->parkId,
                ConstantService::RIDE
            );
        }

        $manager = $this->createManager();

        $item = new Item($ride, new RideTransformer(), ConstantService::RIDE);

        $item->setMeta($this->createMetaData());

        $data = $manager->createData($item)->toArray();
        $etag = $this->createEtag($data);

        return $this->resourcesFoundResponse($data, $etag);
    }
}
