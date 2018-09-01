<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Http\Requests\Api\RideRequest;
use App\Models\Ride;
use App\Models\RideDetail;
use Illuminate\Database\Eloquent\Collection;

class RidesRepository
{
    public function __construct(Ride $ride)
    {
        $this->ride = $ride;
    }

    public function get() : Collection
    {
        return Ride::all();
    }

    public function fetch(int $id) : ? Ride
    {
        return Ride::find($id);
    }

    public function create(RideRequest $object) : bool
    {
        $ride = new Ride();

        $ride->setParkId($object->getId());
        $ride->setName($object->getName());

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

        return $ride->save();
    }

    public function destroy(int $id) : bool
    {
        $this->ride->find($id);

        $this->ride->detail->delete();

        return $this->ride->delete();
    }
}