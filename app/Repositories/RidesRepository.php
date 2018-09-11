<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Http\Requests\Api\RideRequest;
use App\Models\Ride;
use App\Models\RideDetail;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class RidesRepository
{
    public function __construct(Ride $ride)
    {
        $this->ride = $ride;
    }

    public function get() : LengthAwarePaginator
    {
        return$this->ride->paginate(25);
    }

    public function fetch(string $id) : ?Ride
    {
        return $this->ride->find($id);
    }

    public function create(RideRequest $object) : Ride
    {
        $ride = new Ride();

        $ride->setParkId($object->getId());
        $ride->setName($object->getName());

        $ride->save();

        $ride->park()->save(new RideDetail([
            'park_id' => $object->getId(),
            'opening_year' => $object->getOpeningYear(),
            'ride_type' => $object->getRideType(),
            'ride_vehicle' => $object->getRideVehicle(),
            'interactive_queue' => $object->getInteractiveQueue(),
            'gift_store_finish' => $object->getGiftStoreFinish(),
            'single_rider' => $object->getSingleRider(),
            'ride_photo' => $object->getRidePhoto(),
            'height_restricted' => $object->getHeightRestriction(),
        ]));

        return $ride;
    }

    public function edit(RideRequest $object) : Ride
    {
        $ride = $this->ride->find($object->id);

        $ride->setParkId($object->getId());
        $ride->setName($object->getName());

        $ride->update();

        $ride->park()->update(new RideDetail([
            'park_id' => $object->getId(),
            'opening_year' => $object->getOpeningYear(),
            'ride_type' => $object->getRideType(),
            'ride_vehicle' => $object->getRideVehicle(),
            'interactive_queue' => $object->getInteractiveQueue(),
            'gift_store_finish' => $object->getGiftStoreFinish(),
            'single_rider' => $object->getSingleRider(),
            'ride_photo' => $object->getRidePhoto(),
            'height_restricted' => $object->getHeightRestriction(),
        ]));

        return $ride;
    }

    public function destroy(int $id) : bool
    {
        $this->ride->find($id);

        $this->ride->detail->delete();

        return $this->ride->delete();
    }

    public function filterByParkId(int $parkId) : Collection
    {
        $this->ride->byParkId($parkId)->get();
    }
}
