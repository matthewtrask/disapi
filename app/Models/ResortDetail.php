<?php

namespace App\Models;

use App\Model\Park;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ResortDetail extends Model
{
    public function park() : BelongsTo
    {
        return $this->belongsTo(Park::class, 'id', 'resort_id');
    }
}
