<?php

declare(strict_types=1);

namespace App\Transformers\Api;

use App\Models\Resort;
use League\Fractal\Resource\Item;
use League\Fractal\TransformerAbstract;

class ResortTransformer extends TransformerAbstract
{
    /** @var object[] */
    protected $availableIncludes = ['park' ];

    /** @return Item[] */
    public function transform(Resort $resort) : array
    {
        return [
            'id'                        => $resort->getId(),
            'name'                      => $resort->getName(),
            'parkId'                    => $resort->getParkId(),
            'resortType'                => $resort->detail->getResortType(),
            'transportationOptions'     => $resort->detail->getTransportationOptions(),
            'category'                  => $resort->detail->getCategory(),
            'numOfRooms'                => $resort->detail->getNumOfRooms(),
            'quickServiceRestaurants'   => $resort->detail->getQuickServiceRestaurants(),
            'tableServiceRestaurants'   => $resort->detail->getTableServiceRestaurants(),
            'giftShop'                  => $resort->detail->getGiftShop(),
            'arcade'                    => $resort->detail->getArcade(),
            'pool'                      => $resort->detail->getPool(),
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
