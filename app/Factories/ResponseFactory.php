<?php

declare(strict_types=1);


namespace App\Factories;

use App\Model\Park;
use App\Services\ConstantService;
use DateTime;
use Illuminate\Http\Response;

class ResponseFactory
{
    public function createParksResponse(array $data, string $etag) : Response
    {
        $this->createResponse()
            ->header('content-type', ConstantService::ACCEPT_TYPE)
            ->header('accept', ConstantService::CONTENT_TYPE)
            ->header('accept-encoding', ConstantService::ACCEPT_CONTENT)
            ->setDate(new DateTime())
            ->setEtag($etag)
            ->setStatusCode(200)
            ->setContent($data);
    }

    public function createRestaurantsResponse(array $data, string $etag) : Response
    {
        return $this->createResponse()
            ->header('accept', ConstantService::ACCEPT_TYPE)
            ->header('content-type', ConstantService::CONTENT_TYPE)
            ->header('accept-encoding', ConstantService::ACCEPT_CONTENT)
            ->setEtag($etag)
            ->setDate(new DateTime())
            ->setStatusCode(200)
            ->setContent($data);
    }

    public function createRidesResponse(array $data, string $etag) : Response
    {
        return $this->createResponse()
            ->header('accept', ConstantService::ACCEPT_TYPE)
            ->header('content-type', ConstantService::CONTENT_TYPE)
            ->header('accept-encoding', ConstantService::ACCEPT_CONTENT)
            ->setEtag($etag)
            ->setDate(new DateTime())
            ->setStatusCode(200)
            ->setContent($data);
    }

    public function createParkCreatedResponse(Park $park) : Response
    {
        return $this->createResponse()
            ->header('accept', ConstantService::ACCEPT_TYPE)
            ->header('content-type', ConstantService::CONTENT_TYPE)
            ->header('accept-encoding', ConstantService::ACCEPT_CONTENT)
            ->header('location', 'https://disapi.co/api/parks/' . $park->getId())
            ->setDate(new DateTime())
            ->setStatusCode(201)
            ->setContent($park->getId());
    }

    public function createRestaurantNotFoundResponse(int $id) : Response
    {
        return $this->createResponse()
            ->setStatusCode(404)
            ->header('accept', ConstantService::ACCEPT_TYPE)
            ->header('content-type', ConstantService::CONTENT_TYPE)
            ->setDate(new DateTime())
            ->setContent(sprintf('The restaurant with the id of %s does not exist', $id));
    }

    public function createParkNotFoundResponse(int $id) : Response
    {
        return $this->createResponse()
            ->setStatusCode(404)
            ->header('accept', ConstantService::ACCEPT_TYPE)
            ->header('content-type', ConstantService::CONTENT_TYPE)
            ->setDate(new DateTime())
            ->setContent(sprintf('The park with the id of %s does not exist', $id));
    }

    public function createRideNotFoundResponse(int $id) : Response
    {
        return $this->createResponse()
            ->setStatusCode(404)
            ->header('accept', ConstantService::ACCEPT_TYPE)
            ->header('content-type', ConstantService::CONTENT_TYPE)
            ->setDate(new DateTime())
            ->setContent(sprintf('The ride with the id of %s does not exist', $id));
    }

    private function createResponse() : Response
    {
        return new Response();
    }
}