<?php

namespace App\Transformers\Api;

use App\Model\Park;
use League\Fractal\Resource\Collection;
use League\Fractal\TransformerAbstract;

class ParksTransformer extends TransformerAbstract
{
    private const PARKS_TYPE = 'parks';

    protected $availableIncludes = [
        'rides',
        'restaurants',
    ];

    public function transform(Park $park) : array
    {
        return [
            'id'     => $park->getId(),
            'name'   => $park->getName(),
            'links'  => [
                'rel'  => 'self',
                'href' => '/api/parks',
                'self' => '/api/parks/' . $park->getId(),
            ]
        ];
    }

    public function includeRides(Park $park) : Collection
    {
        return $this->collection($park->rides, new RidesTransformer(), 'rides');
    }

    public function includeRestaurants(Park $park) : Collection
    {
        return $this->collection($park->restaurants, new RestaurantsTransformer(), 'restaurants');
    }
}
