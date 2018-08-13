<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RideDetail extends Model implements \Countable
{
    public function getId() : string
    {
        return (string) $this->id;
    }

    public function getYearOpen() : int
    {
        return $this->opening_year;
    }

    public function getRideType() : string
    {
        return $this->ride_type;
    }

    public function getRideVehicle() : string
    {
        return $this->ride_vehicle;
    }

    public function getInteractiveQueue() : int
    {
        return $this->interactive_queue;
    }

    public function getGiftStoreFinish() : int
    {
        return $this->gift_store_finish;
    }

    public function getSingleRider() : int
    {
        return $this->single_rider;
    }

    public function getRidePhoto() : int
    {
        return $this->ride_photo;
    }
    public function getHeightRestriction() : int
    {
        return $this->height_restricted;
    }

    public function ride() : BelongsTo
    {
        return $this->belongsTo(Ride::class, 'ride_id', 'id');
    }

    public function count()
    {
        return $this->count();
    }
}
