<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use function explode;

class RestaurantDetail extends Model
{
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

    public function getParkId() : string
    {
        return (string) $this->park_id;
    }

    public function getQuickService() : bool
    {
        return $this->quick_service;
    }

    public function getTableService() : bool
    {
        return $this->table_service;
    }

    public function getAlcohol() : bool
    {
        return $this->alcohol;
    }

    public function getDiningPlan() : bool
    {
        return $this->dining_plan;
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
