<?php

namespace App\Transformers\Api;

use App\Models\Restaurant;
use League\Fractal\TransformerAbstract;

class RestaurantTransformer extends TransformerAbstract
{
    protected $availableIncludes = [
        'park',
    ];

    public function transform(Restaurant $restaurant)
    {
        return [
            'id'            => $restaurant->getId(),
            'name'          => $restaurant->getName(),
            'parkId'        => $restaurant->detail->getParkId(),
            'quickService'  => $restaurant->detail->getQuickService(),
            'tableService'  => $restaurant->detail->getTableService(),
            'alcohol'       => $restaurant->detail->getAlcohol(),
            'diningPlan'    => $restaurant->detail->getDiningPlan(),
            'mealTypes'     => $restaurant->detail->getMealTypes(),
            'foodTypes'     => $restaurant->detail->getFoodTypes(),
            'links' => [
                'rel' => 'self',
                'href' => '/api/restaurants/{id}',
                'self' => '/api/restaurants/' . $restaurant->getId(),
            ]
        ];
    }

    public function includePark(Restaurant $restaurant) : object
    {
        if (!$restaurant->park) {
            return $this->null();
        }

        return $this->item($restaurant->park, new ParkTransformer(), 'park');
    }
}
