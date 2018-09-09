<?php

namespace App\Transformers\Api;

use App\Models\Ride;
use League\Fractal\Resource\Item;
use League\Fractal\TransformerAbstract;

class RideTransformer extends TransformerAbstract
{
    protected $availableIncludes = [
        'park',
    ];

    public function transform(Ride $ride) : array
    {
        dd($ride->detail);
        return [
            'id'                => $ride->getId(),
            'name'              => $ride->getName(),
            'parkId'            => $ride->getParkId(),
            'openingYear'       => $ride->detail->getOpeningYear(),
            'rideType'          => $ride->detail->getRideType(),
            'rideVehicle'       => $ride->detail->getRideVehicle(),
            'interactiveQueue'  => $ride->detail->getInteractiveQueue(),
            'giftStoreFinish'   => $ride->detail->getGiftStoreFinish(),
            'singleRider'       => $ride->detail->getSingleRider(),
            'ridePhoto'         => $ride->detail->getRidePhoto(),
            'heightRestriction' => $ride->detail->getHeightRestriction(),
            'links' => [
                'rel' => 'self',
                'href' => '/api/rides/{id}',
                'self' => '/api/rides/' . $ride->getId(),
                'park' => '/api/parks/' . $ride->getParkId(),
            ]
        ];
    }

    public function includePark(Ride $ride) : object
    {
        if (!$ride->park) {
            return $this->null();
        }

        return $this->item($ride->park, new ParkTransformer(), 'park');
    }
}
