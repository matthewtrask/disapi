<?php

declare(strict_types=1);

namespace App\Schemas;

use App\Model\Park;
use Neomerx\JsonApi\Schema\BaseSchema;

class ParkSchema extends BaseSchema
{
    protected $resourceType = 'park';

    /**
     * @var array
     */
    protected $relationships = [
        'parkDetail',
    ];

    /**
     * @inheritdoc
     */
    public function getId($park): ?string
    {
        /** @var Park $park */
        return $park->getId();
    }

    /**
     * @inheritdoc
     */
    public function getAttributes($park, array $fieldKeysFilter = null): ?array
    {
        /** @var Park $park */
        return [
            'parkName' => $park->getName(),
        ];
    }

    public function getRelationships($park, bool $isPrimary, array $includeList): ?array
    {
        /** @var Park $park */
        return [
            'detail' => [
                self::SHOW_SELF    => true,
                self::SHOW_RELATED => true,
                self::DATA => $park->parkDetail,
                self::SHOW_DATA => $park->getShowRelationship()
            ],
        ];
    }
}