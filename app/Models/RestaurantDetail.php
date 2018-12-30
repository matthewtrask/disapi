<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use function explode;

class RestaurantDetail extends Model
{
    use SoftDeletes;

    /** @var string[] */
    protected $fillable = [
        'restaurant_id',
        'park_id',
        'quick_service',
        'table_service',
        'alcohol',
        'dining_plan',
        'meal_types',
        'food_types',
    ];

    public function restaurant() : BelongsTo
    {
        return $this->belongsTo(Restaurant::class, 'restaurant_id', 'id');
    }

    public function getId() : string
    {
        return (string) $this->id;
    }

    public function getParkId() : ? string
    {
        return (string) $this->park_id;
    }

    public function getQuickService() : bool
    {
        return (bool) $this->quick_service;
    }

    public function getTableService() : bool
    {
        return (bool) $this->table_service;
    }

    public function getAlcohol() : bool
    {
        return (bool) $this->alcohol;
    }

    public function getDiningPlan() : bool
    {
        return (bool) $this->dining_plan;
    }

    /** @return string[] */
    public function getMealTypes() : array
    {
        return explode(',', $this->meal_types);
    }

    /** @return string[] */
    public function getFoodTypes() : array
    {
        return explode(',', $this->food_types);
    }
}
