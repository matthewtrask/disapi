<?php

namespace App\Models;

use App\Model\Park;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Resort extends Model
{
    public function detail() : HasOne
    {
        return $this->hasOne(ResortDetail::class, 'resort_id', 'id');
    }

    public function park() : BelongsTo
    {
        return $this->belongsTo(Park::class, 'park_id', 'id');
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function setName(string $name) : void
    {
        $this->name = $name;
    }

    public function getId() : string
    {
        return (string) $this->id;
    }

    public function getParkId() : string
    {
        return (string) $this->park_id;
    }

    public function setParkId(int $parkId) : void
    {
        $this->park_id = $parkId;
    }
}
