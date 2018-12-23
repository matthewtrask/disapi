<?php

declare(strict_types=1);

namespace App\Transformers\Api;

use App\Models\Media\Image;
use League\Fractal\TransformerAbstract;

class ImageTransformer extends TransformerAbstract
{
    private const AWS_URL = 'https://s3.amazonaws.com/disney-api/';

    public function transform(Image $image) : array
    {
        return [
            'id'    => $image->getId(),
            'url'   => self::AWS_URL .  $image->getUrl(),
            'tags'  => $image->getTags(),
        ];
    }
}