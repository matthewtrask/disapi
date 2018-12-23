<?php

declare(strict_types=1);

namespace App\Models;

use App\Model\Park;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use function explode;

class ResortDetail extends Model
{
    use SoftDeletes;

    /** @var string[] */
    protected $fillable = [
        'park_id',
        'resort_type',
        'transportation_options',
        'category',
        'num_of_rooms',
        'quick_service_restaurants',
        'table_service_restaurants',
        'gift_shop',
        'arcade',
        'pool',
    ];

    public function park() : BelongsTo
    {
        return $this->belongsTo(Park::class, 'id', 'park_id');
    }

    public function resort() : BelongsTo
    {
        return $this->belongsTo(Resort::class, 'id', 'resort_id');
    }

    public function getId() : string
    {
        return (string) $this->id;
    }

    public function getResortType() : string
    {
        return $this->resort_type;
    }

    /** @return string[] */
    public function getTransportationOptions() : array
    {
        return explode(',', $this->transport_options);
    }

    public function getCategory() : string
    {
        return $this->category;
    }

    public function getNumOfRooms() : int
    {
        return $this->num_of_rooms;
    }

    public function getQuickServiceRestaurants() : bool
    {
        return (bool) $this->quick_service_restaurants;
    }

    public function getTableServiceRestaurants() : bool
    {
        return (bool) $this->table_service_restaurants;
    }

    public function getGiftShop() : bool
    {
        return (bool) $this->gift_shop;
    }

    public function getArcade() : bool
    {
        return (bool) $this->arcade;
    }

    public function getPool() : bool
    {
        return (bool) $this->pool;
    }
}
