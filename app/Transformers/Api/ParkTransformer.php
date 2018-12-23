<?php

declare(strict_types=1);

namespace App\Transformers\Api;

use App\Model\Park;
use League\Fractal\Resource\Item;
use League\Fractal\Resource\ResourceInterface;
use League\Fractal\TransformerAbstract;

class ParkTransformer extends TransformerAbstract
{
    /** @var object[] */
    protected $availableIncludes = [
        'rides',
        'restaurants',
        'images',
        'resorts',
    ];

    /** @return Item[] */
    public function transform(Park $park) : array
    {
        return [
            'id'                => $park->getId(),
            'name'              => $park->getName(),
            'description'       => $park->getDescription(),
            'centralAttraction' => $park->detail->getCentralAttraction(),
            'yearOpened'        => $park->detail->getOpeningYear(),
            'rideCount'         => $park->detail->getRideCount(),
            'restaurantCount'   => $park->detail->getRestaurantCount(),
            'size'              => $park->detail->getSize(),
            'resortCount'       => $park->detail->getResortCount(),
            'fireworks'         => $park->detail->getFireworks(),
        ];
    }

    protected function includeRides(Park $park) : ResourceInterface
    {
        if (! $park->rides) {
            return $this->null();
        }

        return $this->collection($park->rides, new RidesTransformer(), 'rides');
    }

    protected function includeImages(Park $park) : ResourceInterface
    {
        if (! $park->images) {
            return $this->null();
        }

        return $this->collection($park->images, new ImageTransformer(), 'images');
    }

    protected function includeRestaurants(Park $park) : ResourceInterface
    {
        if (! $park->restaurants) {
            return $this->null();
        }

        return $this->collection($park->restaurants, new RestaurantTransformer(), 'restaurants');
    }

    public function includeResorts(Park $park) : ResourceInterface
    {
        if (! $park->resorts) {
            return $this->null();
        }

        return $this->collection($park->resorts, new ResortTransformer(), 'resorts');
    }
}
