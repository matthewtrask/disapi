<?php

namespace App\Http\Controllers\Api;

use App\Factories\ResponseFactory;
use App\Models\Resort;
use App\Transformers\Api\ResortsTransformer;
use App\Transformers\Api\ResortTransformer;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class ResortsController extends AbstractApiController
{
    public function __construct(ResponseFactory $responseFactory)
    {
        parent::__construct($responseFactory);
    }

    public function index(Request $request) : Response
    {
        $resorts = Resort::all();

        $manager = $this->createManager();

        $resources = new Collection($resorts, new ResortsTransformer(), 'resorts');
        $resources->setMeta($this->createMetaData());

        if ($request->query('include')) {
            $manager->parseIncludes($request->query('include'));
        }

        $data = $manager->createData($resources)->toArray();

        $etag = $this->createEtag($data);

        return $this->resortsResponse($data, $etag);
    }

    public function fetch(Request $request) : Response
    {
        $resort = Resort::find($request->id);

        $manager = $this->createManager();

        $resource = new Item($resort, new ResortTransformer(), 'resort');
        $resource->setMeta($this->createMetaData());

        if ($request->query('include')) {
            $manager->parseIncludes($request->query('include'));
        }

        $data = $manager->createData($resource)->toArray();
        $etag = $this->createEtag($data);

        return $this->resortsResponse($data, $etag);
    }
}
