<?php

declare(strict_types=1);

namespace App\Model;

use App\Models\Media\ParkImage;
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

    protected $fillable = [
        'park_id',
    ];

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

    public function images() : HasMany
    {
        return $this->hasMany(ParkImage::class, 'park_id', 'id');
    }

    public function getId() : string
    {
        return (string) $this->id;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function setName(string $name) : void
    {
        $this->name = $name;
    }

    public function getDescription() : string
    {
        return $this->description;
    }

    public function setDescription(string $description) : void
    {
        $this->description = $description;
    }

    public function setShowRelationship(bool $showRelationships) : void
    {
        $this->showRelationship = $showRelationships;
    }

    public function getShowRelationship() : bool
    {
        return $this->showRelationship;
    }

    public function getPrimaryImage() : ParkImage
    {
        return $this->images->first();
    }

    public function getPrimaryImageUrl() : string
    {
        return $this->getPrimaryImage()->getUrl();
    }
}
