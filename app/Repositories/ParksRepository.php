<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Http\Requests\Api\ParkRequest;
use App\Model\Park;
use Illuminate\Database\Eloquent\Collection;

class ParksRepository
{
    public function get() : Collection
    {
        return Park::all();
    }

    public function fetch(int $id) : ? Park
    {
        return Park::find($id);
    }

    public function create(ParkRequest $request) : Park
    {
        $park = new Park();
        $park->setName($request->getName());

        $park->save();

        $park->detail()->create([
            'central_attraction'    => $request->getCentralAttraction(),
            'year_opened'          => $request->getYearOpened(),
            'ride_count'            => $request->getRideCount(),
            'restaurant_count'      => $request->getRestaurantCount(),
            'size'                  => $request->getSize(),
            'resort_count'          => $request->getResortCount(),
            'fireworks'             => $request->getFireworks()
        ]);

        return $park;
    }
}