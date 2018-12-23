<?php

declare(strict_types=1);

namespace App\Transformers\Api;

use App\Models\Ride;
use League\Fractal\Resource\Item;
use League\Fractal\TransformerAbstract;

class RidesTransformer extends TransformerAbstract
{
    private const RIDE_TYPE = 'rides';

    /** @return Item[] */
    public function transform(Ride $ride) : array
    {
        return [
            'type'      => self::RIDE_TYPE,
            'id'        => $ride->getId(),
            'name'      => $ride->getName(),
            'parkId'    => $ride->getParkId(),
        ];
    }
}
