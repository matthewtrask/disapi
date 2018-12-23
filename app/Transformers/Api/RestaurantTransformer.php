<?php

declare(strict_types=1);

namespace App\Transformers\Api;

use App\Models\Restaurant;
use League\Fractal\Resource\Item;
use League\Fractal\TransformerAbstract;

class RestaurantTransformer extends TransformerAbstract
{
    /** @var object[] */
    protected $availableIncludes = ['park'];

    /** @return Item[] */
    public function transform(Restaurant $restaurant) : array
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
        ];
    }

    public function includePark(Restaurant $restaurant) : object
    {
        if (! $restaurant->park) {
            return $this->null();
        }

        return $this->item($restaurant->park, new ParkTransformer(), 'park');
    }
}
