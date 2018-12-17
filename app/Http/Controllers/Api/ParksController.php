<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Events\UserHitEndpoint;
use App\Factories\ResponseFactory;
use App\Http\Requests\Api\ParkRequest;
use App\Repositories\ParksRepository;
use App\Services\ConstantService;
use App\Transformers\Api\ParksTransformer;
use App\Transformers\Api\ParkTransformer;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class ParksController extends ApiController
{
    /** @var ParksRepository */
    private $parksRepository;

    public function __construct(ResponseFactory $responseFactory, ParksRepository $parksRepository)
    {
        parent::__construct($responseFactory);
        $this->parksRepository = $parksRepository;
    }

    public function index() : Response
    {
        $parks   = $this->parksRepository->get();
        $manager = $this->createManager();

        $resources = new Collection($parks, new ParksTransformer(), 'parks');
        $resources->setMeta($this->createMetaData());

        $data = $manager->createData($resources)->toArray();
        $etag = $this->createEtag($data);

        return $this->resourcesFoundResponse($data, $etag);
    }

    public function fetch(Request $request) : Response
    {
        $park = $this->parksRepository->fetch((int) $request->id);

        if (!$park) {
            return $this->resourceNotFoundResponse($request->id, ConstantService::PARKS_ENDPOINT);
        }

        $manager = $this->createManager();

        if ($request->query('includes')) {
            $manager->parseIncludes($request->query('includes'));
        }

        $resource = new Item($park, new ParkTransformer(), 'parks');
        $resource->setMeta($this->createMetaData());

        $data = $manager->createData($resource)->toArray();

        $etag = $this->createEtag($data);

        return $this->resourcesFoundResponse($data, $etag);
    }

    public function create(ParkRequest $request) : Response
    {
        $park = $this->parksRepository->create($request);

        return $this->resourceCreatedResponse($park, ConstantService::PARKS_ENDPOINT);
    }

    public function edit(ParkRequest $request) : Response
    {
        $park = $this->parksRepository->edit($request);

        return $this->resourceEditedResponse($park, ConstantService::PARKS_ENDPOINT);
    }

    public function destroy(Request $request) : Response
    {
        $park = $this->parksRepository->fetch((int) $request->id);

        if (! $park) {
            return $this->resourceNotFoundResponse($request->id, ConstantService::PARKS_ENDPOINT);
        }

        $this->parksRepository->destroy((int) $park->getId());

        return $this->resourceDeletedResponse();
    }
}
