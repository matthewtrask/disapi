<?php

declare(strict_types=1);

namespace App\Model;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class ParkDetail extends Model
{
    use SoftDeletes;

    private const PARK_ID = 'park_id';

    /** @var string[] */
    protected $fillable = [
        'central_attraction',
        'year_opened',
        'ride_count',
        'restaurant_count',
        'size',
        'resort_count',
        'fireworks',
    ];

    public function park() : BelongsTo
    {
        return $this->belongsTo(Park::class, 'park_id', 'id');
    }

    public function getId() : string
    {
        return (string) $this->id;
    }

    public function getCentralAttraction() : ? string
    {
        return $this->central_attraction;
    }

    public function getOpeningYear() : string
    {
        return $this->year_opened;
    }

    public function getRideCount() : int
    {
        return $this->ride_count;
    }

    public function getRestaurantCount() : int
    {
        return $this->restaurant_count;
    }

    public function getSize() : int
    {
        return $this->size;
    }

    public function getResortCount() : int
    {
        return $this->resort_count;
    }

    public function getFireworks() : int
    {
        return $this->fireworks;
    }

    public function scopeByParkId(Builder $query, int $id) : Builder
    {
        return $query->where(self::PARK_ID, '=', $id);
    }
}
