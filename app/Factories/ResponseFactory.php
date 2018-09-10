<?php

declare(strict_types=1);

namespace App\Factories;

use App\Services\ConstantService;
use DateTime;
use Illuminate\Http\Response;
use function sprintf;

class ResponseFactory
{
    public function createResourcesFoundResponse(array $data, string $etag) : Response
    {
        return $this->createResponse()
            ->header('content-type', ConstantService::ACCEPT_TYPE)
            ->header('accept', ConstantService::CONTENT_TYPE)
            ->header('accept-encoding', ConstantService::ACCEPT_CONTENT)
            ->setDate(new DateTime())
            ->setEtag($etag)
            ->setStatusCode(200)
            ->setContent($data);
    }

    public function createResourceCreatedResponse(Object $object, string $type) : Response
    {
        return $this->createResponse()
            ->header('accept', ConstantService::ACCEPT_TYPE)
            ->header('content-type', ConstantService::CONTENT_TYPE)
            ->header('accept-encoding', ConstantService::ACCEPT_CONTENT)
            ->header('location', sprintf('https://disapi.co/api/$s/$s', $type, $object->getId()))
            ->setDate(new DateTime())
            ->setStatusCode(201)
            ->setContent($object->getId());
    }

    public function createResourceEditedResponse(Object $object, string $type) : Response
    {
        return $this->createResponse()
            ->header('accept', ConstantService::ACCEPT_TYPE)
            ->header('content-type', ConstantService::CONTENT_TYPE)
            ->header('accept-encoding', ConstantService::ACCEPT_CONTENT)
            ->header('location', sprintf('https://disapi.co/api/$s/$s', $type, $object->getId()))
            ->setDate(new DateTime())
            ->setStatusCode(200)
            ->setContent($object);
    }

    public function createResourceNotFoundResponse(string $type, int $id) : Response
    {
        return $this->createResponse()
            ->setStatusCode(404)
            ->header('accept', ConstantService::ACCEPT_TYPE)
            ->header('content-type', ConstantService::CONTENT_TYPE)
            ->setDate(new DateTime())
            ->setContent(sprintf('The resource type %s with the id of %s does not exist', $type, $id));
    }

    public function createResourceDeletedResponse() : Response
    {
        return $this->createResponse()
            ->setStatusCode(204)
            ->header('accept', ConstantService::ACCEPT_TYPE)
            ->header('content-type', ConstantService::CONTENT_TYPE)
            ->setDate(new DateTime());
    }

    private function createResponse() : Response
    {
        return new Response();
    }
}
