<?php

declare(strict_types=1);

namespace App\Models\Media;

use App\Model\Park;
use App\Models\Ride;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RideImage extends Image
{
    private const AWS_DIR = 'rides/';

    protected $table = 'ride_images';

    public function getId() : int
    {
        return $this->id;
    }

    public function getParkId(): int
    {
        return $this->park_id;
    }

    public function setParkId(int $parkId): void
    {
        $this->park_id = $parkId;
    }

    public function getRideId() : int
    {
        return $this->ride_id;
    }

    public function setRideId(int $rideId) : void
    {
        $this->ride_id = $rideId;
    }

    public function getUrl() : string
    {
        return self::AWS_DIR . $this->url;
    }

    public function setUrl(string $url) : void
    {
        $this->url = $url;
    }

    public function getTags() : array
    {
        return explode(',', $this->tags);
    }

    public function setTags(array $tags): void
    {
        $this->tags = implode(',', $tags);
    }

    public function park() : BelongsTo
    {
        return $this->belongsTo(Park::class, 'id', 'park_id');
    }

    public function ride() : BelongsTo
    {
        return $this->belongsTo(Ride::class, 'id', 'ride_id');
    }
}
