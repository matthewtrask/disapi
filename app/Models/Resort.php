<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Resort extends Model
{
    public function detail() : HasOne
    {
        return $this->hasOne(ResortDetail::class, 'resort_id', 'id');
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getId() : string
    {
        return (string) $this->id;
    }
}
