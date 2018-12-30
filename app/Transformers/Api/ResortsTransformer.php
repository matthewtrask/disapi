<?php

declare(strict_types=1);

namespace App\Transformers\Api;

use App\Models\Resort;
use App\Services\ConstantService;
use League\Fractal\Resource\Collection;
use League\Fractal\TransformerAbstract;

class ResortsTransformer extends TransformerAbstract
{
    private const RESORT_TYPE = 'resorts';

    /** @var object[] */
    protected $availableIncludes = ['park'];

    /** @return Collection[] */
    public function transform(Resort $resort) : array
    {
        return [
            'type'          => self::RESORT_TYPE,
            'id'            => $resort->getId(),
            'name'          => $resort->getName(),
            'parkId'        => $resort->getParkId(),
            'primaryImage'  => ConstantService::AWS_URL . $resort->getPrimaryImageUrl(),
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
