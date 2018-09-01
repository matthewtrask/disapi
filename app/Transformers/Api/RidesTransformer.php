<?php

namespace App\Transformers\Api;

use App\Models\Ride;
use League\Fractal\TransformerAbstract;

class RidesTransformer extends TransformerAbstract
{
    private const RIDE_TYPE = 'rides';

    public function transform(Ride $ride) : array
    {
        return [
            'type'      => self::RIDE_TYPE,
            'id'        => $ride->getId(),
            'name'      => $ride->getName(),
            'parkId'    => $ride->getParkId(),
            'links'     => [
                'rel'  => 'self',
                'href' => '/api/rides/{id}',
                'self' => '/api/rides/' . $ride->getId(),
                'park' => '/api/parks/' . $ride->getParkId(),
            ]
        ];
    }
}
