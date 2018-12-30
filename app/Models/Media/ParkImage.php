<?php

namespace App\Models\Media;

use App\Model\Park;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ParkImage extends Image
{
    private const AWS_DIR = 'parks/';

    public function getId(): int
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

    public function getUrl() : string
    {
        return self::AWS_DIR . $this->url;
    }

    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    public function getTags(): array
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
}
