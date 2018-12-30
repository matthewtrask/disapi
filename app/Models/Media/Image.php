<?php

declare(strict_types=1);

namespace App\Models\Media;

use Illuminate\Database\Eloquent\Model;

abstract class Image extends Model
{
    public abstract function getId() : int;

    public abstract function getParkId() : int;

    public abstract function setParkId(int $parkId) : void;

    public abstract function getUrl() : ? string;

    public abstract function setUrl(string $url) : void;

    public abstract function getTags() : array;

    public abstract function setTags(array $tags) : void;
}
