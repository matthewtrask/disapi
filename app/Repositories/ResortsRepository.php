<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Resort;
use Illuminate\Database\Eloquent\Collection;

class ResortsRepository
{
    /** @var Resort $resort */
    protected $resort;

    public function __construct(Resort $resort)
    {
        $this->resort = $resort;
    }

    public function get() : Collection
    {
        return $this->resort->all();
    }

    public function find(int $id) : Resort
    {
        return $this->resort->find($id);
    }

    public function create(object $request) : Resort
    {
        $resort = new Resort();

        $resort->setName($request->get('name'));
        $resort->setParkId($request->get('parkId'));

        $resort->save();

        $resort->detail()->create([
            'park_id' => $request->get('parkId'),
            'resort_type' => $request->get('resortType'),
            'transport_options' => $request->get('transportOptions'),
            'category' => $request->get('category'),
            'num_of_rooms' => $request->get('numOfRooms'),
            'quick_service_restaurants' => $request->get('quickServiceRestaurants'),
            'table_service_restaurants' => $request->get('tableServiceRestaurants'),
            'gift_shop' => $request->get('giftShop'),
            'arcade' => $request->get('arcade'),
            'pool' => $request->get('pool'),
        ]);

        return $resort;
    }

    public function destroy(int $id) : bool
    {
        $resort = $this->resort->find($id);

        $resort->detail->delete();

        return $this->resort->delete();
    }
}