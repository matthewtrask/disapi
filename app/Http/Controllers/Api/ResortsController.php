<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Factories\ResponseFactory;
use App\Http\Requests\Api\ResortsRequest;
use App\Models\Resort;
use App\Repositories\ResortsRepository;
use App\Transformers\Api\ResortsTransformer;
use App\Transformers\Api\ResortTransformer;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class ResortsController extends ApiController
{
    private const RESORTS = 'resorts';

    /** @var ResortsRepository $resortsRepository */
    private $resortsRepository;

    public function __construct(ResponseFactory $responseFactory, ResortsRepository $resortsRepository)
    {
        parent::__construct($responseFactory);
        $this->resortsRepository = $resortsRepository;
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

        return $this->resourcesFoundResponse($data, $etag);
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

        return $this->resourcesFoundResponse($data, $etag);
    }

    public function create(ResortsRequest $request) : Response
    {
        $resort = $this->resortsRepository->create($request);

        return $this->resourceCreatedResponse($resort, self::RESORTS);
    }

    public function edit(ResortsRequest $request) : Response
    {
        $resort = $this->resortsRepository->edit($request);

        return $this->resourceEditedResponse($resort, self::RESORTS);
    }

    public function destroy(Request $request) : Response
    {
        $resort = $this->resortsRepository->find($request->id);

        if (! $resort) {
            return $this->resourceNotFoundResponse(self::RESORTS, $request->id);
        }

        $this->resortsRepository->destroy($resort->getId());

        return $this->resourceDeletedResponse();
    }
}
