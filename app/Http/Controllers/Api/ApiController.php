<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Events\UserHitEndpoint;
use App\Factories\ResponseFactory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use League\Fractal\Manager;
use League\Fractal\Serializer\JsonApiSerializer;
use function json_encode;
use function md5;

abstract class ApiController extends Controller
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
        $manager = new Manager();
        $manager->setSerializer(new JsonApiSerializer(self::BASE_URL));

        return $manager;
    }

    /** @param object[] $data */
    protected function createEtag(array $data) : string
    {
        return md5(json_encode($data));
    }

    /** @return string[] */
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
                ],
            ],
        ];
    }

    /** @param object[] $data */
    protected function resourcesFoundResponse(array $data, string $etag) : Response
    {
        return $this->responseFactory->createResourcesFoundResponse($data, $etag);
    }

    protected function resourceCreatedResponse(object $object, string $type) : Response
    {
        return $this->responseFactory->createResourceCreatedResponse($object, $type);
    }

    protected function resourceEditedResponse(object $object, string $type) : Response
    {
        return $this->responseFactory->createResourceEditedResponse($object, $type);
    }

    protected function resourceNotFoundResponse(int $id, string $type) : Response
    {
        return $this->responseFactory->createResourceNotFoundResponse($type, $id);
    }

    protected function userCreatedResponse(string $token) : Response
    {
        return $this->responseFactory->createUserCreatedResponse($token);
    }

    protected function logAction(string $token, string $endpoint, string $action, bool $success, string $error = null) : void
    {
        event(new UserHitEndpoint(
            $token,
            $endpoint,
            $action,
            $success,
            $error
        ));
    }

    protected function resourceDeletedResponse() : Response
    {
        return $this->responseFactory->createResourceDeletedResponse();
    }
}
