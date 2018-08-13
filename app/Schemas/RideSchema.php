<?php

declare(strict_types=1);

namespace App\Schemas;

use App\Models\Ride;
use Neomerx\JsonApi\Schema\BaseSchema;

class RideSchema extends BaseSchema
{
    protected $resourceType = 'ride';

    /**
     * @var array
     */
    protected $relationships = [
        'detail',
    ];

    public function getId($ride): ?string
    {
        return $ride->getId();
    }

    public function getAttributes($ride, array $fieldKeysFilter = null): ?array
    {
        /** @var Ride $ride */
        return [
            'rideName' => $ride->getName(),
        ];
    }

    public function getRelationships($ride, bool $isPrimary, array $includeList): ?array
    {
        /** @var Ride $ride */
        return [
            'park' => [
                self::SHOW_SELF    => true,
                self::SHOW_RELATED => true,
                self::DATA => $ride->park,
                self::SHOW_DATA => $ride->getShowRelationship(),
            ],
            'detail' => [
                self::SHOW_SELF    => true,
                self::SHOW_RELATED => true,
                self::DATA => $ride->detail,
                self::SHOW_DATA => $ride->getShowRelationship(),
            ],
        ];
    }
}