<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Http\Requests\Api\ParkRequest;
use App\Model\Park;
use Illuminate\Database\Eloquent\Collection;

class ParksRepository
{
    /** @var Park $park */
    private $park;

    public function __construct(Park $park)
    {
        $this->park = $park;
    }

    public function get() : Collection
    {
        return $this->park->all();
    }

    public function fetch(int $id) : ?Park
    {
        return $this->park->find($id);
    }

    public function create(ParkRequest $request) : Park
    {
        $park = new Park();
        $park->setName($request->getName());

        $park->save();

        $park->detail()->create([
            'central_attraction'    => $request->getCentralAttraction(),
            'year_opened'           => $request->getYearOpened(),
            'ride_count'            => $request->getRideCount(),
            'restaurant_count'      => $request->getRestaurantCount(),
            'size'                  => $request->getSize(),
            'resort_count'          => $request->getResortCount(),
            'fireworks'             => $request->getFireworks(),
        ]);

        return $park;
    }

    public function edit(ParkRequest $request) : Park
    {
        $park = $this->park->find($request->id);

        $park->setName($request->getName());

        $park->update();

        $park->detail()->update([
            'central_attraction'    => $request->getCentralAttraction(),
            'year_opened'           => $request->getYearOpened(),
            'ride_count'            => $request->getRideCount(),
            'restaurant_count'      => $request->getRestaurantCount(),
            'size'                  => $request->getSize(),
            'resort_count'          => $request->getResortCount(),
            'fireworks'             => $request->getFireworks(),
        ]);

        return $park;
    }

    public function destroy(int $id) : bool
    {
        $this->park->find($id);

        $this->park->detail->delete();

        return $this->park->delete();
    }
}
