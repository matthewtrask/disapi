<?php

declare(strict_types=1);

namespace App\Schemas;

use App\Models\RideDetail;
use Neomerx\JsonApi\Schema\BaseSchema;

class RideDetailSchema extends BaseSchema
{
    protected $resourceType = 'RideDetail';

    /**
     * @var array
     */
    protected $relationships = [
        'ride',
    ];

    public function getId($rideDetail): ?string
    {
        /** @var RideDetail $rideDetail */
        return $rideDetail->getId();
    }

    public function getAttributes($rideDetail, array $fieldKeysFilter = null): ?array
    {
        /** @var RideDetail $rideDetail */
        return [
            'yearOpened' => $rideDetail->getYearOpen(),
            'rideType' => $rideDetail->getRideType(),
            'rideVehicle' => $rideDetail->getRideVehicle(),
            'interactiveQueue' => $rideDetail->getInteractiveQueue(),
            'ridePhoto' => $rideDetail->getRidePhoto(),
            'singleRider' => $rideDetail->getSingleRider(),
            'heightRestriction' => $rideDetail->getHeightRestriction(),
        ];
    }

    public function getRelationships($rideDetail, bool $isPrimary, array $includeList): ?array
    {
        /** @var RideDetail $rideDetail */
        return [
            'ride' => [self::DATA => $rideDetail->ride],
        ];
    }
}