<?php

declare(strict_types=1);

namespace App\Transformers\Api;

use App\Model\Park;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;
use League\Fractal\TransformerAbstract;

class ParksTransformer extends TransformerAbstract
{
    private const AWS_URL = 'https://s3.amazonaws.com/disney-api/';

    /** @var object[] */
    protected $availableIncludes = [
        'details',
        'rides',
        'restaurants',
    ];

    /** @return Collection[] */
    public function transform(Park $park) : array
    {
        return [
            'id'            => $park->getId(),
            'name'          => $park->getName(),
            'description'   => $park->getDescription(),
            'image'         => self::AWS_URL . $park->getPrimaryImageUrl(),
            'links'  => [
                'rel'  => 'self',
                'href' => '/api/parks',
                'self' => '/api/parks/' . $park->getId(),
            ],
        ];
    }

    public function includeDetails(Park $park) : Item
    {
        return $this->item($park, new ParkTransformer(), 'details');
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
