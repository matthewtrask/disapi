<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\RideRequest;
use App\Model\Park;
use App\Models\Ride;
use App\Models\RideDetail;
use App\Repositories\RidesRepository;
use App\Schemas\ParkSchema;
use App\Schemas\RideDetailSchema;
use App\Schemas\RideSchema;
use App\Schemas\RidesSchema;
use App\Transformers\Api\RidesTransformer;
use App\Transformers\Api\RideTransformer;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;
use Neomerx\JsonApi\Encoder\Encoder;
use Neomerx\JsonApi\Encoder\EncoderOptions;
use Neomerx\JsonApi\Encoder\Parameters\EncodingParameters;

class RidesController extends AbstractApiController
{
    /** @var RidesRepository */
    private $ridesRepository;

    public function __construct(Response $response, RidesRepository $ridesRepository)
    {
        parent::__construct($response);
        $this->ridesRepository = $ridesRepository;
    }

    public function index() : Response
    {
        $rides = $this->ridesRepository->get();
        $manager = $this->createManager();

        $resources = new Collection($rides, new RidesTransformer(), 'Rides');
        $resources->setMeta($this->createMetaData());

        $data = $manager->createData($resources)->toArray();

        $etag = $this->createEtag($data);

        return $this->ridesResponse($data, $etag);
    }

    public function fetch(Request $request) : Response
    {
        $ride = $this->ridesRepository->fetch($request->id);

        if (is_null($ride)) {
            return $this->rideNotFoundResponse($request->id);
        }

        $manager = $this->createManager();


        if ($request->query('includes') === 'park') {
            $manager->parseIncludes('park');
        }

        $resource = new Item($ride, new RideTransformer(), 'Rides');
        $resource->setMeta($this->createMetaData());

        $data = $manager->createData($resource)->toArray();
        $etag = $this->createEtag($data);

        return $this->ridesResponse($data, $etag);
    }

    public function destroy(Request $request) : Response
    {
        $this->ridesRepository->destroy($request->id);
    }
}
