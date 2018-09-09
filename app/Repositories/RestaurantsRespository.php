<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Http\Requests\Api\RestaurantRequest;
use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Collection;

class RestaurantsRespository
{
    /** @var Restaurant */
    private $restaurant;

    public function __construct(Restaurant $restaurant)
    {
        $this->restaurant = $restaurant;
    }

    public function get() : Collection
    {
        return $this->restaurant->all();
    }

    public function fetch(int $id) : ? Restaurant
    {
        return $this->restaurant->find($id);
    }

    public function create(RestaurantRequest $request) : Restaurant
    {
        $restaurant = new Restaurant();

        $restaurant->setName($request->getName());
        $restaurant->setParkId($request->getParkId());

        $restaurant->save();

        $restaurant->detail()->create([
            'park_id' => $request->getParkId(),
            'quick_service' => $request->getQuickService(),
            'table_service' => $request->getTableService(),
            'alcohol' => $request->getAlcohol(),
            'dining_plan' => $request->getDiningPlan(),
            'meal_types' => implode(',', $request->getMealTypes()),
            'food_types' => implode(',', $request->getFoodTypes()),
        ]);

        return $restaurant;

    }

    public function destroy(int $id) : bool
    {
        $this->restaurant->find($id);

        $this->restaurant->detail->delete();

        return $this->restaurant->delete();
    }
}