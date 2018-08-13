<?php

declare(strict_types = 1);

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Park extends Model
{
    /** @var bool */
    private $showRelationship = false;

    public function parkDetail() : HasOne
    {
        return $this->hasOne(ParkDetail::class, 'park_id', 'id');
    }

    public function getId() : string
    {
        return (string) $this->id;
    }

    public function getName() : string
    {
        return $this->park;
    }

    public function setShowRelationship(bool $showRelationships) : void
    {
        $this->showRelationship = $showRelationships;
    }

    public function getShowRelationship() : bool
    {
        return $this->showRelationship;
    }
}
