<?php

declare(strict_types=1);

namespace App\Transformers\Api;

use App\Models\Resort;
use League\Fractal\Resource\Collection;
use League\Fractal\TransformerAbstract;

class ResortsTransformer extends TransformerAbstract
{
    /** @var object[] */
    protected $availableIncludes = ['park'];

    /** @return Collection[] */
    public function transform(Resort $resort) : array
    {
        return [
            'id'     => $resort->getId(),
            'name'   => $resort->getName(),
            'links'  => [
                'rel'  => 'self',
                'href' => '/api/resorts',
                'self' => '/api/resorts/' . $resort->getId(),
            ],
        ];
    }

    public function includePark(Resort $resort) : object
    {
        if (! $resort->park) {
            return $this->null();
        }

        return $this->item($resort->park, new ParksTransformer(), 'park');
    }
}
