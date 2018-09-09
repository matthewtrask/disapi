<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Factories\ResponseFactory;
use App\Http\Controllers\Controller;
use App\Model\Park;
use Illuminate\Http\Response;
use League\Fractal\Manager;
use League\Fractal\Serializer\JsonApiSerializer;

abstract class AbstractApiController extends Controller
{
    private const BASE_URL = 'https://disapi.co/api';

    /** @var ResponseFactory */
    protected $responseFactory;

    public function __construct(ResponseFactory $responseFactory)
    {
        $this->responseFactory = $responseFactory;
    }

    protected function createManager() : Manager
    {
        $manager  = new Manager();
        $manager->setSerializer(new JsonApiSerializer(self::BASE_URL));

        return $manager;
    }

    protected function createEtag($data) : string
    {
        return md5(json_encode($data));
    }

    protected function createMetaData() : array
    {
        return [
            'info' => [
                'title' => 'DisAPI',
                'version' => '0.2.0',
                'contact' => [
                    'name'  => 'Developer Support',
                    'url'   => 'https://disapi.co/developer-support',
                    'email' => 'support@disapi.co',
                ],
                'license' => [
                    'name' => 'MIT',
                    'url'  => 'https://opensource.org/licenses/MIT',
                ]
            ]
        ];
    }

    protected function resourcesFoundResponse(array $data, string $etag) : Response
    {
        return $this->responseFactory->createResourcesFoundResponse($data, $etag);
    }

    protected function resourceCreatedResponse(object $object) : Response
    {
        return $this->responseFactory->createResourceCreatedResponse($object);
    }

    protected function resourceNotFoundResponse(string $type, int $id) : Response
    {
        return $this->responseFactory->createResourceNotFoundResponse($type, $id);
    }

    protected function resourceDeletedResponse() : Response
    {
        return $this->responseFactory->createResourceDeletedResponse();
    }
}