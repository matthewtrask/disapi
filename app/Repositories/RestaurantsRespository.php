<?php

declare(strict_types=1);


namespace App\Repositories;

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

    public function destroy(int $id) : bool
    {
        $this->restaurant->find($id);

        $this->restaurant->detail->delete();

        return $this->restaurant->delete();
    }
}