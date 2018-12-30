<?php

declare(strict_types=1);

namespace App\Models;

use App\Model\Park;
use App\Models\Media\Image;
use App\Models\Media\RideImage;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ride extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'park_id',
        'name'
    ];

    /** @var bool */
    private $showRelationship = false;

    public function getId() : string
    {
        return (string) $this->id;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getParkId() : string
    {
        return (string) $this->park_id;
    }

    public function park() : BelongsTo
    {
        return $this->belongsTo(Park::class, 'park_id', 'id');
    }

    public function detail() : HasOne
    {
        return $this->hasOne(RideDetail::class, 'ride_id', 'id');
    }

    public function setShowRelationship(bool $showRelationships) : void
    {
        $this->showRelationship = $showRelationships;
    }

    public function getShowRelationship() : bool
    {
        return $this->showRelationship;
    }

    public function setParkId(int $parkId) : void
    {
        $this->park_id = $parkId;
    }

    public function setName(string $name) : void
    {
        $this->name = $name;
    }

    public function getPrimaryImage() : ? Image
    {
        return $this->images->first();
    }

    public function getPrimaryImageUrl() : ? string
    {
        return $this->getPrimaryImage()->getUrl();
    }

    public function scopeByParkId(Builder $query, int $parkId) : Builder
    {
        return $query->where('park_id', '=', $parkId);
    }

    public function images() : ? HasMany
    {
        return $this->hasMany(RideImage::class, 'ride_id', 'id');
    }
}
