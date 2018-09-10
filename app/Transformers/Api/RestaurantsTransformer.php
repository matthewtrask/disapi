<?php

declare(strict_types=1);

namespace App\Transformers\Api;

use App\Models\Restaurant;
use League\Fractal\Resource\Collection;
use League\Fractal\TransformerAbstract;

class RestaurantsTransformer extends TransformerAbstract
{
    private const RESTAURANT_TYPE = 'Restaurants';

    /** @return Collection[] */
    public function transform(Restaurant $restaurant) : array
    {
        return [
            'type'      => self::RESTAURANT_TYPE,
            'id'        => $restaurant->getId(),
            'name'      => $restaurant->getName(),
            'parkId'    => $restaurant->getParkId(),
            'links'     => [
                'rel'  => 'self',
                'href' => '/api/restaurants',
                'self' => '/api/restaurants/' . $restaurant->getId(),
            ],
        ];
    }
}
