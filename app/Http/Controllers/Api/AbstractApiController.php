<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

abstract class AbstractApiController extends Controller
{
    protected function metaInformation($countable) : array
    {
        return [
            'authors'   => [
                'Matt Trask',
            ],
            'twitter' => [
                'matthewtrask,'
            ],
            'help' => [
                'https://github.com/matthewtrask/disapi',
            ],
            'count' => [
                $countable->count(),
            ]
        ];
    }
}