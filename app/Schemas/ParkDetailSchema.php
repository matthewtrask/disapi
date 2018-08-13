<?php

declare(strict_types=1);

namespace App\Schemas;

use App\Model\ParkDetail;
use Neomerx\JsonApi\Schema\BaseSchema;

class ParkDetailSchema extends BaseSchema
{
    protected $resourceType = 'ParkDetail';

    /**
     * @var array
     */
    protected $relationships = [
        'park',
    ];

    public function getId($parkDetail): ?string
    {
        /** @var ParkDetail $parkDetail */
        return $parkDetail->getId();
    }

    public function getAttributes($parkDetail, array $fieldKeysFilter = null): ?array
    {
        /** @var ParkDetail $parkDetail */
        return [
            'centralAttraction' => $parkDetail->getCentralAttraction(),
            'resortCount'       => $parkDetail->getResortCount(),
            'rideCount'         => $parkDetail->getRideCount(),
            'restaurantCount'   => $parkDetail->getRestaurantCount(),
            'size'              => $parkDetail->getSize(),
            'fireworks'         => $parkDetail->getFireworks(),
        ];
    }

    public function getRelationships($parkDetail, bool $isPrimary, array $includeList): ?array
    {
        /** @var ParkDetail $parkDetail */
        return [
            'park' => [self::DATA => $parkDetail->park],
        ];
    }
}