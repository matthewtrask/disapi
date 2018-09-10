<?php

declare(strict_types=1);

namespace App\Model;

use App\Models\Resort;
use App\Models\Restaurant;
use App\Models\Ride;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Park extends Model
{
    use SoftDeletes;

    /** @var bool */
    private $showRelationship = false;

    public function detail() : HasOne
    {
        return $this->hasOne(ParkDetail::class, 'park_id', 'id');
    }

    public function rides() : HasMany
    {
        return $this->hasMany(Ride::class, 'park_id', 'id');
    }

    public function restaurants() : HasMany
    {
        return $this->hasMany(Restaurant::class, 'park_id', 'id');
    }

    public function resorts() : HasMany
    {
        return $this->hasMany(Resort::class, 'park_id', 'id');
    }

    public function getId() : string
    {
        return (string) $this->id;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function setShowRelationship(bool $showRelationships) : void
    {
        $this->showRelationship = $showRelationships;
    }

    public function getShowRelationship() : bool
    {
        return $this->showRelationship;
    }

    public function setName(string $name) : void
    {
        $this->name = $name;
    }
}
