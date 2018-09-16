<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Factories\ResponseFactory;
use App\Http\Controllers\Api\ApiController;
use App\Repositories\RidesRepository;
use App\Services\ConstantService;
use App\Transformers\Api\RidesTransformer;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use League\Fractal\Resource\Collection;
use League\Fractal\Pagination\IlluminatePaginatorAdapter;

class ParkRidesController extends ApiController
{
    /** @var RidesRepository $rideRepository */
    private $ridesRepository;

    public function __construct(ResponseFactory $responseFactory, RidesRepository $ridesRepository)
    {
        parent::__construct($responseFactory);
        $this->ridesRepository = $ridesRepository;
    }

    public function fetch(Request $request) : Response
    {
        // this will be paginated
        $rides = $this->ridesRepository->filterByParkId((int) $request->id);

        if (! $rides) {
            return $this->resourceNotFoundResponse(
                $request->id, 
                ConstantService::RIDE
            );
        }

        $manager = $this->createManager();

        $resources = new Collection(
            $rides, 
            new RidesTransformer(), 
            ConstantService::RIDE
        );

        $resources->setMeta($this->createMetaData());
        $resources->setPaginator(new IlluminatePaginatorAdapter($rides));

        $data = $manager->createData($resources)->toArray();
        $etag = $this->createEtag($data);

        return $this->resourcesFoundResponse($data, $etag);
    }
}
