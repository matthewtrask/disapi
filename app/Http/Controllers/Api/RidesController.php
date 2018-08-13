<?php

namespace App\Http\Controllers\Api;

use App\Model\Park;
use App\Models\Ride;
use App\Models\RideDetail;
use App\Schemas\ParkSchema;
use App\Schemas\RideDetailSchema;
use App\Schemas\RideSchema;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Neomerx\JsonApi\Encoder\Encoder;
use Neomerx\JsonApi\Encoder\EncoderOptions;
use Neomerx\JsonApi\Encoder\Parameters\EncodingParameters;

class RidesController extends AbstractApiController
{
    /** @var Response */
    private $response;

    public function __construct(Response $response)
    {
        $this->response = $response;
    }

    /**
     * @OA\Info(title="DisApi", version="0.1")
     * @OA\Get(
     *     path="/api/rides",
     *     tags={"Rides"},
     *     summary="Returns a list of all the rides at Walt Disney World",
     *     description="Returns a list of the rides at all four parks at the Orlando location of Disney",
     *     operationId="getRides",
     *     @OA\Response(
     *         response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(
     *              @OA\AdditionalProperties(
     *                  type="integer",
     *                  format="int32"
     *              )
     *          )
     *     ),
     *     security={
     *         {"api_key": {}}
     *     }
     * )
     */
    public function index() : Response
    {
        $rides = Ride::all();

        $params = new EncodingParameters([
            'park',
        ]);

        $rides->map(function ($ride) {
            $ride->setShowRelationship(true);
        });

        $encoder = Encoder::instance([
            Ride::class => RideSchema::class,
            Park::class => ParkSchema::class,
        ], new EncoderOptions(JSON_PRETTY_PRINT));

        $data = $encoder->withJsonApiVersion()
            ->withMeta($this->metaInformation($rides))
            ->encodeData($rides, $params);

        $eTag = md5($data);

        return $this->response
            ->header('accept', 'application/vnd.api+json')
            ->header('content-type', 'application/vnd.api+json')
            ->setContent($data)
            ->setStatusCode(200)
            ->setEtag($eTag)
            ->setDate(new DateTime());
    }

    public function fetch(Request $request)
    {
        $ride = Ride::find($request->id);

        $params = new EncodingParameters([
            'detail',
            'park'
        ]);

        $ride->setShowRelationship(true);

        $encoder = Encoder::instance([
            Ride::class => RideSchema::class,
            RideDetail::class => RideDetailSchema::class,
            Park::class => ParkSchema::class,
        ], new EncoderOptions(JSON_PRETTY_PRINT));

        $data = $encoder->withJsonApiVersion()
            ->withMeta($this->metaInformation($ride))
            ->encodeData($ride, $params);
        $eTag = md5($data);

        return $this->response
            ->header('accept', 'application/vnd.api+json')
            ->header('content-type', 'application/vnd.api+json')
            ->setContent($data)
            ->setStatusCode(200)
            ->setEtag($eTag)
            ->setDate(new DateTime());
    }
}
