<?php

namespace App\Http\Controllers\Api;

use App\Model\Park;
use App\Model\ParkDetail;
use App\Schemas\ParkDetailSchema;
use App\Schemas\ParkSchema;
use DateTime;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Neomerx\JsonApi\Encoder\Encoder;
use Neomerx\JsonApi\Encoder\EncoderOptions;
use Neomerx\JsonApi\Encoder\Parameters\EncodingParameters;

class ParksController extends AbstractApiController
{
    /** @var Response */
    private $response;

    public function __construct(Response $response)
    {
        $this->response = $response;
    }

    /**
     * @OA\Get(
     *     path="/api/parks",
     *     tags={"Parks"},
     *     summary="Returns a list of all parks at Walt Disney World",
     *     description="Returns a list of the four parks at the Orlando location of Disney",
     *     operationId="getParks",
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
        $parks = Park::all();

        $encoder = Encoder::instance([
            Park::class => ParkSchema::class,
        ], new EncoderOptions(JSON_PRETTY_PRINT));

        $data = $encoder
            ->withJsonApiVersion()
            ->withMeta($this->metaInformation($parks))
            ->encodeData($parks);

        $eTag = md5($data);

        return $this->response
            ->header('accept', 'application/vnd.api+json')
            ->header('content-type', 'application/vnd.api+json')
            ->setContent($data)
            ->setStatusCode(200)
            ->setEtag($eTag)
            ->setDate(new DateTime());
    }

    /**
     * @OA\Get(
     *     path="/api/parks/{parkId}",
     *     tags={"Park"},
     *     summary="Find a park by the id",
     *     description="Returns a single park with details",
     *     operationId="getParkById",
     *     @OA\Parameter(
     *         name="parkId",
     *         in="path",
     *         description="ID of park to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="http://homestead.test/api/documentation#schemas/park"),
     *         @OA\MediaType(
     *             mediaType="application/vnd.api+json",
     *             @OA\Schema(ref="$/schemas/park"),
     *         )
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Park not found"
     *     ),
     *     security={
     *         {"api_key": {}}
     *     }
     * )
     */
    public function fetch(Request $request) : Response
    {
        $park = Park::find($request->id);

        $params = new EncodingParameters([
            'detail',
        ]);

        $park->setShowRelationship(true);

        $encoder = Encoder::instance([
            Park::class => ParkSchema::class,
            ParkDetail::class   => ParkDetailSchema::class,
        ], new EncoderOptions(JSON_PRETTY_PRINT, 'http://disapi.io/api/v1'));

        $data = $encoder->withJsonApiVersion()
            ->withMeta($this->metaInformation($park))
            ->encodeData($park, $params);

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
