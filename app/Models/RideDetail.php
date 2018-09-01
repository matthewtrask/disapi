<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @OA\Schema(@OA\Xml(name="RideDetail"))
 */
class RideDetail extends Model implements \Countable
{
    protected $fillable = [
        'park_id',
        'opening_year',
        'ride_type',
        'ride_type',
        'ride_vehicle',
        'interactive_queue',
        'gift_store_finish',
        'single_rider',
        'ride_photo',
        'height_restricted',
    ];

    public function getId() : string
    {
        return (string) $this->id;
    }

    public function getOpeningYear() : string
    {
        return (string) $this->opening_year;
    }

    public function getRideType() : string
    {
        return $this->ride_type;
    }

    public function getRideVehicle() : string
    {
        return $this->ride_vehicle;
    }

    public function getInteractiveQueue() : bool
    {
        return $this->interactive_queue;
    }

    public function getGiftStoreFinish() : bool
    {
        return $this->gift_store_finish;
    }

    public function getSingleRider() : bool
    {
        return $this->single_rider;
    }

    public function getRidePhoto() : bool
    {
        return $this->ride_photo;
    }

    public function getHeightRestriction() : bool
    {
        return $this->height_restricted;
    }

    public function ride() : BelongsTo
    {
        return $this->belongsTo(Ride::class, 'ride_id', 'id');
    }

    public function count() : int
    {
        return $this->count();
    }
}
