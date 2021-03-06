<?php

declare(strict_types=1);

namespace App\Models\Media;

use App\Model\Park;
use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RestaurantImage extends Image
{
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
        $this->parkId = $parkId;
    }

    public function getRestaurantId() : int
    {
        return $this->restaurant_id;
    }

    public function setRestaurantId(int $restaurantId) : void
    {
        $this->restaurant_id = $restaurantId;
    }

    public function getUrl(): string
    {
        return $this->url;
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

    public function restaurant() : BelongsTo
    {
        return $this->belongsTo(Restaurant::class, 'id', 'restaurant_id');
    }
}
