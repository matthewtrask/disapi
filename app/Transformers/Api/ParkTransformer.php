<?php

namespace App\Transformers\Api;

use App\Model\Park;
use League\Fractal\Resource\ResourceInterface;
use League\Fractal\TransformerAbstract;

class ParkTransformer extends TransformerAbstract
{

    protected $availableIncludes = [
        'rides',
    ];

    public function transform(Park $park) : array
    {
        return [
            'id'                => $park->getId(),
            'name'              => $park->getName(),
            'centralAttraction' => $park->detail->getCentralAttraction(),
            'yearOpened'        => $park->detail->getOpeningYear(),
            'rideCount'         => $park->detail->getRideCount(),
            'restaurantCount'   => $park->detail->getRestaurantCount(),
            'size'              => $park->detail->getSize(),
            'resortCount'       => $park->detail->getResortCount(),
            'fireworks'         => $park->detail->getFireworks(),
            'links' => [
                'rel' => 'self',
                'href' => '/api/parks/{id}',
                'self' => '/api/parks/' . $park->getId(),
            ]
        ];
    }

    protected function includeRides(Park $park) : ResourceInterface
    {
        if (!$park->rides) {
            return $this->null();
        }

        return $this->collection($park->rides, new RidesTransformer(), 'rides');
    }
}
